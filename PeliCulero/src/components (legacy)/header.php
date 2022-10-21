<header class="header">
	<div id="marca">
		<a id="logoa" href="./">
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
					echo '<li class = "w3-bar-item w3-button w3-round-large boton-nav logueade botonMenu2"> <a href="pepe.html">Mi perfil</a> </li>';
					
					echo '<li class = "w3-bar-item w3-button w3-round-large boton-nav logueade botonMenu1"><a href="index.php">Mi lista</a></li>';
					
					if($_SESSION['username'] == 'admin'){
						echo '<li class = "w3-bar-item w3-button w3-round-large boton-nav sinloguear botonMenu1 reg"><a onclick="toggleAdmin()">Admin</a></li>';
					}

					echo '<li class = "w3-bar-item w3-button w3-round-large boton-nav logueade botonMenu1 reg" href="API/logout.php"><a href="API/logout.php">Salir</a></li>';
				} else {
					echo '<li class = "w3-bar-item w3-button w3-round-large boton-nav sinloguear botonMenu1 reg"><a onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;" >Login</a></li>';
					echo'<li class = "w3-bar-item w3-button w3-round-large boton-nav sinloguear botonMenu1 reg"> <a onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;">Sign up</a></li> ';
				}
		
			?>
		</ul>
	</nav>
</header>