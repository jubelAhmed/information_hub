<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../../config/Database.php');
include_once('../../../models/getPost.php');


$database = new Database();

$db = $database->connect();

$getPost = new GetPost($db);
// $resultJSON = json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

// $user_id = $_SESSION['user_login_uid'];
$user_id = 49;

if(count($getPost->getPosts($user_id)) == 0){

	echo('{"msg": "You have not enough permission to view post!","status": "error"}');

}else{
	 echo json_encode($getPost->getPosts($user_id));
}
?>