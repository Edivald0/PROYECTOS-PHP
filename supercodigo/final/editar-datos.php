<!DOCTYPE html>
<html>
<head>
	<title>Editar Datos</title>
</head>
<body>
	<?php
		include ("conexion.php");
		if (isset($_GET['id'])) {
			$datos = $conexion->query("SELECT * FROM conexion1 WHERE id = '{$_GET['id']}' ");
			$user = mysqli_fetch_assoc($datos);
		}
	?>
	<center>
		<header><h1>Editar Datos</h1></header>			
		<form name="form" method="POST" action="guardar-editar.php">
			<label>Nombre</label>
			<br>
			<input type="text" name="nombre" value="<?php echo $user['nombre']; ?>" />
			<br><br>
			<label>Apellido Paterno</label>
			<br>
			<input type="text" name="apellidop" value="<?php echo $user['apellidop']; ?>" />
			<br><br>
			<label>Apellido Materno</label>
			<br>
			<input type="text" name="apellidom" value="<?php echo $user['apellidom']; ?>" />
			<br><br>
			<label>Correo</label>
			<br>
			<input type="email" name="correo" value="<?php echo $user['correo']; ?>" />
			<br><br>
			<label>Password</label>
			<br>
			<input type="password" name="password">
			<br>
			<input type="hidden" name="identificador" value="<?php echo $user['id']; ?>" />
			<br><br>
			<input type="submit" name="envio-date-edit" value="ENVIAR">
		</form>
		<br><br>
		<a href="index.php">Inicio</a>
		<br><br>
		<a href="imprimir.php">Mostrar</a>
		<br><br>
		<a href="editar.imprimir.php">Editar</a>
	</center>
</body>
</html>