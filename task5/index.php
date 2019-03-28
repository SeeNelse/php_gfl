<?php
function ar($arr)
{
  static $int=0;
  echo '<pre><b style="background: red;padding: 1px 5px; color: #fff">'.$int.'</b> ';
  var_export($arr);
  echo '</pre>';
  $int++;
}


include 'config.php';
include 'libs/iWorkData.php';
include 'libs/Json.php';
include 'libs/Ini.php';
// include 'libs/Cookies.php';
// include 'libs/Session.php';
// include 'libs/Mysql.php';
include 'functions.php';


$jsonObj = new Json();
// addFunc($jsonObj, 'key13', 123);
// addFunc($jsonObj, 'key2', 'VAR1');
// addFunc($jsonObj, 'key3', 'VAR2');

// var_dump(getFunc($jsonObj, 'key1'));
// var_dump(getFunc($jsonObj, 'key2'));

// var_dump(deleteFunc($jsonObj, 'key3'));


$iniObj = new Ini();
// addFunc($iniObj, 'key1', 123);
// addFunc($iniObj, 'key2', 123);
// addFunc($iniObj, 'key3', 123);
// addFunc($iniObj, 'key4', 123);
// var_dump(getFunc($iniObj, 'key13h'));
// var_dump(deleteFunc($iniObj, 'key2'));



echo '<BR><BR><BR>';
// ar(parse_ini_file(INI_FILE_PATH));
?>