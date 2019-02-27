<?php

class Database
{

    private $host = "database.amadersoft.com";
    private $db_name = "universityProject";
    private $user_name = "university";
    private $password = "udb2019XBD";

        // db connect

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->user_name, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            ///echo "database connected";
        } catch (PDOException $e) {
            // echo 'connection error : ' . $e->getMessage();
            echo('{"msg": "Database connection Failed!","status": "error"}');
            die();
        }

        return $this->conn;
    }


}

?>