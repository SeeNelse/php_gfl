<?php

include 'config.php';
include 'templates/index_tmpl.php';
include 'libs/Calc.php';


$calcObj = new Calc();

$calcObj->setNumA(10);
$calcObj->setNumB(5);


$calcObj->sum();

$calcObj->minus();

?>