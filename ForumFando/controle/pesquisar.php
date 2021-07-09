<?php
include("../auxiliares/importacoes.php");
//echo $_POST["titulo"];
$titulo=$_POST["titulo"];
$topicos = TopicoBanco::procurarPorTitulo($titulo);
session_start();
$_SESSION["pesquisa"] = ($topicos);
//echo "".sizeof($topicos);

header("location: ../index.php");
?>