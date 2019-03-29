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
    // echo "<pre><b style='background: red;padding: 1px 5px; color: #fff'>M</b> '. var_export($this->dbConnect) . '</pre>'";
    if ($this->dbConnect)
    {
      mysql_select_db(MYSQL_DB, $this->dbConnect);
      $result = mysql_query($this->sendQuery());
      $tableRow = mysql_fetch_row($result);
      var_dump($tableRow);
      return true;
    }
    return false;
  }

  public function sendQuery() 
  {
    return $this->getQuery();
  }

  // public function selectDB() {
  //   parent::selectDB();
    
  //   // var_dump(gettype($this->getQuery()));
  // }
  
}

?>

