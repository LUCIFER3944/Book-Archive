<?php

class Database {
    private $host = "localhost"; 
    private $username = "root";  
    private $password = "";      
    private $dbname = "books"; 
    private $conn; 

    // Method to connect to the database
    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    // Optional: Close the connection
    public function close() {
        $this->conn = null;
    }
}
?>
