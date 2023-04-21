


<?php


include ('pg.php');



$sql = "CREATE DATABASE sistema88888";


$result = pg_query($conexion, $sql) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());




?>




