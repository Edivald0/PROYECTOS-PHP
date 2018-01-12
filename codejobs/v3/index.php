<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Video 3</title>
</head>
<body style="padding-left: 5%;">
	<header>
		<ul>
			<li>$_GET</li>
			<li>$_POST</li>
			<li>Date</li>
			<li>Files</li>
			<li>email</li>
			<li>MySQL</li>
		</ul>
		<a href="index.php">Inicio</a>
	</header>
	<center>
		<h1>DATE</h1>
		<p>La funcion date() de php sirve para darle cierto formato a las fechas
		<br>
		Sintax <code>date(format, timestamp)</code>
		<br>
	</center>
		<ul>
			<li>format: representa </li>
			<ul>
				<li>d - dia (01-31)</li>
				<li>m -mes (01-12)</li>
				<li>y - año (en 4 digitos)</li>
			</ul>
		</ul>
		EJ:<br>
			echo date("d/m/y"); --> <?php echo date("d/m/y"); ?>
			<br>
			echo date("d.m.y"); --> <?php echo date("d.m.y"); ?>
			<br>
			echo date("d-m-y"); --> <?php echo date("d-m-y"); ?>
			<br>
			echo date("d | m | y"); --> <?php echo date("d | m | y"); ?>
			<br><br>
			<li>timestamp: <b>mktime()</b> --> Esta funcion retorna el valor en formato de UNIX</li>
			<ul>
				<li>Sintax: <code>mktime(hour, minutes, seconds, month, day, year, is_dst)</code></li>
				<ul>
					<li>hour --> hora</li>
					<li>minutes --> minutos</li>
					<li>seconds --> segundos</li>
					<li>month --> mes</li>
					<li>day --> dia</li>
					<li>year --> año</li>
					<li>is_dst --> horario de verano/normal</li>
				</ul>
			</ul>
			<br>
			Ejemplo:
			<br>
			$tomorrow = mktime(0,0,0, date("m"), date("d") + 1, date("y"));
			<?php 
				$tomorrow = mktime(0,0,0, date("m"), date("d") + 1, date("y"));
				echo "<br>Mañana es ". date("y | m | d", $tomorrow);
			?>
		</p>
		<p>
			Mas ejemplos:
			<br>echo date("F j, Y, g:i a"); --> <?php echo date("F j, Y, g:i a"); ?>
			<br><code>echo date("m.d.y")</code> --> <?php echo date("m.d.y") ?>
			<br><code>echo date("j, n, Y");</code> --> <?php echo date("j, n, Y"); ?>
			<br><code>echo date('h-i-s, j-m-y, it is w Day');</code> --> <?php echo date('h-i-s, j-m-y, it is w Day'); ?>
			<br><code>echo date('\i\t \i\s \t\h\e jS \d\a\y.');</code> --> <?php echo date('\i\t \i\s \t\h\e jS \d\a\y.'); ?>
			<br><code>echo date("D M j G:i:s T Y")</code> --> <?php echo date("D M j G:i:s T Y") ?>
			<br><code>echo date('H:m:s \m \i\s \m\o\n\t\h');</code> --> <?php echo date('H:m:s \m \i\s \m\o\n\t\h'); ?>
			<br><code>echo date("H:i:s")</code> --> <?php echo date("H:i:s") ?>
			<br><code>echo date("Y-m-d H:i:s")</code> --> <?php echo date("Y-m-d H:i:s") ?>
		</p>
		<section>
			<center><h1>FILES</h1></center>
			<h2><code>fopen(); | fclose($file);</code></h2>
			<p>
				Para abrir un carchivo en php<br/>
				Para cerrar el archivo
			<p>
				Ejemplo<br><code>$file = fopen("archivo.txt","w+");<br>fclose($file);</code><br><br>
				("w+" --> Lectira y escritura, crea un archivo sino existe)
			</p>
			<?php
				$file = fopen("archivo.txt","w+");
				fclose($file);
			?>

			<h2><code>feof(); | end-of-file</code></h2>
			<p>Checar el fin de linea de cada archivo</p>
			<p>
				Ejemplo<br>
				$file = fopen("archivo.txt", "r") or exit("Unable to open file!");<br>
				//Salida de una línea del archivo hasta el final se llega a nosotros<br>
				while (!feof($file)) {<br>
					echo fgets($file). "br" ;<br>
				}<br>
				fclose($file)
			</p>
			<?php
				$file = fopen("archivo.txt", "r") or exit("Unable to open file!");
				//Salida de una línea del archivo hasta el final se llega a nosotros
				while (!feof($file)) {
					echo fgets($file). "<br />";
				}
				fclose($file)
			?>

			<h2>Crear un archivo y subirlo mediante un formulario</h2>
			<center>
				<form action="file.php" method="POST" enctype="multipart/form-data"> 
					<label for="file">Nombre del archivo: </label><br>
					<input type="file" name="file" id="file">
					<br><br>
					<input type="submit" name="subir" value="SUBIR">
				</form>
			</center>


		</section>
		<section>
			<h2><code>mail();</code> --> smandar correos electronicos</h2>
			<p>Para poder mandar correos se tiene que estar en un servidor que tenga un servidor de correos</p>
			<ul>
				<li>Sintax:<br> <code>mail(to, subject, message, headers, parameters);</code></li>
				<ul>
					<li>
						to --> Required. Specifies the receiver / receivers of the mail <br>
						(Necesario. Especifica los receptores / receptores del correo)
					</li>
					<li>
						subjetc --> Required. Specifies the subject of the mail. Note: This parameter cannot contain any newline characters<br>
						(Necesario. Especifica el asunto del correo. Nota: Este parámetro no puede contener caracteres de nueva línea)
					</li>
					<li>
						message --> Required. Defines the message to be sent. Each line should be separated with a LF (\n). Lines should not exceed 70 characters<br>
						(Necesario. Define el mensaje que se enviará. Cada línea debe separarse con un LF (\n). Las líneas no deben exceder los 70 caracteres)
					</li>
					<li>
						headers --> Optional. Specifies additional headers, like From , CC, and Bcc. The additional headers should be separated with a CRLF (\r \n)<br>
						(Opcional. Especifica encabezados adicionales, como From, CC y Bcc. Los encabezados adicionales se deben separar con un CRLF (\r \n)
					</li>
					<li>
						paramaters --> Optional. Specifies an additional parameter to the sendmail program<br>
						(Opcional. Especifica un parámetro adicional para el programa sendmail)
					</li>
				</ul>
			</ul>
			<p>
				Ejemplo:<br>
				<code>
					$to = "ventas@gmail.com";<br>
					$subject = "Test Mail";<br>
					$message = "Hello! This is a simple email message."; <br>
					$from =  "edivaldo.martinez.moreno@gmail.com";<br>
					$headers = "From: ".$from;<br><br>
					mail($to, $subject, $message, $headers);<br>
					echo "Mail Sent.";<br>
				</code>
				<center><a href="mail.php">Envio de mail</a></center>
			</p>
		</section>
		<section>
			<h2>MySQL</h2>
			<p>
				<code>mysqli_num_rows($var);</code> --> Devuelve el numero de registros en la DB<br>Ejemplo: <br>
				<code>echo "Numero de registros: ". mysqli_num_rows($datos);</code>
			</p>
			<p> 
				<code>mysql_fetch_assoc($var);</code> --> obtiene un array asociativo (de los valores guardados en la DB)<br>
			</p>
			<p>
				<code>mysql_fetch_object($var);</code> --> obtiene un array pero como objeto
			</p>
			<center>
				<a href="conexion.php">Ejemplo de conexion</a><br>
				<a href="final/index.php">Final conexion</a>
			</center>
		</section>
	
</body>
</html>