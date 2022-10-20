import '../styles/style.css';
import './main.js';


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



export {BotonAleatorio, BotonHeader, TarjetaPelicula};

