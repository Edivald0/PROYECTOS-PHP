<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mail edi</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<center>
		<form name="mailedi" action="mail.php" method="POST">
			<label>Nombre:</label><br>
			<input type="text" name="name">
			<br>
			<label>email</label><br>
			<input type="email" name="email" required="">
			<br>
			<label>Telefono</label><br>
			<input type="tel" name="phone">
			<br>
			<label>Asunto</label><br>
			<input type="text" name="subject">
			<br>
			<label>Mensaje</label><br>
			<textarea name="message" required=""></textarea>
			<br><br><br>
			<input type="submit" name="envio" value="ENVIO">
		</form>
	</center>
	<footer>
		edi | 2017
	</footer>
	
</body>
</html>