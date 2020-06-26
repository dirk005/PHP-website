<?php
//complete code for blog/admin.php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//add for content and title
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();

// connect if local server
include_once "models/database.class.php";

$dbInfo = "mysql:host=localhost;dbname=webpage";
$dbUser = "Dirk";
$dbPassword = "bernice@123";
$db = new PDO($dbInfo, $dbUser, $dbPassword);
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//open css an navigation
include_once "admin/templates/header.php";

//NEW LOGIN PAGE DISPLAY FI NOT LOGGED IN
include_once "models/Admin_User.class.php";
$admin = new Admin_User();

//load the login controller, which will show the login form

$pageData -> content =
include_once "admin/controllers/login.php";
if ($admin -> isLoggedIn()) {
	include "admin/views/admin-nav.php";
	
	$navigationIsClicked = isset($_GET['page']);
	if ($navigationIsClicked) {
		$controller = $_GET['page'];
	} else {
		$controller = "entries";
	}
	$pathToController = "admin/controllers/$controller.php";
	$pageData -> content .=
	include_once $pathToController;

}

include_once "admin/templates/footer.php";
