<?php

class File 
{

  private $fileDataWrite;
  private $fileDataRead;

  public function __construct()
  {
    $this->fileDataWrite = file(FILE_PATH_WRITE, FILE_IGNORE_NEW_LINES);
    $this->fileDataRead = file(FILE_PATH_READ, FILE_IGNORE_NEW_LINES);
  }

  //setters
  public function setRow($row, $text) 
  {
    if (is_numeric($row) && $this->permCheck() && $row > 0 && is_string($text)) {
      if (count($this->fileDataRead) < $row)
      {
        return false;
      }
      $row--;
      $this->fileDataRead[$row] = $text;
      echo '<pre>'; echo var_export($this->fileDataRead[$row]); echo'</pre>';
      forEach($this->fileDataRead as $item) {
        $stringTemp .= $item . "\n";
      }
      file_put_contents(FILE_PATH_WRITE, trim($stringTemp));
      return true;
    }
    return false;
  }

  public function setSymbol($row, $symb, $letter) 
  {
    if (is_numeric($row) && is_numeric($symb) && $this->permCheck() && $row > 0 && $symb > 0 && is_string($letter) && mb_strlen($letter) == 1) {
      if (count($this->fileDataRead) < $row)
      {
        return false;
      }
      $row--; $symb--;
      for ($r = 0; $r < count($this->fileDataRead); $r++ ) 
      {
        for ($s = 0; $s < mb_strlen($this->fileDataRead[$r]); $s++ ) 
        {
          if ($row == $r && $symb == $s) {
            $result .= $letter;
          } else {
            $result .= $this->getSymbol($r+1,$s+1);
          }
        }
        $result .= "\r\n";
      }
      file_put_contents(FILE_PATH_WRITE, trim($result));
      return true;
    }
    return false;
  }

  //getters
  public function getRow($row) 
  {
    if (is_numeric($row) && $this->permCheck() && $row > 0)
    {
      $row--;
      if ($this->fileDataRead[$row]) {
        return $this->fileDataRead[$row];
      } else {
        return false;
      }
    }
    return false;
  }

  public function getSymbol($row, $symb) 
  {
    if (is_numeric($row) && is_numeric($symb) && $this->permCheck() && $row > 0 && $symb > 0)
    {
      $row--;
      $symb--;
      if ($this->fileDataRead[$row][$symb]) {
        return $this->fileDataRead[$row][$symb];
      } else {
        return false;
      }
    }
    return false;
  }

  //methods
  public function filePrint($via) 
  {
    if ($via == 'row')
    {
      for ($r = 0; $r <= count($this->fileDataWrite); $r++ ) {
        $result .= $this->getRow($r+1) . "\r\n";
      }
      return nl2br(trim($result));
    } else if ($via == 'symb') {
      for ($r = 0; $r < count($this->fileDataWrite); $r++ ) 
      {
        for ($s = 0; $s < mb_strlen($this->fileDataWrite[$r]); $s++ ) 
        {
          $result .= $this->getSymbol($r+1,$s+1);
        }
        $result .= "\r\n";
      }
      return nl2br(trim($result));
    }
    return false;
  }

  public function permCheck() 
  {
    if (file_exists(FILE_PATH_WRITE) && file_exists(FILE_PATH_READ))
    {
      $dirPermWtire = substr(decoct(fileperms(FILE_PATH_WRITE)), -3);
      $dirPermRead = substr(decoct(fileperms(FILE_PATH_READ)), -3);
      if (intval($dirPermWtire[2]) < 5 && intval($dirPermRead[2]) < 5) {
        return false;
      } else {
        return true;
      }
    }
    return false;
  }

}