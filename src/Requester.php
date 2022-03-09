<?php

class Requester {
    private $configName;
    private $configPath;
    private $entry_list;

    public function _construct($configName,$configPath) {
        $this->configName = $configName;
        $this->configPath = $configPath;
    }

    public function postEntry($entry) {

        if(!isset($_POST['firstname'])){
            throw new RuntimeException("First name is required");
        }elseif (!isset($_POST['lastname'])){
            throw new RuntimeException("Last name is required");
        }elseif (!isset($_POST['email'])){
            throw new RuntimeException("Email is required");
        }

        /*
        iteration the POST lists

        $post_value = filter_var($entry, FILTER_SANITIZE_STRING);

        if (!isset($entry)) {
            throw new RuntimeException($entry."is required");
        }

        array_push($this->$entry_list,$post_value);
        */

        $fname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $lname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        array_push($this->$fname,$post_value);
        array_push($this->$lname,$post_value);
        array_push($this->$email,$post_value);
    }


    public function getEntry() {
        return $this->entry_list;
    }


    public function insertEntry($fname,$lname,$email) {

        try {
            $query = "INSERT INTO requester (FirstName, LastName, Email) VALUES (?,?,?)";
            $stmt = $dbopen -> prepare($query);
    
            $stmt -> execute([$entered_fname,$entered_lname,$entered_email]);
        }catch(PDOException $e){
            echo "ERROR:".$e->getMessage();
        }
    }


    // for testing purpost, retrieve all data from database
    public function getAllEntries(){
        $query = "SELECT * FROM requester";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}

?>