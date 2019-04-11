<?php

class Json implements iWorkData
{
  private $addData;

  public function __construct() 
  {
    $this->addData = (array)json_decode(file_get_contents(JSON_FILE_PATH));
  }

  public function saveData($key, $val)
  {
    if (is_string($key) && is_numeric($val) || is_string($key) && is_string($val)) 
    {
      $key = trim($key);
      is_string($val) ? $val = trim($val) : false;
      $this->addData += array($key => $val);

      file_put_contents(JSON_FILE_PATH, json_encode($this->addData), JSON_FORCE_OBJECT);
      return true;
    }
    return false;
  }

  public function getData($key)
  {
    if (is_string($key) && file_get_contents(JSON_FILE_PATH)) 
    {
      $key = trim($key);
      $jsonObj = file_get_contents(JSON_FILE_PATH);
      $tempArray = json_decode($jsonObj, true);
      if ($tempArray[$key]) {
        return $tempArray[$key];
      }
      return false;
    }
    return false;
  }

  public function deleteData($key)
  {
    if (is_string($key) && file_get_contents(JSON_FILE_PATH)) 
    {
      $key = trim($key);
      $jsonObj = file_get_contents(JSON_FILE_PATH);
      $tempArray = json_decode($jsonObj, true);
      forEach($tempArray as $var => $val) 
      {
        if ($var == $key) 
        {
          unset($tempArray[$var]);
          file_put_contents(JSON_FILE_PATH, json_encode($tempArray));
          return true;
        }
      }
      return false;
    }
    return false;
  }
}


?>