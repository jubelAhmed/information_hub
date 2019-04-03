<?php
    class ApplyJob{

        private $conn;
        private $apply_job_table = 'apply_job';

        

        public function __construct($db){
            $this->conn = $db;
        }

        //apply job
        public function applyjob($applicantId,$jobId){

            if($this->isAlreadyAppliedJob($applicantId,$jobId)){
                return false;
            }

            $query = "INSERT INTO " . $this->apply_job_table. " SET job_id=:job_id, applicant_id=:applicant_id " ;

        
            $stmt = $this->conn->prepare($query);
    
            // bind values
            $stmt->bindParam(":job_id", $jobId);
            $stmt->bindParam(":applicant_id", $applicantId);
    
            // execute query
            if($stmt->execute()){
                $this->applyId = $this->conn->lastInsertId();
                return true;
            }
            else return false;
        
        }

        //check already apply job 

        private function isAlreadyAppliedJob($applicantId,$jobId){

            $result = $this->conn->prepare("SELECT *
            FROM " . $this->apply_job_table . " 
            WHERE applicant_id = '".$applicantId."' AND job_id = '".$jobId."' ");
          
            $result->execute();

            if($result->rowCount() > 0){
                return true;
            }else{
                return false;
            }

        }

        // get all apply job list

        public function getAllApplyJob($applicantId){
            $query = "SELECT *
            FROM " . $this->apply_job_table . " 
            WHERE applicant_id = '".$applicantId."' ";
    
            $stmt = $this->conn->prepare($query);
            // execute query
            $stmt->execute();
            if($stmt->rowCount() > 0){
                return $stmt;
            }else{
                return false;
            }
        }

        public function getAllappliedUsers($jobId){
            $query = "SELECT *
            FROM users INNER JOIN apply_job
            WHERE apply_job.job_id = '$jobId' and users.id = apply_job.applicant_id ";
    
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