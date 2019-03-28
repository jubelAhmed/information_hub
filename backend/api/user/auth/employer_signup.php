<?php

    //headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../../config/Database.php');
include_once('../../../models/Employer.php');


$database = new Database();

$db = $database->connect();

$employer = new Employer($db);

$image = 0 ;

if(isset($_FILES['file'])){
    $test  = explode(".",$_FILES["file"]["name"]);
    // echo $test;


    $extension = end($test);

    // echo $extension;
    $name = rand(100,999).'.'.$extension;
    $location = "./upload/".$name ;
    $file = $_FILES["file"]["tmp_name"] ; 
    
    $image = addslashes($file);
    $name = addslashes($file);
    $image = file_get_contents($image);
    $image = base64_encode($image);
  
   
}

$employer->userName = isset($_POST['username']) ? $_POST['username'] : die();
$employer->email = isset($_POST['email']) ? $_POST['email'] : die();
$employer->companyName = isset($_POST['company_name']) ? $_POST['company_name'] : die();
$employer->companyWebsite = isset($_POST['company_website']) ? $_POST['company_website'] : die();
$employer->location = isset($_POST['location']) ? $_POST['location'] : die();
$employer->companyLogo  = $image?$image:'0' ;
$employer->password = isset($_POST['password']) ? $_POST['password'] : die();



if($employer->signup()){
    
    echo('{"msg": "Signup Successfull!","status": "ok"}');
}else{
    echo('{"msg": "User already exists!","status": "error"}');
}

// print_r(json_encode($userArray));



?>