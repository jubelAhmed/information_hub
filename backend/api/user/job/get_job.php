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
    

    $result =$job->getAllPublishJobPost();

    $num = $result->rowCount();

    if($num > 0){
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
                'company_location'=>$location,
                'programming_skills'=>json_decode($programming_skills),
                'design_skills'=>json_decode($design_skills),
                'other_skills'=>json_decode($other_skills),
                'special_skills'=>json_decode($special_skills),
                'job_type'=>$job_type,
                'slary_type'=>$job_type,
                'max_salary'=>$max_salary,
                'min_salary'=>$min_salary,
                'job_description'=>$job_description,
                'work_type'=>$remote_work
            );

            array_push($jobArray['data'],$jobList);
             $jobArray['status'] = "ok";
            
        }

       

        return json_encode($jobArray);

    }else{
        echo json_encode(array('message'=>"there have no registered user",'status'=>"no"));
        return json_encode(array('message'=>"there have no registered user",'status'=>"no"));
    }

    
}

function getSingleJob($job,$job_id){
    $result = $job->getSingleJobPost($job_id);

    if($result){
        $row = $result->fetch(PDO::FETCH_ASSOC);
        extract($row);
        $jobArray = array(
            'job_id'=> $id ,
            'user_id'=>$user_id,
            'job_title'=>$job_title,
            'company_name'=>$company_name,
            'company_location'=>$location,
            'programming_skills'=>json_decode($programming_skills),
            'design_skills'=>json_decode($design_skills),
            'other_skills'=>json_decode($other_skills),
            'special_skills'=>json_decode($special_skills),
            'job_type'=>$job_type,
            'salary_type'=>$job_type,
            'max_salary'=>$max_salary,
            'min_salary'=>$min_salary,
            'job_description'=>$job_description,
            'work_type'=>$remote_work,
             "deadline"=> $deadline
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
                'job_provider_id'=>$user_id,
                'job_title'=>$job_title,
                'company_name'=>$company_name,
                'programming_skills'=>json_decode($programming_skills),
                'design_skills'=>json_decode($design_skills),
                'other_skills'=>json_decode($other_skills),
                'special_skills'=>json_decode($special_skills)
            );

            array_push($jobArray['data'],$jobList);
             $jobArray['status'] = "ok";
            
        }

        echo json_encode($jobArray);

        return json_encode($jobArray);

    }else{
        echo json_encode(array('message'=>"there have no pending post",'status'=>"no"));
        return json_encode(array('message'=>"there have no registered user",'status'=>"no"));
    }

    
}



?>