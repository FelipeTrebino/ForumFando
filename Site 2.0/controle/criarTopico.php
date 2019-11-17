<?php 
	session_start();
	$_SESSION["x"] = 1;
	header("location: ../index.php");
?>