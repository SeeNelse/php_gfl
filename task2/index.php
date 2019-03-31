<?php

include 'config.php';
include 'libs/Calc.php';

$calcObj = new Calc();
$calcObj->setNumA("10");
$calcObj->setNumB(5);

include 'templates/index_tmpl.php';

?>