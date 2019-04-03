<?php
    class getFullNameFromId {

        public function __construct($db) {
            $this->conn = $db;
        }

        // public function getPosts() {

        //     $query = "SELECT * FROM posts order by time DESC limit 20";
        //     $stmt = $this->conn->prepare($query);
        //     // $stmt->bindParam(":user_id", $user_id);

        //     if ($stmt->execute()) {
        //         $myCustomResult = [];
        //         $resultJSON = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //         for ($i=0; $i < count($resultJSON) ; $i++) { 
        //             $userName = $this->userIdToUserFullName($resultJSON[$i]['user_id']);
        //             $userName = implode(' ', $userName[0]);
        //             $resultJSON[$i]['fullname'] = $userName;
        //             array_push($myCustomResult, $resultJSON[$i]);
        //         }
                
        //         return $myCustomResult;
        //     }
        //     return false;
        // }
        
        public function userIdToUserFullName($user_id){
            $query = "SELECT first_name, last_name FROM users WHERE id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":user_id", $user_id);

            if ($stmt->execute()) {
                $resultJSON = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $userFullname = implode(' ', $resultJSON[0]);
                return $userFullname;
            }
            return false;
        }
    }

?>