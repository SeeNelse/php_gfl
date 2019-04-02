<?php

Class Postgresql extends Sql {
  private $dbConnect;

  public function __construct() 
  {
    parent::__construct();
    $this->dbConnect = pg_connect("host=".PG_SERVER." dbname=".PG_DB." user=".PG_USER." password=".PG_PASS);
  }

  public function connect() 
  {
    if ($this->dbConnect) 
    {
      $result = pg_query($this->dbConnect, $this->getQuery());
      if (strstr($this->getQuery(), 'SELECT')) {
        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
          foreach ($line as $value) {
            $selectResult = trim($value);
          }
        }
        if ($selectResult) {
          return true;
        } else {
          return false;
        }
      }

      return true;
    }
    return false;
  }
  
}

?>

