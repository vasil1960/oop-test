<?php 

class Signal extends Dbh {

    public function  allSignals($limit) {
        $stmt = $this->connect()->query("SELECT * FROM signali LIMIT $limit");
        while ($signals = $stmt->fetchAll(PDO::FETCH_OBJ)) {
            foreach ($signals as $signal) {
                echo $signal->opisanie; 
            }
        };
    }
}