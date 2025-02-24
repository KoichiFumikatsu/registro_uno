<?php include("main/view/header.php");  ?>
<div class="row align-items-center justify-content-center">
	<div class="col-6">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Formulario de Vinculacion AZC</h5>
				<!-- No Labels Form -->
					<form class="row g-3">
						<div class="col-12 align-items-center justify-content-center">
							<input type="text" class="form-control " placeholder="Abogado Laboralista" disabled>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Primer Nombre">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Segundo Nombre">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Primer Apellido">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Segundo Apellido">
						</div>
						<div class="col-md-4">
							<select id="inputState" class="form-select">
								<option selected>Tipo de Documento</option>
								<option>Cedula de Ciudadania</option>
								<option>Cedula de Extranjeria</option>
								<option>...</option>	
							</select>
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control" placeholder="Numero de Identidad">
						</div>
						<div class="col-2">
							<input type="text" class="form-control" placeholder="Colombia" disabled>
						</div>
						<div class="col-md-3">
							<select id="inputState" class="form-select">
								<option selected>Ciudad a trabajar</option>
								<option>Cali</option>
								<option>Medellin</option>
								<option>Bogota</option>
								<option>Washington DC</option>
							</select>
						</div>
						<div class="col-md-4">
							<input type="email" class="form-control" placeholder="Correo Electronico">
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" placeholder="Numero de Celular">
						</div>
						<hr>
						<label for="inputNumber" class="col-4 col-form-label">Hoja de Vida</label>
						<div class="col-8">
							<input class="form-control" type="file" id="formFile">
						</div>
						<label for="inputNumber" class="col-4 col-form-label">Copia de Documento de Identidad</label>
						<div class="col-8">
							<input class="form-control" type="file" id="formFile">
						</div>
						<label for="inputNumber" class="col-4 col-form-label">Foto Fondo Blanco</label>
						<div class="col-8">
							<input class="form-control" type="file" id="formFile">
						</div>
						<label for="inputNumber" class="col-4 col-form-label">Tarjeta Profesional</label>
						<div class="col-8">
							<input class="form-control" type="file" id="formFile">
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
					</form>
				<!-- End No Labels Form -->
			</div>
		</div>		
	</div>
</div>
