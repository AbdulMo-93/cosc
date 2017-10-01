
<?php
	session_start();
	echo "Hello " . $_SESSION['username'] . " yor password is " . $_SESSION['password'];
	echo " Date is " . date("Y/m/d") . "Time is " . date("h/i/s");
?>

<html>
<body>

	<form method="post" action="logout.php">	
		<input type="submit" value="Logout">
	</form>

</body>
</html>