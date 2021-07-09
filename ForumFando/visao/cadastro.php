  <br>
  <a data-toggle="modal" data-target="#myModal" class="btn">Cadastrar</a>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="color: black">Cadastro</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="color: black">
          <form action="controle/cadastrar.php" method="post">
            <label for="nome">Nome:</label>
            <input type="name" name="nome" id="nome">
            <br>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
            <br>
            <br>
            <label for="data">Data de Nascimento:</label>
            <input type="date" name="data" id="data">
            <br>
            <br>
            <p>Sexo:</p>
            <input type="radio" name="sexo" value="1" id="sexomasculino"> Masculino<br>
            <input type="radio" name="sexo" value="2" id="sexofeminino"> Feminino<br>
            <input type="radio" name="sexo" value="3" id="sexooutro"> Outro<br>            
            <br>
            <p>Selecione seus interesses:</p>
            Esportes:   
            <input type="checkbox" name="Esporte1" value="Basquete"> Basquete
            <input type="checkbox" name="Esporte2" value="Futebol"> Futebol
            <input type="checkbox" name="Esporte3" value="Voleibol" checked> Voleibol<br><br>
            Games:   
            <input type="checkbox" name="Games1" value="FPS"> FPS
            <input type="checkbox" name="Games2" value="MOBA"> MOBA
            <input type="checkbox" name="Games3" value="RPG" checked> RPG<br><br>
            Entreterimento:   
            <input type="checkbox" name="Entreterimento1" value="Memes"> Memes 
            <input type="checkbox" name="Entreterimento2" value="Informativos"> Informativos
            <input type="checkbox" name="Entreterimento3" value="Tretas" checked> Tretas<br><br>
            Moda:   
            <input type="checkbox" name="Moda1" value="Feminina"> Feminina 
            <input type="checkbox" name="Moda2" value="Masculina"> Masculina<br><br>
            Nóticias:   
            <input type="checkbox" name="Noticias1" value="Brasil"> Brasil
            <input type="checkbox" name="Noticias2" value="Mundo" checked>Mundo<br><br>
            Entreterimento:   
            <input type="checkbox" name="Tecnologia1" value="Smartphones"> Smartphones 
            <input type="checkbox" name="Tecnologia2" value="Computadores"> Computadores
            <input type="checkbox" name="Tecnologia3" value="Informacoes" checked>Inovações<br><br>
            <br>
            <label for="img"> Selecione a imagem de Perfil:  </label>
            <input class="form-control" type="file" name="img" id="img" required
            ><br><br>
            <button>Confirmar</button>
          </form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
