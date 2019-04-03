<?php
    class GetPost {

        public function __construct($db) {
            $this->conn = $db;
        }

        public function getPosts() {

            $query = "SELECT * FROM posts order by time DESC limit 20";
            $stmt = $this->conn->prepare($query);
            // $stmt->bindParam(":user_id", $user_id);

            if ($stmt->execute()) {
                $resultJSON = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultJSON;
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