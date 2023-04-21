




<?php

include('conexion.php');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$correo= $_POST['correo'];
$carrera = $_POST['carrera'];



$sql = "INSERT INTO  alumno(nombre,apellido,cedula,telefono,correo,carrera) VALUES 
('$nombre','$apellido','$cedula','$telefono','$correo','$carrera')";
if (mysqli_query($conn, $sql)) {
      
      
     
    
      header("location:insertar-datos2.php.php");
  
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);




?>





      