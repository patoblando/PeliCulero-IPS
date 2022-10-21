import React, {Component, useEffect, useState} from 'react';
import {BotonAleatorio, BotonHeader, TarjetaPelicula} from '../components/MainComponents.js';
import { Footer } from '../components/FooterComponent.js';
import { Header } from '../components/HeaderComponent.js';
import { Slider } from '../components/SliderComponent.js';

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
