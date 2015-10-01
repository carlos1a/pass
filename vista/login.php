<html>

<form class="form-horizontal" id="form" action="../controlador/con_registrar.php" method="POST" >


				<div class="form-group">
					<label for="" class="control-label col-md-4">Login:</label>
						<div class="col-md-6">
						<input type="text" title="Su Apellido No puede poseer espacios en blancos ni caracteres especiales" class="form-control" pattern="[a-zA-Z0-9]+" placeholder="Ingresa tu nombre de Usuario" name="login" required autofocus maxlength="15">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Clave:</label>
						<div class="col-md-6">
							<input type="password" title="Su clave debe contener letras, numeros y al menos un caracter especial (.!#$%&'*+/=?^_`{|}~-) y debe poseer entre 6 y 15 caracteres" class="form-control"  pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{6,15}" placeholder="Ingresa tu Clave" name="clave" required autofocus maxlength="15">
						</div>
				</div>

				<div class="form-group">
					<label for="" class="control-label col-md-4">Confirma tu Clave:</label>
						<div class="col-md-6">
							<input type="password" title="Su clave debe contener letras, numeros y al menos un caracter especial y debe " class="form-control"  pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{6,15}" placeholder="Confirma tu Clave" name="clave_confi" required autofocus maxlength="15">
						</div>
				</div>

				<div class="col-md-2 col-md-offset-6">
					<button class="btn btn-lg btn-primary btn-block " type="submit">ENVIAR</button>
				</div>


	</form>
	</html>