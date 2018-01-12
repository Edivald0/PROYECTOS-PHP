<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario Editar</title>
</head>
<body>
	<?php
		include ("conexion.php");
		$datos = $conexion->query("SELECT * FROM conexion1");
	?>
	<center>
		<header><h1>EDITAR</h1></header>
		<table>
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apelido Paterno</th>
				<th>Apelido Materno</th>
				<th>Correo</th>
				<th>PW</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</thead>
			<tbody>
				<?php while ($user = mysqli_fetch_array($datos) ) : ?>
					<tr>
						<td><?php echo $user[ 'id' ]; ?></td>
						<td><?php echo $user[ 'nombre' ]; ?></td>
						<td><?php echo $user[ 'apellidop' ]; ?></td>
						<td><?php echo $user[ 'apellidom' ]; ?></td>
						<td><?php echo $user[ 'correo' ]; ?></td>
						<td><?php echo $user[ 'password' ]; ?></td>
						<td><a href="editar-datos.php?id=<?php echo  $user[ 'id' ]; ?>">EDIT</a></td>
						<td><a href="eliminar.php?id=<?php echo  $user[ 'id' ]; ?>">X</a></td>
					</tr>
				<?php endwhile ?>
			</tbody>
		</table>
		<a href="index.php">Inicio</a>
	</center>
</body>
</html>