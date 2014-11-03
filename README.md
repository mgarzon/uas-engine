UAS Engine
==========

UAS Engine stands for Umplification And Statistics Engine. This project is part of UCOSP Fall 2014. It relies on the [Umple Project](http://www.umple.org), specifically the umplificator component.

UAS Engine automatically umplifies open-source Java projects by reverse engineering them from Java code to Umple code, and collects several statistics about them.

The Downloader takes any project name and downloads it from GitHub or Google Code (depending on the user input). The project is then deployed/unzipped and only necessary files are kept.

The Umplificator then accesses the project directory and umplifies all Java files.

The Downloader and Umplificator components are written in Umple, and need to be converted to PHP beforehand. Use the Umple jar to generate "Downloader.php" and "Umplificator.php" in the "app/models/" directory based off "downloader.ump" and "umplificator.ump" located in the "app/ump/" directory.

Since at this stage no statistics are returned (yet!), the entire thing can be done through the command line, by running "DownloadProject.php" and using "gc" for Google Code repos and "gh" for Github repos:

```
php DownloadProject.php [gc/gh] [Google Code/Github Project Name] [Local Destination Directory]
```

Here is an example from Google Code (MOA project):
```
php DownloadProject.php gc moa ~/Developer/
```

And here is an example from GitHub (ToroDB Database):
```
php DownloadProject.php gh traex/RippleEffect ~/Developer/
```
Note that with Github, the project name is preceded by the username of the Github project owner.