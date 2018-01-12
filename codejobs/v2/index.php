<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"; > <!-- Para la codificacion usada-->
	<meta name="description" content="Ejemplo de CSS3 y HTML5" >
	<meta name="keywords" content="html5, css3" >
	<meta name="author" content="Edivaldo Martínez Moreno" >
	<link rel="stylesheet" type="text/css" href="stylev12.css">
	<title>v2.php</title>
</head>
<body>
	<header>
		<img src="imagenes/header.jpg">
		<section>
			VIDEO 2<br> 
			<a href="https://www.codejobs.biz/es/blog/category/php">  Curso CodeJobs php.</a>
		</section>
	</header>
  <div class="temas">
    <ol>
      <li>for</li>
      <li>foreach</li>
      <li>while</li>
      <li>do...while</li>
      <li>switch</li>
      <li>strings</li>
      <li>arrays</li>
      <li>cookies</li>
      <li>sessions</li>
    </ol>
  </div>
                                   <!--                     SECCION 1                   -->
  <section>
    <h2>Arreglos Numericos</h2>
    <h6>Ejemplo de codigo en PHP</h6>
    <p class="sec1"><span class="sec1">$arrayNumerico = array("rojo", "blanco","negro");</span><br/>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arrayNumerico[0]="rojo";<br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arrayNumerico[1]="blanco";<br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$arrayNumerico[2]="negro";<br>
       Para la impresion: 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo $arrayNumerico [1] => blanco;
    </p>
    <?php
    	$arrayNumerico = array ('rojo', 'blanco','negro');
    	echo $arrayNumerico[0];
    	echo "&nbsp;".$arrayNumerico [1] ;
    	echo "&nbsp;".$arrayNumerico [2] ;
    ?>
  </section>
  <section>
  	<h2>Arreglos Asociativos</h2>
  	<h5>Ejemplo de codigo en PHP</h5>
  	<P>
  		<?php
  			$arrayAsociativo = array(0 => "Edivaldo");
  			echo $arrayAsociativo[0];
  		?>
  	</P>
  </section>
  <section>
  	<h2>Arreglos Multidimensional</h2>
  	<h5>Ejemlo de codigo en php</h5>
  	<p>
  		<?php 
  			$familiar = array(  array ("hermanos"=>"Eunice", "primos"=>"Daniela", "tios"=>"Nestor"),
  						              array(0=>20, 1=>12, 2=>32)
  					);
  			echo "Mi hermana es: ". $familiar[0]["hermanos"]. ". Tiene ". $familiar[1][0]. " años<br>";
  			echo "Mi prima es: ". $familiar[0]["primos"]. ". Tiene ". $familiar[1][1]. " años<br>";
  			echo "Mi tio es: ". $familiar[0]["tios"]. ". Tiene ". $familiar[1][2]. " años<br>";
  		?>
  	</p>
  </section>
  <section>
  	<h2>ISSET</h2>
  	<p>
  		<?php  
  			function mostrar (){
  				$mostrar = "Existe la variable";
  				if (isset($mostrar)) {
  					echo $mostrar;
  				}
  			}
  		?>
  		<b>Ejemplo:</b> <?php  echo mostrar(); ?>
  	</p>

  </section>

</body>
</html>
