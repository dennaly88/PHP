




<?php
include ('conexion.php');
$id = $_GET['id'];

 
     $sql = "DELETE FROM gerencias WHERE id ='$id'";
     $result = pg_query($sql) or die('Query failed: ' .pg_last_error());
          header("Location: http:../principal-administrar.php?usu=3");
          
    
      
?>






