<!DOCTYPE html>
<html>
<head>
	<title>Video 3</title>
</head>
<body>
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
			//Ikmoresion de los datos
				while ($user = mysqli_fetch_array($datos)) :
			?>
			<tr>
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user['nombre']; ?></td>
				<td><?php echo $user['apellidop']; ?></td>
				<td><?php echo $user['apellidom']; ?></td>
				<td><?php echo $user['correo']; ?></td>
				<td><?php echo $user['password']; ?></td>
			</tr>
<?php endwhile ?>
		</tbody>
	</table>



</body>
</html>