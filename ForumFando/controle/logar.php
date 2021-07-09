<?php
 session_start();
include("../auxiliares/importacoes.php");

$email = $_POST["email"];
$senha = $_POST["senha"]; 

#echo "$email $senha";

$usuario = UsuarioBanco::validar($email, $senha);

if (is_null($usuario)) {
	$_SESSION["msg"] = "Usuario e/ou senha inválidos";
}
else{
	$_SESSION["usuario"] = serialize($usuario);
	if($usuario->nivel==1){
		Banco::bancoAdm();
	}
	else if($usuario->nivel==0){
		Banco::bancoUC();
	}
}

 header("location: ../index.php"); //o header redireciona para uma página
?>