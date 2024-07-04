<nav class="navbar navbar-expand-lg">
  <div id="navbar" class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <div id="logo">
            <img src="img/logo.png" alt="Logotipo da pizzaria" width="100px">
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse menu" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"><strong>Home</strong></a>
        </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong>Cardápio</strong></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="salgadas.php">Pizzas Salgada</a></li>
            <li><a class="dropdown-item" href="doces.php">Pizzas Doces</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="bebidas.php">Bebidas</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobrenos.php"><strong>Sobre nós</strong></a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="contato.php"><strong>Contato</strong></a>
        </li>
      </ul>

      <a class=" btn btn-outline-danger" href="pedido.php" type="button"><strong>Faça seu pedido!</strong></a>
      
    </div>
  </div>
</nav>