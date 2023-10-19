<?php
/*Capturo la viariable que viene del formulario con la llave primaria*/
$documento = $_GET['documento'];
include 'conexion.php';
/*creo la consulta*/
$query = "SELECT * FROM usuarios WHERE Cedula=$documento";
/*ejecuto la consulta con la función*/
$cons = mysqli_query($conn, $query);
/*convierto el resultado en vector para acceder*/
/*facilmente los datos*/
$vec = mysqli_fetch_array($cons);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de usuarios</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- Fin barra navegación -->
  <?php include "navbar.php" ?>
  <!-- inicio form control -->
  <form action="update.php" method="post">
    <div class="container">
      <form class="row g-3">
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Cédula</label>
          <div class="container_table"><?php echo $vec[0]?></div>
          <input type="hidden" class="form-control" id="inputZip" name="documento" required value="<?php echo $vec[0]?>">
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="inputZip" name="nombre" required value="<?php echo $vec[1]?>">
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="inputZip" name="apellido" required value="<?php echo $vec[2]?>">
        </div>
        <div class="col-md-2">
          <label for="inputEmail4" class="form-label">Correo</label>
          <input type="email" class="form-control" id="inputEmail4" name="correo" placeholder="correo123@ejemplo.com" required value="<?php echo $vec[3]?>">
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Contraseña</label>
          <input type="text" class="form-control" id="inputZip" name="clave" required value="<?php echo $vec[4]?>">
        </div>
        <div class="col-md-2">
          <label for="inputAddress" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="inputAddress" name="direccion" required value="<?php echo $vec[5]?>">
        </div>
        <div class="col-md-2">
          <label for="inputAddress" class="form-label">Número de contacto</label>
          <input type="number" class="form-control" id="inputAddress" name="numero" required value="<?php echo $vec[6]?>">
        </div>
        <button type="submit" class="btn btn-outline-success" style="margin:10px">Actualizar</button>
      </form>
    </div>
  </form>
  <!-- fin form control -->


  <script src="js/bootstrap.js"></script>
</body>

</html>