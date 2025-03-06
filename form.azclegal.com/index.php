<?php include("view/header.php");  include("controller/conexion.php")?>

<div class="row align-items-center justify-content-center">
	<div class="col-12 col-md-8 col-lg-6">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Formulario de Vinculacion AZC</h5>
				<!-- No Labels Form -->
					<form class="row g-3" id="vinculacionForm"  enctype="multipart/form-data">
						
						<div class="col-12 col-md-6 align-items-center justify-content-center">
				            <select id="empresa" name="company" class="form-select" required>
				                <option selected disabled value="">Seleccione una empresa</option>
				                <option value="1">AZC Legal</option>
				                <option value="2">BilingueLaw</option>
				                <option value="3">AZC Legaltek</option>	
				            </select>
				        </div>
				        <div class="col-12 col-md-6 align-items-center justify-content-center">
				            <select id="position" name="position" class="form-select" required>
				                <option selected disabled value="">Seleccione un cargo / rol</option>
				            </select>
				        </div>
						<div class="col-12 col-md-6">
                  			<label for="inputName5" class="form-label">Primer Nombre</label>
							<input name="f_name" type="text" class="form-control">
						</div>
						<div class="col-12 col-md-6">
                  			<label for="inputName5" class="form-label">Segundo Nombre</label>
							<input name="s_name" type="text" class="form-control">
						</div>
						<div class="col-12 col-md-6">
                  			<label for="inputName5" class="form-label">Primer Apellido</label>
							<input name="f_lastname" type="text" class="form-control">
						</div>
						<div class="col-12 col-md-6">
                  			<label for="inputName5" class="form-label">Segundo Apellido</label>
							<input name="s_lastname" type="text" class="form-control">
						</div>
						<div class="col-md-6">
                  			<label for="inputName5" class="form-label">Tipo de Documento</label>
							<select name="type_id" id="inputState" class="form-select">
								<option selected>Elija una opcion</option>
								<option value="1">Cedula de Ciudadania</option>
								<option value="2">Cedula de Extranjeria</option>
								<option value="3">Pasaporte</option>	
							</select>
						</div>
						<div class="col-md-6">
                  			<label for="inputName5" class="form-label">Numero de Identidad</label>
							<input name="identif" type="text" class="form-control">
						</div>
						<div class="col-md-6">
                  			<label for="inputName5" class="form-label">Fecha de Nacimiento</label>
							<input name="birthdate" type="date" class="form-control">
						</div>
						<div class="col-md-6">
                  			<label for="inputName5" class="form-label">Estado Civil</label>
							<select name="civil" id="inputState" class="form-select">
								<option selected>Elija una opcion</option>
								<option value="1">Soltero</option>
								<option value="2">Casado</option>
								<option value="3">Union Libre</option>	
								<option value="4">Viudo</option>	
							</select>
						</div>
						<div class="col-md-6">
                  			<label for="inputName5" class="form-label">Pais</label>
							<input name="country" value="Colombia" type="text" hidden>
							<input  value="Colombia" type="text" class="form-control" placeholder="Colombia" disabled>
						</div>
						<div class="col-md-6">
                  			<label for="inputName5" class="form-label">Ciudad a trabajar</label>
							<select name="city" id="inputState" class="form-select">
								<option selected>Elija una opcion</option>
								<option value="1">Cali</option>
								<option value="2">Medellin</option>
								<option value="3">Bogota</option>
								<option value="4">Washington DC</option>
							</select>
						</div>
						<div class="col-md-6">
                  			<label for="inputName5" class="form-label">Correo Electronico</label>
							<input name="email" type="email" class="form-control">
						</div>
						<div class="col-md-6">
                  			<label for="inputName5" class="form-label">Numero de Celular</label>
							<input name="phone" type="text" class="form-control">
						</div>
						<hr>
						<div class="col-12">
							<label for="inputNumber" class="form-label">Foto Fondo Blanco (JPG/PNG)</label>
							<input name="file_photo" class="form-control" type="file" id="formFile">
						</div>
						<div class="col-12">
							<label for="inputNumber" class="form-label">Cedula Ciudadania Escaneada (PDF/JPG)</label>
							<input name="file_cc" class="form-control" type="file" id="formFile">
						</div>
						<div class="col-12">
							<label for="inputNumber" class="form-label">Hoja de Vida (PDF)</label>
							<input name="file_HV" class="form-control" type="file" id="formFile">
						</div>
						<div class="col-12">
							<label for="inputNumber" class="form-label">Certificado Bancario (Cuenta de Ahorros Bancolombia / Grupo AVAL)</label>
							<input name="file_photo" class="form-control" type="file" id="formFile">
						</div>
						<div class="col-12">
							<label for="inputNumber" class="form-label">Certificado Afiliacion EPS</label>
							<input name="file_photo" class="form-control" type="file" id="formFile">
						</div>
						<div class="col-12">
							<label for="inputNumber" class="form-label">Certificado de Fondo de Pensiones y Cesantias</label>
							<input name="file_photo" class="form-control" type="file" id="formFile">
						</div>
						<div class="col-12">
							<label for="inputNumber" class="form-label">Certificado Nivel de Ingles (Si aplica)</label>
							<input name="file_photo" class="form-control" type="file" id="formFile">
						</div>
						<div class="col-12">
							<label for="inputNumber" class="form-label">Tarjeta Profesional (si aplica)</label>
							<input name="file_photo" class="form-control" type="file" id="formFile">
						</div>
						<div class="text-center mt-3">
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
                <a href="index.php" class="btn btn-secondary">Regresar</a>
                <a href="welcome.php" class="btn btn-primary">Ir a Inicio</a>
            </div>
        </div>
    </div>
</div>