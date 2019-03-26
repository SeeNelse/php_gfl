<?php

class Calc 
{
  private $numA;
  private $numB;
  private $msA;
  private $msB;
  private $msATemp;
  private $msBTemp;

  private $sumResult;
  private $subtractionResult;
  private $multiplicationResult;
  private $divisionResult;


  

  public function __conctruct ()
  {

    $this->numA = null;
    $this->numB = null;
    $this->msA = null;
    $this->msB = null;
    $this->msATemp = null;
    $this->msBTemp = null;

    $this->sumResult = null;
    $this->subtractionResult = null;
    $this->multiplicationResult = null;
    $this->divisionResult = null;

  }

  function setNumA ($numberA)
  {
    if (is_numeric($numberA))
    {
      return $this->numA = $numberA;
    } else {
      echo "Number 1($numberA) is not a number" . '<br>';
      return false;
    }
  }

  function setNumB ($numberB)
  {
    if (is_numeric($numberB))
    {
      return $this->numB = $numberB;
    } else {
      echo "Number 2($numberB) is not a number" . '<br>';
      return false;
    }
  }

  function sum ()
  {
    if ($this->numA && $this->numB)
    {
      $this->sumResult = $this->numA + $this->numB;
      return $this->sumResult;
    } else {
      echo "Error!" . '<br>';
      return false;
    }
  }

  function subtraction ()
  {
    if ($this->numA && $this->numB)
    {
      $this->subtractionResult = $this->numA - $this->numB;
      return $this->subtractionResult;
    } else {
      echo "Error!" . '<br>';
      return false;
    }
  }

  function multiplication ()
  {
    if ($this->numA && $this->numB)
    {
      $this->multiplicationResult = $this->numA * $this->numB;
      return $this->multiplicationResult;
    } else {
      echo "Error!" . '<br>';
      return false;
    }
  }

  function division ()
  {
    if ($this->numA && $this->numB)
    {
      $this->divisionResult = $this->numA / $this->numB;
      return $this->divisionResult;
    } else {
      echo "Error!" . '<br>';
      return false;
    }
  }

  function sqrtFnc ()
  {
    if ($this->numA && $this->numB)
    {
      echo "square root of the number $this->numA = " . sqrt($this->numA) . '<br>';
      echo "square root of the number $this->numB = " . sqrt($this->numB) . '<br>';
      return true;
    } else {
      echo "Error!" . '<br>';
      return false;
    }
  }

  function percent () 
  {
    if ($this->numA && $this->numB)
    {
      return ($this->numA / 100) * $this->numB;
    } else {
      echo "Error!" . '<br>';
      return false;
    }
  }

  function squared () 
  {
    if ($this->numA && $this->numB)
    {
      echo "$this->numA squared = " . $this->numA * $this->numA . '<br>';
      echo "$this->numB squared = " . $this->numB * $this->numB . '<br>';
      return true;
    } else {
      echo "Error!" . '<br>';
      return false;
    }
  }

  function fraction () 
  {
    if ($this->numA && $this->numB)
    {
      echo "$this->numA fraction = " . 1 / $this->numA . '<br>';
      echo "$this->numB fraction = " . 1 / $this->numB . '<br>';
      return true;
    } else {
      echo "Error!" . '<br>';
      return false;
    }
  }

  function ms ()
  {
    if ($this->numA && $this->numB)
    {
      $this->msA = $this->numA;
      $this->msB = $this->numB;
      echo "$this->numA saved" . '<br>';
      echo "$this->numB saved" . '<br>';
      return true;
    } else {
      echo "Error!" . '<br>';
      return false;
    }
  }

  function mPlus ()
  {
    if ($this->msA && $this->msB) {
      if ($this->msATemp && $this->msBTemp) 
      {
        $this->msATemp = $this->msATemp + $this->msA;
        $this->msBTemp = $this->msBTemp + $this->msB;
        echo "m+(msA) = $this->msATemp" . '<br>';
        echo "m+(msB) = $this->msBTemp" . '<br>';
        return true;
      }
      $this->msATemp = $this->msA + $this->msA;
      $this->msBTemp = $this->msB + $this->msB;
      echo "m+(msA) = $this->msATemp" . '<br>';
      echo "m+(msB) = $this->msBTemp" . '<br>';
      return true;
    } else {
      echo "Error! Memory cells is empty" . '<br>';
      return false;
    }
  }

  function mMinus ()
  {
    if ($this->msA && $this->msB) {
      if ($this->msATemp && $this->msBTemp) 
      {
        $this->msATemp = $this->msATemp - $this->msA;
        $this->msBTemp = $this->msBTemp - $this->msB;
        echo "m-(msA) = $this->msATemp" . '<br>';
        echo "m-(msB) = $this->msBTemp" . '<br>';
        return true;
      }
      $this->msATemp = $this->msA - $this->msA;
      $this->msBTemp = $this->msB - $this->msB;
      echo "m-(msA) = $this->msATemp" . '<br>';
      echo "m-(msB) = $this->msBTemp" . '<br>';
      return true;
    } else {
      echo "Error! Memory cells is empty" . '<br>';
      return false;
    }
  }

  function mc () {
    if ($this->msA && $this->msB) {
      $this->msA = null;
      $this->msB = null;
      $this->msATemp = null;
      $this->msBTemp = null;
      echo "Memory cells are freed" . '<br>';
      return true;
    } else {
      echo "Error! Memory cells is empty" . '<br>';
      return false;
    }
  }
  
}

?>