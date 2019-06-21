<?php

// $conf = require '../app/config/config.php';

// var_dump($conf);

class Dbh {
    
    protected $servername;
    protected $username;
    protected $password;
    protected $dbname;
    
    public function __construct() 
    {
        $this->servername = '';
        $this->username = '';
        $this->password = '';
        $this->dbname = '';
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
