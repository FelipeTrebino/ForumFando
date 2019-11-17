<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].
	"/persistencia/TopicoBanco.php");

	echo $_GET['id'];
	TopicoBanco::excluir($_GET['id']);

	header("location: ../index.php"); 
?>