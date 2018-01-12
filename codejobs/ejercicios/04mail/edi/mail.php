<?php
	if (isset($_POST["email"])) {
		$emailTo = "edivaldo.martinez.moreno@gmail.com";
		$emailSubject = "Contacto desde el sitio web de prueba";
		if (isset($_POST['message'])) {
			$emailMessage .= "Nombre: ". $_POST['name']. "\n";
			$emailMessage .= "Email: ". $_POST['email']. "\n";
			$emailMessage .= "Telefono: ". $_POST['phone']. "\n";
			$emailMessage .= "Asunto: ". $_POST['subject']. "\n";
			$emailMessage .= "Mensaje: ". $_POST['message']. "\n";
		}
	

	mail($emailTo, $emailSubject, $emailMessage, "From:".$_POST['email']);	
	echo "Datos enviados con exito";
	//header("http://pruebasedihotmail.esy.es/mailedi.php");
	}
	
	
?>