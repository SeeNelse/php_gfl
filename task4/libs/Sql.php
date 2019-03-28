<?php

Class Sql {

  private $tableSql;
  private $whereSql;

  private $fieldSql;
  private $limitSql;

  private $insertSql;

  private $query;
  private $valuesSql;

  private $updSetSql;

  public function __construct() 
  {
    $this->tableSql = '';
    $this->whereSql = '';

    $this->fieldSql = [];
    $this->limitSql = 1;

    $this->insertSql = [];
    $this->valuesSql = [];

    $this->updSetSql = '';
  }

  //setters
  public function setField($field) 
  {
    if ($this->fieldSql = $this->arrayPush($this->fieldSql, $field)) {
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

  public function setInsert($insert)
  {
    if ($this->insertSql = $this->arrayPush($this->insertSql, $insert)) {
      return true;
    }
    return false;
  }

  public function setValues($values)
  {
    if ($this->valuesSql = $this->arrayPush($this->valuesSql, $values)) {
      return true;
    }
    return false;
  }

  public function setUpdSet($updSetSql) 
  {
    $updSetSql = trim($updSetSql);
    if ($updSetSql != '*' && $updSetSql)
    {
      $this->updSetSql = $updSetSql;
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
    return $this->limitSql;
  }

  public function getInsert() 
  {
    if ($this->insertSql) 
    {
      return $this->insertSql;
    }
    return false;
  }

  public function getValues() 
  {
    if ($this->valuesSql) 
    {
      return $this->valuesSql;
    }
    return false;
  }

  public function getUpdSet() 
  {
    if ($this->updSetSql) 
    {
      return $this->updSetSql;
    }
    return false;
  }

  //methods
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
    if ($this->tableSql && $this->insertSql && $this->valuesSql)
    {
      return $this->query .= "INSERT INTO $this->tableSql (".$this->valueEach($this->insertSql).") VALUES (".$this->valueEach($this->valuesSql).");";
    }
    return false;
  }

  public function deleteDB () 
  {
    if ($this->tableSql && $this->whereSql) 
    {
      return $this->query .= "DELETE FROM $this->tableSql WHERE $this->whereSql;";
    }
    return false;
  }

  public function updateDB () 
  {
    if ($this->tableSql && $this->whereSql && $this->updSetSql) {
      return "UPDATE $this->tableSql SET $this->updSetSql WHERE $this->whereSql";
    }
    return false;
  }

  private function arrayPush($var, $val)
  {
    $val = trim($val);
    if ($val != '*' && $val)
    {
      array_push($var, $val);
    }
    ar($var);
    return $var;
  }

  private function valueEach($arr) 
  {
    $value = trim(implode(",", $arr), ',');
    return $value;
  }


}

?>
