



<?php
include ('conexion.php');
$activo =$_POST['ac'];
$ip =$_POST['ip'];
$bn =$_POST['bn'];
$clave_administrador =$_POST['cl'];
$ssid =$_POST['ssid'];
$clave_paso =$_POST['cla'];
$verificado =$_POST['ver'];
$seria =$_POST['ser'];
$modelo =$_POST['mod'];
$gerencia =$_POST['ger'];
$ubicacion =$_POST['ubi'];
$marca =$_POST['mar'];

$query = "INSERT INTO wifi(activo,ip,bn,clave_administrador,ssid,clave_paso,verificado,seria,modelo,marca,gerencia,lugar) VALUES ('$activo','$ip','$bn','$clave_administrador','$ssid','$clave_paso','$verificado','$seria','$modelo','$marca','$gerencia','$ubicacion')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-wifi.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 

?>