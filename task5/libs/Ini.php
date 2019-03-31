<?php

class Ini implements iWorkData
{
  private $addData;

  public function __construct() 
  {
    $this->addData = [];
  }

  public function saveData($key, $val)
  {
    if (is_string($key) && is_numeric($val) || is_string($key) && is_string($val)) 
    {
      $key = trim($key);
      is_string($val) ? $val = trim($val) : false;
      
      $tempArray = parse_ini_file(INI_FILE_PATH);
      forEach($tempArray as $var => $val) 
      {
        if ($var == $key) 
        {
          return false;
        }
      }
      $tempVar = "$key = $val\n";
      file_put_contents(INI_FILE_PATH, $tempVar, FILE_APPEND);
      return true;
    }
    return false;
  }

  public function getData($key)
  {
    if (is_string($key) && parse_ini_file(INI_FILE_PATH)) 
    {
      $key = trim($key);
      $tempArray = parse_ini_file(INI_FILE_PATH);
      if ($tempArray[$key]) 
      {
        return $tempArray[$key];
      }
      return false;
    }
    return false;
  }

  public function deleteData($key)
  {
    if (is_string($key) && parse_ini_file(INI_FILE_PATH)) 
    {
      $key = trim($key);
      $tempArray = parse_ini_file(INI_FILE_PATH);
      ar($tempArray);
      forEach($tempArray as $var => $val) 
      {
        if ($var == $key) {
          unset($tempArray[$var]);
          forEach($tempArray as $var2 => $val2) 
          {
            $tempIniData .= "$var2 = $val2\n";
          }
          file_put_contents(INI_FILE_PATH, $tempIniData);
          return true;
        }
      }
      return false;
    }
    return false;
  }
}


?>