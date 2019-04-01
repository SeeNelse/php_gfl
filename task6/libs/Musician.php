<?php

class Musician implements iMusician
{

  private $name;
  private $instrument;
  private $type;

  public function __construct() {
    $this->name = '';
    $this->instrument = '';
    $this->type = '';
  }

  public function addInstrument(iInstrument $obj)
  {
    // $this->instrument = (array)$obj['Instrumentname'];
    var_dump((array)$obj["Instrumentname"]);
    return true;
  }

  public function getInstrument()
  {

  }

  public function assingToBand(iBand $nameBand)
  {

  }

  public function getMusicianType()
  {

  }
}


