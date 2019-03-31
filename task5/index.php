<?php

include 'config.php';
include 'libs/iWorkData.php';
include 'libs/Json.php';
include 'libs/Ini.php';
include 'libs/Cookies.php';
include 'libs/Session.php';
include 'libs/Mysql.php';


function addFunc(iWorkData $object, $key, $val)
{
  return $object->saveData($key, $val);
}

function getFunc(iWorkData $object, $key)
{
  return $object->getData($key);
}

function deleteFunc(iWorkData $object, $key)
{
  return $object->deleteData($key);
}


$jsonObj = new Json();
// addFunc($jsonObj, 'key1', 'VAR1');
// getFunc($jsonObj, 'key1');
// deleteFunc($jsonObj, 'key2');


$iniObj = new Ini();
// addFunc($iniObj, 'key1', 123);
// getFunc($iniObj, 'key1');
// deleteFunc($iniObj, 'key1');


$cookObj = new Cookies();
// addFunc($cookObj, 'key1', 'val1');
// getFunc($cookObj, 'key1');
// deleteFunc($cookObj, 'key1');
// echo '<br><br><pre>'; echo var_export($_COOKIE); echo'</pre>';


$sessionObj = new Session();
// addFunc($sessionObj, 'key1', 'val1');
// getFunc($sessionObj, 'key1');
// deleteFunc($sessionObj, 'key1');
// echo '<pre>'; echo var_export($_SESSION); echo'</pre>';




$mysqlObj = new Mysql();
// addFunc($mysqlObj, 'key1', 'val1');
// getFunc($mysqlObj, 'key1');
// deleteFunc($mysqlObj, 'key3');

include 'templates/index_tmpl.php';

?>
