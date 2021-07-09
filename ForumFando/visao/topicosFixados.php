<div class="jumbotron scrollbar scrollbar-primary" style="background-color: gray; height: 500px;border-style:solid; border-color: #ff8533;  overflow-y: scroll;">
	<?php 
	$topicos = TopicoBanco::todosfixos();
	$textoTopicos = array();

	if (sizeof($topicos)==0) {
		# code...
	}
	else{

	for ($i=0; $i<sizeof($topicos); $i++) { 
		$topico = $topicos[$i];
		$titulo = $topico->getTitulo();
		$texto = $topico->getTexto();
		$usuario = UsuarioBanco::procurarPorId($topico->getIdAutor());

		if (isset($_SESSION['usuario'])) {
		$u = unserialize($_SESSION['usuario']);
		$admin = $u->getNivel();
		}
		else{
		$admin = "0"; 
		}
		//echo "<script>alert('".$usuario->getNivel()."')</script>";
		if ($admin =="1") {
			if($topico->getIdAutor() == $u->getId()){
			 	$textoTopicos [] =' <div class="container-fluid" style="padding-left: 50px">
				<div class=" jumbotron" style="height: 350px; padding: 0px;">
				<div class="row" style="padding: 20px;">
				<div class="col-md-2">
				<img src="icons/user.png" width="100px" align="center">
				</div>
				<div class="col-10" style="padding: 20px;">
				<div class="row"><h3>'.$titulo.'</h3></div>
				<div class="row" ><h5>'.$usuario->getNome().'</h5></div>
				<div class="row scrollbar scrollbar-primary" style="height: 120px;overflow-y: scroll;"><h6>'. $texto .'</h6></div>
				<div class="row" style=" float: right; margin-top: 24px;">
				<button class="btn btn-warning" style="color: black;"><a href="controle/tirarTopicoFixo.php?id='.$topico->getId().'" style="color:white;"><img src="icons/taxar.png" height="17px"></a></button>
				<button class="btn btn-success" style="color: black;"><a href="controle/AlterarTopico.php?id='.$topico->getId().'" style="color:white;"><img src="icons/edit.png" height="17px"></a></button>
				<button class="btn btn-danger" style="color: black;"><a href="controle/excluirTopico.php?id='.$topico->getId().'" style="color:white;">X</a></button>
				</div>
				</div>		
				</div>	
				</div>
				</div>';
		 	}
		 	else{
		 		$textoTopicos [] =' <div class="container-fluid" style="padding-left: 50px">
				<div class=" jumbotron" style="height: 350px; padding: 0px;">
				<div class="row" style="padding: 20px;">
				<div class="col-md-2">
				<img src="icons/user.png" width="100px" align="center">
				</div>
				<div class="col-10" style="padding: 20px;">
				<div class="row"><h3>'.$titulo.'</h3></div>
				<div class="row" ><h5>'.$usuario->getNome().'</h5></div>
				<div class="row scrollbar scrollbar-primary" style="height: 120px;overflow-y: scroll;"><h6>'. $texto .'</h6></div>
				<div class="row" style=" float: right; margin-top: 24px;">
				<button class="btn btn-warning" style="color: black;"><a href="controle/tirarTopicoFixo.php?id='.$topico->getId().'" style="color:white;"><img src="icons/taxar.png" height="17px"></a></button>
				<button class="btn btn-danger" style="color: black;"><a href="controle/excluirTopico.php?id='.$topico->getId().'" style="color:white;">X</a></button>
				</div>
				</div>		
				</div>	
				</div>
				</div>';
		}
		 	}
			//echo "<script>alert('ok')</script>";
			
		else{
			$textoTopicos [] =' <div class="container-fluid" style="padding-left: 50px">
			<div class=" jumbotron" style="height: 350px; padding: 0px;">
			<div class="row" style="padding: 20px;">
			<div class="col-md-2">
			<img src="icons/user.png" width="100px" align="center">
			</div>
			<div class="col-10" style="padding: 20px;">
			<div class="row"><h3>'.$titulo.'</h3></div>
			<div class="row" ><h5>'.$usuario->getNome().'</h5></div>
			<div class="row scrollbar scrollbar-primary" style="height: 120px;overflow-y: scroll;"><h6>'. $texto .'</h6></div>
			<div class="row" style=" float: right; margin-top: 24px;">
			
			</div>
			</div>		
			</div>	
			</div>
			</div>';
			}
		}}?>
			


	<?php
	for ($i=0; $i < sizeof($textoTopicos); $i++) { 
				?>
				<p><?=$textoTopicos[$i]?></p>
	<?php } 	?>

</div>