function SubmitButton({name}){
	return (
	<div class="login-signup">
		<button type="submit" class="login-button login-btn w3-round-large boton-nav" id="registro_enviar">{name}</button>
	</div>
	);
}

function CloseButton(props){
	return (
		<div onClick={props.onClick}>
				<span class="close" title="Close Modal">&times;</span>
		</div>
	);
}

export {SubmitButton, CloseButton};