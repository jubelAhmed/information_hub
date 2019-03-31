<?php
    class GetPost {

        public function __construct($db) {
            $this->conn = $db;
        }

        public function getPosts($user_id) {

            $query = "SELECT * FROM posts WHERE user_id = :user_id";
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