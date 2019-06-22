<?php

require '../app/includes/dbh.inc.php';
require '../app/includes/signal.inc.php';

$signal = new Signal;
$signali = $signal->allSignals(50);

require '../app/views/signali.view.php';