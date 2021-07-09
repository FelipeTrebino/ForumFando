<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].
	"/persistencia/TopicoBanco.php");


	TopicoBanco::tirarfixar($_GET['id']);

	header("location: ../index.php"); 
?>