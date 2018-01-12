<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Video 3</title>
	<style type="text/css">
		table{
			border: 1px solid red;
		}
	</style>
</head>
<body>
	<centar>
	<?php
		//$conexion = new mysqli ("localhost", "root", "", "conexion");
		include ("conexion.php");
		//Consulta de datos guardados en la DB
		$datos = $conexion->query("SELECT * FROM conexion1");
	?>
	
		<table>
			<thead>
				<th>id</th>
				<th>Nombre</th>
				<th>Ape P</th>
				<th>Ape M</th>
				<th>Correo</th>
				<th>Pass</th>
			</thead>
			<tbody>
				<?php 
				//Impresion de los datos
					while ($user = mysqli_fetch_array("$datos")) :
				?>
					<tr>
						<td><?php echo $user['id']; ?></td>
						<td><?php echo $user['nombre']; ?></td>
						<td><?php echo $user['apellidop']; ?></td>
						<td><?php echo $user['apellidom']; ?></td>
						<td><?php echo $user['correo']; ?></td>
						<td><?php echo md5($user [ 'password' ]); ?></td>

					</tr>
				<?php endwhile ?>
			</tbody>
		</table>
	
	<a href="index.php">Inicio</a>
	<a href="editar-imprimir.php">Editar</a>

	</centar>
</body>
</html>