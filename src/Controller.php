<?php

require("Requester.php");
require('Html.php');

class Controller {

    private $requester;
    private $html;
    //private $entries;

    public function __construct($configName, $configPath) {
        $this->requester= new Requester($configName, $configPath);
        $this->html = new Html();
        

        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if($requestMethod == "GET") {
            $this->index();
        }
        if ($requestMethod == "POST"){
            $this->insertData();
        }
    }

    public function index(){
        $entries = $this->getEntries();

        $html = $this->html->getForm($this->errors);
        $html .= $this->html->getListOfEntries($entries);

        echo $html;
    }

    public function insertData() {
        
        if(!isset($_POST['first_name'])){
            throw new RuntimeException("First name is required");
        }elseif (!isset($_POST['last_name'])){
            throw new RuntimeException("Last name is required");
        }elseif (!isset($_POST['email'])){
            throw new RuntimeException("Email is required");
        }

        $fname = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
        $lname = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        
        try{
            $this->requester->insertRequester($fname,$lname,$email);
        }
        catch (RuntimeException $e){
            echo $e->getMessage();
        }  
        $this->index();
    }

    protected function getEntries(){
        $this-> entries = $this->requester->getWholeRequester();
        
        return $this -> entries;
    }


};

?>