<?php

include_once "models/Admin_Table.class.php";

$loginFormSubmitted = isset($_POST['log-in']);
if ($loginFormSubmitted) {
	//$admin -> login();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$adminTable = new Admin_Table($db);
	try {
		//try to login user
		$adminTable -> checkCredentials($email, $password);
		$admin -> login();
	} catch ( Exception $e ) {
		//login failed
	}
}
$loggingOut = isset($_POST['logout']);
if ($loggingOut) {
	$admin -> logout();
}
if ($admin -> isLoggedIn()) {
	//display logout on nav bar
	$view ="";
} else {
	$view =
	include_once "admin/views/login-form-html.php";
}

return $view;
