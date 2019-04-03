<?php
    class UpdateProfile{

        private $conn;
        private $update_profile_table = 'profile';
        private $update_experience_table = 'Experience';

        

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


        public function SetSkills($userid,$Skills){

            if($this->isAlreadyhasProfile($userid)){

                $query = "UPDATE profile SET Skills=:Skills where userid=:userid" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":Skills", $Skills);
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;
            }else{

                $query = "INSERT INTO profile ( userid, Skills ) VALUES (:userid, :Skills)" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":Skills", $Skills);
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;

            }
        
        }

        public function SetAboutMe($userid,$AboutMe){

            if($this->isAlreadyhasProfile($userid)){

                $query = "UPDATE profile SET AboutMe=:AboutMe where userid=:userid" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":AboutMe", $AboutMe);
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;
            }else{

                $query = "INSERT INTO profile ( userid, Skills ) VALUES (:userid, :Skills)" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":AboutMe", $AboutMe);
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;

            }
        
        }


        public function setCurrentJobProfile($userid, $currrentJobtitle, $currentJobcompany, $currentjobstartfrom){
            // currrentJobtitle, currentJobcompany, currentjobstartfrom

            if($this->isAlreadyhasProfile($userid)){

                $query = "UPDATE profile SET currrentJobtitle=:currrentJobtitle, currentJobcompany=:currentJobcompany, currentjobstartfrom=:currentjobstartfrom where userid=:userid" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":currrentJobtitle", $currrentJobtitle);
                $stmt->bindParam(":currentJobcompany", $currentJobcompany);
                $stmt->bindParam(":currentjobstartfrom", $currentjobstartfrom);
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;
            }else{

                $query = "INSERT INTO profile ( userid, currrentJobtitle, currentJobcompany, currentjobstartfrom ) VALUES (:userid, :currrentJobtitle, :currentJobcompany, :currentjobstartfrom)" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":currrentJobtitle", $currrentJobtitle);
                $stmt->bindParam(":currentJobcompany", $currentJobcompany);
                $stmt->bindParam(":currentjobstartfrom", $currentjobstartfrom);
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;

            }
        
        }

        public function SetSocialLinks($userid,$facebook, $twitter, $LinkedIn, $GitHub){

            if($this->isAlreadyhasProfile($userid)){
                // facebook, twitter, LinkedIn, GitHub


                $query = "UPDATE profile SET facebook=:facebook, twitter=:twitter, LinkedIn=:LinkedIn, GitHub=:GitHub where userid=:userid" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":facebook", $facebook);
                $stmt->bindParam(":twitter", $twitter);
                $stmt->bindParam(":LinkedIn", $LinkedIn);
                $stmt->bindParam(":GitHub", $GitHub);
 
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;
            }else{
                // INSERT INTO `profile`(`id`, `userid`, `CareerObjective`, `Skills`, `OthersSkill`, `AboutMe`, `currrentJobtitle`, `currentJobcompany`, `currentjobstartfrom`, `facebook`, `twitter`, `LinkedIn`, `GitHub`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])

                $query = "INSERT INTO profile ( userid, facebook, twitter, LinkedIn, GitHub ) VALUES (:userid, :facebook, :twitter, :LinkedIn, :GitHub)" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":facebook", $facebook);
                $stmt->bindParam(":twitter", $twitter);
                $stmt->bindParam(":LinkedIn", $LinkedIn);
                $stmt->bindParam(":GitHub", $GitHub);
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;

            }

        
        }





        public function SetExperience ($userid, $name, $details){
             
                $query = "INSERT INTO Experience ( userid, name, details ) VALUES (:userid, :name, :details)" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":name", $name);
                $stmt->bindParam(":details", $details);
        
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;
        }


        public function SetEducation ($userid, $Title, $Subject, $Institution, $YearofPassing, $Length, $Location){
            // id, userid, Title, Subject, Institution, YearofPassing, Length, Location

             
                $query = "INSERT INTO education ( userid, Title, Subject, Institution, YearofPassing, Length, Location ) VALUES (:userid, :Title, :Subject, :Institution, :YearofPassing, :Length, :Location)" ;

            
                $stmt = $this->conn->prepare($query);
        
                // bind values
                $stmt->bindParam(":userid", $userid);
                $stmt->bindParam(":Title", $Title);
                $stmt->bindParam(":Subject", $Subject);
                $stmt->bindParam(":Institution", $Institution);
                $stmt->bindParam(":YearofPassing", $YearofPassing);
                $stmt->bindParam(":Length", $Length);
                $stmt->bindParam(":Location", $Location);
                
                // execute query
                if($stmt->execute()){
                    return true;
                }
                else return false;
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