<?php 
function ar($arr)
{
  static $int=0;
  echo '<pre><b style="background: red;padding: 1px 5px; color: #fff">'.$int.'</b> ';
  var_export($arr);
  echo '</pre>';
  $int++;
}

// $sqlClass = new Sql();
// $sqlClass = new Mysql();
// $sqlClass->setField('Descr');
// $sqlClass->setField('name3, name5, ');

// $sqlClass->setInsert('Name');
// $sqlClass->setInsert('Descr');

// $sqlClass->setValues('Vlad11');
// $sqlClass->setValues('Suuup1221');

// $sqlClass->setTable('task4');

// $sqlClass->setUpdSet("Descr='AAAAGAAA'"); 
// $sqlClass->setWhere("Name='Vlad11'"); 
// $sqlClass->setLimit("10"); 

// $sqlClass->selectDB();


// echo var_dump($sqlClass->selectDB()) . "<br><br><br>"; // mysql_fetch_assoc только для него
// echo var_dump($sqlClass->insertDB()) . "<br><br><br>"; // написать проверку возвращения $tableRow = mysql_fetch_assoc($result);
// echo var_dump($sqlClass->deleteDB()) . "<br><br><br>";
// echo var_dump($sqlClass->updateDB()) . "<br><br><br>";

// $sqlClass->sendQuery();
// var_dump($sqlClass->connect());

// var_dump($sqlClass);
