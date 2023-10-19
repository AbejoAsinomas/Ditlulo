<?php
    include 'conexion.php';
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $clave = $_POST['clave'];
    $numero=$_POST['numero'];
    $ruta = 'image/'.$_FILES['image']['name'];//Captura el nombre de la imagen 
    $nombre = $_FILES['image']['tmp_name'];//nombra temporal
    move_uploaded_file($nombre,$ruta);//mnada la imagen a la carpeta del proyecto

    //if()
    $query = "INSERT INTO
        usuarios(Cedula, Nombre, Apellido, Correo, Direccion, clave, numero, rol, ruta)
        VALUES('$documento', '$nombre', '$apellido','$correo', '$direccion', '$clave', '$numero',2,'$ruta')";
    $consulta = mysqli_query($conn, $query);
    if ($consulta) {
        echo "  <script> alert ('Registrado correctamente, por favor inicia sesión.');
        location.href = 'iniciodesesion.php';
        </script>";
    } else {
        echo " <script> alert ('Ha sucedido un error');
        location.href = 'iniciodesesion.php';
        </script> ";
    }

?>