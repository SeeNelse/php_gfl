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
// $sqlClass->setField('Name');
// $sqlClass->setField('Descr');

// $sqlClass->setInsert('Name');
// $sqlClass->setInsert('Descr');

// $sqlClass->setValues('Vlad11');
// $sqlClass->setValues('12345');

// $sqlClass->setTable('task4');

// $sqlClass->setUpdSet("Descr=''"); 
// $sqlClass->setWhere("Descr='12345'"); 
// $sqlClass->setLimit("10"); 

// $sqlClass->selectDB();


// echo var_dump($sqlClass->selectDB()) . "<br><br><br>"; 
// echo var_dump($sqlClass->insertDB()) . "<br><br><br>";
// echo var_dump($sqlClass->deleteDB()) . "<br><br><br>";
// echo var_dump($sqlClass->updateDB()) . "<br><br><br>";


// var_dump($sqlClass->connect());

// var_dump($sqlClass);


// $psqlClass = new Postgresql();

// $psqlClass->setField('Name');

// $psqlClass->setTable('task4');
// $psqlClass->setWhere("'Name'='V'");
// $psqlClass->setLimit("10"); 

// echo var_dump($psqlClass->selectDB()) . "<br><br><br>"; 
// echo var_dump($psqlClass->insertDB()) . "<br><br><br>"; 
// echo var_dump($psqlClass->deleteDB()) . "<br><br><br>";
// echo var_dump($psqlClass->updateDB()) . "<br><br><br>";

// $psqlClass->connect();

// SELECT 'Descr' FROM task4 WHERE 'Name'='V'

// DELETE FROM task4 WHERE 'Name'='V';

