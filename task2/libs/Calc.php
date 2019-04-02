<?php

class Calc 
{
  private $numA;
  private $numB;
  private $ms;
  private $msTemp;
  
  public function __conctruct ()
  {

    $this->numA = null;
    $this->numB = null;

    $this->ms = null;

    $this->msTemp = null;

  }

  function setNumA ($numberA)
  {
    if (is_numeric($numberA))
    {
      return $this->numA = $numberA;
    } else {
      return false;
    }
  }

  function setNumB ($numberB)
  {
    if (is_numeric($numberB))
    {
      return $this->numB = $numberB;
    } else {
      return false;
    }
  }

  function sum ()
  {
    if ($this->numA && $this->numB)
    {
      return $this->numA + $this->numB;
    } else {
      return false;
    }
  }

  function subtraction ()
  {
    if ($this->numA && $this->numB)
    {
      return $this->numA - $this->numB;
    } else {
      return false;
    }
  }

  function multiplication ()
  {
    if ($this->numA && $this->numB)
    {
      return $this->numA * $this->numB;
    } else {
      return false;
    }
  }

  function division ()
  {
    if ($this->numA && $this->numB)
    {
      return $this->numA / $this->numB;
    } else {
      return false;
    }
  }

  function sqrtFnc ()
  {
    if ($this->numA)
    {
      return round(sqrt($this->numA), 2);
    } else {
      return false;
    }
  }

  function percent () 
  {
    if ($this->numA && $this->numB)
    {
      return ($this->numA / 100) * $this->numB;
    } else {
      return false;
    }
  }

  function squared () 
  {
    if ($this->numA)
    {
      return $this->numA * $this->numA;
    } else {
      return false;
    }
  }

  function fraction () 
  {
    if ($this->numA && $this->numB)
    {
      return round((1 / $this->numA), 2);
    } else {
      return false;
    }
  }

  function ms ()
  {
    if ($this->numA)
    {
      return $this->ms = $this->numA;
    } else {
      return false;
    }
  }

  function mPlus ()
  {
    if ($this->ms) {
      if ($this->msTemp) 
      {
        $this->msTemp = $this->msTemp + $this->ms;
        return $this->msTemp;
      }
      $this->msTemp = $this->ms + $this->ms;
      return $this->msTemp;
    } else {
      return false;
    }
  }

  function mMinus ()
  {
    if ($this->ms) {
      if ($this->msTemp) 
      {
        $this->msTemp = $this->msTemp - $this->ms;
        return $this->msTemp;
      }
      $this->msTemp = $this->ms - $this->ms;
      return $this->msTemp;
    } else {
      return false;
    }
  }

  function mc () {
    if ($this->ms) {
      $this->ms = null;
      return 'Memory clear';
    } else {
      return false;
    }
  }
  
}

?>