<?php

class Instrument implements iInstrument
{
  private $name;
  private $category;

  public function __construct() {
    $this->name = '';
    $this->category = '';
  }
  
  public function setName($name) {
    if(is_string($name)) {
      $this->name = trim($name);
      return true;
    }
    return false;
  }

  public function setCategory($category) {
    if(is_string($category)) {
      $this->category = trim($category);
      return true;
    }
    return false;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getCategory() {
    return $this->category;
  }
}

