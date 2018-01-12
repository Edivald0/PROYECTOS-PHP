<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<?php 
		
		function resultado(){
			$option = $_POST[ 'option' ];
			$number_one = $_POST[ 'number-one' ];
			$number_two = $_POST[ 'number-two' ];
			if ($option == 'suma') {
				$resultado = $number_one + $number_two;
				echo "<center>El resultado de la suma <b>". $number_one . "</b> + <b>". $number_two . "</b> = ". $resultado . "</center>";
			}
			if ( $option == 'resta' ) {
				$resultado = $number_one - $number_two;
				echo "<center>El resultado de la resta <b>" . $number_one . "</b> - <b>" . $number_two . "</b> = " . $resultado . "</center>";
			}
			if ( $option == 'division' ) {
				$resultado = $number_one / $number_two;
				echo "<center>El resultado de la division <b>" . $number_one . "</b> / <b>" . $number_two . "</b> = " . $resultado . "</center>";
			}
			if ( $option == 'multiplicacion' ) {
				$resultado = $number_one * $number_two;
				echo "<center>El resultado de la multiplicacion <b>" . $number_one . "</b> * <b>" . $number_two . "</b> = " . $resultado . "</center>";
			}	
		}
		echo resultado() . "<center><br><br><br><a href='index.php'>Home</a></center";

	?>
</body>
</html>