<?php 
session_start();	
include("../auxiliares/importacoes.php");

if (isset($_SESSION["usuario"])) {
			$usuario=unserialize($_SESSION["usuario"]);
			$id_autor=$usuario->getId();
			$titulo = $_POST["titulo"];
			$texto = $_POST["texto"];
			$categoria = $_POST["categoria"];

			$topico = new Topico($titulo,$texto,$categoria,$id_autor,0);

			/*
			echo $topico->getId();
			echo $topico->getTitulo();
			echo $topico->getTexto();
			echo $topico->getCategoria();
			echo $topico->getidAutor();
			echo "é".$topico->fixo;
			*/
			
			$cadastrou = TopicoBanco::cadastrar($topico);

			if (!$cadastrou) {; 
			    $_SESSION["msg"] = "Dados inválidos";
			    echo "erro";
			} else {
				unset($_SESSION["x"]);
				$_SESSION["msg"] = "Topico publicado";
			}
				//$_SESSION["erro"] = 

			header("location: ../index.php"); //o header redireciona para uma página			
	}
?>