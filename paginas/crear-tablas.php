


<?php

$servername = "localhost";
$database = "curso-php";
$username = "danny";
$password = "Danny16029567*";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexion Fallida porfavor : " . mysqli_connect_error());
}

$sql = "CREATE TABLE alumno (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    cedula VARCHAR(30) NOT NULL, 
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    telefono VARCHAR(30) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    carrera VARCHAR(30) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabla Creada.";
    } else {
        echo "Error al crear la tabla: " . $conn->error;
    }
    $conn->close();




?>







