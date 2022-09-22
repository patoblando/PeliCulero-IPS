import './style.css';
import './main.js';
import {LogIn,SignUp} from './sesion.js';


function TarjetaPelicula(props) {
	return (
		<div className = "w3-card-4 w3-round-large w3-button w3-border boton inSlider" onClick="peliculaGenero({props.name})">
			<a target="_blank">
			<p>{props.name}</p>
			</a>
		</div>
	);
  }

function BotonAleatorio(){
	return (
		<section className = "contenedor centrar separacionvertical">
			<button className = "w3-card-4 w3-round-large w3-button w3-border boton" id="botonAleatorio" onClick="peliculaAleatoria()">
					<a target="_blank">
						<p>Quiero una película aleatoria!</p>
					</a>	
			</button>
		</section>
	);
}


function BotonHeader(props){
	return (
		<li className = "w3-bar-item w3-button w3-round-large boton-nav {props.c}" id={props.id} onClick={props.onClick}> <a href={props.url}>{props.name}</a> </li>
	);
}

function Logo () {
	return (
		<div id="marca">
			<a id="logoa" target="_self" href="#">
				<img id="logo" src={require('./img/logo.png')}/>
			</a>
		</div>
	);
}

function SubmitButton({name}){
	return (
	<div class="login-signup">
		<button type="submit" class="login-button login-btn w3-round-large boton-nav" style={{marginTop: "3%"}} id="registro_enviar">{name}</button>
	</div>
	);
}

function CloseButton(props){
	return (
		<div style={{position:"relative"}} onClick={props.onClick}>
				<span class="close" title="Close Modal">&times;</span>
		</div>
	);
}

function Buttons (){
	return (
	<nav>
		<ul>
			<li className= "w3-bar-item w3-button w3-round-large boton-nav" id="botonMenu2"> <a target="_self" href="#">Mi perfil</a> </li>
			
			<li className= "w3-bar-item w3-button w3-round-large boton-nav" id="botonMenu1"><a target="_self" href="index.php">Mi lista</a></li>

			<li className= "w3-bar-item w3-button w3-round-large boton-nav" id="botonMenu1" onClick="salir()" /*action="logout.php"*/><a target="_self">Salir</a></li>

			<LogIn />
			<SignUp />

		</ul>
	</nav>
	);
}

function Header (){
	return (
		<header className="header">
			<Logo />
			<Buttons />
		</header>   
	);
}

function Footer (){
	return (
		<footer>
			<section className="top-footer">
				<section id="img-footer">
					<img src={require("./img/peliculero-circulo-blanco.png")} alt=""/>
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

			<div className="linea"></div>
			<section className="social">
				<i className="fa-brands fa-instagram"></i>
				<i className="fa-brands fa-youtube"></i>
				<i className="fa-brands fa-twitch"></i>
				<i className="fa-brands fa-github"></i>
			</section>

			<h2 className="copy">Copyrigth &#169 Peliculero 2022</h2>

		</footer>
	);
}
export {BotonAleatorio, Header, BotonHeader, Footer, TarjetaPelicula, SubmitButton, CloseButton};

