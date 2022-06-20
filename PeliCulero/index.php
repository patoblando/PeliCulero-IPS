<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- favicon -->
	<link rel="icon" type="image/x-icon" href="./img/favicon.png">

    <!-- w3 -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2019.css">

	<!-- fuentes -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
	
	<script src="https://kit.fontawesome.com/3be31edc3b.js" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
	<script src="./js/main.js"></script>    
	
	<title>PeliCulero</title>
    <link rel="stylesheet" href="./styles/variables.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/footer.css">
</head>

<body>

	<?php include "components/header.php" ?>
	
	<?php include "components/cards.php" ?>
	

	<br><br><br><br><br><br><br><br>

	<div id="id01" class="modal">
		<form class="modal-content animate" action="API/login.php" method="post" id="iniciosesion">
			<div style="position:relative;">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
			<h2>Login</h2>
			<div class="login-container">

				<label for="">Nombre de usuario</label>
				<input type="text" placeholder="Enter Username" name="uname" required>
	
				<label for="">Contraseña</label>
				<input type="password" placeholder="Enter Password" name="psw" required>
			
				<div class="login-signup">
					<button type="submit" class="login-button login-btn" id="registro_enviar">Ingresar</button>
				</div>

				<div class="bottom-login">
					<span>
						<input type="checkbox" checked="checked" name="remember"> <span>Remember me</span>
					</span>
					<span>
						<a href="#">¿Olvidaste tu contraseña?</a>
					</span>
				</div>
				
				<!--				
				<div class="container-2" style="background-color:#f1f1f1">
					  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
				</div>
			</div>
	
	  	</form>
	</div>
	
	<div id="id02" class="modal ver">
		<form class="modal-content animate" action="API/signup.php" method="post" id="registro"> <!----> 
			<div style="position:relative;">
				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
			<h2>Sign up</h2>
			<div class="login-container">

				<label for="">Nombre de usuario</label>
				<input type="text" placeholder="Enter Username" name="uname" required>
	
				<label for="">Dirección de correo</label>
				<input type="email" placeholder="Enter your email" name="mail" required>
	
				<label for="">Contraseña</label>
				<input type="password" placeholder="Enter Password" name="psw" required>
				
				<!-- Hacer otro campo que pida que ponga de nuevo la pass y que se fije que coincidan -->
			
				<div class="login-signup">
					<!-- <input type="submit" class="login-button login-btn" value="Registrarme" id="registrarse"> -->
					<button type="submit" class="login-button login-btn" id="registrarse">Registrarme</button>
				</div>

				
				<!--
				<div class="container-2" style="background-color:#f1f1f1">
					  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn"> Cancel</button>
				</div>-->
			</div>
	
	  	</form>
	</div>
	
	<div id="id03" class="modal">
		<form class="modal-content animate" action="API/verificar.php" method="get">
			<div style="position:relative;">
				<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
			<h2>Sign up</h2>
			<div class="login-container">

				<label for="">Código de verificación</label>
				<input type="number" placeholder="Código de verificación" name="vcode" required>
							
				<div class="login-signup">
					<!-- <input type="submit" class="login-button signup-btn" value="Enviar"> -->
					<button type="submit" class="login-button signup-btn"> Enviar </button>
				</div>
			</div>
	  	</form>
	</div>



	<?php include "components/footer.php" ?>

<script>
var s = window.location.href;
	console.log(s);
	if( s.endsWith("verificar") ) {
		var veri = document.getElementById('id03');
		veri.style.display = "block";
	}
</script>
</body>

</html>