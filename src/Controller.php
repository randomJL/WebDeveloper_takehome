<?php


class Controller {

    protected $dbopen;
    private $requester;
    private $database;
    private $html;

    public function _construct($configName, $configPath) {
        $database= new Database($configName, $configPath);

        $this->dbopen = $dbopen->db_open();
        $this->requester = new Requester($configName, $configPath);
        $this->html = new Html();
    
    }

    public function insertData() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if ($requestMethod == "POST"){

            $entry_list = $this->requester->getEntry();
            $this->requeter->insertRequester($fname,$lname,$email);
        }
    }

    public function getData() {
        $stmt = $this->requester->getWholeRequester();
        return $stmt;
    }
};

?>