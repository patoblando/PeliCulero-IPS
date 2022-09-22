import Carousel from "react-multi-carousel";
import {TarjetaPelicula} from './maincomponents.js';
import "react-multi-carousel/lib/styles.css";

const responsive = {
  superLargeDesktop: {
    // the naming can be any, depends on you.
    breakpoint: { max: 4000, min: 3000 },
    items: 5
  },
  desktop: {
    breakpoint: { max: 3000, min: 1024 },
    items: 3
  },
  tablet: {
    breakpoint: { max: 1024, min: 464 },
    items: 2
  },
  mobile: {
    breakpoint: { max: 464, min: 0 },
    items: 1
  }
};


const Slider = ({deviceType}) => {
	const generos = ["Comedia", "Romance", "Acción", "Terror", "Aventura", "Musical", "Alegres", "Tristes", "Guerra", "Historia"]
	return (
		<Carousel
		  additionalTransfrom={0}
		  arrows
		  autoPlay
		  autoPlaySpeed={2000}
		  centerMode={false}
		  className="contenedor"
		  dotListClass=""
		  draggable
		  focusOnSelect={false}
		  infinite
		  keyBoardControl
		  pauseOnHover
		  renderArrowsWhenDisabled={false}
		  renderButtonGroupOutside={false}
		  renderDotsOutside={false}
		  responsive={responsive}
		  itemClass=""
		>
			{generos.map((genero) => (
					<TarjetaPelicula name={genero} />
			))}
		</Carousel>
	);
	
};
export default Slider;
