<?php

Class Mysql extends Sql {
  private $dbConnect;

  public function __construct() 
  {
    parent::__construct();
    $this->dbConnect = mysql_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASS);
  }

  public function connect() 
  {
    if ($this->dbConnect)
    { // добавить try catch
      mysql_select_db(MYSQL_DB, $this->dbConnect);
      $sqlResult = mysql_query($this->getQuery(), $this->dbConnect);
      if (strstr($this->getQuery(), 'SELECT')) {
        $i=0;
        $returnArr = [];
        while ($answerItem = mysql_fetch_assoc($sqlResult)) {
          foreach ($answerItem as $key => $val) {
            $returnArr[$i][$key] = $val;
          }
          $i++;
        }
        return $returnArr;
      }
      if ($sqlResult) {
        return true;
      }
      return false;
    }
    return false;
  }
  
}

?>

