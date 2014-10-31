<?php
  include("Downloader.php");
  include("Umplificator.php");

  // Fetch command-line arguments
  $repo = $argv[1];
  $name = $argv[2];
  $dir = $argv[3];

  // Get project URL
  if(strcmp($repo, 'gh') == 0) {
    // GitHub URL
    $url = "https://github.com/" . $name . "/archive/master.zip";
  } else if(strcmp($repo, 'gc') == 0) {
    // Google Code URL
    $url = "https://code.google.com/p/" . $name;
  }

  // Create Downloader instance
  $myDownloader = new Downloader($repo, $url, $dir, $name);

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

  // Umplify project
   $myUmplificator = new Umplificator($myDownloader->getDestinationDir() . $myDownloader->getProjectName());
   $myUmplificator->umplifyProject(0);