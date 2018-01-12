	<?php
		include ("conexion.php");
		if (isset($_GET['id'])) {
			if (is_numeric($_GET['id'])) {
				$conexion->query("DELETE FROM conexion1 WHERE id = '{$_GET['id']}' ");
				header('location: imprimir.php');
			}
		}
	?>