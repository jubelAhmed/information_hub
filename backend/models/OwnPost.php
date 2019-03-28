<?php

    class OwnPost{


        public $own_post_table = "posts";

        private $conn;
        public $postTitle;
        public $postCatagories;
        public $postDescription;


        public function __construct($db)
        {
            $this->conn = $db;
        }




        public function post($user_id){
            $this->approveStatus = 1;
    
            
            $query = "INSERT INTO ". $this->own_post_table ." SET post_title=:post_title, post_categories=:catagories, post_description=:description,user_id=:user_id" ; 
    
    
            $stmt = $this->conn->prepare($query);
    
            // bind values
            $stmt->bindParam(":post_title", $this->postTitle);
            $stmt->bindParam(":catagories", $this->postCatagories);
            $stmt->bindParam(":description", $this->postDescription);
            $stmt->bindParam(":user_id", $user_id);
      
    
            
            // execute query
            if($stmt->execute()){
                // $this->id = $this->conn->lastInsertId();
                return true;
            }
              return false;
        
    
           
        }


        

    }


?>