<?php
/*Capturo la viariable que viene del formulario con la llave primaria*/
$Id = $_GET['Id'];
include 'conexion.php';
/*creo la consulta*/
$query = "SELECT * FROM servicios WHERE Id=$Id";
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
    <title>Servicio</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Fin barra navegación -->
    <?php include "navbar.php" ?>
    <!-- inicio form control -->
    <div class="container">
        <form action=".php" method="post">
            <div class="container">
                <form class="row g-3">
                    <div class="col-md-3">
                        <label for="inputZip" class="form-label">Id</label>
                        <div class="container_table">
                            <?php echo $vec[0] ?>
                        </div>
                        <input type="hidden" class="form-control" id="inputZip" name="Id" required
                            value="<?php echo $vec[0] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="inputZip" class="form-label">Tipo de trabajo</label>
                        <input type="text" class="form-control" id="inputZip" name="tipotrabajo" required
                            value="<?php echo $vec[1] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="inputZip" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="inputZip" name="precio" required
                            value="<?php echo $vec[2] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="inputEmail4" name="correo"
                            placeholder="correo123@ejemplo.com" required value="<?php echo $vec[3] ?>">
                    </div>
                    <div class="col">
                        <label for="inputZip" class="form-label">Descripción</label>
                        <!-- <input type="text" class="form-control" id="inputZip" name="descripcion" required -->
                            <!-- value=" <?php //echo $vec[4] ?>"> -->
                        <textarea name="tipoasistencia" class="form-control" id="" cols="60" rows="3"
                            value="<?php echo $vec[4] ?>"></textarea>
                    </div>
                    <div class="col">
                        <label for="inputAddress" class="form-label">Tipo de asistencia</label>
                        <input type="text" class="form-control" id="inputAddress" name="tipoasistencia" required
                            value="<?php echo $vec[5] ?>">

                    </div>
                    <!-- <button type="submit" class="btn btn-outline-success" style="margin:10px">Actualizar</button> -->
                </form>
            </div>
        </form>
    </div>
    <!-- fin form control -->

    <?php include "footer.php" ?>

    <script src="js/bootstrap.js"></script>
</body>

</html>