<?php

    //headers
    header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../../config/Database.php');
include_once('../../../models/Job.php');


$database = new Database();

$db = $database->connect();

$job = new Job($db);



$job->jobTitle = $_POST['job_title'];
$job->u_id = $_POST['employer_id'];


// $job->companyLogo = $_POST['companyLogo'];
$job->applicationDeadline = $_POST['applicationDeadline'];



$job->compensation = $_POST['compensation'];
$job->remoteWork = $_POST['remoteWork']; 
$job->jobType = $_POST['jobType'];
$job->minSalary = $_POST['minSalary'];
$job->maxSalary = $_POST['maxSalary'];
$job->requiredSkills = json_encode($_POST['requiredSkills']); 
$job->jobDescription = $_POST['jobdescriptioninfo'];



/*
let job_title = '';
    let company = '';
    let applicationDeadline = '';
    let companyLogo = '';
    let location = '';
    let companywebsite = '';
    let jobtype = '';
    let compensation = '';
    let min_salary = '';
    let max_salary = '';
    let requiredSkills = '';
    var remotework = 'no';
    var jobdescriptioninfo = ''
  */
if($job->post()){
    echo('{ "msg": "job post Successfully done", "status": "ok" }');
   // echo('{"msg": "job post Successfully done", "status": "ok"}');
}else{
    echo('{"msg":"job post Failed", "status":"error"}');
}


?>