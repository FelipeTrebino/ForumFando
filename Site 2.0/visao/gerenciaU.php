<div class="jumbotron scrollbar scrollbar-primary" style="background-color:white; height: 500px;border-style:solid; border-color: #ff8533;  overflow-y: scroll;">
		<?php 
			$texto = $_SESSION['tabelasUsers'];
			echo "$texto";
		 ?>
	<div id="stickyadcontainer" style="width: 300px; position: fixed; top: 650px; left: 1300px;">
	    <div style="position:relative;margin:auto;">
	    	<form action="controle/indexMenu.php">
	      		<button type="submit "class="btn" action="controle/voltaradm.php" style="background-color: #ff8533; border-style: solid; border-color: yellow; color: black; font-family: arial;">Voltar</button>	 
	      	</form>     		
	    </div>
 	</div>
</div>