<?php 

use app\includes;

class Signal extends includes\Dbh {

    public function  allSignals($limit) {
        $stmt = $this->connect()->query("SELECT * FROM signali ORDER BY id DESC LIMIT $limit");
        return $stmt->fetchAll(PDO::FETCH_OBJ);   
    }
}