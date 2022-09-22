import React, {Component, useEffect, useState} from 'react';
import { Modal, Button, Form } from "react-bootstrap";
import {BotonHeader, SubmitButton} from './maincomponents.js';
//import "bootstrap/dist/css/bootstrap.css";

import './style.css';

const LoginForm = ({ onSubmit }) => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  
  return (
	<div className="login-container">
    <Form onSubmit={onSubmit} dialogClassName="login-container">
      <Form.Group controlId="formBasicEmail">
        <Form.Label style={{color: "white"}}>Email address</Form.Label>
        <Form.Control
          type="email"
          placeholder="Enter email"
          value={email}
          onChange={(e) => setEmail(e.target.value)}
        />
      </Form.Group>

      <Form.Group controlId="formBasicPassword">
        <Form.Label style={{color: "white"}}>Password</Form.Label>
        <Form.Control
          type="password"
          placeholder="Password"
          value={password}
          onChange={(e) => setPassword(e.target.value)}
        />
      </Form.Group>
	  <SubmitButton name="Enviar"/>
      <Form.Group controlId="formBasicCheckbox">
        <Form.Check style={{color: "white"}} type="checkbox" label="Remember Me!" />
      </Form.Group>
    </Form>
	</div>
  );
};

function LogIn (){
  const [show, setShow] = useState(false);

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  const onLoginFormSubmit = (e) => {
    e.preventDefault();
    handleClose();
  };
  
  
  return (
	<div>
      <div
        className="d-flex align-items-center justify-content-center"
      >
		<BotonHeader id="botonMenu2" onClick={handleShow} url="#" name="LogIn"/>
      </div>
      <Modal show={show} onHide={handleClose} centered dialogClassName="login-container">
        <Modal.Header>
          <Modal.Title style={{color: "white"}}>LogIn</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <LoginForm onSubmit={onLoginFormSubmit} />
        </Modal.Body>
        <Modal.Footer>
		  <BotonHeader id="botonMenu2" onClick={handleClose} url="#" name="Cerrar"/>
        </Modal.Footer>
      </Modal>
	</div>
  );
}


const SignUpForm = ({ onSubmit }) => {
  const [username, setUsername] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  
  return (
  	<div className="login-container">
    <Form onSubmit={onSubmit} dialogClassName="login-container">
      <Form.Group controlId="formBasicUsername">
        <Form.Label style={{color: "white"}}>Username</Form.Label>
        <Form.Control
          type="username"
          placeholder="Username"
          value={username}
          onChange={(e) => setUsername(e.target.value)}
        />
      </Form.Group>
	  
	  <Form.Group controlId="formBasicEmail">
        <Form.Label style={{color: "white"}}>Email address</Form.Label>
        <Form.Control
          type="email"
          placeholder="Enter email"
          value={email}
          onChange={(e) => setEmail(e.target.value)}
        />
      </Form.Group>

      <Form.Group controlId="formBasicPassword">
        <Form.Label style={{color: "white"}}>Password</Form.Label>
        <Form.Control
          type="password"
          placeholder="Password"
          value={password}
          onChange={(e) => setPassword(e.target.value)}
        />
      </Form.Group>
	  <SubmitButton name="Enviar"/>

      <Form.Group controlId="formBasicCheckbox">
        <Form.Check style={{color: "white"}} type="checkbox" label="Remember Me!" />
      </Form.Group>
    </Form>
	</div>
  );
};

function SignUp (){
  const [show, setShow] = useState(false);

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  const onSignUpFormSubmit = (e) => {
    e.preventDefault();
    handleClose();
  };
  
  
  return (
	<div>
      <div
        className="d-flex align-items-center justify-content-center"
      >
		<BotonHeader id="botonMenu2" onClick={handleShow} url="#" name="Sign Up"/>
      </div>
      <Modal show={show} onHide={handleClose} centered dialogClassName="login-container" size="xl">
        <Modal.Header>
          <Modal.Title style={{color: "white"}}>Sign Up</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <SignUpForm onSubmit={onSignUpFormSubmit} />
        </Modal.Body>
        <Modal.Footer>
		  <BotonHeader c="close cancelbtn" id="botonMenu2" onClick={handleClose} url="#" name="Cerrar"/>
        </Modal.Footer>
      </Modal>
	</div>
  );
}


export {SignUp, LogIn};