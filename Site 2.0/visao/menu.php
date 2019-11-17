
<div class="jumbotron " style="background-color: gray;border-style:solid; border-color: #ff8533;">
	<div class="row">
		<?php
		$topicos = unserialize($_SESSION['textoTopicos']);
	//print_r($topicos);
		if(isset($_SESSION['textoTopicos'])){
			$topicos = unserialize($_SESSION['textoTopicos']);
			for ($i=0; $i < sizeof($topicos); $i++) { 
				?>
				<p><?=$topicos[$i]?></p>
			<?php } }	?>
	</div>
</div>
