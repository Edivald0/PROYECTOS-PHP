<?php
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	//obteer la exTension del file
	//$archivo = $_FILES["file"]["name"];
	//$file_name =  $_FILES["archivo"]["name"];
	//$extension = end(explode(".", $_FILES["file"]["name"]));
	$extension = end(explode(".", $_FILES["file"]["name"]));

	//Comparacion de KB asi como en un array las extensiones
	if ($_FILES["file"]["size"] < 600000000000 and in_array($extension, $allowedExts)){
		if ($_FILES["file"]["error"] > 0) {
			echo "Error: ". $_FILES["file"]["error"]. "<br>";
		}else{
			//SI existe el file en la carpeta "upload" (La carpeta "upload" esta dentro del xammp en una llamada TMP)
			if (file_exists("upload/". $_FILES["file"]["name"])) {
				echo $_FILES["file"]["name"]. " already exists.";
			}
			//SINO esciste el file subirlo a la carpeta "upload"
			else{
				$tmp = $_FILES["file"]["tmp_name"];
				$dir = "upload/". $_FILES["file"]["tmp_name"];
				
				//move_uploaded_file(); --> funcion para subir el file 
				move_uploaded_file($tmp, $dir);
				echo "Stored in: upload/". $_FILES["file"]["tmp_name"];
			}
			echo "Filename: ". $_FILES["file"]["name"]. "<br>";
			echo "Type: ". $_FILES["file"]["type"]. "<br>";
			echo "Size: ". ($_FILES["file"]["size"] / 1024). " KB<br>";
			echo "Stored in: ". $_FILES["file"]["tmp_name"];
		}
	}else{
		echo "Invalided file";
	}

?>

