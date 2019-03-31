<?php
    class GetPost {

        public function __construct($db) {
            $this->conn = $db;
        }

        public function getPosts($user_id) {

            $query = "SELECT * FROM posts order by time DESC limit 20";
            $stmt = $this->conn->prepare($query);
            // $stmt->bindParam(":user_id", $user_id);

            if ($stmt->execute()) {
                $myCustomResult = [];
                $resultJSON = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $userName = $this->userIdToUserFullName($user_id);
                $userName = implode(' ', $userName[0]);

                for ($i=0; $i < count($resultJSON) ; $i++) { 
                   $resultJSON[$i]['fullname'] = $userName;
                    array_push($myCustomResult, $resultJSON[$i]);
                }
                
                return $myCustomResult;
            }
            return false;
        }
        
        public function userIdToUserFullName($user_id){
            $query = "SELECT first_name, last_name FROM users WHERE id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":user_id", $user_id);

            if ($stmt->execute()) {
                $resultJSON = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultJSON;
            }
            return false;
        }
    }

?>