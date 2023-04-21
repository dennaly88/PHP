<?php
 
$conexion=pg_connect(" 
   host=localhost 
   port=5432 
   dbname=php 
   user=danny 
   password=Danny16029567*")
    or die
  (" Conexion Fallida " . pg_last_error());
 
 
if(!$conexion) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "La Conexion fue Correcta\n";
}
 

 
?>