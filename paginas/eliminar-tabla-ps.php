




<?php

include ('pg.php');
$sql = "DROP TABLE alumno2";
$result = pg_query($conexion, $sql) or die('ERROR AL ELIMINAR TABLA: ' . pg_last_error());




?>


















