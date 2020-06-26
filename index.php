<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//add for content and title
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
// connect if local server
include_once "models/database.class.php";

$dbInfo = "mysql:host=localhost;dbname=webpage";
$dbUser = "admin";
$dbPassword = "admin";
$db = new PDO($dbInfo, $dbUser, $dbPassword);
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//display home page


include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table($db);
//get a PDOStatement object to get access to all entries
$allEntries = $entryTable -> getAllEntries();
//test that you can get the first row as a StdClass obj

include_once "templates/header.php";


$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked) {
    $controller = $_GET['page'];
	$pathToController = "templates/$controller.php";
	include_once $pathToController;
} else {
    $controller = "welcome";
	$pathToController = "templates/$controller.php";
	include_once $pathToController;
	$controller = "latestCars";
	$pathToController = "templates/$controller.php";
	include_once $pathToController;
	$controller = "about";
	$pathToController = "templates/$controller.php";
	include_once $pathToController;
	$controller = "findus";
	$pathToController = "templates/$controller.php";
	include_once $pathToController;
	$controller = "contact";
	$pathToController = "templates/$controller.php";
	include_once $pathToController;
	
}





//include_once "templates/welcome.php";

//include_once "templates/latestCars.php";

//include_once "templates/about.php";

//include_once "templates/request.php"; ******* add if works

//include_once "templates/findus.php";

//include_once "templates/contact.php";

include_once "templates/footer.php";

?>



