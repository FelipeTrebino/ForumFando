<?php
session_start();
include("auxiliares/importacoes.php");
include("controle/menu.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>ForumFando</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
	include("auxiliares/bootstrap.php");
	include("auxiliares/style.php");
	?>
</head>
<body>
	<?php 
	include("visao/header.php");
	if (isset($_SESSION["msg"])) {
		?>
		<script type="text/javascript"><?=$_SESSION["msg"]?></script>
<?php } ?>
<div class="row container-fluid" style="margin-top: 50px;">
	<!-- Content -->
	<div class="content col-9 jumbotron" style="margin-left: 50px; padding: 30px;">
	<?php 
			if(isset($_SESSION['x']) && $_SESSION['x']=="1"){ 
				include("visao/escreverTopico.php");			
			}
			else if(isset($_SESSION['tabelasUsers'])){
				include("visao/gerenciaU.php");
			}
			else{
				if (isset($_SESSION['todos'])) {
					include("visao/gerenciaU.php");
				}
				else{
				include("visao/topicosFixados.php");
				include("visao/menu.php");	
				}
			}
			
	?>
	</div>


	<!-- sidebar -->
	<div class="sidebar col-2 jumbotron" style="margin-left: 30px; background-color: #">
		<?php 
		if (isset($_SESSION["usuario"])) {
			if(!isset($_SESSION["x"])){	
				include("visao/criarTopico.php"); 
			}
			
		}
		
		?>
	</div>



</div>
<div class="container-fluid">
	<div class="row jumbotron">
		<? //php include("visao/rodape.php") ?>
	</div>
</div>
</body>
</html>