<?php 
include "variables.inc";
$mysqli = new mysqli($host, $user, $pass, $base);

$res = $mysqli->query("select id from users where username ='".$_POST['username']."'");
if($res->num_rows)
  echo -1;
else {
	// TODO: Sanitizar inputs para evitar inyecciones
    $mysqli->query("insert into users (username, pass, email) values ('".$_POST['uname']."','".$_POST['psw']."','".$_POST['mail']."')"); 
    //$o = $mysqli->insert_id;
}
	header("Location: index.html");
	exit();

?>
