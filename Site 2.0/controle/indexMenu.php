<?php 
session_start();
unset($_SESSION['categoria']);
unset($_SESSION["x"]);
unset($_SESSION["tabelasUsers"]);
header("location: ../index.php");
?>