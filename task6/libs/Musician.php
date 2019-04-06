<?php

class Musician implements iMusician
{

  public $name;
  public $instrument;
  public $type;
  public $front;

  public function __construct() {
    $this->name = '';
    $this->instrument = '';
    $this->type = '';
    $this->front = '';
  }

  public function setMember($name, $type, $front) {
    if (is_string($name) && is_string($type))
    {
      $this->name = $name;
      $this->type = $type;
      $this->front = $front;
      return true;
    }
    return false;
  }

  public function addInstrument(iInstrument $obj)
  {
    if ($obj) 
    {
      $this->instrument = array_values((array)$obj)[0];
      return true;
    }
    return false;
  }

  public function assingToBand(iBand $nameBand)
  {
    $nameBand->addMusician($this);
  }

  public function getInstrument()
  {
    if ($this->instrument)
    {
      return $this->instrument;
    }
  }

  public function getName()
  {
    if ($this->name)
    {
      return $this->name;
    }
  }

  public function getMusicianType()
  {
    if ($this->type)
    {
      return $this->type;
    }
  }
}


