<?php
session_start();
include "variables.inc";
$mysqli = new mysqli($host, $user, $pass, $base);

if(isset($_SESSION['vcode']))
	if($_POST['vcode'] === $_SESSION['vcode']) $mysqli->query("update 'users' set active=1 where id = '".$_SESSION['id']."'");

header("Location: logout.php");
exit();

?>