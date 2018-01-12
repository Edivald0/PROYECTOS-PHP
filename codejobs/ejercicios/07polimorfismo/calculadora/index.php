<!DOCTYPE html>
<html>
<head>
	<title>CalculadoRa | POO</title>
</head>
<body">
	<center>
		<header>
			<h1>CALCULADORA | POO</h1>
		</header>

		<section>
			<form name="form" method="POST" action="">
				<select name="option">
					<option value="nulo"> ------ </option>
					<option value="suma">Suma</option>
					<option value="resta">Resta</option>
					<option value="multiplicacion">Multiplicacion</option>
					<option value="division">Division</option>
				</select>
				<br><br>
				<label>Numero 1</label>
				<br>
				<input type="number" name="number_one" required="" placeholder="0">
				<br><br>
				<label>Numero 2</label>
				<br>
				<input type="number" name="number_two" required="" placeholder="0">
				<br><br>
				
				<br><br><br>
				<input type="submit" name="enviar" value="=">
			</form>
		</section>

	</center>
	<?php
		include 'calculadora.php';
		//include 'value.php';
		$calculadora = new Calculadora();
		@$option = $_POST['option'];
    	@$number_one = $_POST['number_one'];
    	@$number_two = $_POST['number_two'];
		

    		if ($option == 'nulo') {
                echo "<center><h2>Ingrese operacion<h2></center>";
           	}
           	if ($option == 'suma') {
                echo "<center>". $number_one. ' + ' . $number_two. '</center>'.  $calculadora->Suma( $number_one, $number_two );
            }
            if ($option == 'resta') {
                echo "<center>". $number_one. ' - ' . $number_two. '</center>'.  $calculadora->Resta( $number_one, $number_two );
            } 
            if ($option == 'multiplicacion') {
                echo "<center>". $number_one. ' * ' . $number_two. '</center>'.  $calculadora->Multiplicacion( $number_one, $number_two );
            } 
            if ($option == 'division') {
                echo "<center>". $number_one. ' / ' . $number_two. '</center>'.  $calculadora->Division( $number_one, $number_two );
            } 
		
	?>	
</body>
</html>