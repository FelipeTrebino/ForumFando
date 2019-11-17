<?php 
session_start();
session_destroy();

header("location: ../index.php"); //o header redireciona para uma página
?>