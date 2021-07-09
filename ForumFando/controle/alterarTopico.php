<?php 
	include("../auxiliares/importacoes.php");
	session_start();
	if (isset($_GET['id'])) {
		$_SESSION["x"] = 2;
		//var_dump($_GET['id']);
		$topico = TopicoBanco::procurarPorId($_GET['id']);
		$_SESSION["topico"] = serialize($topico);
		header("location: ../index.php");
	}
	else{
		$topico = unserialize($_SESSION["topico"]);
		$id=$topico->id;
		$titulo = $_POST["titulo"];
		$texto = $_POST["texto"];
		$editou = TopicoBanco::editar($id,$texto,$titulo);

		if (!$editou) {
		   // session_start(); 
		    $_SESSION["msg"] = "Dados inválidos";
		} else {
			//session_start();
			$_SESSION["msg"] = "Usuario cadastrado";
		}
			//$_SESSION["erro"] = 
		unset($_SESSION['x']);
		unset($_SESSION['topico']);
		header("location: ../index.php"); //o header redireciona para uma página
	}
?>