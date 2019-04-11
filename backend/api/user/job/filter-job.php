<?php 
      // header('Access-Control-Allow-Origin: *');
      // header('Content-Type: application/json');
      
      // include('../../../config/Database.php');
      // include('../../../models/filter-job.php');
      
      
      // $database = new Database();
      
      // $db = $database->connect();
      
  
      
      
      // $job_skills = isset($_POST['skills']) ? $_POST['skills'] : die();

      function getFilteredposts($job, $search){
        if(count($job->getFilteredJob($search)) == 0){

          echo('{"msg": "No post found with your filter","status": "error"}');

        }else{
          $myCustomResult = $job->getFilteredJob($search);
           return json_encode($myCustomResult);
        }

      }
    
?>