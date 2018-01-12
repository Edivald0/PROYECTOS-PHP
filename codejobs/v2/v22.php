<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"; > <!-- Para la codificacion usada-->
		<meta name="description" content="Ejemplo de CSS3 y HTML5" >
		<meta name="keywords" content="html5, css3" >
		<meta name="author" content="Edivaldo Martínez Moreno" >
		<link rel="stylesheet" type="text/css" href="stylev12.css">
		<title>v22.php</title>
		<title>v22.php</title>
	</head>
	<body>
		<header><h1>Ejercicios hasta el video 2</h1></header>
		<section>
			<h2>Funcion para pasar parametros</h2>
			<?php
				define("val1", 5);
				function pasar(){
					$resultado = 0;
					$resultado = val1*2;
					echo $resultado;
				}
			?>
			<p>El resultado de <?php  echo "<b>". val1. "</b>"; ?> * <b>2</b> = <?php echo pasar(); ?></p>
		</section>
		<section>
			<h2>Impresion de ARRAYS numericos</h2>
			<p>
				<?php					
					$arreglo = array (0 => "Edivaldo", 1 => "Martínez", "apeM" => "Moreno");
					echo "Mi nombre es: ". $arreglo[0]. " ". $arreglo[1]. " ". $arreglo["apeM"];
				?>
			</p>
		</section>
		<section>
			<h2>Impresion de ARRAYS multidimensionales</h2>
			<?php
				function multidimensional (){
					$multidimensional = array (array (0 => "Tengo", 1 => 22, 2 => "años"),
											   array ("civil" => "soltero", "sexo" => "masculino")
							);
					echo "<b>Impresion 1: </b><br>". $multidimensional[0][0]. " ". $multidimensional[0][1]. " ". $multidimensional[0][2];
					echo "<br><b>Impresion 2</b><br>Genero: ". $multidimensional[1]["sexo"]. "<br>Estado civil: ". $multidimensional[1]["civil"];
				}
			?>
			<p><b>Impresion: </b> <?php echo multidimensional(); ?></p>
		</section>
	</body>
</html>