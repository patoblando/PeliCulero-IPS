import React, {Component, useEffect, useState} from 'react';
import { Modal, Button, Form } from "react-bootstrap";
import {BotonHeader} from '../components/MainComponents.js';
import { SubmitButton, CloseButton } from '../components/FormComponents';

const LoginForm = ({ onSubmit }) => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  return (
	<div className="login-container">
    <div>
      <Form onSubmit={onSubmit} >
          <Form.Group controlId="formBasicEmail">
              <Form.Label >Email address</Form.Label>
              <Form.Control
                type="email"
                placeholder="Enter email"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
              />
          </Form.Group>

          <Form.Group controlId="formBasicPassword">
              <Form.Label >Password</Form.Label>
              <Form.Control
                type="password"
                placeholder="Password"
                value={password}
                onChange={(e) => setPassword(e.target.value)}
              />
          </Form.Group>

          <SubmitButton name="Enviar" />

          <Form.Group className="bottom-login" controlId="formBasicCheckbox">
              <Form.Check checked="checked" type="checkbox" label=" Remember Me" />
                  <a href="#">¿Olvidaste tu contraseña?</a>
          </Form.Group>
      </Form>
    </div>
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
      <Modal show={show} onHide={handleClose} centered dialogClassName="login-container animate">
        <Modal.Header>
		  <CloseButton onClick={handleClose}/>
          <Modal.Title>Login</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <LoginForm onSubmit={onLoginFormSubmit} />
        </Modal.Body>
        <Modal.Footer>
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
  	<div className="login-container" >
	<div>
    <Form onSubmit={onSubmit} dialogClassName="login-container">
      <Form.Group controlId="formBasicUsername">
        <Form.Label >Username</Form.Label>
        <Form.Control
          type="username"
          placeholder="Username"
          value={username}
          onChange={(e) => setUsername(e.target.value)}
        />
      </Form.Group>
	  
	  <Form.Group controlId="formBasicEmail">
        <Form.Label >Email address</Form.Label>
        <Form.Control
          type="email"
          placeholder="Enter email"
          value={email}
          onChange={(e) => setEmail(e.target.value)}
        />
      </Form.Group>

      <Form.Group controlId="formBasicPassword">
        <Form.Label >Password</Form.Label>
        <Form.Control
          type="password"
          placeholder="Password"
          value={password}
          onChange={(e) => setPassword(e.target.value)}
        />
      </Form.Group>
	  <SubmitButton name="Enviar"/>
    </Form>
	</div>
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
      <Modal show={show} onHide={handleClose} centered dialogClassName="login-container animate" size="xl">
          <Modal.Header>
              <CloseButton onClick={handleClose}/>
              <Modal.Title >
                  Sign up
              </Modal.Title>
          </Modal.Header>

          <Modal.Body>
              <SignUpForm onSubmit={onSignUpFormSubmit} />
          </Modal.Body>
      </Modal>
	</div>
  );
}


export {SignUp, LogIn};