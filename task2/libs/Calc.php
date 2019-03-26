<?php

class Calc 
{
  private $numA;
  private $numB;
  private $numSum;
  private $minusSum;

  public function __conctruct ()
  {
    $this->numA = null;
    $this->numB = null;
    $this->numSum = null;
    $this->minusSum = null;

  }

  function setNumA ($numberA)
  {
    if (is_numeric($numberA))
    {
      return $this->numA = $numberA;
    } else {
      echo "Number 1($numberA) is not a number";
      return false;
    }
  }

  function setNumB ($numberB)
  {
    if (is_numeric($numberB))
    {
      return $this->numB = $numberB;
    } else {
      echo "Number 2($numberB) is not a number";
      return false;
    }
  }

  function sum ()
  {
    if ($this->numA && $this->numB){
      $this->numSum = $this->numA + $this->numB;
      echo $this->numSum;
      return true;
    } else {
      echo "Error!";
      return false;
    }
  }

  function minus ()
  {
    if ($this->numA && $this->numB){
      $this->minusSum = $this->numA - $this->numB;
      echo $this->minusSum;
      return true;
    } else {
      echo "Error!";
      return false;
    }
  }
  
}

?>