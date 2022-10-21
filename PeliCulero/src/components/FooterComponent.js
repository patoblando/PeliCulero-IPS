function Footer (){
	return (
		<footer>
			<section className="top-footer">
				<section id="img-footer">
					<img src={require("../img/peliculero-circulo-blanco.png")} alt=""/>
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

export {Footer}