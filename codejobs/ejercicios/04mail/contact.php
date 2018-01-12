<?php

$errorMSG = '';

foreach ( $_POST as $key => $value ) {

	if ( empty( $_POST[$key] ) ) {
		$errorMSG .= $key.' es obligatorio <br>';
	} else {
		${$key} = $_POST[$key];
	}

}

$emailTo = 'edivaldo.martinez.moreno@gmail.com';
$emailSubject = "Mensaje de Edivaldo Martínez Moreno";

$body = "";
$body .= "Nombre: ";
$body .= $name;
$body .= "\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n";

$body .= "Asunto: ";
$body .= $subject;
$body .= "\n";

$body .= "Teléfono: ";
$body .= $phone;
$body .= "\n";

$body .= "Mensaje: ";
$body .= $message;
$body .= "\n";

$success = mail( $emailTo, $emailSubject, $body, "From:".$email );

if ( $success && $errorMSG === '' ){
   echo 'Gracias por escribirnos. Nos pondremos en contacto con usted tan pronto sea posible.';
} else {
    if ( $errorMSG === "" ){
        echo "Ha ocurrido un error";
    } else {
        echo $errorMSG;
    }
}