<?php
    include 'conexion.php';
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $clave = $_POST['clave'];
    $numero=$_POST['numero'];

    
    $actualizar = "UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido', Correo='$correo', 
                Direccion='$direccion', Clave='$clave', Numero='$numero' WHERE Cedula='$documento'";
       
    $consulta = mysqli_query($conn, $actualizar);
    
    if ($consulta) {
        echo "  <script> alert ('Actualizado correctamente');
        location.href = 'mostrar.php';
        </script>";
    } else {
        echo " <script> alert ('Ha sucedido un error');
        location.href = 'mostrar.php';
        </script> ";
    }

?>