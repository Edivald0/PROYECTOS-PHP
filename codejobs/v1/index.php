  <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"; > <!-- Para la codificacion usada-->
	<meta name="description" content="Ejemplo de CSS3 y HTML5" >
	<meta name="keywords" content="html5, css3" >
	<meta name="author" content="Edivaldo Martínez Moreno" >
	<link rel="stylesheet" type="text/css" href="css/stylev11.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>V1-1.php</title>

<!-- menu -->
<!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
<script src="http://code.jquery.com/jquery-latest.js"></script><!-- Jquery para hacer responsive desing -->




</head>


<body>
	<header>
    <figure>
  		<img src="imagenes/header.jpg">
    </figure>
		<div class="titulo">
			VIDEO 1<br> 
			<a href="https://www.codejobs.biz/es/blog/category/php" class="subtitulo">  Curso CodeJobs php.<br></a>
      <a href="ejercicio/ejercicios1.php" class="subtitulo2">Ejercicios</a>
		</div>
 <!-- MENU-->   
 <div class="menu_bar">
  <a href="" class="bt-menu">Temas</a>
 </div>
<nav>
 
  <ul>
    <li><a href="">What is php?</a></li>
    <li><a href="">PHP instalation</a></li>
    <li><a href="">How does php work?</a> </li>
    <li><a href="">My first web page with php</a></li>
    <li><a href=""> how to upload a php file to a server</a></li>
    <li><a href=""> Variables</a></li>
    <li><a href=""> Comments</a></li>
    <li><a href=""> Constants</a></li>
    <li><a href=""> Operators</a></li>
    <li><a href=""> if</a></li>
    <li><a href=""> if...else</a></li>
    <li><a href=""> if...else...if</a></li>
    <li><a href=""> Compact if(?:)</a></li>
  </ul>
</nav>
    


	</header>

<!--  
  <div class="temas">  
      <ol>
        <li><a href="">What is php?</a></li>
              <li><a href="">PHP instalation</a></li>
              <li>How does php work?</li>
        <li><a href="">My first web page with php</a></li>
        <li><a href=""> how to upload a php file to a server</a></li>
        <li><a href=""> Variables</a></li>
        <li><a href=""> Comments</a></li>
        <li><a href=""> Constants</a></li>
        <li><a href=""> Operators</a></li>
        <li><a href=""> if</a></li>
        <li><a href=""> if...else</a></li>
        <li><a href=""> if...else...if</a></li>
        <li><a href=""> Compact if(?:)</a></li>
i      </ol>   
    </div>
-->
                                   <!--                     SECCION 1                   -->
	<section class="sec1"><h1><?php echo "1er PROGRAMA (HTML)"; ?></h1></section>

	<?php
	    $variable1 = "1er PROGRAMA (PHP)";
	    $texto = "Seccion 2 del programa";
	    echo "<section><h1> $variable1 </h1></section>"; 
	 ?>
                                   <!--                     SECCION 2                   -->
	 <section class="sec2">
		 <?php
		  	$a = 2;
	    	$b = 3;
		    function variable2(){				//Funcion para la suma de a+b = 5
		    	global $a, $b, $texto;			//Global palabra reservada para hace las variables locales.
		    	$a = $a + $b;
		    }
		    variable2();						//Se espercifica el nombre de la función para poder imprimir el resultado de $a
		    	echo "<h2 id=sec2>$texto</h2><br>", $a;		//Se impirme $a = 5
	  	?> 
  	</section>   
                                    <!--                     SECCION 3                   -->
  	<section class="sec3">
		<h2>STATIC SCOPE</h2>
		<?php 
			function foo(){
				static $index = 0;
				$index ++;
				echo "<br>" ;
				echo "$index";
			}
			echo "<p>resultado de incremento de index = 0: ";
			foo(); foo(); foo();
		?>
  	</section>
  	<section class="sec4">
  		<h2>CONSTANTS</h2>
  			<article>Se definen con la palabra reservada "define();"<br>
  					Su valor no puede ser modificado y su alcance es global.
  			</article>
  		<?php  			
  			define("text2", "El valor de pi = ");
  			define("PI", 3.1416);
  			function imprimirConstantes(){
  				echo text2 . PI;
  			}
  		?>
  		<p><?php imprimirConstantes() ?><br>
  		
  		</p>
  	</section>
  	<section>
  		<h2>Operaciones.</h2>
  		<?php 
  			define("valor1", 6);
  			define("valor2", 7);
  			function suma (){
  				$suma = 0;
  				$suma = valor1 + valor2;
  				echo $suma;
  			}
  			function resta (){
  				$resta = 0;
  				$resta = valor1 - valor2;
  				echo $resta;
  			}
  			function division (){
  				$division = 0;
  				$division = valor1 / valor2;
  				echo $division;
  			}
  			function multiplicacion(){
  				$multiplicacion = 0;
  				$multiplicacion = valor1 * valor2;
  				echo $multiplicacion;	
  			}
  		?>
  		
  		<p>
  			<strong>Las siguientes son resultados con operaciones ya definidas en el archivo v1-1.php<br>
  			Valor 1 = 6, Valor 2 = 7</strong>
  				<nav>
  					<ul>
  						<li>Suma: <?php suma(); ?></li>
  						<li>Resta: <?php resta(); ?></li>
  						<li>Division: <?php division(); ?></li>
  						<li>Multiplicacion: <?php multiplicacion(); ?></li>
  					</ul>
  				</nav>
  			
  		</p>
  	</section>
  	<section>
  		<h2>Ciclo FOR</h2>
  		<p>El siguiente es un ciclo for:<br></p>
  		<?php 
  			$sum=0;
  			for ($i=1; $i <= 10; $i++) { 
  				$sum=$sum+$i;	//$sum += $i;     (Es lo mismo)
  				echo $i;
  				echo ($i == 10) ? "<hr/> =" : "+";  /* condicion ($i == 10) ? (SI se cumple) imprime "=" : (										else, SINO se cumple) imprime "+" */
									  				/* ESTO ES LO MISMO QUE LO DE ARRIBA
									  					if ($i==10) {
									  						echo "=";
														}else{
															echo "+";
													}	*/
  			}
  			echo "$sum";
  		?>
  	</section>
  	<section>
  		<?php
  			function cicloForeach (){
  				$array = array("Apple", "Pear", "Banana");
  				reset ($array);
  				foreach ($array as $fruit) {
  					echo "Fruit: $fruit <br>";	
  				}
  			}
  		?>
  		<h2>FOREACH (para hacer iteraciones con arrays)</h2>
  		<p>El resultado del foreach es: <br> <?php cicloForeach(); ?></p>
  	</section>
  	<section>
  		<h2>WHILE (mientras)</h2>
  		<?php
  			$i = 1;
  			while ( $i <= 10) {
  				echo "El numero es: ". $i ."<br/>";
  				$i++;
  			}
  		?>
  	</section>
  	<section>
  		<h2>MD5</h2>
  		<?php 
  			$contraseña = "Edivaldo";
  			echo md5($contraseña);
  		?>
  	</section>
  	<section>
  		<h2>NL2BR</h2>
  		<?php 
  			echo nl2br("1a linea \n 2a linea ");
  		?>
  	</section>
 	<section>
  		<h2>SHA1</h2>
  		<?php 
  			$contraseña2 = "Edivaldo";
  			echo sha1($contraseña2);
  		?>
  	</section>
    

<script src="js/main.js"></script>
</body>
</html>
