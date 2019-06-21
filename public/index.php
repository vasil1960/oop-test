<?php

require '../app/includes/dbh.inc.php';
require '../app/includes/signal.inc.php';

// $dbh = new Dbh;
// $dbh->connect();
$signal = new Signal;
$signal->allSignals(3000);