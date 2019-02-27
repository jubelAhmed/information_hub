<?php
    class ApplyJob{

        private $conn;
        private $apply_job_table = 'apply_job';

        public $applyId ;

        public function __construct($db){
            $this->conn = $db;
        }

        public function applyjob($jobId,$applicantId){

            $query = "INSERT INTO " . $this->apply_job_table. " SET job_id=:job_id, applicant_id=:applicant_id " ;

        
            $stmt = $this->conn->prepare($logoQuery);
    
            // bind values
            $stmt->bindParam(":job_id", $jobId);
            $stmt->bindParam(":applicant_id", $applicantId);
    
            // execute query
            if($stmt->execute()){
                $this->applyId = $this->conn->lastInsertId();
             
                return true;
            }
        
            return false;
        
        }
    }

?>