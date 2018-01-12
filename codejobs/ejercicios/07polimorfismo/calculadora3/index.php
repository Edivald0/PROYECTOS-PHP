<!DOCTYPE html>
<html>
<head>
	<title>Calculadora 3</title>
</head>
<body>
	<center>
		<header>
			<h1>Calculadora 3</h1>
		</header>
		<section>
			<form name="form" method="GET" action="">
				<label>Numero:</label>
				<br>
				<input type="number" name="number_1" value="0">
				<br>
				<label>Numero:</label>
				<br>
				<input type="number" name="number_2" value="0">
				<br><br>
				<input type="submit" name="suma" value="+">
				<input type="submit" name="resta" value="-x">
				<input type="submit" name="multiplicacion" value="x">
				<input type="submit" name="division" value="/">
			</form>

			<?php
			include 'calculadora.php';
			include 'suma.php';
			include 'resta.php';
			include 'multiplicacion.php';
			include 'division.php';
			
			$sum = new Suma( $n1, $n2 );
			$res = new Resta( $n1, $n2 );
			$mul = new Multiplicacion( $n1, $n2 );
			$div = new Division( $n1, $n2 );

			if (isset($suma)) {
				echo $n1. " + ". $n2. " = <h2>". $sum->Operacion(). "</h2>";
			}
			if (isset($resta)) {
				echo $n1. " - ". $n2. " = <h2>". $res->Operacion(). "</h2>";
			}
			if (isset($multiplicacion)) {
				echo $n1. " x ". $n2. " = <h2>". $mul->Operacion(). "</h2>";
			}
			if (isset($division)) {
				echo $n1. " / ". $n2. " = <h2>". $div->Operacion(). "</h2>";
			}
			?>
		</section>
	</center>
</body>
</html>