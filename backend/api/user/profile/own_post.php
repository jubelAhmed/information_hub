<?php

    //headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../../config/Database.php');
include_once('../../../models/OwnPost.php');


$database = new Database();

$db = $database->connect();

$ownPost = new OwnPost($db);

if((empty($_POST['title'])) || (empty($_POST['category'])) || (empty($_POST['description'])) || (empty($_POST['userid']))){
    echo('{"msg": "You must fill every require field!","status": "error"}');
    die();
}

$ownPost->postTitle = $_POST['title'];
$ownPost->postCatagories = $_POST['category'];
$ownPost->postDescription = $_POST['description'];
$user_id = $_POST['userid'];

if($ownPost->post($user_id)){
    
    echo('{"msg": "New post Successfull","status": "ok"}');
}else{
    echo('{"msg": "You have not enough permission to create new post!","status": "error"}');
}
?>