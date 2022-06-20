	
	$(document).ready(function () {
		
		$(".registrarse").click(function() {
			$(".ver").hide();
			$("#id03").show("slow");
		});
				
		$("#registro").submit(function(e) {
			// e.preventDefault();
			var data = new FormData(this);
			$.ajax({
				url: 'API/signup.php',
				type: 'POST',
				data: data,
				contentType: false,
				processData: false,
				success: function(res) {
					if (res == -1)
						alert('Cliente ya registrado');
					$(':input').val('');
				}
			});
		});
	 
		$("#iniciosesion").submit(function(e) {
			// e.preventDefault();
			var data = new FormData(this);
			$.ajax({
				url: 'API/login.php',
				type: 'POST',
				data: data,
				contentType: false,
				processData: false
			});
		});
		
	});


	// Get the modal
	var modal = document.getElementById('id01');
	var modal2 = document.getElementById('id02');
	var modal3 = document.getElementById('id03');

	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		if(event.target == modal2){
			modal2.style.display = "none";
		}
		if(event.target == modal3){
			modal3.style.display = "none";
		}		
	}
