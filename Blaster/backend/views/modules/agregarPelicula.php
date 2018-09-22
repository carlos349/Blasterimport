<div class="container-fluid">
<?php
include 'cabezera.php';
?>

			<br>
				<div class="container-login100 agregarPelicula">
					<div class="wrap-login100 agregarPeliculaTwo">
						<form class="login100-form validate-form" method="post" id="formIngreso">
							<span class="login100-form-title ">
								Ingresar pelicula al sistema
							</span>
							<span class="login100-form-title p-b-18">
								<i class="zmdi zmdi-font"></i>
							</span>

							<div class="wrap-input100 validate-input">
								<input class="input100" type="text" name="nombrePelicula" maxlength="10" required>
								<span class="focus-input100" data-placeholder="Nombre de la pelicula"></span>
							</div>
							<div class="wrap-input100 validate-input">
								<input class="input100" type="text" name="genero" maxlength="10" required>
								<span class="focus-input100" data-placeholder="Genero"></span>
							</div>

							<div class="wrap-input100 validate-input">
								<input class="input100" type="number" name="precio" maxlength="10" required>
								<span class="focus-input100" data-placeholder="Precio"></span>
							</div>

							<div class="wrap-input100 validate-input">
								<input class="input100" type="number" name="codigo" maxlength="10" required>
								<span class="focus-input100" data-placeholder="codigo"></span>
							</div>
							<span class="files">Imagen caratula</span>
							<div class="wrap-input100 validate-input">
								<input class="input100" type="file" name="imagen" maxlength="10" required>
							</div>
							<span class="files">Trailer</span>
							<div class="wrap-input100 validate-input">
								<input class="input100" type="file" name="trailer" maxlength="10" required>
							</div>
							<span class="files">Pelicula</span>
							<div class="wrap-input100 validate-input">
								<input class="input100" type="file" name="pelicula" maxlength="10" required>
							</div>
							
							<div class="wrap-input100 validate-input">
								<input class="input100" type="date" name="fecha" maxlength="10" required>
								
							</div>
							

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn" type="submit">
										Ingresar pelicula
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			
	
</div>