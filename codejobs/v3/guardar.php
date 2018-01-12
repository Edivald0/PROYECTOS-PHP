<?php
	$envia_get = $_GET["envia_get"];
	$name_get = $_GET["name_get"];
	$envia_post = $_POST["envia_post"];
	$name_post = $_POST["name_post"];
	echo "<span style='padding: 2%;'>Metodo GET<br><br></span>";
		if(!$name_get){
			echo "No hay datos";
		}else{
			echo $name_get;
		}

	
	echo "<span style='padding: 2%;'>Metodo POST<br><br></span>";
		if(!$name_post){
			echo "No hay datos";
		}else{
			echo $name_post;
		}



	echo "<center><br><br><br><a href='index.php'>Inicio</a></center>";
?>