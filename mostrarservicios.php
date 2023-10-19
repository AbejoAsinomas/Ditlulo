<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>mostrar servicios</title>
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <h1 class="tituloinicio">Mostrar trabajos</h1>
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
                <th>Tipo de trabajo</th>

                <th>Precio a pagar</th>
                <th>Correo</th>
                <th>Descripción</th>
                <th>Tipo de asistencia</th>
                <th>Click en la linea para copiar el correo</th>
            </tr>

            <?php
            if (isset($_GET['btns']) /*&& $_GET['Buscar']!=null*/) {
                $search = $_GET['Buscar'];
                $buscar = "%$search%";
                include("conexion.php");
                $query = "SELECT * FROM servicios WHERE tipotrabajo LIKE '$buscar' or tipoasistencia LIKE '$buscar'";
                $cons = mysqli_query($conn, $query);
                if (mysqli_num_rows($cons) !== 0) {
                    while ($vec = mysqli_fetch_array($cons)) { ?>
                        <tr>
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
                            <input type="text hidden" id="textocopiar" name="Id" value="<?php echo $vec[3] ?>">
                            </td>
                            <td>
                             <button onclick="copiarportapapeles();"></button>
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
    <script src="js/bootstrap.js"></script>
    <script src="confirmacion.js"></script>
    <script>
        function copiarportapapeles(){
            let texto = document.getElementById('textocopiar');
            texto.select();
            texto.setselectionrange(0, 99999);
            document.execCommand('copy');
        }
    </script>
    <?php include "footer.php" ?>

</body>

</html>