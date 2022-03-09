<?php

require_once('Database.php');


// Inherited from the Database
class Requester extends Database{

    public function __construct(string $configName, string $configPath)
    {
        parent::__construct($configName, $configPath);

    }
    
    public function getWholeRequester(){
        $query = "SELECT * FROM REQUESTER";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertRequester($firstname, $lastname, $email){
        if(($this->checkExistence($email))){
            throw new RuntimeException($email."already exists");
        }
        $query = "INSERT INTO REQUESTER (FirstName, LastName, Email) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($query);
        $statement->execute([$firstname, $lastname, $email]);
    }


}

