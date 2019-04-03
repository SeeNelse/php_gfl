<?php 

include 'config.php';
include 'libs/Sql.php';
include 'libs/Mysql.php';
include 'libs/Postgresql.php';

// MYSQL

//Insert Mysql
$mysqlInsert = new Mysql();
$mysqlInsert->setTable('task4');
$mysqlInsert->setInsert('Name');
$mysqlInsert->setInsert('Descr');
$mysqlInsert->setValues('Vladislav');
$mysqlInsert->setValues('Работает с mysql');
$mysqlInsertQuery = $mysqlInsert->insertDB();
$mysqlInsert->connect();
if ($mysqlInsert->connect())
{
  $mysqlInsertResult = 'Request sent successfully';
}


// Select Mysql
$mysqlSelect = new Mysql();
$mysqlSelect->setTable('task4');
$mysqlSelect->setField('Descr');
$mysqlSelect->setWhere("Name='Vladislav'"); 
$mysqlSelect->setLimit("1"); 
$mysqlSelectQuery = $mysqlSelect->selectDB();
$mysqlSelectResult = $mysqlSelect->connect();
if (!$mysqlSelectResult)
{
  $mysqlSelectResult = "Array is empty";
}


//Update Mysql
$mysqlUpdate = new Mysql();
$mysqlUpdate->setTable('task4');
$mysqlUpdate->setUpdSet("Descr='Другой текст'");
$mysqlUpdate->setWhere("Name='Vladislav'");
$mysqlUpdateQuery = $mysqlUpdate->updateDB();
if ($mysqlUpdate->connect())
{
  $mysqlUpdateResult = 'Request sent successfully';
}

// Select update
$mysqlSelectUpdate = new Mysql();
$mysqlSelectUpdate->setTable('task4');
$mysqlSelectUpdate->setField('Descr');
$mysqlSelectUpdate->setWhere("Name='Vladislav'"); 
$mysqlSelectUpdate->setLimit("1"); 
$mysqlSelectUpdateQuery = $mysqlSelectUpdate->selectDB();
$mysqlSelectUpdateResult = $mysqlSelectUpdate->connect();
if (!$mysqlSelectUpdateResult)
{
  $mysqlSelectUpdateResult = "Array is empty";
}


//delete
$mysqlDelete = new Mysql();
$mysqlDelete->setTable('task4');
$mysqlDelete->setWhere("Name='Vladislav'"); 
$mysqlDeleteQuery = $mysqlDelete->deleteDB();
if ($mysqlDelete->connect())
{
  $mysqlDeleteResult = 'Request sent successfully';
}

// Result select query
$mysqlSelectMysql = new Mysql();
$mysqlSelectMysql->setTable('task4');
$mysqlSelectMysql->setField('Descr');
$mysqlSelectMysql->setWhere("Name='Vladislav'"); 
$mysqlSelectMysql->setLimit("1"); 
$mysqlSelectMysqlQuery = $mysqlSelectMysql->selectDB();
$mysqlSelectMysqlResult = $mysqlSelectMysql->connect();
if (!$mysqlSelectMysqlResult)
{
  $mysqlSelectMysqlResult = "Array is empty";
}



// POSTGRESS


// insert
$psqlClassInsert = new Postgresql();
$psqlClassInsert->setTable('task4');
$psqlClassInsert->setInsert('name');
$psqlClassInsert->setInsert('descr');
$psqlClassInsert->setValues('Vladislav');
$psqlClassInsert->setValues('Работает с postgresql');
$psqlClassInsertQuery = $psqlClassInsert->insertDB();
if($psqlClassInsert->connect())
{
  $psqlClassInsertQueryResult = "Request sent successfully";
}


// //select
$psqlClassSelect = new Postgresql();
$psqlClassSelect->setTable('task4');
$psqlClassSelect->setField('descr');
$psqlClassSelect->setWhere("name='Vladislav'"); 
$psqlClassSelect->setLimit("1"); 
$psqlClassSelectQuery = $psqlClassSelect->selectDB();
$psqlClassSelectResult = $psqlClassSelect->connect();
if (!$psqlClassSelectResult)
{
  $psqlClassSelectResult = "Array is empty";
}


//update
$psqlClassUpdate = new Postgresql();
$psqlClassUpdate->setTable('task4');
$psqlClassUpdate->setUpdSet("Descr='Другой текст'");
$psqlClassUpdate->setWhere("Name='Vladislav'");
$psqlClassUpdateQuery = $psqlClassUpdate->updateDB();
if ($psqlClassUpdate->connect())
{
  $psqlClassUpdateResult = "Request sent successfully";
}

//Select update
$psqlClassSelectUpdate = new Postgresql();
$psqlClassSelectUpdate->setTable('task4');
$psqlClassSelectUpdate->setField('descr');
$psqlClassSelectUpdate->setWhere("name='Vladislav'"); 
$psqlClassSelectUpdate->setLimit("1"); 
$psqlClassSelectUpdateQuery = $psqlClassSelectUpdate->selectDB();
$psqlClassSelectUpdateResult = $psqlClassSelectUpdate->connect();
if (!$psqlClassSelectUpdateResult)
{
  $psqlClassSelectUpdateResult = "Array is empty";
}


//delete
$psqlClassDelete = new Postgresql();
$psqlClassDelete->setTable('task4');
$psqlClassDelete->setWhere("Name='Vladislav'"); 
$psqlClassDeleteQuery = $psqlClassDelete->deleteDB();
if ($psqlClassDelete->connect())
{
  $psqlClassDeleteResult = "Request sent successfully";
}

//Result select query
$psqlClassSelectMysql = new Postgresql();
$psqlClassSelectMysql->setTable('task4');
$psqlClassSelectMysql->setField('descr');
$psqlClassSelectMysql->setWhere("name='Vladislav'"); 
$psqlClassSelectMysql->setLimit("1"); 
$psqlClassSelectMysqlQuery = $psqlClassSelectMysql->selectDB();
$psqlClassSelectMysqlResult = $psqlClassSelectMysql->connect();
if ($psqlClassSelectMysqlResult == null)
{
  $psqlClassSelectMysqlResult = "Array is empty";
}


include 'templates/index_tmpl.php';