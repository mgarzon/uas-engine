<?php
  if (!empty($_GET['act'])) {
    echo "Hello world!"; //Your code here
  } else {}
?>

<form action="index.php" method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" value="Run me now!">
</form>