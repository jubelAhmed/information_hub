<?php

/*        //headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); */

/* 
include_once('../../../config/Database.php');
include_once('../../../models/Job.php');

$posts = getPendingJobs();

$p = json_decode($posts, true);

print_r($p['data'][0]['job_title']); */

function getPublishedJobs($job){
    

    $result =$job->getAllPublishJobPostWithCompany();



    $num = $result->rowCount();

    if($num > 0){
        $jobArray = array();
        $jobArray['data'] = array();
        $jobArray['status'] = "no";
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $jobList = array(
                'job_id'=> $job_id ,
                'user_id'=>$user_id,
                'job_title'=>$job_title,
                'company_name'=>$company_name,
                'company_logo'=>$company_logos,
                'type'=>$type,
                
                'company_website'=>$company_website,
                'company_location'=>$company_location,
                'remote_work'=>$remote_work,
                'job_type'=>$job_type,
                'compensation'=>$compensation,
                'min_salary'=>$min_salary,
                'max_salary'=>$max_salary,
                'skills'=>json_decode($skills),
                'job_description'=>$job_description,
                'current_data'=>$current_data,
                'deadline'=>$deadline
                
            );

            array_push($jobArray['data'],$jobList);
             $jobArray['status'] = "ok";
            
        }

       

        return json_encode($jobArray);

    }else{
        echo json_encode(array('message'=>"there have no published jobs",'status'=>"no"));
        return json_encode(array('message'=>"there have no published jobs",'status'=>"no"));
    }

    
}

function getSingleJob($job,$job_id){
    $result = $job->getSingleJobPost($job_id);

    if($result){
        $row = $result->fetch(PDO::FETCH_ASSOC);

        extract($row);
        $jobArray = array(
            'job_id'=> $job_id ,
            'user_id'=>$user_id,
            'job_title'=>$job_title,
            'company_name'=>$company_name,
            'company_logo'=>$company_logos,
            'company_website'=>$company_website,
            'company_location'=>$company_location,
            'remote_work'=>$remote_work,
            'job_type'=>$job_type,
            'compensation'=>$compensation,
            'min_salary'=>$min_salary,
            'max_salary'=>$max_salary,
            'skills'=>json_decode($skills),
            'job_description'=>$job_description,
            'current_data'=>$current_data,
            'deadline'=>$deadline
        );
        return json_encode($jobArray);

    }
}

function getPendingJobs(){
    
    $database = new Database();

    $db = $database->connect();

    $job = new Job($db);

    $result =$job->getAllPublishJobPost();

    

    if($result){
        $jobArray = array();
        $jobArray['data'] = array();
        $jobArray['status'] = "no";
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $jobList = array(
                'job_id'=> $id ,
                'user_id'=>$user_id,
                'job_title'=>$job_title,
                'company_name'=>$company_name,
                'company_logo'=>$company_logo,
                'company_website'=>$company_website,
                'company_location'=>$location,
                'remote_work'=>$remote_work,
                'job_type'=>$job_type,
                'compensation'=>$compensation,
                'min_salary'=>$min_salary,
                'max_salary'=>$max_salary,
                'skills'=>json_decode($skills),
                'job_description'=>$job_description,
                'current_data'=>$current_data,
                'deadline'=>$deadline
            );

            array_push($jobArray['data'],$jobList);
             $jobArray['status'] = "ok";
            
        }

        echo json_encode($jobArray);

        return json_encode($jobArray);

    }else{
        echo json_encode(array('message'=>"there have no pending post",'status'=>"no"));
        return json_encode(array('message'=>"there have no pending post",'status'=>"no"));
    }

    
}



?>