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
include 'libs/Sql.php';
include 'libs/Mysql.php';
include 'libs/Postgresql.php';
include 'templates/index_tmpl.php';

?>