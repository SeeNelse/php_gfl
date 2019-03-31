<?php

class Session implements iWorkData
{

  public function saveData($key, $val) 
  {
    if (is_string($key) && is_numeric($val) || is_string($key) && is_string($val)) 
    {
      $key = trim($key);
      is_string($val) ? $val = trim($val) : false;
      session_start();
      $_SESSION[$key] = $val;
      return true;
    }
    return false;
  }

  public function getData($key) 
  {
    if (is_string($key) && $_SESSION[$key])
    {
      $key = trim($key);
      session_start();
      return $_SESSION[$key];
    }
    return false;
  }

  public function deleteData($key) 
  {
    if (is_string($key) && $_SESSION[$key])
    {
      $key = trim($key);
      session_start();
      unset($_SESSION[$key]);
      return true;
    }
    return false;
  }

}

?>
