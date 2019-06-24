<?php

require '../app/includes/dbh.inc.php';
require '../app/includes/signal.inc.php';
$conf = require '../app/config/config.php';

$signal = new Signal($conf);
$signali = $signal->allSignals(50);

$data = [
    'jumbotronTitle'=> 'Телефон 112',
    'jumbotronSubTitle'=> 'Подадени сигнали чрез телефон 112 към ИАГ',
];

require '../app/views/signali.view.php';