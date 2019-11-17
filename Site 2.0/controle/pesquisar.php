<?php
include("../auxiliares/importacoes.php");
//echo $_POST["titulo"];
$titulo=$_POST["titulo"];
$topicos = TopicoBanco::procurarPorTitulo($titulo);
session_start();
$_SESSION["pesquisa"] = serialize($topicos);
//echo "".sizeof($topicos);

header("location: ../index.php");
?>