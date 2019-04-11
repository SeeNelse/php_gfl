<?php

include 'config.php';
include 'function.php';
include 'libs/iWorkData.php';
include 'libs/Json.php';
include 'libs/Ini.php';
include 'libs/Mysql.php';
include 'libs/Cookies.php';
include 'libs/Session.php';

$typeArr = ['json', 'ini', 'cookies', 'session', 'mysql'];
$getArr = [];

forEach($typeArr as $item) {
  ${$item.'Obj'} = new $item();
  addFunc(${$item.'Obj'}, 'key1', 'VAR1');
  ${$item.'ObjGet'} = 'key1 = '.getFunc(${$item.'Obj'}, 'key1');
  if (deleteFunc(${$item.'Obj'}, 'key1')) 
  {
    ${$item.'ObjDel'} = "Variable key 1 delete in $item";
  }
}




include 'templates/index_tmpl.php';

?>
