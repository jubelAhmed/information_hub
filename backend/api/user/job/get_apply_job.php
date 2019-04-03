<?php

function getAppliedUserList($applyJob,$job_id){
    $result = $applyJob->getAllappliedUsers($job_id);
    $appliedUsersArray = array();
    $appliedUsersArray['data'] = array();
    $appliedUsersArray['status'] = "no";
    if($result){
     while($row = $result->fetch(PDO::FETCH_ASSOC)){

        extract($row);
        $usersList = array(
            'first_name'=> $first_name ,
            'last_name'=>$last_name,
            'email'=>$email,
            'birthday'=>$birthday,
            'occupation'=>$occupation,
            'gender'=>$gender,
            'type'=>$type,
            'apply_date'=>$apply_date,
            
        );

        array_push($appliedUsersArray['data'],$usersList);
        $appliedUsersArray['status'] = "ok";
    } 
        return json_encode($appliedUsersArray);

    }
}


?>