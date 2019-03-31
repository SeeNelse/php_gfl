<?php

class Cookies implements iWorkData
{

  public function saveData($key, $val) 
  {
    if (is_string($key) && is_numeric($val) || is_string($key) && is_string($val)) 
    {
      $key = trim($key);
      is_string($val) ? $val = trim($val) : false;

      setcookie($key, $val, time()+120);
      return true;
    }
    return false;
  }

  public function getData($key) 
  {
    if (is_string($key) && $_COOKIE[$key])
    {
      $key = trim($key);
      return $_COOKIE[$key];
    }
    return false;
  }

  public function deleteData($key) 
  {
    if (is_string($key) && $_COOKIE[$key])
    {
      $key = trim($key);
      unset($_COOKIE[$key]);
      return true;
    }
    return false;
  }

}

?>