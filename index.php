<!DOCTYPE HTML>
<?php
	session_start();
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "cosc";
	
	if(isset($_SESSION['fail']) == true){
		if(isset($_POST['username']) == true && isset($_POST['password1']) == true){
			$username = $_POST['username'];
			$password = $_POST['password1'];
			
			$conn = mysqli_connect($servername, $dbusername, $dbpassword) or die("Could not connect to database");
			mysqli_select_db($conn,$dbname);
			
			$sql = "SELECT * FROM users WHERE Username='$username'";
			$result = $conn->query($sql);
			$row = $result -> fetch_assoc();
			$hash_pwd = $row['Password'];
			
			if(!password_verify($password,$hash_pwd)){
				$_SESSION['fail'] = $_SESSION['fail'] + 1;;
				echo "Wrong Username or Password";
			}else{
				$sq = "SELECT * FROM users WHERE Username = '$username' AND Password = '$hash_pwd'";
				$result = $conn->query($sq);
				
				header("Location: welcome.php");
			}
		}
	}
	else{
		$_SESSION['fail'] = 0;
	}
	
	
?>

<html>
<body>

	<form method="post" action="index.php">
		Username:<br/>
		<input type="text" name="username"><br/>
		Password<br/>
		<input type="password" name="password1"><br/>
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

