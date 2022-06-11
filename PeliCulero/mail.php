<?php

//Para configurar todo usé este tutorial: https://www.milople.com/blogs/how-to-send-mail-from-localhost-xampp-using-gmail/
//Igual no me anduvo :)
function enviar_mail(){
	$para  = ''; //remitente entre comillas

	// título
	$título = '¡Gracias por registrarte en Peliculero!';

	// mensaje
	$mensaje = '
	<html>
	<head>
	  <title>Verifique su cuenta</title>
	  
	</head>
	<body>
		<a>Verificar sdfsdfdfsdfsf holaa</a>
		
	</body>
	</html>
	';

	// Para enviar un correo HTML, debe establecerse la cabecera Content-type
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$cabeceras .= 'From: peliculero.noreply@gmail.com' . "\r\n";
	
	// Enviarlo
	$cabeceras = str_replace("\n.", "\n..", $cabeceras);
	
	mail($para, $título, $mensaje, $cabeceras);
	
}

	enviar_mail();
?>