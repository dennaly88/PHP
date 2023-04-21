




<?php 
 $temperatura = 23;
 
 switch ($temperatura) {
 case 10:
 echo "Ambiente Frio";
 break;
 
 case 15:
 echo "Ambiente Templado";
 break;
 
 case 23:
 echo "Ambiente Agradable";
 break;

 case 34:
 echo "Ambiente con calor semi intenso";
 break;
  
 default:
 echo "No tengo lectura de calor";
 break;
 }
?>