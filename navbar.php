<?php
  session_start();
  if(!isset($_SESSION['Cedula'])){
    header('location:iniciodesesion.php');
  } else{
    $rol = $_SESSION['Rol'];
    if($rol ==1 ){ ?>
    <!-- Barra navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="imgs/ditlulo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="mostrar.php">Mostrar usuarios</a></li>
          <li class="nav-item"><a class="nav-link" href="mostrarservicios.php">Mostrar servicios</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Servicios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">Reportar problema</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="miperfil.php">Ver perfil</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="iniciodesesion.php"><button class="btn btn-outline-success" type="button">Iniciar sesión</button></a>
        </form>
        <form class="d-flex" role="search">
          <a href="iniciodesesion.php"><button class="btn btn-outline-danger" type="button">Cerrar sesión</button></a>
        </form>
      </div>
    </div>
  </nav>
  <?php

    }
  }
?>
