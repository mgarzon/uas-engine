<?php
  if (!empty($_GET['act'])) {
    //Your code here
  } else {}
?>

<form action="form_handler.php" method="post">
	Project Repository: <input type="text" name="repo"><br>
	Project Name: <input type="text" name="name"><br>
	Umplification Level: <input type="number" name="umplificationLevel"><br>
	Directory: <input type="text" name="dir"><br>
	<input type="submit">
</form>