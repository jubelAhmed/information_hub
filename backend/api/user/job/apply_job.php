<?php

    //headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../../config/Database.php');
include_once('../../../models/ApplyJob.php');


$database = new Database();

$db = $database->connect();

$applyJob = new ApplyJob($db);

// 
$applicantId = isset($_POST['applicantId']) ? $_POST['applicantId'] : die();
$jobId = isset($_POST['jobId']) ? $_POST['jobId'] : die();


// add apply job

if($applyJob->applyjob($applicantId,$jobId)){
    echo('{
        "msg": "Thanks for applying this job",
        "status": "ok"
      }');
}else{
    echo('{
        "msg": "You already applied this job",
        "status": "error"
      }');
}

// get apply job list by applicat id
/* 
    $applyJobList = $applyJob->getAllApplyJob($applicatId);

    if($applyJobList->rowCount()>0){
        while($row = $applyJobList->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo $job_id;
            echo "\n";
            echo $applicant_id;
        }
    } */



?>