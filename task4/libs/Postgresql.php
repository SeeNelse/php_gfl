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
      $result = pg_query($this->getQuery());
      $line = pg_fetch_array($result, null, PGSQL_ASSOC);
      echo '<pre>'; echo var_export($line); echo'</pre>';

      
      // while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
      //   echo "\t<tr>\n";
      //   foreach ($line as $col_value) {
      //       echo "\t\t<td>$col_value</td>\n";
      //   }
      //   echo "\t</tr>\n";
      // }
      // echo '<pre>'; echo var_export($line); echo'</pre>';
      return true;
    }
    return false;
  }
  
}

?>

