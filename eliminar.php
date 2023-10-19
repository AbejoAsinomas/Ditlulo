<?php
include 'conexion.php';
$documento = $_GET['documento'];
$delete = "DELETE FROM usuarios WHERE Cedula='$documento'";
$consulta = mysqli_query($conn, $delete);
if ($consulta) {
    header("location: mostrar.php");
} else {
    echo " <script> alert ('Ha sucedido un error');
        location.href = 'mostrar.php';
        </script> ";
}
?>