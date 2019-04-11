<?php

class FilterJob{
    private $conn;
   
    public function __construct($db)
    {
        $this->conn = $db;
    }
     
    public function getFilteredJob($skills){
        // SELECT * FROM `jobs` WHERE skills LIKE '%c++%
        // SELECT *
        // FROM jobs
        // INNER JOIN employer
        // ON jobs.user_id=employer.id and jobs.approve_status = 1"


        $sql = "SELECT * FROM jobs INNER JOIN employer ON jobs.user_id=employer.id and jobs.approve_status = 1 and jobs.skills LIKE :skills ";
 
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":skills", $skills, PDO::PARAM_STR);
        // execute query
        $stmt->execute(array(':skills' => '%'.$skills.'%'));
        
        if($stmt->rowCount() > 0){
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else{
            return false;
        }
    }


}    


?>