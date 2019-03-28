<?php


$calcObj = new Calc();

$calcObj->setNumA("10");
$calcObj->setNumB(5);


echo 'sum: ' . $calcObj->sum() . "<br>";

echo 'subtraction: ' . $calcObj->subtraction() . "<br>";

echo 'multiplication: ' . $calcObj->multiplication() . "<br>";

echo 'division: ' . $calcObj->division() . "<br>";

echo 'sqrtFnc: ' . $calcObj->sqrtFnc(). "<br>";

echo 'percent: ' . $calcObj->percent() . "<br>";

echo 'squared: ' . $calcObj->squared(). "<br>";

echo 'fraction: ' . $calcObj->fraction(). "<br>";

echo 'ms: ' . $calcObj->ms(). "<br>";

echo 'mPlus: ' . $calcObj->mPlus(). "<br>";

echo 'mMinus: ' . $calcObj->mMinus(). "<br>";

echo 'mc: ' . $calcObj->mc(). "<br>";


?>