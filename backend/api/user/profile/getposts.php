<?php 
session_start();
error_reporting(0);
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../../config/Database.php');
include_once('../../../models/getPost.php');


$database = new Database();

$db = $database->connect();

$getPost = new GetPost($db);



if(count($getPost->getPosts()) == 0){

	echo('{"msg": "You have not enough permission to view post!","status": "error"}');

}else{
	$myCustomResult = $getPost->getPosts();
	$myCustomResult['status'] = 'ok';

	 echo json_encode($myCustomResult);
}
?>