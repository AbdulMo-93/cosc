<!DOCTYPE HTML>
<?php
	session_start();
	$username = array("abdul", "jack", "mo");
	$password = array("12345", "12345", "12345");
	
	if(isset($_POST['username']) && isset($_POST['password'])){
		if($_POST['username'] == $username[0] && $_POST['password'] == $password[0]){
			$_SESSION['loggedin'] = true;
			echo "your user name is: ". $username[0];
		}
		else if($_POST['username'] == $username[1] && $_POST['password'] == $password[1]){
			$_SESSION['loggedin'] = true;
			echo "your user name is: ". $username[1];
		}
		else if($_POST['username'] == $username[2] && $_POST['password'] == $password[2]){
			$_SESSION['loggedin'] = true;
			echo "your user name is: ". $username[2];
		}
		else{
			echo "Warning invaled username or password";
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
		<input type="submit" value="login!">
	</form>

</body>
</html>