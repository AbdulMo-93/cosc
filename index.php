<!DOCTYPE HTML>
<?php
	$_SESSION['fail'] =  0;
	session_start();

	$username = array("abdul", "jack", "mo");
	$password = array("12345", "00000", "11111");
	
	if(isset($_POST['username']) && isset($_POST['password'])){
		for($i = 0; $i < 3; $i++){
			if($_POST['username'] == $username[$i] && $_POST['password'] == $password[$i]){
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = $_POST['password'];
				header("Location: welcome.php");
			}
		}
	$_SESSION['fail'] = $_SESSION['fail'] + 1;
	echo "Warning invaled username or password ";	
	}
?>

<html>
<body>

	<form method="post" action="index.php">
		Username:<br/>
		<input type="text" name="username"><br/>
		Password<br/>
		<input type="password" name="password"><br/>		
		<input type="submit" value="Login">
		  <br/>
	</form>
	<form method="post" action= "report.php">
		<input type="submit" value="Report">
		  <br/>
	</form>
	<form method="post" action= "createAccount.php">
		<input type="submit" value="Create Account">
	</form>
	
</body>
</html>