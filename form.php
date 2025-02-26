<?php include("main/view/header.php");  include("main/controller/conexion.php")?>

<div class="row align-items-center justify-content-center">
	<div class="col-6">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Formulario de Vinculacion AZC</h5>
				<!-- No Labels Form -->
					<form class="row g-3" id="vinculacionForm">
						<div class="col-6 align-items-center justify-content-center">
				            <select id="empresa" name="company" class="form-select" required>
				                <option selected disabled value="">Seleccione una empresa</option>
				                <option value="1">AZC Legal</option>
				                <option value="2">BilingueLaw</option>
				                <option value="3">AZC Legaltek</option>	
				            </select>
				        </div>

				        <div class="col-6 align-items-center justify-content-center">
				            <select id="position" name="position" class="form-select" required>
				                <option selected disabled value="">Seleccione un cargo / rol</option>
				            </select>
				        </div>
						<div class="col-md-6">
							<input name="f_name" type="text" class="form-control" placeholder="Primer Nombre">
						</div>
						<div class="col-md-6">
							<input name="s_name" type="text" class="form-control" placeholder="Segundo Nombre">
						</div>
						<div class="col-md-6">
							<input name="f_lastname" type="text" class="form-control" placeholder="Primer Apellido">
						</div>
						<div class="col-md-6">
							<input name="s_lastname" type="text" class="form-control" placeholder="Segundo Apellido">
						</div>
						<div class="col-md-4">
							<select name="type_id" id="inputState" class="form-select">
								<option selected>Tipo de Documento</option>
								<option value="1">Cedula de Ciudadania</option>
								<option value="2">Cedula de Extranjeria</option>
								<option value="3">...</option>	
							</select>
						</div>
						<div class="col-md-8">
							<input name="identif" type="text" class="form-control" placeholder="Numero de Identidad">
						</div>
						<div class="col-2">
							<input name="country" value="Colombia" type="text" hidden>
							<input  value="Colombia" type="text" class="form-control" placeholder="Colombia" disabled>
						</div>
						<div class="col-md-3">
							<select name="city" id="inputState" class="form-select">
								<option selected>Ciudad a trabajar</option>
								<option value="1">Cali</option>
								<option value="2">Medellin</option>
								<option value="3">Bogota</option>
								<option value="4">Washington DC</option>
							</select>
						</div>
						<div class="col-md-4">
							<input name="email" type="email" class="form-control" placeholder="Correo Electronico">
						</div>
						<div class="col-md-3">
							<input name="phone" type="text" class="form-control" placeholder="Numero de Celular">
						</div>
						<hr>
						<label for="inputNumber" class="col-4 col-form-label">Hoja de Vida</label>
						<div class="col-8">
							<input name="file_hv" class="form-control" type="file" id="formFile">
						</div>
						<label for="inputNumber" class="col-4 col-form-label">Copia de Documento de Identidad</label>
						<div class="col-8">
							<input name="file_id" class="form-control" type="file" id="formFile">
						</div>
						<label for="inputNumber" class="col-4 col-form-label">Foto Fondo Blanco</label>
						<div class="col-8">
							<input name="file_photo" class="form-control" type="file" id="formFile">
						</div>
						<label for="inputNumber" class="col-4 col-form-label">Tarjeta Profesional</label>
						<div class="col-8">
							<input name="file_tp" class="form-control" type="file" id="formFile">
						</div>
						<div class="text-center">
							<button type="submit" name="formAZC" class="btn btn-primary">Enviar</button>
						</div>
					</form>
				<!-- End No Labels Form -->
			</div>
		</div>		
	</div>
</div>

<!-- Modal de Confirmación -->
<div class="modal fade" id="confirmacionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Formulario Enviado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El formulario ha sido enviado exitosamente.</p>
            </div>
            <div class="modal-footer">
                <a href="form.php" class="btn btn-secondary">Regresar</a>
                <a href="welcome.php" class="btn btn-primary">Ir a Inicio</a>
            </div>
        </div>
    </div>
</div>