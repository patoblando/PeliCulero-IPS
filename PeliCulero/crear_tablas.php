<?php 
include "variables.inc";
$mysqli = new mysqli($host, $user, $pass, $base);
$mysqli->query("drop table if exists users");


$registro = $mysqli->query("create table if not exists users (
	id		int not null primary key auto_increment,
	username	varchar(60),
	email		varchar(60),
	pass		varchar(60)
)");
?>
