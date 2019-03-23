<?php

    //headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../../config/Database.php');
include_once('../../../models/OwnPost.php');


$database = new Database();

$db = $database->connect();

$ownPost = new OwnPost($db);

if((empty($_POST['firstName'])) || (empty($_POST['lastName'])) || (empty($_POST['email'])) || (empty($_POST['birthday'])) || (empty($_POST['occupation'])) || (empty($_POST['gender'])) || (empty($_POST['password']))){
    echo('{"msg": "You must fill every require field!","status": "error"}');
    die();
}

$user->firstName = $_POST['firstName'];
$user->lastName = $_POST['lastName'];
//$user->userName = $_POST['userName'];
$user->email = $_POST['email'];
$user->birthday = $_POST['birthday'];
$user->occupation = $_POST['occupation'];
$user->gender = $_POST['gender'];
$user->password = $_POST['password'];

if($user->signup()){
    
    echo('{"msg": "Signup Successfull!","status": "ok"}');
}else{
    echo('{"msg": "User already exists!","status": "error"}');
}

// print_r(json_encode($userArray));



?>