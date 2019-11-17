   <div class="container-fluid" id="header" >
      <div class="row" id="headerrowa">
        <div class="col-2" id="logo">
          <img src="../icons/F.png" height="100px">
        </div>
        <div class="col-7" style="padding-top: 30px;">
          <form action="controle/pesquisar.php" method="post">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="titulo" id="titulo">
            <div class="input-group-append">
              <button type="submit" class="btn btn-search" style="color: white;">
                Pesquisar
              </button>
            </div>
          </div>          
          </form>
        </div>
        <div class="col-2">
          <div>
            <?php 
              if(isset($_SESSION["usuario"])){
                $usuario = unserialize($_SESSION["usuario"]);
                  ?>
                  <p style="text-align: right; color: black; margin-top: 10px;"><?=$usuario->getNome()?><br>
                  <a href="controle/sair.php" style="color: black;">Sair</a></p>
              <?php 
              }
              else{
            	   include("visao/login.php");
            	   include("visao/cadastro.php");
              }
             ?>
          </div>
        </div>
        <div class="col-1" style="margin-top: 10px">
            <a href="#" ><img src="icons/user.png" class="rounded" height="50"></a>
        </div>
      </div>
      <!-- Barra de Navegação -->
      <div class="row jumbotron-fluid" id="containernav">        
        <ul class="nav nav-pills nav-justified" id="navbar">
          <li class="nav-item">
            <a class="nav-link" href="controle/indexMenu.php">HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Esportes</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Esporte1">Basquete</a>
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Esporte2">Futebol</a>
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Esporte3">Voleibol</a></div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Games</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Games1">FPS</a>
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Games2">MOBA</a>
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Games3">RPG</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Entretenimento</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Entreterimento1">Memes</a>
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Entreterimento2">Informativo</a>
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Entreterimento3">Tretas</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Moda</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Moda1">Feminina</a>
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Moda2">Masculina</a>                
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Noticias</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Noticias1">Brasil</a>
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Noticias2">Mundo</a>                
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tecnologia</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Tecnologia1">Smartphones</a>
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Tecnologia2">Computadores</a>
              <a class="dropdown-item" href="controle/menuesp.php?categoria=Tecnologia3">Inovações</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Outros </a>
          </li>
          <?php 
            if (isset($_SESSION['usuario'])){
              $usuario = unserialize($_SESSION['usuario']);
              if ($usuario->getNivel()==1){ ?>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" float="right"><img src="icons/3pts.png" height="20px"></a>
              <div class="dropdown-menu">
                   <a class="dropdown-item" href="controle/gerenciarU.php">Administrar usuarios</a>
              </div>
                 </li> <?php
              }
            }
          ?>
        </ul>          
      </div>
    </div>
  
