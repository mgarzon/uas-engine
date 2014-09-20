<?php

class HowToTest extends UnitTestCase
{

  public function setUp()
  {
    $one = "one";
  }

  public function tearDown()
  {
  }

  public function testOnePlusPne()
  {
    $one_plus_one = $one + $one;
    $this->assertEqual("oneone", $one_plus_one);
  }

}
