<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Calculadora con funciones</title>
</head>
<body>
	<center>
		<header><h1>Calculadora con funciones</h1> </header>
		<form name="calculadora" action="calculadora.php" method="POST">
			<label>Selecciona la Opcion</label>
			<select name="option">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="division">Division</option>
				<option value="multiplicacion">Multiplicacion</option>
			</select>
			<br><br><br>
			<label>Ingresa numeros:</label>	
			<br>
			<input type="number" name="number-one" placeholder="#" required="">
			<br>
			<input type="number" name="number-two" placeholder="#" required="">
			<br><br>
			<input type="submit" name="envia" value="ENVIAR">
		</form>
	</center>
</body>
</html>