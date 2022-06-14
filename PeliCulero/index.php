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
	<script src="./main.js"></script>    
	
	<title>PeliCulero</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>

<body>
	<header class="header">
		<div id="marca">
			<a id="logoa" target="_blank" href="index.html">
				<img id="logo" src="./img/logo.png">
			</a>
		</div>
		<nav>
			<ul>
					<!--	<li class = "w3-bar-item w3-button w3-round-large boton-nav sinloguear" id="botonMenu1 reg"><a onclick "document.getElementById('id01').style.display='block' style='width:auto;' >Login</a></li>;

						echo'<li class = "w3-bar-item w3-button w3-round-large boton-nav sinloguear" id="botonMenu1 reg"> <a onclick="document.getElementById("id02").style.display="block" style="width:auto;">Sign up</a></li> ';-->
				<?php
					// Esto nunca muestra Mi perfil, Mi lista, ni Salir
					if ( isset($_SESSION['username']) ){
						echo '<li class = "w3-bar-item w3-button w3-round-large boton-nav logueade" id="botonMenu2"> <a href="pepe.html">Mi perfil</a> </li>';
						
						echo '<li class = "w3-bar-item w3-button w3-round-large boton-nav logueade" id="botonMenu1"><a href="index.php">Mi lista</a></li>';
						
						echo '<li class = "w3-bar-item w3-button w3-round-large boton-nav logueade" id="botonMenu1 reg" action="API/logout.php"><a href="API/logout.php">Salir</a></li>';
					} else {
						echo '<li class = "w3-bar-item w3-button w3-round-large boton-nav sinloguear" id="botonMenu1 reg"><a onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;" >Login</a></li>';

						echo'<li class = "w3-bar-item w3-button w3-round-large boton-nav sinloguear" id="botonMenu1 reg"> <a onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;">Sign up</a></li> ';
					}
			
				?>

			</ul>
		</nav>
	</header>   
	
	<section class = "contenedor">
		<article class = "w3-card-4 w3-round-large w3-button w3-border boton inSlider">
				<a target="_blank" href="index.html">
					<p>Romance</p>
				</a>
		</article>
		
		<article class = "w3-card-4 w3-round-large w3-button w3-border boton inSlider">
				<a target="_blank" href="index.html">
					<p>Comedia</p>
				</a>
		</article>

		<article class = "w3-card-4 w3-round-large w3-button w3-border boton inSlider">
				<a target="_blank" href="index.html" >
					<p>Acción</p>
				</a>
		</article>
		
		<article class = "w3-card-4 w3-round-large w3-button w3-border boton inSlider">
				<a target="_blank" href="index.html">
					<p>Aventura</p>
				</a>
		</article>
	</section>
	
	<section class = "contenedor">
		<button class = "w3-card-4 w3-round-large w3-button w3-border boton" id="botonAleatorio">
				<a target="_blank" href="index.html">
					<p>Quiero una película aleatoria!</p>
				</a>	
		</button>
	</section>
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
					<!-- <input type="submit" class="login-button login-btn" value="Ingresar" id="registro_enviar"> -->
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
		<form class="modal-content animate" action="API/verificar.php" method="post">
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



	<footer>
		<!-- <select name="cars" id="cars">
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="mercedes">Mercedes</option>
			<option value="audi">Audi</option>
		  </select> -->
		<section class="top-footer">
			<section id="img-footer">
				<img src="./img/peliculero-circulo-blanco.png" alt="">
			</section>
			<section>
				<h3>Sobre nosotros</h3>
				<p>Somos un grupo de alumnos de 6to informática del politécnico cursando la materia de schumi que no me acuerdo como se llama</p>
			</section>
			<section>
				<h3>¿Qué es Peliculero?</h3>
				<p>Es un sitio web para la recomendación de peliculas basada en tus gustos y experiencias</p>
			</section>

		</section>

		<div class="linea"></div>
		<section class="social">
			<i class="fa-brands fa-instagram"></i>
			<i class="fa-brands fa-youtube"></i>
			<i class="fa-brands fa-twitch"></i>
			<i class="fa-brands fa-github"></i>
		</section>
		<h2 class="copy">Copyrigth &#169 Peliculero 2022</h2>
	</footer>

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