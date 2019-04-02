<?php


class Singletone 
{
  private static $inst;

  public static function getObj() {
    if (self::$inst === null)
    {
      self::$inst = new self();
    }
    return self::$inst;
  }

  public function test() {
    echo 123;
    return true;
  }
}


class CopyClass extends Singletone
{
  public function test() {
    echo 456;
    return true;
  }
  public function test2() {
    echo 777;
    return true;
  }
}

// $obj = Singletone::getObj();

// echo '<pre>'. var_export($obj->test()) . '</pre><br>';


$obj2 = new CopyClass();

echo '<pre>'. var_export($obj2->test()) . '</pre>';
