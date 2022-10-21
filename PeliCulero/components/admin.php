<section id="table">
    <div class="admin-titulos">ID</div>    
    <div class="admin-titulos">Username</div>    
    <div class="admin-titulos">Activo</div>    
    <div class="admin-titulos">Ban</div>    
</section>

<div id="ban-form" class="modal ver">
		<form class="modal-content animate" id="registro"> <!----> 
			<div style="position:relative;">
				<span onclick="document.getElementById('ban-form').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
            <!-- en admin.js se escribe el titulo -->
			<h2 id="title-ban-form"></h2>
			<div class="login-container">

				<label for="">Motivo</label>
                <textarea name="motivo" id="" cols="30" rows="10" style="resize: none" placeholder="Puede escribir el motivo aquí"></textarea>
				
				<div class="login-signup">
					<!-- <input type="submit" class="login-button login-btn" value="Registrarme" id="registrarse"> -->
					<button type="submit" class="login-button login-btn" id="banear">Confirmar</button>
				</div>

				
			</div>
	
	  	</form>
</div>