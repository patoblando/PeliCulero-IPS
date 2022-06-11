	$(document).ready(function () {
		
		/*
		$(".login-boton").click(function() {
        $(".ver").hide();
        $("#div_" + this.id).show("slow");
		});
		*/
		//$( "#reg" ).click();
		
		$("#registro").submit(function(e) {
			e.preventDefault();
			var data = new FormData(this);
			$.ajax({
				url: 'guardar.php',
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
	 
	});


	// Get the modal
	var modal = document.getElementById('id01');
	var modal2 = document.getElementById('id02');
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		if(event.target == modal2){
			modal2.style.display = "none";
		}
		
	}
	