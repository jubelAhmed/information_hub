<?php 
      header('Access-Control-Allow-Origin: *');
      header('Content-Type: application/json');
      
      include_once('../../../config/Database.php');
      include_once('../../../models/Job.php');
      
      
      $database = new Database();
      
      $db = $database->connect();
      
      $job = new Job($db);
      
      
      
      $job_id = isset($_POST['jobId']) ? $_POST['jobId'] : die();

     

     if($job->deleteJob($job_id)){
        echo('{"msg": "Delete Successfull!","status": "ok"}');
        } 
      else{
        echo('{"msg": "Error happend!","status": "error"}');
        }

?>