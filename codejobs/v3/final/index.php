<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Video 4</title>
</head>
<body>
	<center>
		<form name="form" method="POST" action="guardar.php">
			<label>Nombre: </label>
			<br>
			<input type="text" name="nombre" placeholder="Nombre" required="">
			<br><br>
			<label>Apellido PATERNO</label>
			<br>
			<input type="text" name="apellidop" placeholder="Apellido Paterno" required="">
			<br><br>
			<label>Apellido PATERNO</label>
			<br>
			<input type="text" name="apellidom" placeholder="Apellido Materno" required="">
			<br><br>
			<label>CORREO</label>
			<br>
			<input type="mail" name="correo" placeholder="@" required="">
			<br><br>
			<label>PASSWORD</label>
			<br>
			<input type="password" name="password" placeholder="******" required="">
			<br><br>
			<input type="submit" name="envio" value="EMVIAR">
		</form>
		<br><br>
		<a href="imprimir.php">Mostrar</a>
		<br><br>
		<a href="editar-imprimir.php">Editar</a><br><br><br>
		<a href="../index.php">Inicio Video 3</a>
	</center>
</body>
</html>