<?php

class Employer
{
    private $conn;
    private $table = 'employer';
    private $type= "employer";
    public $userName;
    public $email;
    public $companyName;
    public $companyWebsite;
    public $location;
    public $companyLogo ;
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
                SET user_name=:user_name,  email=:email , company_name=:company_name,company_website=:company_website,company_logos=:company_logos,company_location=:company_location,type=:type,password=:password";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        
        $this->email=htmlspecialchars(strip_tags($this->email));
        $pass = md5($this->password);
        // bind values
        $stmt->bindParam(":user_name", $this->userName);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":company_name", $this->companyName);
        $stmt->bindParam(":company_website", $this->companyWebsite);
        $stmt->bindParam(":company_logos", $this->companyLogo);
        $stmt->bindParam(":company_location", $this->location);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":password", $pass);
       
    
        // execute query
        if($stmt->execute() > 0){

            $this->id = $this->conn->lastInsertId();
           
           return $this->updateInsertTable($this->email,$this->type, $this->id);
           
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

 
    public function getCompanyInfo($employerId){
        $query = "SELECT `id`, `company_name`, `company_website`, `company_logos`, `company_location`,`type`,`user_name`
        FROM " . $this->table . " 
        WHERE id = '$employerId' ";

        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt;
        }else{
            return false;
        }
    }
    



}

?>