<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>
	<h1>NUMERICO</h1>
	<?php
		$array = array("numerico-1" ,"numerico-2", "numerico-3", "numerico-4", 5 );
		echo $array[0]."<br>";
		echo $array[1]."<br>";
		echo $array[2]."<br>";
		echo $array[3]."<br>";
		echo $array[4]."<br><br>";
		
		$res = count($array);
			foreach ($array as $value) {
				echo $value."<br>";
		}
		for ($i=0; $i < $res ; $i++) { 
			echo $array[$i]."<br>";
		}

	?>
	<h1>ASOCIATIVO</h1>
	<?php
		$asociativo = array( "uno" => "Numero 1", "dos" => "Numero 2", 3 => 3, 4 => "Numero 4", "cinco" => 5);
		foreach ($asociativo as $value) {
			echo "$value<br>";
		}
	?>
	<h1>MULTIDIMENSIONAL</h1>
	<?php
		$familiar = array(  array ("hermanos"=>"Eunice", "primos"=>"Daniela", "tios"=>"Nestor"),
  						   	array (0=>20, 1=>12, 2=>32)
  					);
		$k = count($familiar);

  			echo $familiar[0]["hermanos"];
  			echo "<br>".$familiar[1][0];
  			echo "<br>".$familiar[0]["primos"];
  			echo "<br>".$familiar[1][1];
  			echo "<br>".$familiar[0]["tios"];
  			echo "<br>".$familiar[1][2];
			echo "<br><br>";
			foreach ($familiar as $key => $value) {
				echo $value;
			}
			for ($i=0; $i <= $k; $i++) { 
				for ($j=0; $j <=$k ; $j++) { 
					echo $familiar[$i][$j];
				}
			}
	?>

</body>
</html>