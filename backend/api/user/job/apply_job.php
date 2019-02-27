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
$applicatId= 37; // get from seassion
$jobId = 2; // get from user clikable link

// add apply job

if($applyJob->applyjob($jobId,$applicatId)){
    echo('{
        "msg": "job apply successful",
        "status": "ok"
      }');
}else{
    echo('{
        "msg": "job apply faild or already applied job",
        "status": "failed"
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