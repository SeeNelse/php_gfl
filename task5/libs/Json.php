<?php

class Json implements iWorkData
{
  private $addData;

  public function __construct() 
  {
    $this->addData = [];
  }

  public function saveData($key, $val)
  {
    if (is_string($key) && is_numeric($val) || is_string($key) && is_string($val)) {
      $this->addData += array($key => $val);
      file_put_contents(JSON_FILE_PATH, json_encode($this->addData), JSON_FORCE_OBJECT);
      return true;
    }
    return false;
  }

  public function getData($key)
  {
    if (is_string($key)) {
      $tempArray = file_get_contents(JSON_FILE_PATH);
      $tempVar = var_dump(json_decode($tempArray));
      echo $tempVar[$key];
    }
    return false;
  }

  public function deleteData($key)
  {

  }
}


?>