<?php

class Database
{

    private $host = "database.amadersoft.com";
    private $db_name = "universityProject";
    private $user_name = "admin";
    private $password = "8526ba9357242b31d5ad0491468af18733140382be384c67";

        // db connect

    public function connect()
    {
        $this->conn = null;
      

        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->user_name, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "database connected";
        } catch (PDOException $e) {
            echo 'connection error : ' . $e->getMessage();
        }

        return $this->conn;
    }


}

?>