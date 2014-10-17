<?php
  include("Downloader.php");

  $url = $argv[1];
  $dir = $argv[2];

  $myDownloader = new Downloader($url, $dir);
  $myDownloader->downloadProject();