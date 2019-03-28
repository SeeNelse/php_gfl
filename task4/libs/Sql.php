<?php

Class Sql {

  private $tableSql;

  private $fieldSql;
  private $whereSql;
  private $limitSql;

  // private $

  private $query;

  public function __construct() 
  {
    $this->fieldSql = [];
    $this->tableSql = '';
    $this->whereSql = '';
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
      $this->tableSql = $table;
      return true;
    }
    return false;
  }

  public function setWhere($where) 
  {
    $where = trim($where);
    if ($where != '*' && $where)
    {
      $this->whereSql = $where;
      return true;
    }
    return false;
  }

  public function setLimit($limit) 
  {
    if (is_numeric($limit)) {
      $limit = (int)trim($limit);
      $this->limitSql = $limit;
      return;
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
    return $this->limitSql;
  }

  public function selectDB ()
  {
    if ($this->fieldSql && $this->tableSql && $this->whereSql) 
    {
      return $this->query .= "SELECT ".$this->valueEach($this->fieldSql)." FROM $this->tableSql WHERE $this->whereSql Limit $this->limitSql;";
    }
    return false;
  }

  public function insertDB () 
  {
    if ($this->tableSql)
    {
      // return $this->query .= "INSERT INTO $this->tableSql (".$this->valueEach($this->fieldSql).") VALUES ('$name', '$descr', '$price');";
    }
  }

  public function deleteDB () 
  {

  }

  public function updateDB () 
  {

  }

  private function valueEach($arr) {
    $value = trim(implode(",", $arr), ',');
    return $value;
  }

}

?>