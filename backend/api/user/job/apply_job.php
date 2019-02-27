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
$applicatId= 28; // get from seassion
$jobId = 2; // get from user clikable link

if($applyJob->applyjob($jobId,$applicatId)){
    echo('{
        "msg": "job apply success",
        "status": "ok"
      }');
}

?>