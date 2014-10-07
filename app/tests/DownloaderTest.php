<?php
include '../models/Downloader.php';

class DownloaderTest extends UnitTestCase
{
  public function setUp()
  {
    // Download random project
    $testDownloader = new Downloader('https://github.com/square/burst/archive/master.zip','./');
    $testDownloader->downloadProject();
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
