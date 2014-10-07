<?php

class HowToTest extends \PHPUnit_Framework_TestCase
{
  private $one;
  
  public function setUp()
  {
    $this->one = "one";    
  }

  public function tearDown()
  {
  }

  public function testOnePlusPne()
  {
    $one_plus_one = $this->one . $this->one;
    $this->assertEquals("oneone", $one_plus_one);
  }
}
