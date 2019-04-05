<?php

class Band implements iBand
{
  public function getName()
  {

  }

  public function getGenre()
  {
    
  }

  public function addMusician(iMusician $obj)
  {
    echo '<pre>'; echo var_export($obj); echo'</pre>';
  }

  public function getMusician()
  {

  }
}

