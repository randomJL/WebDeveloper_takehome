<?php

class Database {
    private $db;
    private $host;
    private $port;
    private $user;
    private $password;
    private $dsn;
    private $pdoOptions;
    protected $connection;

    public function __construct(string $configName, string $configPath){
        $this->parseConfig($configName, $configPath);
        $this->assignDSN();
        $this->assignPDOOptions();
    }

    protected function parseConfig(string $configName, string $configPath){
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
        $dsn = "mysql:". "host=". $this->host. ";"."dbname=". $this->db;
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

