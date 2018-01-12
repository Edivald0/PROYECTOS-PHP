<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<?php
		include ("../v3/conexion.php");
		if (isset($_GET['id'])) {
			if (is_numeric($_GET['id'])) {
				$conexion->query("DELETE FROM conexion1 WHERE id = '{$_GET['id']}' ");
				header("location: index.php");
			}
		}
	?>
<!--<a href="index.php">inicio</a>-->


</body>
</html>