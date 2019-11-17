<?php 
require_once($_SERVER['DOCUMENT_ROOT'].
	"/modelo/Topico.php");
require_once($_SERVER['DOCUMENT_ROOT'].
	"/persistencia/Banco.php");
require_once($_SERVER['DOCUMENT_ROOT'].
	"/persistencia/TopicoBanco.php");
require_once($_SERVER['DOCUMENT_ROOT'].
	"/persistencia/UsuarioBanco.php");

$topicos = TopicoBanco::todos();

$categorias = array();

if(isset($_SESSION["categoria"])){
	$categorias[] = ($_SESSION["categoria"]);
}
else if(isset($_SESSION["usuario"])){
	$usuario = unserialize($_SESSION["usuario"]);
	$categorias = explode(";", $usuario->getInteresses());
}
	


$textoTopicos = array();

if(isset($_SESSION['pesquisa'])){


	if(sizeof(unserialize($_SESSION['pesquisa']))>0){
		$topicos=unserialize($_SESSION['pesquisa']);
	}
	else{
		$_SESSION["msg"] = "<p>Nenhum topico achado</p>";
		echo "erro erro";
	}
	unset($_SESSION['pesquisa']);

}
for ($i=0; $i<sizeof($topicos); $i++) { 
	$topico = $topicos[$i];
	if (sizeof($categorias)==0) {
		
	}
	else if(!in_array($topico->getCategoria(),$categorias)) {
		continue;
	}
	$titulo = $topico->getTitulo();
	$texto = $topico->getTexto();
	$usuario = UsuarioBanco::procurarPorId($topico->getIdAutor());
		//echo "<script>alert('".$usuario->getNivel()."')</script>";
	if (isset($_SESSION['usuario'])) {
		$u = unserialize($_SESSION['usuario']);
		$admin = $u->getNivel();
		$editor = $u->getId();
	}
	else{
		$editor = "0";
		$admin = "0"; 
	}
	if ($admin=="1") {
			//echo "<script>alert('ok')</script>";
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
		<button class="btn btn-warning" style="color: black;"><a href="controle/fixarTopico.php?id='.$topico->getId().'" style="color:white;"><img src="icons/taxar.png" height="17px"></a></button>
		<button class="btn btn-danger" style="color: black;"><a href="controle/excluirTopico.php?id='.$topico->getId().'" style="color:white;">X</a></button>
		</div>
		</div>		
		</div>	
		</div>
		</div>';
	}
	elseif($topico->getIdAutor() == $editor) {
			//echo "<script>alert('ok')</script>";
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

		</div>
		</div>		
		</div>	
		</div>
		</div>';
	}
}

	$_SESSION["textoTopicos"] = serialize($textoTopicos);

	//header("location: ../index.php");
	?>