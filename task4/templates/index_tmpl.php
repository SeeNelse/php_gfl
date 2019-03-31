<?php 

$sqlClass = new Mysql();
$sqlClass->setTable('task4');

//select
$sqlClass->setTable('task4');
$sqlClass->setField('Name');
$sqlClass->setWhere("Name='Vladislav'"); 
$sqlClass->setLimit("10"); 
echo '<pre>'; echo var_export($sqlClass->selectDB()); echo'</pre>';
echo '<pre>'; echo var_export($sqlClass->connect()); echo'</pre>';


// insert
// $sqlClass->setInsert('Name');
// $sqlClass->setInsert('Descr');
// $sqlClass->setValues('Vladislav');
// $sqlClass->setValues('Описание');
// $sqlClass->insertDB();
// $sqlClass->connect();


//delete
// $sqlClass->setWhere("Name='Vlad'"); 
// $sqlClass->deleteDB();
// $sqlClass->connect();


//update
// $sqlClass->setUpdSet("Descr='Привет'");
// $sqlClass->setWhere("Name='Vladislav'");
// $sqlClass->updateDB();
// $sqlClass->connect();




// postgresql
// $psqlClass = new Postgresql();
// $psqlClass->setTable('task4');


// insert
// $psqlClass->setInsert('Name');
// $psqlClass->setInsert('Descr');
// $psqlClass->setValues('Vladislav');
// $psqlClass->setValues('Описание');
// $psqlClass->insertDB();
// $psqlClass->connect();







// SELECT 'Descr' FROM task4 WHERE Name='Vladislav' Limit 10;

// INSERT INTO task4 (Name,Descr) VALUES ('Vladislav','Описание');

// DELETE FROM task4 WHERE Name='Vlad';

// UPDATE task4 SET Descr='Привет' WHERE Name='Vladislav'