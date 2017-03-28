<?php
session_start();

//Credentials for connection
require_once('../config/db_functions.php');

alert($_REQUEST['action']);
if(isset($_REQUEST['action'])) {
	switch($_REQUEST['action']) {
		case add:
			create_user();
			break;
		case update:
			update_user();
			break;
		case delete:
			delete_user();
			break;
	}
}

function create_user() {
	$conn = db_connect(); //connect to db

    $stmt = $conn->prepare("INSERT INTO `user` (`userID`, `locationID`, `firstName`, `lastName`, `email`, `phone`) VALUES (NULL, ?, ?, ?, ?, ?)");
    $stmt->bind_param('isssi', $_REQUEST['loc'], $_REQUEST['first'], $_REQUEST['last'], $_REQUEST['email'], $_REQUEST['phone']);
    alert('binded!');
    $stmt->execute();
    if($conn->error) die('Error: ' . $conn->error);
    $conn->close();
}

function update_user() {
	//Update user logic here...
}

function delete_user() {
	//Delete user logic here...
}

?>