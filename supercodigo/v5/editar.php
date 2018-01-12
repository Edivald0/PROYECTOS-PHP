<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Video 5 | Ediatr</title>
</head>
<body>
	<?php
	//Crear la conexion
		include ("../v3/conexion.php");
	//Validar si existe una variable $_GET['id']
		if (isset( $_GET[ 'id' ] ) ) {
			//query de consulta
			$datos = $conexion->query("SELECT * FROM conexion1 WHERE id = '{$_GET['id']}' ");
			//pasar los datos de la consulta a un array
			$user = mysqli_fetch_assoc($datos);

		}
	?>
	<center>
		<h1>EDITAR</h1>
		<form name="form" method="POST" action="guardar-editar.php">
			<label>Nombre: </label>
			<input type="text" name="nombre" value="<?php echo $user[ 'nombre' ]; ?>" />
			<br><br>
			<label>APE PATERNO</label>
			<input type="text" name="apellidop" value="<?php echo $user[ 'apellidop' ]; ?>" />
			<br><br>
			<label>APE PATERNO</label>
			<input type="text" name="apellidom" value="<?php echo $user[ 'apellidom' ]; ?>" />
			<br><br>
			<label>CORREO</label>
			<input type="mail" name="correo" value="<?php echo $user[ 'correo' ]; ?>" />
			<br><br>
			<label>PASSWORD</label>
			<input type="password" name="password" value="<?php echo $user[ 'password' ]; ?>" />
			<br><br>
			<!-- Variable hidden para que el archivo guardar-editar.php sepa cual es el usuario a guardar -->
			<input type="hidden" name="id" value="<?php echo $user[ 'id' ]; ?>" />

			<input type="submit" name="envio" value="EMVIAR">
		</form>
		<br><br>
		<a href="../v3/index.php">Mostrar</a>
	</center>
</body>
</html>