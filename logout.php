<?php
	session_start();
	session_destroy();
	$_SESSION['authenticated ']= false;
	header("Location: index.php");
?>