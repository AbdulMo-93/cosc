<?php
	session_start();
	session_destroy();
	$_SESSION['fail']=0;
	header("Location: index.php");
?>