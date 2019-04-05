<?php

include 'config.php';
include 'libs/Calc.php';
// include 'libs/UnitTest.php';

$calcObj = new Calc();
$calcObj->setNumA("10");
$calcObj->setNumB(5);


$sum = $calcObj->sum();

$subtraction = $calcObj->subtraction();

$multiplication = $calcObj->multiplication();

$division = $calcObj->division();

$sqrtFnc = $calcObj->sqrtFnc();

$percent = $calcObj->percent();

$squared = $calcObj->squared();

$fraction = $calcObj->fraction();

$ms = $calcObj->ms();

$mPlus = $calcObj->mPlus();

$mMinus = $calcObj->mMinus();

$mc = $calcObj->mc();





include 'templates/index_tmpl.php';

?>