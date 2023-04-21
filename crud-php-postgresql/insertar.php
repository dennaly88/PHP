
<?php

if (!isset($_POST["nombre"]) || !isset($_POST["edad"])) {
    exit();
}


include_once "base_de_datos.php";
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];

$sentencia = $base_de_datos->prepare("INSERT INTO mascotas(nombre, edad) VALUES (?, ?);");
$resultado = $sentencia->execute([$nombre, $edad]); 


if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: listar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}



?>








