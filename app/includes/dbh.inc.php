<?php

require '../app/config/config.php';

// var_dump($conf);

class Dbh {
    
    protected $servername;
    protected $username;
    protected $password;
    protected $dbname;
    
    public function __construct() 
    {
        $this->servername = '172.16.4.34';
        $this->username = 'cotaivo';
        $this->password = 'taniami';
        $this->dbname = 'iag112new';
    }

    public function connect()
    {
        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOExeption $e) {
            "Can't connect: " . $e->getMessage;
        }
    }
}
