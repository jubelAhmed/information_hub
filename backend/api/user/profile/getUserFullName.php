<?php 
session_start();
error_reporting(0);
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../../config/Database.php');
include_once('../../../models/userIdToUser.php');


$database = new Database();

$db = $database->connect();

$getFullName = new getFullNameFromId($db);
$userid = $_POST['id'];


if(!$getFullName->userIdToUserFullName($userid)){

	echo('{"msg": "You have not enough permission to user fullname","status": "error"}');

}else{
	$getFullName = $getFullName->userIdToUserFullName($userid);
	// echo $getFullName;
	echo('{"id": "'. $userid . '", "fullname": "'. $getFullName . '","status": "ok"}');
}
?>