<?php
include("../auxiliares/importacoes.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$nome  = $_POST["nome"];
$data  = $_POST["data"];

if ($_POST["sexo"] == 1) {
	$sexo = "M";
}
if ($_POST["sexo"] == 2) {
	$sexo = "F";
}
if ($_POST["sexo"] == 3) {
	$sexo = "O";
}
$interesses = "";
foreach($_POST as $indice=>$valor){
	if($indice!="nome"&&$indice!="email"&&$indice!="data"&&$indice!="sexo"&&$indice!="senha"){
		$interesses .= $indice . ";";
	}
}
$interesses = substr($interesses, 0 ,strlen($interesses)-1);

$usuario = new Usuario($nome,$email,$senha,$data,$sexo,$interesses,0);
$cadastrou = UsuarioBanco::cadastrar($usuario);

if (!$cadastrou) {
    session_start(); 
    $_SESSION["msg"] = "Dados inválidos";
} else {
	session_start();
	$_SESSION["msg"] = "Usuario cadastrado";
}
	//$_SESSION["erro"] = 

header("location: ../index.php"); //o header redireciona para uma página

?>