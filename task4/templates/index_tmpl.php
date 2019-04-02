<?php 

// $sqlClass = new Mysql();
// $sqlClass->setTable('task4');


//select
// $sqlClass->setField('Name');
// $sqlClass->setWhere("Name='Vladislav'"); 
// $sqlClass->setLimit("10"); 
// echo '<pre>'; echo var_export($sqlClass->selectDB()); echo'</pre>';
// echo '<pre>'; echo var_export($sqlClass->connect()); echo'</pre>';


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
$psqlClass = new Postgresql();
$psqlClass->setTable('task4');

//select
$psqlClass->setField('descr');
$psqlClass->setWhere("name='Vladislav1'"); 
$psqlClass->setLimit("10"); 
$psqlClass->selectDB();
$psqlClass->connect();


// insert
// $psqlClass->setInsert('name');
// $psqlClass->setInsert('descr');
// $psqlClass->setValues('Vladislav1');
// $psqlClass->setValues('123fff');
// $psqlClass->insertDB();
// $psqlClass->connect();


//delete
// $psqlClass->setWhere("Name='Vladislav'"); 
// $psqlClass->deleteDB();
// $psqlClass->connect();


//update
// $psqlClass->setUpdSet("Descr='Привет'");
// $psqlClass->setWhere("Name='Vladislav1'");
// $psqlClass->updateDB();
// $psqlClass->connect();


// SELECT 'Descr' FROM task4 WHERE Name='Vladislav' Limit 10;

// INSERT INTO task4 (Name,Descr) VALUES ('Vladislav','Описание');

// DELETE FROM task4 WHERE Name='Vlad';

// UPDATE task4 SET Descr='Привет' WHERE Name='Vladislav'