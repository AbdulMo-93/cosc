<!DOCTYPE HTML>
<?php
session_start();


?>
<html>
<body>
  <br/>
	Creating Account<br/>
	  <br/>
	<form method="post" action="addToTable.php">
		Username:<br/>
		<input type="text" name="username"><br/>
		Password<br/>
		<input type="password" name="password"><br/>
		First Name:<br/>
		<input type="text" name="FirstName"><br/>
		last Name:<br/>
		<input type="text" name="LastName"><br/>
		E-mail:<br/>
		<input type="text" name="Email"><br/>
		  <br/>
		<input type="submit" value="Regester">
		
	</form>
</body>
</html>