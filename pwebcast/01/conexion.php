<?php
	/*$host = "localhost";
    $user = "pwebcast_edivald";
    $pw = "EdDesarrollo.2017";
    $db = "pwebcast_db_edivaldo";    
*/

    $conexion = mysqli_connect("localhost", "pwebcast_edivald", "EdDesarrollo.2017", "pwebcast_db_edivaldo");
    if (!$conexion) {
    	echo "Error al conectar con la BD";
    }else{
    	echo "Conexion exitosa";
    }
?>