<!DOCTYPE HTML>
<?php
	$_SESSION['fail']= 0;
	session_start();

	$username = array("abdul", "jack", "mo");
	$password = array("12345", "12345", "12345");
	
	
	if(isset($_POST['username']) && isset($_POST['password'])){
		for($i = 0; $i < count($username); $i++){
			if($_POST['username'] == $username[$i] && $_POST['password'] == $password[$i]){
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = $_POST['password'];
				header("Location: welcome.php");
				break;
			}
			else if($_POST['username'] != $username[$i] && $_POST['password'] != $password[$i]){
				$_SESSION['fail'] = $_SESSION['fail'] + 1;
				echo "Warning invaled username or password ". $_SESSION['fail'];
				break;
			}	
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
		<input type="submit" value="Login">
		
		
	</form>
	<form method="post" action= "report.php">
		<input type="submit" value="Report">
	</form>
	
	
</body>
</html>