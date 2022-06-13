<?php

//Para configurar todo usé este tutorial: https://www.milople.com/blogs/how-to-send-mail-from-localhost-xampp-using-gmail/
//Igual no me anduvo :)

function enviar_mail($destinatario){
	// título
	$título ='Gracias por registrarse en Peliculero!';

	$codigo = rand(000001,999999);

	// mensaje
	$mensaje = '
	<html>
	<head>
		<meta charset="utf-8">
		<title>Verifique su cuenta</title>
	  
	</head>
	<body>
		<h2>Tu código de verificación es:</h2>
		<h2>'.$codigo.'</h2>
		
	</body>
	</html>
	';

	// Para enviar un correo HTML, debe establecerse la cabecera Content-type
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$cabeceras .= 'From: peliculero.noreply@yahoo.com' . "\r\n";
	
	// Enviarlo
	mail($destinatario, $título, $mensaje, $cabeceras);
	return $codigo;
}

?>