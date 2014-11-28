UAS Engine
==========

UAS Engine stands for Umplification And Statistics Engine. This project is part of UCOSP Fall 2014. It relies on the [Umple Project](http://www.umple.org), specifically the umplificator component.

UAS Engine automatically umplifies open-source Java projects by reverse engineering them from Java code to Umple code, and collects several statistics about them.

The Downloader takes any project name and downloads it from GitHub or Google Code (depending on the user input). The project is then deployed/unzipped and only necessary files are kept.

The Umplificator then accesses the project directory and umplifies all Java files.

The Code Analyzer scans the Umple files and gets statistics regarding classes, attributes, and associations.

Finally, the Grapher looks at the results of the Code Analyzer, and generates a bar graph to represent the results.

Instructions:
- All the components mentioned above are written in Umple, and need to be converted to PHP beforehand. Use the Umple jar to generate "Downloader.php", "Umplificator.php", "CodeAnalyzer.php", and "Grapher.php" in the "app/models/" directory based off "downloader.ump", "umplificator.ump", "codeAnalyzer.ump", and "grapher.ump" located in the "app/ump/" directory. Use the "-g Php" and "--path" arguments for that.

At this stage, the entire thing can be done through the command line, by running "app/models/Main.php" and using "gc" for Google Code repos and "gh" for Github repos:

```
php app/models/Main.php [gc/gh] [Google Code/Github Project Name] [Umplification Level (0,1,2)] [Local Destination Directory]
```

Here is an example from Google Code (MOA project):
```
php app/models/Main.php gc moa 0 ~/Developer/
```

And here are examples from GitHub (Droidicon and ToroDB Database):
```
php app/models/Main.php gh theDazzler/droidicon 0 ~/Developer/
```
```
php app/models/Main.php gh traex/RippleEffect 1 ~/Developer/
```
Please note that with Github, the project name is preceded by the username of the Github project owner.
Also note that the Umplificator and the Code Analyzer have bugs that are currently fixed.