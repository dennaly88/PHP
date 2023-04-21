




<?php

include ('pg.php');
    $sql = "CREATE TABLE alumno2 (
    cedula VARCHAR(30) NOT NULL, 
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    telefono VARCHAR(30) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    carrera VARCHAR(30) NOT NULL
    )";
$result = pg_query($conexion, $sql) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());




?>













