<?php


$calcObj = new Calc();

$calcObj->setNumA("10");
$calcObj->setNumB(5);


echo $calcObj->sum() . "<br>";

echo $calcObj->subtraction() . "<br>";

echo $calcObj->multiplication() . "<br>";

echo $calcObj->division() . "<br>";

$calcObj->sqrtFnc();

echo $calcObj->percent() . "<br>";

$calcObj->squared();

$calcObj->fraction();

$calcObj->ms();

$calcObj->mPlus();

$calcObj->mMinus();

$calcObj->mc();

?>