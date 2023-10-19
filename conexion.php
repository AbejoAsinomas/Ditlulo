<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ditlulo";
// se crea la conexión 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_errno){
    die("conenection feiled: " . $conn -> connect_errno);
}
/* else{
    echo"conexión establecida";
}*/
?>

