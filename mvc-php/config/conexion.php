<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "danny", "Danny16029567*", "mvc");
			return $conexion;
			
		}
	}
?>


   