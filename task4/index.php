<?php 

include 'config.php';
include 'libs/Sql.php';
include 'libs/Mysql.php';
include 'libs/Postgresql.php';

$sqlClass = new Sql();
$sqlClass->setField(' name');
$sqlClass->setField('*');
$sqlClass->setField('name2');
$sqlClass->setField('name3, name5, ');

$sqlClass->setTable('table ');

$sqlClass->setWhere(' where');

var_dump($sqlClass->selectDB());


?>