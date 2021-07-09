<?php 
	$topico = unserialize($_SESSION['topico']);
	//unset($_SESSION["idTopico"]);
	//echo var_dump($topico);
	//unset($_SESSION["x"]);
	$texto='
	<h2 class="" style="color: black">Editar Tópico</h2>
				<div class="row" style="color: black">
					<form action="controle/alterarTopico.php" method="post">
						<div class="col">
							<label for="titulo">Titulo</label><br>
							<input type="text" name="titulo" id="titulo" value="'.$topico->titulo.'" required>
							<br>
							<br>
							<textarea id="texto" name="texto" style="width: 700px; height: 300px;" required maxlength="5000">'.$topico->texto.'</textarea>
							<br>
							<br>
						</div>
						<div class="col">
							<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: yellow;" formnovalidate>Visualisar</button><button type="button submit" class="btn btn-default" data-dismiss="modal" style="background-color: green;">Alterar</button>
						</div>
					</form>
				</div>';
	echo $texto;
				
				?>