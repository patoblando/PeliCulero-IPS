import React, {Component, useEffect, useState} from 'react';
import {BotonAleatorio, Header, BotonHeader, Footer, TarjetaPelicula} from './maincomponents.js';
import Slider from './slider.js';
import {LogIn,SignUp} from './sesion.js';

function App() {

  return (
	<div>
	<Header />
	<Slider />
	<BotonAleatorio />
	<Footer />
	</div>
  );
}

export default App;
