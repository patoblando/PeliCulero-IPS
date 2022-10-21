	
	// Get the modal
	var modal = document.getElementById('id01');
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
	
	function peliculaAleatoria(){
	}
	
	function peliculaGenero(genero){	
	}
	
	function salir(){}
	
	function login(){
		const logmodal = document.getElementById('id01').style.display='block';
		return (
			logmodal
		);
	}
	
	function signup(){
		document.getElementById('id02').style.display='block';
	}