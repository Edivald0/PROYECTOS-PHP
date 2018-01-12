<!DOCTYPE html>
<html>
<head>
	<title>Mostar Datos</title>
</head>
<body>
	<?php
		$con = new mysqli("localhost", "pwebcast_edivald", "EdDesarrollo.2017", "pwebcast_db_edivaldo");

		$datos = $con->query("SELECT * FROM notas") ;
	?>
<table>
	<thead>
		<th>id</th>
		<th>Titulo</th>
		<th>Nota</th>
		<th>Date</th>
	</thead>
	<tbody>
		<?php while ($user = mysqli_fetch_array($datos)){ ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['titulo']; ?></td>
			<td><?php echo $user['nota']; ?></td>
			<td><?php echo $user['date']; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>



</body>
</html>



