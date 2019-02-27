<?php

class Job
{
    private $conn;
    private $jobs_table = 'jobs';
    private $logos_table = 'logos';

    //logos info
    public $logoImage;
    public $logoName;

    //job creator info
    public $userId; // it will private

    // job info
     
    public $jobTitle;
    public $companyName;
    
    public $location;
    public $remoteWork;
    public $jobType; 
    public $salaryType; 
    public $minSalary; 
    public $maxSalary; 
    public $programmingSkill; 
    public $designSkill; 
    public $othersSkill; 
    public $jobDescription; 
    public $approveStatus; 


    private $logoId;

  
        // constructor with db

    public function __construct($db)
    {
        $this->conn = $db;
    }


    public function post(){
        $this->approveStatus = "false";

        //save logo
        if(!$this->saveLogo()){
          return false;  
        }

     

        $query = "INSERT INTO ". $this->jobs_table ." SET user_id=:user_id, job_title=:job_title, company_name=:company_name ,logo_id=:logo_id,location=:location,remote_work=:remote_work,job_type=:job_type,salary_type=:salary_type,min_salary=:min_salary,max_salary=:max_salary,programming_skill=:programming_skill,design_skill=:design_skill,others_skill=:others_skill, job_description=:job_description,approve_status=:approve_status" ; 


        $stmt = $this->conn->prepare($query);

        // bind values
        $stmt->bindParam(":user_id", $this->userId);
        $stmt->bindParam(":job_title", $this->jobTitle);
        $stmt->bindParam(":company_name", $this->companyName);
        $stmt->bindParam(":logo_id", $this->logoId);
        $stmt->bindParam(":location", $this->location);
        $stmt->bindParam(":remote_work", $this->remoteWork);
        $stmt->bindParam(":job_type", $this->jobType);
        $stmt->bindParam(":salary_type", $this->salaryType);
        $stmt->bindParam(":min_salary", $this->minSalary);
        $stmt->bindParam(":max_salary", $this->maxSalary);
        $stmt->bindParam(":programming_skill", $this->programmingSkill);
        $stmt->bindParam(":design_skill", $this->designSkill);
        $stmt->bindParam(":others_skill", $this->othersSkill);
        $stmt->bindParam(":job_description", $this->jobDescription);
        $stmt->bindParam(":approve_status", $this->approveStatus );

        
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
          return false;
    

       
    }

    private function saveLogo(){

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
    

    }

    public function getAllPendingJobPost(){
        $query = "SELECT *
        FROM " . $this->jobs_table . " 
        WHERE approve_status= false";

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
        WHERE approve_status= true";

        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt;
        }else{
            return false;
        }
    }   

    public function getAllUserJobPost($id){
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