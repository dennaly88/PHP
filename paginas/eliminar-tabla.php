


<?php

$servername = "localhost";
$database = "curso-php";
$username = "danny";
$password = "Danny16029567*";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexion Fallida porfavor : " . mysqli_connect_error());
}

$sql = "DROP TABLE alumno ";

    if ($conn->query($sql) === TRUE) {
        echo "Tabla Eliminada.";
    } else {
        echo "Error al eliminar la tabla: " . $conn->error;
    }
    $conn->close();




?>







