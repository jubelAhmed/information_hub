<?php
    class UpdateProfile{

        private $conn;
        private $update_profile_table = 'profile';

        

        public function __construct($db){
            $this->conn = $db;
        }

        //apply job
        public function SetCareerObjective($userid,$details){

            if($this->isAlreadyhasProfile($userid)){
                // UPDATE `profile` SET `id`=[value-1],`userid`=[value-2],`CareerObjective`=[value-3],`Skills`=[value-4],`OthersSkill`=[value-5],`AboutMe`=[value-6],`currrentJobtitle`=[value-7],`currentJobcompany`=[value-8],`currentjobstartfrom`=[value-9],`facebook`=[value-10],`twitter`=[value-11],`LinkedIn`=[value-12],`GitHub`=[value-13] WHERE 1

                $query = "UPDATE profile SET CareerObjective=:details where userid=:userid" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":details", $details);
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;
            }else{
                // INSERT INTO `profile`(`id`, `userid`, `CareerObjective`, `Skills`, `OthersSkill`, `AboutMe`, `currrentJobtitle`, `currentJobcompany`, `currentjobstartfrom`, `facebook`, `twitter`, `LinkedIn`, `GitHub`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])

                $query = "INSERT INTO profile ( userid, CareerObjective ) VALUES (:userid, :details)" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":details", $details);
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;

            }

        
        }



        //check already apply job 

        private function isAlreadyhasProfile($userid){

            $result = $this->conn->prepare("SELECT *
            FROM " . $this->update_profile_table . " 
            WHERE userid = '".$userid."'");
          
            $result->execute();

            if($result->rowCount() > 0){
                return true;
            }else{
                return false;
            }

        }

 
 

        
    }

?>