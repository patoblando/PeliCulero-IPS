<?php

session_start();
include "variables.inc";
include "mail.php";
include "mcript.php";

$mysqli = new mysqli($host, $user, $pass, $base);

$username = filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
$password = $encriptar($_POST['psw']);
$email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);

$res = $mysqli->query("select id from users where username ='".$username."'");
$res2 = $mysqli->query("select id from users where email ='".$email."'");

//$mysqli->query("insert into users (username, pass, email) values ('euge', 'eugdamonte@gmail.com', 'hola')");

if($res->num_rows || $res2->num_rows)
  echo -1;
else {	
    //$mysqli->query("insert into users (username, pass, email) values ('".$username."','".$password."','".$email."')"); 
    //$o = $mysqli->insert_id;
	$_SESSION['vcode'] = ''.enviar_mail($email);
	$rs = $mysqli->query("select id from users where username ='".$username."' and email ='".$email."'");
	$_SESSION['uvid'] = mysqli_fetch_assoc($rs)['id'];
	
}
	header("Location: index.php?verificar");
	exit();

?>
