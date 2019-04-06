<?php

class Band implements iBand
{

  private $name;
  private $genre;
  private $members;

  public function __construct() {
    $this->name = '';
    $this->genre = '';
    $this->members = [];
  }

  public function setName($name) {
    if (is_string($this->name))
    {
      $this->name = $name;
      return true;
    }
    return false;
  }

  public function setGenre($genre) {
    if (is_string($this->genre))
    {
      $this->genre = $genre;
      return true;
    }
    return false;
  }

  public function addMusician(iMusician $obj)
  {
    if (is_object($obj))
    {
      array_push($this->members, (array)$obj);
      return true;
    }
    return false;
  }

  public function getName()
  {
    if ($this->name)
    {
      return $this->name;
    }
    return false;
  }

  public function getGenre()
  {
    if ($this->genre)
    {
      return $this->genre;
    }
    return false;
  }

  public function getMusician()
  {
    return $this->members;
  }
}

