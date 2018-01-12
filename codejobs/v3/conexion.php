<!DOCTYPE html>
<html>
<head>
	<title>conexion.php</title>
</head>
<body>
	<?php
		$conexion = mysql_connect("localhost", "root", "");
		if (!$conexion) {
			exit("DB error".mysql_errno());
		}
		mysql_select_db("conexion");
		$query = mysql_query("SELECT * FROM conexion1", $conexion);
		die(var_dump($query));
		echo "Registros: ". mysql_num_rows($query);
	?>
</body>
</html>