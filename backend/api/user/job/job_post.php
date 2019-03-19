<?php

    //headers
    header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../../config/Database.php');
include_once('../../../models/Job.php');


$database = new Database();

$db = $database->connect();

$job = new Job($db);



$job->jobTitle = isset($_POST['jobTitle']) ? $_POST['jobTitle'] : die();
$job->companyName = isset($_POST['companyName']) ? $_POST['companyName'] : die();
$job->companyLogo = isset($_POST['companyLogo']) ? $_POST['companyLogo'] : die();
$job->applicationDeadline = isset($_POST['applicationDeadline']) ? $_POST['applicationDeadline'] : die();

$job->location = isset($_POST['location']) ? $_POST['location'] : die();
$job->companyWebsite = isset($_POST['companyWebsite']) ? $_POST['companyWebsite'] : die();
$job->compensation = isset($_POST['compensation']) ? $_POST['compensation'] : die();
$job->remoteWork = isset($_POST['remoteWork']) ? $_POST['remoteWork'] : die();
$job->jobType = isset($_POST['jobType']) ? $_POST['jobType'] : die();
$job->minSalary = isset($_POST['minSalary']) ? $_POST['minSalary'] : die();
$job->maxSalary = isset($_POST['maxSalary']) ? $_POST['maxSalary'] : die();
$job->requiredSkills = isset($_POST['requiredSkills']) ? $_POST['requiredSkills'] : die();
$job->jobDescription = isset($_POST['jobDescription']) ? $_POST['jobDescription'] : die();

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
    
    echo('{"msg": "job post Successfully done", "status": "ok"}');
}else{
    echo('{"msg": "job post Failed", "status": "error"}');
}


?>

