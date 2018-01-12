<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Video 2</title>
</head>
<body>
	<?php
		/*$con = mysql_connect("localhost", "root", "");
		if ($con) {
			mysql_select_db("supercodigo", $con);
			echo "Existe la conexion";
		}else{
			echo "NO existe la conexion";
		}
		*/


		$con = new mysqli( "localhost", "root", "", "conexion");
		if ($con->connect_error) {
			echo "NO existe conexion";
		}else{
			echo "EXISTE la conexion";
		}
		

		/*
		try{
			$con = new PDO('mysql:host=localhost;dbname=supercodigo', "root", "");
		}catch (PDOException $e) {
			echo "<h3>Error de conexion: </h3>". $e->getMessage();
		}
		*/
	?>




	<center>
		<h1>Tipos de conexion</h1>
		<h4><code>mysql_connect("server", "usuario", "password");</code> <br>(descontinuada)</h4>
	</center>
	<p style="margin-left: 20%;">
		<code>
			$con = mysql_connect("localhost", "root", "");<br>
			if ($con) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mysql_select_db("supercodigo", $con);<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Existe la conexion";<br>
			}else{<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "NO existe la conexion";<br>
			}
		</code>	
	</p>
	<br>
<!-- ****************************************************************************************************** -->	
	<center>
		<h4><code>$conexion = new mysqli("server", "usuario", "password", "name_DB");</code><br>(Usado en esta practica)</h4>
	</center>
	<p style="margin-left: 20%;">
		<code>
			$con = new mysqli( "localhost", "root", "", "supercodigo");<br>
				if ($con->connect_error) {<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "NO existe conexion";<br>
				}else{<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "EXISTE la conexion";<br>
				}<br>
		</code>
	</p>
<!-- ****************************************************************************************************** -->	
	<center>
		<h4><code>$con = new PDO('mysql:host=server;dbname=name_DB', "usuario", "password");</code></h4>
	</center>
	<p style="margin-left: 20%;">
		<code>
			try{<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$con = new PDO('mysql:host=localhost;dbname=supercodigo', "root", "");<br>
			}catch (PDOException $e) {<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Error de conexion: ". $e->getMessage();<br>
			}
		</code>
	</p>
</body>
</html>