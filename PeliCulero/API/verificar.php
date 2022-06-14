<?php
session_start();
include "variables.inc";
$mysqli = new mysqli($host, $user, $pass, $base);

$vcode = $_POST['vcode'];

// $prueba = $vcode === $_SESSION['vcode'];

mail("agustinlopez686@gmail.com", "prueba", $_SESSION['id']." ".$vcode) ;



if(isset($_SESSION['vcode']))
	if($vcode == $_SESSION['vcode']) 
		$mysqli->query("UPDATE users SET active=1 where id = '".$_SESSION['id']."'");

header("Location: logout.php");
exit();

?>