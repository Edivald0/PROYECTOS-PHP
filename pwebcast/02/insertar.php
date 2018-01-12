<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Datos Guardados</title>
	<meta name="description" content="Envio y Consulta de nota a base de datos MySql">
	<meta name="author" content="Edivaldo Martínez Moreno">
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
    <script src="js/slide-1.js" type="text/javascript"></script>
</head>
<body>
	<?php
		include ("conexion.php");

		$titulo = $_POST['titulo'];
		$nota = $_POST['nota'];
		$date = $_POST['date'];

		//consulta 	
		$insertar = "INSERT INTO notas (titulo, nota, date) VALUES ('$titulo', '$nota', '$date')";

        //ejecutar
            $resultado = mysqli_query($conexion, $insertar);
            
		//Cerrar
		mysqli_close($conexion);
	?>
	<header>
		  <div id="jssor_1" class="jssor_1">
        <!-- Loading Screen -->
        <div data-u="loading" class="loading"></div>
        <div data-u="slides" class="slides">
            <div class="slide-1">
                <img data-u="image" src="img/slider-1.jpg" />
                <div class="slide-txt-titu">Conexión Exitosa</div>
            </div>
            <div class="slide-2">
                <img data-u="image" src="img/slider-2-2.jpg" />
                <div class="slide-txt-titu">Conexión Exitosa</div>
            </div>
            <div class="slide-3">
                <img data-u="image" src="img/slider-3-3.jpg" />
                <div class="slide-txt-titu">Conexión Exitosa</div>
            </div>
        </div>

        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype"></div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora031 arrowleft" data-autocenter="2">
            <svg viewbox="-12986 -2977 16000 16000" class="svg-img">
                <polygon class="a" points="-1182.1,12825.5 -792,12435.4 -8204.5,5023 -792,-2389.4 -1182.1,-2779.5 -8984.8,5023"></polygon>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora031 arrowright" data-autocenter="2">
            <svg viewbox="-12986 -2977 16000 16000" class="svg-img">
                <polygon class="a" points="-8594.7,12825.5 -8984.8,12435.4 -1572.3,5023 -8984.8,-2389.4 -8594.7,-2779.5 -792,5023"></polygon>
            </svg>
        </div>
    </div>
    
	</header>

	


	<footer class="footer-insert">
		<div class="btn-home">
			<a href="http://pwebcast.host/edivaldo/">Home</a>
		</div>
		<div class="btn-home">
			<a href="http://pwebcast.host/edivaldo/select.php">Mostrar</a>
		</div>
		<p>@edi | 2017</p>
	</footer>
	<script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
</body>
</html>