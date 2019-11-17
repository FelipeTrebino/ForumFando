<?php 	
	include("../auxiliares/importacoes.php");
	$usuarios = UsuarioBanco::todos();

	$_SESSION['todos'] = serialize($usuarios);
	//echo var_dump($usuarios);
	$infs = "";
	for ($i=0; $i < sizeof($usuarios); $i++) { 
		$usuario = $usuarios[$i];
		if($usuario->nivel=='1'){
			$infs.="<tr><td>".$usuario->getId()."</td>
				 <td>".$usuario->nome."</td>
				 <td>".$usuario->email."</td> 
				 <td>Administrador</td> 
				 <td>".$usuario->dataNascimento."</td> 
				 <td>".$usuario->sexo."</td></tr>";
		}
		else{
			$infs.="<tr><td>".$usuario->getId()."</td>
				 <td>".$usuario->nome."</td>
				 <td>".$usuario->email."</td> 
				 <td>Usuário Comum</td> 
				 <td>".$usuario->dataNascimento."</td> 
				 <td>".$usuario->sexo."</td>
				 <td><form action='controle/tornarAdm.php' method='post'><button type='submit' name='id' value='".$usuario->id."' class='btn btn-default' data-dismiss='modal' style='background-color: yellow';>Tornar Administrador</button></form></td>
				 <td><form action='controle/banir.php' method='post'><button type='submit' name='id' value='".$usuario->id."' class='btn btn-default' data-dismiss='modal' style='background-color:red';>Banir Usuário</button></form></td></tr>";
		}
		
	}
	session_start();
	unset($_SESSION['x']);
	$_SESSION['tabelasUsers'] ='
	<div class="container">
	  <h2>Gerenciar Usuários</h2>          
	  <table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Id</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Nível</th>
			<th>Data de Nascimento</th>
			<th>Sexo</th>
			<th colspan="2" style="text-align: center;">Gerenciar</th>
	      </tr>
	    </thead>
	    <tbody>
	      '.$infs.'
	    </tbody>
	  </table>
	</div>';
	
	
	header("location: ../index.php");
?>