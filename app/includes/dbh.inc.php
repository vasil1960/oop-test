<?php

namespace app\includes;

use PDO;

class Dbh {
    
    protected $servername;
    protected $username;
    protected $password;
    protected $dbname;
    
    public function __construct($conf) 
    {
        // var_dump($conf);
        
        $this->servername = $conf['servername'];
        $this->username = $conf['username'];
        $this->password = $conf['password'];
        $this->dbname = $conf['dbname'];
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
