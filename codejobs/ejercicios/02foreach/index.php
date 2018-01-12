<!DOCTYPE html>
<html>
<head>
	<title>foreach</title>
</head>
<body>
	<?php
  			$array = array("Apple", "Pear", "Banana");
  				foreach ($array as $fruit) {
  					echo "Fruit: $fruit <br>";	
  				}
  			echo "<br><hr><br>";
  			echo $array[0]."<br>";
  			echo $array[1]."<br>";
  			echo $array[2]."<br>";

  			define("text2", "El valor de pi = ");
  			define("PI", 3.1416);
  			function imprimir(){
  				echo text2 . PI;
  			}
  			imprimir();
  			define(3, 3);
  			define(4, 4);
  			$res =3*4;
  			echo $res;

  			for ($i=0; $i <= 5 ; $i++) { 
  				echo $i . "<br>";
  			}
  			$iteracion = 1;
  			while ($iteracion <= 10) {
  				echo $iteracion;
  				$iteracion++;
  			}
  		?>
  		


  		
</body>
</html>