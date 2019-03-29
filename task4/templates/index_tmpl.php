<?php 

// $sqlClass = new Sql();
$sqlClass = new Mysql();
$sqlClass->setField('Vasya');
// $sqlClass->setField('name3, name5, ');

// $sqlClass->setInsert('col1');
// $sqlClass->setInsert('col2');

// $sqlClass->setValues('val1');
// $sqlClass->setValues('val2');

$sqlClass->setTable('task4');

$sqlClass->setWhere('Descr'); 

// $sqlClass->setUpdSet('valueUPD'); 

// $sqlClass->selectDB();


echo var_dump($sqlClass->selectDB()) . "<br><br><br>";
// echo var_dump($sqlClass->insertDB()) . "<br><br><br>";
// echo var_dump($sqlClass->deleteDB()) . "<br><br><br>";
// echo var_dump($sqlClass->updateDB()) . "<br><br><br>";

$sqlClass->sendQuery();
var_dump($sqlClass->connect());

// var_dump($sqlClass);

?>


  <!-- //соединение с базой данных при помощи функции mysql_connect()
  //в аргументах функции укажите имя сервера, логин и пароль. 
  ! $db = mysql_connect("сервер","логин","пароль");
  //функция mysql_select_db() выбирает текущую 
  //базу данных с именем "komtet_test"
  ! mysql_select_db("komtet_test" ,$db);
  //функция mysql_query() выполняет запрос на выборку данных 
  //результирующий набор данных хранится в переменной $sql
  ! $sql = mysql_query("SELECT * FROM links" ,$db);
  //после получения данных начнём формирование HTML-таблицы 
  ! echo ("<table border ='1'>");
  //выводим строку заголовков 
  ! echo ("<tr><td>Адрес</td><td>Описание</td></tr>");
  //функция mysql_fetch_row() извлекает одну строку из результата 
  //и сохраняет её в массиве $tablerows
  ! while ($tablerows = mysql_fetch_row($sql))
  {
  //теперь в цикле для каждой полученной строки сделаем вывод 
  //$tablerows[1] соответствует полю "url" 
  //$tablerows[2] соответствует полю "description" 
  echo("<tr><td><a href="/info/tech/$tablerows[1]">$tablerows[1]
        </a></td><td>$tablerows[2]</td></tr> ");
  }
  ! echo "</table>";
  //закрытие соединение (рекомендуется)
  ! mysql_close($db); -->