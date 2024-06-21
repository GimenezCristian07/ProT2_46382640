<link href="assets/css/styles.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/js/bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a 
      class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
      <img src="<?php echo base_url('assets/imagenes/NotiGames.jpg')?>"width="75" height="75">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Quienes_Somos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Acerca_De">Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cuenta
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Registrarse">Registrarse</a></li>
            <li><a class="dropdown-item" href="Ingresar">Iniciar Sesión</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    