<?php

Class Mysql extends Sql {
  private $dbConnect;

  public function __construct() 
  {
    parent::__construct();
    $this->dbConnect = '';
  }

  public function connect() 
  {
    $this->dbConnect = mysql_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASS);
    if ($this->dbConnect)
    {
      mysql_select_db(MYSQL_DB, $this->dbConnect);
      $queryResult = mysql_query($this->getQuery(), $this->dbConnect);
      if (strstr($this->getQuery(), 'SELECT')) {
        return mysql_fetch_assoc($queryResult);;
      }
      if ($queryResult) {
        return true;
      }
      return false;
    }
    return false;
  }
  
}

?>

