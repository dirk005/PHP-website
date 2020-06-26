<?php

//include class definition and create an object
include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table($db);


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


include_once "templates/ViewCar.php";

