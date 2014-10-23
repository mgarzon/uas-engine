UAS Engine
==========

UAS Engine stands for Umplification And Statistics Engine. This project is part of UCOSP Fall 2014. It relies on the [Umple Project](http://www.umple.org), specifically the umplificator component.

UAS Engine automatically umplifies open-source Java projects by reverse engineering them from Java code to Umple code, and collects several statistics about them.

To use the Downloader, run the "DownloadProject.php" from the command line using "gc" for Google Code repos and "gh" for Github repos:
```
php DownloadProject.php [gc/gh] [Google Code/Github URL] [Local Destination Directory]
```