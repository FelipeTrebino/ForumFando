<?php 	
	if (isset($_SESSION["usuario"])) {
			$usuario=$_SESSION["usuario"];
			?>
				<h2 class="" style="color: black">Criar novo tópico</h2>
				<div class="row" style="color: black">
					<form action="controle/escreverTopico.php" method="post">
						<div class="col">
							<label for="titulo">Titulo</label><br>
							<input type="text" name="titulo" id="titulo" required>
							<br>
							<br>
							<textarea id="texto" name="texto" style="width: 700px; height: 300px;" required maxlength="5000"></textarea>
							<br>
							<br>
							<label for="categoria">Selecione a categoria:</label>
							<select name="categoria" id="curso">
								<option value="Esporte1">Basquete</option>
								<option value="Esporte2">Futebol</option>
								<option value="Esporte3">Voleibol</option>
								<option value="Games1">FPS</option>
								<option value="Games2">MOBA</option>
								<option value="Games3">RPG</option>
								<option value="Entreterimento1">Memes</option>
								<option value="Entreterimento2">Informativos</option>
								<option value="Entreterimento3">Tretas</option>
								<option value="Moda1">Moda Masculina</option>
								<option value="Moda2">Moda Feminina</option>
								<option value="Noticias1">Brasil</option>
								<option value="Noticias2">Mundo</option>
								<option value="Tecnologia1">Smartphones</option>
								<option value="Tecnologia1">Computadores</option>
								<option value="Tecnologia1">Inovações</option>
							</select>
							<br>
							<br>
						</div>
						<div class="col">
							<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: yellow;" formnovalidate>Visualisar</button><button type="button submit" class="btn btn-default" data-dismiss="modal" style="background-color: green;">Publicar</button>
						</div>
					</form>
				</div>
			<?php	
	}
	else{
		?>
		<h2>Logue ou faça o cadastro para escrever um topico</h2>	
		<?php 	
	}
?>