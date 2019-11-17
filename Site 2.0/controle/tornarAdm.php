<?php
	include("../auxiliares/importacoes.php"); 
	$id=$_POST['id'];
	$resultado = UsuarioBanco::TransformaADM($id);
	if (!$resultado) {
    session_start(); 
    $_SESSION["msg"] = "Erro inesperado";
	} 
	else{
		session_start(); 
    	$_SESSION["msg"] = "Nível de usuário alterado";
	}
	header("location: ../index.php");
	

	
?>