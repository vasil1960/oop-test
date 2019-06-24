<?php 

// require '../app/includes/dbh.inc.php';
// require '../app/includes/signal.inc.php';
// $conf = require '../app/config/config.php';

// $signal = new Signal($conf);
// $signali = $signal->allSignals(50);

$data = [
    'jumbotronTitle'=> 'Начална станица',
    'jumbotronSubTitle'=> 'Начална станица за подадени сигнали чрез телефон 112 към ИАГ',
];

require '../app/views/index.view.php';
