<?php

include 'Calc.php';

class CalcTest extends PHPUnit_Framework_TestCase {

  public function testSetNumA()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $this->assertEquals(10, $calcObj->getNumA()); 
  }

  public function testSetNumB()
  {
    $calcObj = new Calc();
    $calcObj->setNumB(5);
    $this->assertEquals(5, $calcObj->getNumB()); 
  }

  public function testSum()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $calcObj->setNumB(5);
    $this->assertEquals($calcObj->getNumA()+$calcObj->getNumB(), $calcObj->sum()); 
  }

  public function testSubtraction()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $calcObj->setNumB(5);
    $this->assertEquals($calcObj->getNumA()-$calcObj->getNumB(), $calcObj->subtraction()); 
  }

  public function testMultiplication()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $calcObj->setNumB(5);
    $this->assertEquals($calcObj->getNumA()*$calcObj->getNumB(), $calcObj->multiplication()); 
  }

  public function testDivision()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $calcObj->setNumB(5);
    $this->assertEquals($calcObj->getNumA()/$calcObj->getNumB(), $calcObj->division()); 
  }

  public function testSqrtFnc()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $this->assertEquals(round(sqrt($calcObj->getNumA()), 2), $calcObj->sqrtFnc()); 
  }

  public function testPercent()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $calcObj->setNumB(5);
    $this->assertEquals(($calcObj->getNumA() / 100) * $calcObj->getNumB(), $calcObj->percent()); 
  }

  public function testSquared()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $calcObj->setNumB(5);
    $this->assertEquals(($calcObj->getNumA() / 100) * $calcObj->getNumB(), $calcObj->percent()); 
  }

  public function testFraction()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $this->assertEquals(round((1 / $calcObj->getNumA()), 2), $calcObj->fraction()); 
  }
  
  public function testMs()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $this->assertEquals($calcObj->getNumA(), $calcObj->ms()); 
  }

  public function testMPlus()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $calcObj->ms();
    $this->assertEquals($calcObj->getNumA()+$calcObj->getNumA(), $calcObj->mPlus()); 
  }

  public function testMMinus()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $calcObj->ms();
    $this->assertEquals($calcObj->getNumA()-$calcObj->getNumA(), $calcObj->mMinus()); 
  }

  public function testMc()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $calcObj->ms();
    $this->assertEquals('Memory clear', $calcObj->mc());
  }

  public function testGetNumA()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $this->assertEquals(10, $calcObj->getNumA());
  }

  public function testGetNumB()
  {
    $calcObj = new Calc();
    $calcObj->setNumB(5);
    $this->assertEquals(5, $calcObj->getNumB());
  }

  public function testGetMs()
  {
    $calcObj = new Calc();
    $calcObj->setNumA(10);
    $calcObj->ms();
    $this->assertEquals($calcObj->getNumA(), $calcObj->getMs());
  }



}