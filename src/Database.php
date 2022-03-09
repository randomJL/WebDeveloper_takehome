<?php

class Database {
    private $dbname;
    private $dbhost;
    private $dbport;
    private $user;
    private $password;
    private $dsn;
    private $pdoOptions;
    private $configName;
    protected $connection;


    public function __construct($configName, $configPath){

        if($configName == "sqlite3"){
            $this->assignDSN($configName, $configPath);
        } else {
            $this->parseConfig($configName, $configPath);
            $this->assignDSN();
        }

    }

    protected function parseConfig($configName, $configPath){
        $path = __DIR__ . "/../../" . $configPath;
        if(file_exists($path))
        {
            $configsArray = parse_ini_file($path);
            $parametersArray = $configsArray[$configName];
            foreach ($parametersArray as $k => $v)
            {
                $this->$k = $v;
            }
        }
        else
        {
            throw new RuntimeException($path . " cannot be found");
        }
    }

    protected function db_open() {
        try {
            $this->connection = new PDO($this->dsn, $this->user, $this->password, $this->pdoOptions);
        }
        catch (PDOException $e){
            die($e->getMessage());
        }
    }

    protected function db_close() {
        $this->connection = null;
    }

    protected function assignDSN(){
        $dsn = "mysql:". "host=". $this->dbhost. ";"."dbname=". $this->dbname;
        $this->dsn = $dsn;
    }

    protected function assignPDOOptions(){
        $this->pdoOptions = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
    }
}
?>

