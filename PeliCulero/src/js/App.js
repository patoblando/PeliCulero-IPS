import React, {Component, useEffect, useState} from 'react';
import {BotonAleatorio, BotonHeader, TarjetaPelicula} from './maincomponents.js';
import { Footer } from './FooterComponent.js';
import { Header } from './HeaderComponent.js';
import { Slider } from './SliderComponent.js';
import {LogIn,SignUp} from './sesion.js';

function App() {

  return (
	<main>
		<Header />
		<Slider />
		<BotonAleatorio />
		<Footer />
	</main>
  );
}

export default App;
