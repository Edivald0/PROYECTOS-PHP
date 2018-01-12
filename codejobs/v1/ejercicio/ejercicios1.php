<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicios V1</title>
	<script>
		alert("Ejercicios Video 1");
	</script>
	<link rel="stylesheet" type="text/css" href="ejercicios1.css">
</head>
<body>
	<header>
		<h1>Ejercicios Video 1</h1>
	</header>
	
	<div>
		<section><h1>Funciones</h1></section>
		<?php 
			function mostrar(){
				$mostrar="Variable mostrar";
				echo $mostrar;
			};
		?>
		<p>La función muestra: <b><?php mostrar(); ?></b></p>
	</div>
	<div>
		<section><h1>Operaciones</h1></section>
		<?php 
			$a=2;
			$b=5;
			$res;
			function suma(){
				global $a,$b,$res;
				echo $res=$a+$b;
			};
			function resta(){
				global $a,$b,$res;
				echo $res=$a-$b;
			};
			function division(){
				global $a,$b,$res;
				echo $res=$a/$b;	
			};
			function multiplicacion(){
				global $a,$res;
				for ($i=0; $i <=10 ; $i++) { 
					$res=$a*$i;
					echo "2 * ".$i." = ".$res."<br>";
				}
			}
		?>
		<p>
			La <b>suma</b> de <?php echo "<b>".$a."</b>+"."<b>".$b."</b> = <b>";
			echo suma();
			echo "</b>"?>
		</p>
		<p>
			La <b>resta</b> de <?php echo "<b>".$a."</b>-"."<b>".$b."</b> = <b>";
			echo resta();
			echo "</b>"?>
		</p>
		<p>
			La <b>division</b> de <?php echo "<b>".$a."</b>/"."<b>".$b."</b> = <b>";
			echo division();
			echo "</b>"?>
		<p>
			La <b>tabla de multiplicar</b> de <?php echo "<b>".$a."</b> es: <br>";
			echo multiplicacion();
			echo "</b>"?>
	</div>
	<div class="define">
		<section><h1>Define</h1></section>
		<?php
			define("sum", "SUMA");
			define("res", "RESTA");
			define("div", "DIVISION");
			define("mul", "MULTIPLICACION");
			define("valor1", 6);
			$resul=0;
			function suma2(){
				$sum=0;
				global $resul;	
				while ($sum <= 10) {
					echo $sum." + ".valor1." = ".$resul=$sum+valor1."<br>";
					$sum++;
				}
			};
			function resta2(){
				global $resul;	
				$i=10;
				while ($i >= 0) {
					echo valor1." - ".$i." = ".$resul=valor1-$i."<br>";
					$i--;
				}
			};
			function division2(){
				global $resul;
				for ($i=1; $i <= 10; $i++) { 
					echo valor1." / ".$i." = ".$resul=valor1/$i."<br>";
				}
			};
			function multiplicacion2(){
				global $resul;
				for ($i=10; $i > 0 ; $i--) { 
					echo $i." * ".valor1." = ".$resul=$i*valor1."<br>";
				}
			};
			echo "<p>".sum."<br>";
			suma2();
			echo "</p>";
			echo "<p>".res."<br>";
			resta2();
			echo "</p>";
			echo "<p>".div."<br>";
			division2();
			echo "</p>";
			echo "<p>".mul."<br>";
			multiplicacion2();
			echo "</p>";
		?>
	</div>
	<div>
		<section><h1>foreach</h1></section>
		<?php			
			$familia = array("Karina","Erubiel","Emilio");
			reset($familia);
			foreach ($familia as $primos) {
				echo "Primos: $primos <br>";
			}
			function tios(){
				$familia2 = array(1 => 'Nestor', 2 => 'Evelia', 3 => 'Alvaro' );
				reset($familia2);
				echo "Tios: ";
				foreach ($familia2 as $tios) {
					echo "$tios, ";
				}
			};
			echo "<br>";
			tios();
			function padres(){
				$ancestos = array(0 => 'Carlos', 1 => 'Emma');
									
				reset($ancestos);
				foreach ($ancestos as $papas) {
					echo "$papas";
				}
			};
			echo "<br><br>";
			padres();
		?>
	</div>
</body>
</html>