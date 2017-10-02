<!DOCTYPE HTML>
<?php
	session_start();
	echo "Number of fail attempts is: " . $_SESSION['fail'];
?>

<html>
<body>
	<form method="post" action= "index.php">
		<input type="submit" value="return to login page">
	</form>	
</body>
</html>