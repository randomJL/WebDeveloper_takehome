<?php

require("Database.php");


class Controller {

    private $requester;
    private $entries;

    public function _construct($configName, $configPath) {
        $this->requester= new Requester($configName, $configPath);

        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if($requestMethod == "GET") {
            $this->$entries = $this->getEntries();
        }
        if ($requestMethod == "POST"){
            $this->insertData();
        }
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

        
        try{
            $this->requester->insertRequester($fname,$lname,$email);
        }
        catch (RuntimeException $e){
            echo $e->getMessage();
        }  
    }

    protected function getEntries(){
        $this-> entries = $this->requester->getWholeRequester();
        
        return $this -> entries;
    }


};

?>