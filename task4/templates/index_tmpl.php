<?php 

$sqlClass = new Sql();

$sqlClass->setField(' name');
$sqlClass->setField('name3, name5, ');

$sqlClass->setInsert('col1');
$sqlClass->setInsert('col2');

$sqlClass->setValues('val1');
$sqlClass->setValues('val2');

$sqlClass->setTable('table ');

$sqlClass->setWhere(' where'); 

$sqlClass->setUpdSet('valueUPD'); 

echo var_dump($sqlClass->selectDB()) . "<br><br><br>";
echo var_dump($sqlClass->insertDB()) . "<br><br><br>";
echo var_dump($sqlClass->deleteDB()) . "<br><br><br>";
echo var_dump($sqlClass->updateDB()) . "<br><br><br>";

phpinfo();

?>