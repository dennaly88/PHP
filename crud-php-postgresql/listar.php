
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("select id, nombre, edad from mascotas");
$mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<?php include_once "encabezado.php" ?>
<div class="row">
	<div class="col-12">
		
	
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Edad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>	
					<?php foreach($mascotas as $mascota){ ?>
						<tr>
							<td><?php echo $mascota->id ?></td>
							<td><?php echo $mascota->nombre ?></td>
							<td><?php echo $mascota->edad ?></td>
							<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $mascota->id?>">Editar 📝</a></td>
							<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $mascota->id?>">Eliminar 🗑️</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table></div></div></div>
<?php include_once "pie.php" ?>



