<?php
	include("../auxiliares/importacoes.php"); 
	$id=$_POST['id'];
	TopicoBanco::banir($id);
	$resultado = UsuarioBanco::banir($id);
	if (!$resultado) {
    session_start(); 
    $_SESSION["msg"] = "Erro inesperado";
	} 
	else{
		session_start(); 
    	$_SESSION["msg"] = "Usuário banido";
	}
	header("location: ../index.php");
	

	
?>