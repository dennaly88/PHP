



<?php


include ('conexion-ps.php');



$sql = "DROP DATABASE sistema";


$result = pg_query($conexion, $sql) or die('ERROR AL ELIMINAR BASE DE DATOS: ' . pg_last_error());




?>













