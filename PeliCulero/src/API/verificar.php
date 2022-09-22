<?php
session_start();
include "variables.inc";
$mysqli = new mysqli($host, $user, $pass, $base);

$vcode = $_GET['vcode'];

if(isset($_SESSION['vcode']))
	if($vcode == $_SESSION['vcode']) 
		$mysqli->query("UPDATE users SET active=1 where id = '".$_SESSION['id']."'");

header("Location: logout.php");
exit();

?>