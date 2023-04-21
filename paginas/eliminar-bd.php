

<?php

$servername = "localhost";
$username = "danny";
$password = "Danny16029567*";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Fallo de Conexión: " . $conn->connect_error);
} 

$sql = "DROP DATABASE sistema";
if ($conn->query($sql) === TRUE) {
    echo "Base de Datos Eliminada.";
} else {
    echo "Error al Eliminar la Base de Datos:". $conn->error;
}


$conn->close();

?>




