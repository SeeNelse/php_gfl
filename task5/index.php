<?php

include 'config.php';
include 'libs/iWorkData.php';
include 'libs/Json.php';
// include 'libs/Ini.php';
// include 'libs/Cookies.php';
// include 'libs/Session.php';
// include 'libs/Mysql.php';
include 'functions.php';


$obj = new Json();
// addFunc($obj, 'key1', 123);
// addFunc($obj, 'key2', 'VAR1');
// addFunc($obj, 'key2', [1,2,3,4]);
// addFunc($obj, 'key3', 'VAR2');
// addFunc($obj, 'key4', 'VAR3');
// addFunc($obj, 'key4', 'VAR3а');
// addFunc($obj, 'key5', 'VAR4');
// addFunc($obj, 'key6', 'VAR4');

getFunc($obj, 'key1');


?>