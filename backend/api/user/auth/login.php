<?php
session_start();
    //headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../../config/Database.php');
include_once('../../../models/User.php');


$database = new Database();

$db = $database->connect();

$user = new User($db);

// set ID property of user to be edited
$user->email = isset($_POST['email']) ? $_POST['email'] : die();
$user->password = md5( isset($_POST['password']) ? $_POST['password'] : die());

// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //sessions
    $_SESSION['user_login_email'] = $row['email'];
    $_SESSION['user_login_uid'] = $row['id'];

    echo('{"msg": "login Successfully done", "status": "ok"}');
}
else{

    echo('{"msg": "login Failed!", "status": "error"}');
}
?>