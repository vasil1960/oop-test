<?php 

class Signal extends Dbh {

    public function  allSignals($limit) {
        $stmt = $this->connect()->query("SELECT * FROM signali ORDER BY id DESC LIMIT $limit");
        return $stmt->fetchAll(PDO::FETCH_OBJ);   
    }
}