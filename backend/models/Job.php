<?php

class Job
{
    private $conn;
    private $jobs_table = 'jobs';
   
    //job creator info
    private $userId = 32; // 37/38/39 // it will come by seassion//just for test,,you can chnge this value by seeing user table for test

    // job info
     
    public $jobTitle;
    public $companyName;
    public $companyLogo;
    public $companyWebsite;
    public $applicationDeadline;
    
    public $location;
    
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

       
        
        $query = "INSERT INTO ". $this->jobs_table ." SET user_id=:user_id, job_title=:job_title, company_name=:company_name ,company_website=:company_website,location=:location,remote_work=:remote_work,job_type=:job_type,compensation=:compensation,min_salary=:min_salary,max_salary=:max_salary,skills=:skills, job_description=:job_description,deadline=:deadline, approve_status=:approve_status" ; 


        $stmt = $this->conn->prepare($query);

        // bind values
        $stmt->bindParam(":user_id", $this->userId);
        $stmt->bindParam(":job_title", $this->jobTitle);
        $stmt->bindParam(":company_name", $this->companyName);
        // $stmt->bindParam(":company_logo", $this->companyLogo);
        $stmt->bindParam(":company_website", $this->companyWebsite);

    
        $stmt->bindParam(":location", $this->location);
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
    
    public function getSingleJobPost($jobId){
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
    



}    


?>