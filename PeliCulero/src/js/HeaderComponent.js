import {LogIn,SignUp} from './sesion.js';

function Header (){
	return (
		<header className="header">
			<div id="marca">
				<a id="logoa" target="_self" href="#">
					<img id="logo" src={require('../img/logo.png')}/>
				</a>
			</div>

			<nav>
				<ul>
					<li className= "w3-bar-item w3-button w3-round-large boton-nav" id="botonMenu2"> <a target="_self" href="#">Mi perfil</a> </li>
					
					<li className= "w3-bar-item w3-button w3-round-large boton-nav" id="botonMenu1"><a target="_self" href="index.php">Mi lista</a></li>

					<li className= "w3-bar-item w3-button w3-round-large boton-nav" id="botonMenu1" onClick="salir()" /*action="logout.php"*/><a target="_self">Salir</a></li>

					<LogIn />
					<SignUp />

				</ul>
			</nav>

		</header>
	);
}

export {Header}