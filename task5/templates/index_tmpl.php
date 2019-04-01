<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Task 5</title>
</head>
<body>
  <div>
    <h3>Json result:</h3>
    <p><?= $jsonObjGet; ?><br><?= $jsonObjDel; ?></p>
  </div>
  <div>
    <h3>Ini result:</h3>
    <p><?= $iniObjGet; ?><br><?= $iniObjDel; ?></p>
  </div>
  <div>
    <h3>Cookies result:</h3>
    <p><?= $cookiesObjGet; ?><br><?= $cookiesObjDel; ?></p>
  </div>
  <div>
    <h3>Session result:</h3>
    <p><?= $sessionObjGet; ?><br><?= $sessionObjDel; ?></p>
  </div>
  <div>
    <h3>Mysql result:</h3>
    <p><?= $mysqlObjGet; ?><br><?= $mysqlObjDel; ?></p>
  </div>
</body>
</html>