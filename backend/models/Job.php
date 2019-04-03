<?php

class Job
{
    private $conn;
    private $jobs_table = 'jobs';
   
    //job creator info
    public $u_id ; // 37/38/39 // it will come by seassion//just for test,,you can chnge this value by seeing user table for test
    private $id ; // 37/38/39 // it will come by seassion//just for test,,you can chnge this value by seeing user table for test
  
    // job info
     
    public $jobTitle;
   
    public $applicationDeadline;
    

    
    public $compensation;
    public $remoteWork;
    public $jobType; 

    public $minSalary; 
    public $maxSalary; 
    public $requiredSkills; 
    public $jobDescription; 
    
    private $approveStatus ; 



  
        // constructor with db

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function post(){
        $this->approveStatus = 0;
       
        $job_id = uniqid();
        
        $query = "INSERT INTO ". $this->jobs_table ." SET job_id=:job_id,user_id=:user_id, job_title=:job_title,remote_work=:remote_work,job_type=:job_type,compensation=:compensation,min_salary=:min_salary,max_salary=:max_salary,skills=:skills, job_description=:job_description,deadline=:deadline, approve_status=:approve_status" ; 


        $stmt = $this->conn->prepare($query);

        // bind values
        $stmt->bindParam(":job_id", $job_id);
        $stmt->bindParam(":user_id", $this->u_id);
        $stmt->bindParam(":job_title", $this->jobTitle);
       
        $stmt->bindParam(":remote_work", $this->remoteWork);
        $stmt->bindParam(":job_type", $this->jobType);
        $stmt->bindParam(":compensation", $this->compensation);
        $stmt->bindParam(":min_salary", $this->minSalary);
        $stmt->bindParam(":max_salary", $this->maxSalary);
        $stmt->bindParam(":skills", $this->requiredSkills);
        
        $stmt->bindParam(":job_description", $this->jobDescription);
        $stmt->bindParam(":deadline", $this->applicationDeadline);
        $stmt->bindParam(":approve_status", $this->approveStatus );

        
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
          return false;
    

       
    }

  /*   private function saveLogo(){

        $logoQuery = "INSERT INTO " . $this->logos_table. " SET img_name=:img_name, image=:image " ;

        
        $stmt = $this->conn->prepare($logoQuery);

        // bind values
        $stmt->bindParam(":img_name", $this->logoName);
        $stmt->bindParam(":image", $this->logoImage);

        // execute query
        if($stmt->execute()){
            $this->logoId = $this->conn->lastInsertId();
         
            return true;
        }
    
        return false;
    

    } */

    public function getAllPendingJobPost(){
        $query = "SELECT *
        FROM " . $this->jobs_table . " 
        WHERE approve_status= 0";
 
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt;
        }else{
            return false;
        }
    }

    public function getAllPublishJobPost(){
        $query = "SELECT *
        FROM " . $this->jobs_table . " 
        WHERE approve_status = 1";

        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt;
        }else{
            return false;
        }
    }

    public function getAllPublishJobPostWithCompany(){
        $query = "SELECT *
        FROM jobs
        INNER JOIN employer
        ON jobs.user_id=employer.id and jobs.approve_status = 1";

        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt;
        }else{
            return false;
        }
    }
    
    public function getSingleJobPost($jobId){
        $query = "SELECT *
        FROM jobs INNER JOIN employer
        ON jobs.user_id=employer.id and jobs.job_id = '$jobId' 
        ";

        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt;
        }else{
            return false;
        }
    }  
    
    public function getSingleJobPostWithCompany($jobId){
        $query = "SELECT *
        FROM " . $this->jobs_table . " 
        WHERE id = '$jobId'";

        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt;
        }else{
            return false;
        }
    }  

    public function getOwnUserAllJobPost($id){
        $query = "SELECT *
        FROM " . $this->jobs_table . " 
        WHERE user_id= '".$id."' ";

        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt;
        }else{
            return false;
        }
    }  
    //  'job_id'=> $id ,
    

    public function getAllJobPostWIthCompnayInfo(){
        $query = "SELECT *
        FROM jobs
        INNER JOIN employer
        ON jobs.user_id=employer.id ";

        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt;
        }else{
            return false;
        }
    }

    public function getAllPublishOwnCompanyJobPostWithCompany($employerId){
        $query = "SELECT *
        FROM jobs
        INNER JOIN employer
        ON jobs.user_id=employer.id and employer.id = '$employerId' ";

        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt;
        }else{
            return false;
        }
    }

    public function updateJobStatus($jobId){

        if($this->isAlreadyAprrovedJob($jobId)){
            return false;
        }

        $query = "UPDATE jobs SET approve_status = :approve_status  
            WHERE job_id = :job_id";
        $status = 1;
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":approve_status",$status );
        $stmt->bindParam(":job_id", $jobId);

        if($stmt->execute()){
            return true;
        }
         else return false;
         

    }

    private function isAlreadyAprrovedJob($jobId){

        $result = $this->conn->prepare("SELECT *
        FROM jobs WHERE approve_status = 1 AND job_id = '".$jobId."' ");
      
        $result->execute();

        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }

    }
    
    public function deleteJob($jobId){

        
        $query = "DELETE FROM jobs WHERE job_id =  :job_id";
   
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":job_id", $jobId);

        if($stmt->execute()){
            return true;
        }
         else return false;
         

    }



}    


?>