


<?php

$servername = "localhost";
$database = "curso-php";
$username = "danny";
$password = "Danny16029567*";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexion Fallida porfavor : " . mysqli_connect_error());
}
echo "Conexion Correcta ";
//mysqli_close($conn);

?>






