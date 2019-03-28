<?php

class User
{
    private $conn;
    private $table = 'users';

    public $firstName;
    public $lastName;
    public $email;
    public $birthday;
    public $occupation;
    public $gender;
    public $password; 

        // constructor with db

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // signup function

    public function signup(){
        if($this->isAlreadyExist()){
            return false;
        }

     
        // query to insert record
        $query = "INSERT INTO " . $this->table. "
                SET first_name=:first_name, last_name=:last_name, email=:email , birthday=:birthday,occupation=:occupation,gender=:gender,password=:password";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->firstName=htmlspecialchars(strip_tags($this->firstName));
        $this->lastName=htmlspecialchars(strip_tags($this->lastName));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $pass = md5($this->password);
        // bind values
        $stmt->bindParam(":first_name", $this->firstName);
        $stmt->bindParam(":last_name", $this->lastName);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":birthday", $this->birthday);
        $stmt->bindParam(":occupation", $this->occupation);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":password", $pass);
       
    
        // execute query
        if($stmt->execute() > 0){
            $this->id = $this->conn->lastInsertId();
            return $this->updateInsertTable($this->email,"user", $this->id );
        }
    
        return false;
    }

    private function updateInsertTable($email,$type,$userId){

        $query = "INSERT INTO login
                SET user_id=:user_id,  email=:email , type=:type";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        
        
        // bind values
        $stmt->bindParam(":user_id", $userId);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":type", $type);
       
       
    
        // execute query
        if($stmt->execute() > 0){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
        return false ;

    }

    // signin function

    public function login(){


        $firstquery = "SELECT `user_id`, `email`, `type` FROM login where email = '".$this->email."  ' "  ; 

        $first_stmt = $this->conn->prepare($firstquery);
        // execute query
         $first_stmt->execute();

   

        if($first_stmt->rowCount() > 0){
            // get retrieved row
            $row = $first_stmt->fetch(PDO::FETCH_ASSOC);
            
            $type = $row['type'];

            if($type === "user"){
                // select all query
            $query = "SELECT `id`, `first_name`, `last_name`, `email`, `birthday`, `occupation`, `gender`, `password`
            FROM " . $this->table . " 
            WHERE email='".$this->email."' AND password='".$this->password."'";
            // prepare query statement
            $stmt = $this->conn->prepare($query);
            // execute query
            $stmt->execute();
            return $stmt;
            }
        }else{
            return $first_stmt;
        }

        
    }

    // is already exist check

    public function isAlreadyExist(){
        
        $query = "SELECT *
        FROM " . $this->table . " 
        WHERE email='".$this->email."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

 



}

?>