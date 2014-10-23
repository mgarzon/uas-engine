<?php
  include("Downloader.php");

  // Fetch command-line arguments
  $repo = $argv[1];
  $url = $argv[2];
  $dir = $argv[3];

  // Create Downloader instance
  $myDownloader = new Downloader($repo, $url, $dir);

  if(strcmp($myDownloader->getProjectRepo(), 'gh') == 0) {
    // Download project from Github & unzip
    $myDownloader->downloadProjectGithub(); 
  }

  else if(strcmp($myDownloader->getProjectRepo(), 'gc') == 0) {
    // Download project from Google Code using hg command
    $myDownloader->downloadProjectGoogleCode();
  }

  else {
    echo("** ERROR: Repo must be gh for Github or gc for Google Code\n");
  }