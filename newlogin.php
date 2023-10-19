<?php
if (isset($_POST ['btn'])){
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    include 'conexion.php';
    $q="SELECT * FROM usuarios
        WHERE Correo = '$correo' and Clave='$clave'";
$c=mysqli_query($conn,$q);
if(mysqli_num_rows($c)==1){
    $v=mysqli_fetch_array($c);
    session_start();
    $_SESSION ['Cedula']=$v[0];
    $_SESSION ['Correo']=$v[1];
    $_SESSION ['Nombre']=$v[2];
    $_SESSION ['Rol']=$v[7];
    if($v['Rol']==1){
        echo "<script>alert('Bienvenido Administrador');    
                        window.location.href='index.php'</script>";
    }else if ($v['Rol']==2){
        echo "<script>alert('Bienvenido Usuario');
                        window.location.href='index.php';</script>";
    }
    }
}
?>