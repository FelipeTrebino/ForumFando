<?php 	
	session_start();
	if (isset($_GET['categoria'])) {
		$_SESSION['categoria'] = $_GET['categoria'];
		//echo  $_SESSION['categoria'];
	}
	

	header("location: ../index.php"); //o header redireciona para uma página

?>