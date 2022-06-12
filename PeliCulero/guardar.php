<?php

session_start();
include "variables.inc";
include "mail.php";

$mysqli = new mysqli($host, $user, $pass, $base);

//Para configurar todo usé este tutorial: 
//https://kinsta.com/es/blog/configuracion-smtp-de-yahoo/#:~:text=Servidor%20SMTP%3A%20smtp.mail.,Requiere%20SSL%3A%20S%C3%AD
//Y este capaz les sirve para ver en dónde hay que cambiar todos esos campos que dice el anterior link 
//https://www.milople.com/blogs/how-to-send-mail-from-localhost-xampp-using-gmail/

$res = $mysqli->query("select id from users where username ='".$_POST['username']."'");
$res2 = $mysqli->query("select id from users where email ='".$_POST['email']."'");

if($res->num_rows || $res2->num_rows)
  echo -1;
else {
	// TODO: Sanitizar inputs para evitar inyecciones
	// TODO: no permitir que se registren dos mails o usernames iguales.
	
    $mysqli->query("insert into users (username, pass, email) values ('".$_POST['uname']."','".$_POST['psw']."','".$_POST['mail']."')"); 
    //$o = $mysqli->insert_id;
	$_SESSION['vcode'] = enviar_mail($_POST['mail']);
	$_SESSION['id'] = ($mysqli->query("select id from users where username ='".$_POST['uname']."' and email ='".$_POST['mail']."'" ));
	
}
	header("Location: index.php?verificar");
	exit();

?>
