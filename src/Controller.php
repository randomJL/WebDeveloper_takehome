<?php

require("Database.php");


class Controller {

    private $database;

    public function _construct($configName, $configPath) {
        $this->database = new Database($configName, $configPath);
    }

    public function insertData() {
        if(!isset($_POST['firstname'])){
            throw new RuntimeException("First name is required");
        }elseif (!isset($_POST['lastname'])){
            throw new RuntimeException("Last name is required");
        }elseif (!isset($_POST['email'])){
            throw new RuntimeException("Email is required");
        }

        $fname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $lname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        $this->insertRequester($fname,$lname,$email);
      
    }

    public function insertRequester($fname,$lname,$email) {
        try {
            $query = "INSERT INTO requester (FirstName, LastName, Email) VALUES (?,?,?)";
            $stmt = $dbopen -> prepare($query);
    
            $stmt -> execute([$fname,$lname,$email]);
        }catch(PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    
    }

    public function getDB() {
        return $this->database;
    }
};

?>