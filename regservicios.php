<?php
include 'conexion.php';
$tipotrabajo = $_POST['tipotrabajo'];
$precio = $_POST['precio'];
$correo = $_POST['correo'];
$descripcion = $_POST['descripcion'];
$tipoasistencia = $_POST['tipoasistencia'];
$query = "INSERT INTO
        servicios(tipotrabajo, precio, correo, descripcion, tipoasistencia)
        VALUES('$tipotrabajo', '$precio','$correo', '$descripcion', '$tipoasistencia')";
$consulta = mysqli_query($conn, $query);
if ($consulta) {
    echo "  <script> alert ('Registrado correctamente');
        location.href = 'index.php';
        </script>";
} else {
    echo " <script> alert ('Ha sucedido un error');
        location.href = 'iniciodesesion.php';
        </script> ";
}
?>