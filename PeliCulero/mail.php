<?php

//Para configurar todo usé este tutorial: 
//https://kinsta.com/es/blog/configuracion-smtp-de-yahoo/#:~:text=Servidor%20SMTP%3A%20smtp.mail.,Requiere%20SSL%3A%20S%C3%AD
//Y este capaz les sirve para ver en dónde hay que cambiar todos esos campos que dice el anterior link 
//https://www.milople.com/blogs/how-to-send-mail-from-localhost-xampp-using-gmail/

function enviar_mail($destinatario){
	// titulo
	$titulo ='Gracias por registrarse en Peliculero!';

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
	// $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	//$cabeceras .= 'From: peliculero.noreply@yahoo.com' . "\r\n";
	
	// Enviarlo
	if(mail($destinatario, $titulo, $mensaje, $cabeceras))
		return $codigo;

	return -1;
}

?>