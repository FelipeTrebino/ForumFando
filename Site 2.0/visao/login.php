  <a data-toggle="modal" data-target="#myModal2" class="btn ">Logar</a>
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="color: black">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" style="color: black">
        	<form action="controle/logar.php" method="post">
        		<label for="email">Email:</label>
        		<input type="email" name="email" id="email">
        		<br>
        		<br>
        		<label for="senha">Senha:</label>
        		<input type="password" name="senha" id="senha">
        		<br>
        		<br>
  				<br>
        		<button>Confirmar</button>
        	</form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
