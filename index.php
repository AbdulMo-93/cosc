<!DOCTYPE HTML>
<?php
	session_start();
	$username = array("abdul", "jack", "mo");
	$password = array("12345", "12345", "12345");
	
	if(isset($_POST['username']) && isset($_POST['password'])){
		for($i = 0; $i < count($username); $i++){
			if($_POST['username'] == $username[$i] && $_POST['password'] == $password[$i]){
				$_SESSION['loggedin'] = true;
				echo "your user name is: ". $username[$i];
				break;
			}
			else if($_POST['username'] != $username[$i] && $_POST['password'] != $password[$i]){
				$_SESSION['loggedin'] = false;
				echo "Warning invaled username or password";
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
		<input type="submit" value="login!">
	</form>

</body>
</html>