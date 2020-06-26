<?php

//include class definition and create an object
include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table($db);

//was editor form submitted?
$editorSubmitted = isset($_POST['action']);
if ($editorSubmitted) {
	$buttonClicked = $_POST['action'];

	//new for 'save' button to update or insert
	$save = ($buttonClicked === 'save');
	$id = $_POST['id'];

	//check what option to do update or insert or delete
	$insertNewEntry = ($save and $id === '0');
	$deleteEntry = ($buttonClicked === 'delete');
	$updateEntry = ($save and $insertNewEntry === false);

	//get data from editor form
	$title = $_POST['title'];
	$make = $_POST['make'];
	$milage = $_POST['mileage'];
	$model = $_POST['model'];
	$year = $_POST['Year'];
	$transmission = $_POST['transmission'];
	$price = $_POST['price'];
	$extraDetail = $_POST['ExtraDetails'];
	$img1 = $_POST['img1'];
	$img2 = $_POST['img2'];
	$img3 = $_POST['img3'];
	$img4 = $_POST['img4'];
	$img5 = $_POST['img5'];
	$img6 = $_POST['img6'];
	$img7 = $_POST['img7'];
	$img8 = $_POST['img8'];
	$img9 = $_POST['img9'];

	if ($insertNewEntry) {
		//add new entry
		$entryTable -> saveEntry($title, $make, $milage, $model, $year, $transmission, $price, $extraDetail, $img1, $img2, $img3, $img4, $img5, $img6, $img7, $img8, $img9);
		$newMessage = "Entery was saved";
	} else if ($updateEntry) {
		//update entry
		$entryTable -> updateEntry($id, $title, $make, $milage, $model, $year, $transmission, $price, $extraDetail, $img1, $img2, $img3, $img4, $img5, $img6, $img7, $img8, $img9);
		$savedEntryId = $id;
		$newMessage = "Entery was changed";
	} else if ($deleteEntry) {
		//delete enrty
		$entryTable -> deleteEntry($id);
		if (file_exists($img1)) {
			unlink($img1);
		}
		if (file_exists($img2)) {
			unlink($img2);
		}
		if (file_exists($img3)) {
			unlink($img3);
		}
		if (file_exists($img4)) {
			unlink($img4);
		}
		if (file_exists($img5)) {
			unlink($img5);
		}
		if (file_exists($img6)) {
			unlink($img6);
		}
		if (file_exists($img7)) {
			unlink($img7);
		}
		if (file_exists($img8)) {
			unlink($img8);
		}
		if (file_exists($img9)) {
			unlink($img9);
		}
		$newMessage = "Entery was deleted";
	}
}
$entryRequested = isset($_GET['id']);
//create a new if-statement
if ($entryRequested) {
	$id = $_GET['id'];
	//load model of existing entry
	$entryData = $entryTable -> getEntry($id);
	$entryData -> Car_id = $id;
	$entryData -> message = "";
}
$entrySaved = isset($savedEntryId);

if ($entrySaved) {
	$entryData = $entryTable -> getEntry($savedEntryId);
	//display a confirmation message
	$entryData -> message = $newMessage;
}

include_once "admin/views/editor-html.php";
