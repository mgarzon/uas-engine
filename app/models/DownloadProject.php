<?php
  include("Downloader.php");

  // Fetch command-line arguments
  $url = $argv[1];
  $dir = $argv[2];

  // Download project
  $myDownloader = new Downloader($url, $dir);
  $myDownloader->downloadProject();

  // Extract project
  $file = $dir . "/project.zip";
  $zip = new ZipArchive;
  $res = $zip->open($file);

  if($res == TRUE) {
  	$zip->extractTo($dir);
  	$zip->close();
  }