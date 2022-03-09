<?php


class Controller {

    protected PDO $dbopen;
    private Requester $requester;
    private Database $database;
    private Html $html;

    public function _construct(string $configName, $configPath) {
        $database= new Database($configName, $configPath);

        $this->dbopen = $dbopen->db_open();
        $this->requester = new Requester($configName, $configPath);
        $this->html = new Html();

        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if ($requestMethod == "POST"){

            $entry_list = $this->requester->getEntry();

            $this->requeter->insertEntry($fname,$lname,$email);
        }
    }

};

?>