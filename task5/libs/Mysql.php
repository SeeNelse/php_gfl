<?php

class Mysql implements iWorkData
{
  private $addData;
  private $dbConnect;
  private $error;

  public function __construct() 
  {
    
    try {
      $this->dbConnect = new PDO('mysql:host='.MYSQL_SERVER.';dbname='.MYSQL_DB, MYSQL_USER, MYSQL_PASS);
    } catch (PDOException $e) {
      echo $this->error = $e->getMessage();
      die();
    }
   
    $this->addData = [];
  }

  public function saveData($key, $val)
  {
    if (is_string($key) && is_numeric($val) || is_string($key) && is_string($val)) 
    {
      $key = trim($key);
      is_string($val) ? $val = trim($val) : false;
      if (!$this->getData($key)) {
        try {
          $stmt = $this->dbConnect->prepare("INSERT INTO ".MYSQL_TABLE." (SqlVariable,	SqlValue) VALUES ('$key', '$val')");
          $stmt->execute();
          return true;
        } catch (PDOException $e) {
          echo $this->error = $e->getMessage();
          return false;
        }
      }
    }
    return false;
  }

  public function getData($key)
  {
    if (is_string($key)) 
    {
      $key = trim($key);
      try {
        $querySend = $this->dbConnect->prepare("SELECT SqlValue FROM ".MYSQL_TABLE." WHERE SqlVariable='$key'");
        $querySend->execute();
        $arrTemp = $querySend->fetchAll(PDO::FETCH_ASSOC);
        return $arrTemp[0]['SqlValue'];
      } catch (PDOException $e) {
        echo $this->error = $e->getMessage();
        return false;
      }
    }
    return false;
  }

  public function deleteData($key)
  {
    if (is_string($key)) 
    {
      $key = trim($key);
      if ($this->getData($key)) {
        try {
          $querySend = $this->dbConnect->prepare("DELETE FROM ".MYSQL_TABLE." WHERE SqlVariable='$key'");
          $querySend->execute();
          return true;
        } catch (PDOException $e) {
          echo $this->error = $e->getMessage();
          return false;
        }
      }
    }
    return false;
  }
}


?>