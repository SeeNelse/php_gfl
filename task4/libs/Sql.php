<?php

Class Sql {

  private $fieldSql;
  private $tableSql;
  private $whereSql;
  private $fromSql;
  private $limitSql;

  public function __construct() 
  {
    $this->fieldSql = [];
    $this->tableSql = [];
    $this->whereSql = [];
    $this->fromSql = '';
    $this->limitSql = 1;
  }

  //setters
  public function setField($field) 
  {
    $field = trim($field);
    if ($field != '*' && $field)
    {
      array_push($this->fieldSql, $field);
      return true;
    }
    return false;
  }

  public function setTable($table) 
  {
    $table = trim($table);
    if ($table != '*' && $table)
    {
      array_push($this->tableSql, $table);
      return true;
    }
    return false;
  }

  public function setWhere($where) 
  {
    $where = trim($where);
    if ($where != '*' && $where)
    {
      array_push($this->whereSql, $where);
      return true;
    }
    return false;
  }

  public function setLimit($limit) 
  {
    $where = trim($where);
    if ($where != '*' && $where)
    {
      array_push($this->whereSql, $where);
      return true;
    }
    return false;
  }

  //getters
  public function getField() 
  {
    if ($this->fieldSql) 
    {
      return $this->fieldSql;
    }
    return false;
  }

  public function getTable() 
  {
    if ($this->tableSql) 
    {
      return $this->tableSql;
    }
    return false;
  }

  public function getWhere() 
  {
    if ($this->whereSql) 
    {
      return $this->whereSql;
    }
    return false;
  }

  public function getLimit() 
  {
    if ($this->limitSql) 
    {
      return $this->limitSql;
    }
    return false;
  }

  public function selectDB () //  "SELECT ".$this->getField()." FROM ".$this->getTable()." WHERE ".$this->getWhere()." Limit ".$this->getLimit()
  {
    return;
  }

  public function insertDB () 
  {

  }

  public function deleteDB () 
  {

  }

  public function updateDB () 
  {

  }

}

?>