<?php

class File 
{

  private $fileData;

  public function __construct()
  {
    $this->fileData = file(FILE_PATH, FILE_IGNORE_NEW_LINES);
  }

  //setters
  public function setRow($row, $text) 
  {
    if (is_numeric($row) && $this->permCheck() && $row > 0 && is_string($text)) {
      $row--;
      $this->fileData[$row] = $text;
      forEach($this->fileData as $item) {
        $stringTemp .= $item . "\n";
      }
      file_put_contents(FILE_PATH, trim($stringTemp));
      return true;
    }
    return false;
  }

  public function setSymbol($row, $symb, $letter) 
  {
    if (is_numeric($row) && is_numeric($symb) && $this->permCheck()  && $row > 0 && $symb > 0 && is_string($letter) && mb_strlen($letter) == 1) {
      $row--;
      $symb--;
      for ($r = 0; $r < count($this->fileData); $r++ ) 
      {
        for ($s = 0; $s < mb_strlen($this->fileData[$r]); $s++ ) 
        {
          if ($row == $r && $symb == $s) {
            $result .= $letter;
          } else {
            $result .= $this->getSymbol($r+1,$s+1);
          }
        }
        $result .= "\r\n";
      }
      file_put_contents(FILE_PATH, trim($result));
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
      if ($this->fileData[$row]) {
        return $this->fileData[$row];
      } else {
        return false;
      }
    }
  }

  public function getSymbol($row, $symb) 
  {
    if (is_numeric($row) && is_numeric($symb) && $this->permCheck() && $row > 0 && $symb > 0)
    {
      $row--;
      $symb--;
      if ($this->fileData[$row][$symb]) {
        return $this->fileData[$row][$symb];
      } else {
        return false;
      }
    }
  }

  public function getFileDataArr() 
  {
    return $this->fileData;
  }

  //methods
  public function filePrint($via) 
  {
    if ($via == 'row')
    {
      for ($r = 0; $r <= count($this->fileData); $r++ ) {
        $result .= $this->getRow($r) . "\r\n";
      }
      return nl2br(trim($result));
    } else if ($via == 'symb') {
      for ($r = 0; $r < count($this->fileData); $r++ ) 
      {
        for ($s = 0; $s < mb_strlen($this->fileData[$r]); $s++ ) 
        {
          $result .= $this->getSymbol($r+1,$s+1);
        }
        $result .= "\r\n";
      }
      return nl2br(trim($result));
    }
    return false;
  }

  private function permCheck() 
  { // permission check
    if (file_exists(FILE_PATH))
    {
      $dirPerm = substr(decoct(fileperms(FILE_PATH)), -3);
      if (intval($dirPerm[2]) < 5) {
        return false;
      } else {
        return true;
      }
    }
    return false;
  }

}