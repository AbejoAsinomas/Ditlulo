<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Barra navegación -->
    <?php include "navbar.php" ?>
    <!-- Fin barra navegación -->
    <div class="container">
        <h1 class="tituloinicio">Mostrar Usuarios</h1>
        <div class="container">
            <div class="container-fluid">
                <form class="d-flex">
                    <input autofocus name="Buscar" class="form-control me-2" type="search" placeholder="Search"
                        aria-label="Buscar">
                    <button name="btns" class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>

        <table class="table table-striped">
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Clave</th>
                <th>Número</th>
                <th>Edit/Borr</th>
            </tr>

            <?php
            if (isset($_GET['btns']) /*&& $_GET['Buscar']!=null*/) {
                $search = $_GET['Buscar'];
                $buscar = "%$search%";
                include("conexion.php");
                $query = "SELECT * FROM usuarios WHERE Cedula LIKE '$buscar' or Nombre LIKE '$buscar'";
                $cons = mysqli_query($conn, $query);
                if (mysqli_num_rows($cons) !== 0) {
                    while ($vec = mysqli_fetch_array($cons)) { ?>
                        <tr>
                            <td>
                                <?php echo $vec[0] ?>
                            </td>
                            <td>
                                <?php echo $vec[1] ?>
                            </td>
                            <td>
                                <?php echo $vec[2] ?>
                            </td>
                            <td>
                                <?php echo $vec[3] ?>
                            </td>
                            <td>
                                <?php echo $vec[4] ?>
                            </td>
                            <td>
                                <?php echo $vec[5] ?>
                            </td>
                            <td>
                                <?php echo $vec[6]; ?>
                            </td>
                            <td>
                                <a href='editusuario.php?documento=<?php echo $vec[0] ?>'><i class='ri-edit-2-line'></i></a>
                                <a href='eliminar.php?documento=<?php echo $vec[0] ?>'><i class='ri-eraser-line'></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    <?php
                } else {
                    echo "No se encontraron datos para esta busqueda.";
                }
            } else {
                echo "Escribe un indicio de búsqueda.";
            }
            ?>
        </table>
    </div>
    <?php include "footer.php" ?>

    <script src="js/bootstrap.js"></script>
    <script src="confirmacion.js"></script>
</body>

</html>