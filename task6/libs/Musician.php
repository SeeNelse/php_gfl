<?php

class Musician implements iMusician
{

  private $name;
  private $instrument;
  private $type;
  private $front;

  public function __construct() {
    $this->name = '';
    $this->instrument = '';
    $this->type = '';
    $this->front = '';

    $this->array = [];
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
      $this->instrument = $obj->getName();
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

  public function getFront()
  {
    if ($this->front)
    {
      return $this->front;
    }
  }
}


