<!DOCTYPE HTML>
<?php
	session_start();
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "cosc";
	if(isset($username) == true){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = mysqli_connect($servername, $dbusername, $dbpassword) or die("Could not connect to database");
	mysqli_select_db($conn,$dbname);
	   
	$query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
	$result = mysqli_query($conn,$query);
	$rowSelected = mysqli_num_rows($result);
	if ($rowSelected == true) {
		echo "yes found it";
	}
	else {
		echo "User dosen't exit!";
	}
	}
?>

<html>
<body>

	<form method="post" action="index.php">
		Username:<br/>
		<input type="text" name="username"><br/>
		Password<br/>
		<input type="password" name="password"><br/>
		<br/>		
		<input type="submit" value="Login">
		
	</form>
	<form method="post" action= "report.php">
		<br/>
		<input type="submit" value="Report">
		
	</form>
	<form method="post" action= "createAccount.php">
		<br/>
		<input type="submit" value="Create Account">
	</form>
	
</body>
</html>

