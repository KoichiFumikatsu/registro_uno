<?php 
?>

<div class="col-lg-12">
	<div class="card">
        <div class="card-body">
            <h5 class="card-title">Inventario Equipos</h5>
			<!-- Lista de Tabs -->
				<ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
	                <li class="nav-item flex-fill" role="presentation">
	                	<button class="nav-link w-100 active" id="lista-tab" data-bs-toggle="tab" data-bs-target="#lista-justified" type="button" role="tab" aria-controls="lista" aria-selected="true">
	                		Lista
	                	</button>
	                </li>
                	<li class="nav-item flex-fill" role="presentation">
                		<button class="nav-link w-100" id="agrega-tab" data-bs-toggle="tab" data-bs-target="#agrega-justified" type="button" role="tab" aria-controls="agrega" aria-selected="false">
                			Agregar
                		</button>
                	</li>
                	<li class="nav-item flex-fill" role="presentation">
                		<button class="nav-link w-100" id="edita-tab" data-bs-toggle="tab" data-bs-target="#edita-justified" type="button" role="tab" aria-controls="edita" aria-selected="false">
                			Editar
                		</button>
                	</li>
                	<li class="nav-item flex-fill" role="presentation">
                		<button class="nav-link w-100" id="asigna-tab" data-bs-toggle="tab" data-bs-target="#asigna-justified" type="button" role="tab" aria-controls="asigna" aria-selected="false">
                			Asignar
                		</button>
                	</li>
                	<li class="nav-item flex-fill" role="presentation">
                		<button class="nav-link w-100" id="borra-tab" data-bs-toggle="tab" data-bs-target="#borra-justified" type="button" role="tab" aria-controls="borra" aria-selected="false">
                			Borrar
                		</button>
                	</li>
              	</ul>
			<!-- Lista de Tabs End -->
			<!-- Contenido de Tabs -->
              	<div class="tab-content pt-2" id="myTabjustifiedContent">
                	<div class="tab-pane fade show active" id="lista-justified" role="tabpanel" aria-labelledby="lista-tab">
						<!-- Table with stripped rows -->
							<table class="table datatable">
								<thead>
									<tr>
										<th scope="col">Activo Fijo</th>
										<th scope="col">Marca</th>
										<th scope="col">Modelo</th>
										<th scope="col">Descripcion</th>
										<th scope="col">Estado</th>
										<th scope="col">Asignado</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">0001</th>
										<td>HP</td>
										<td>820 G3</td>
										<td>I5 8va / 8 GB Ram / 256 GB</td>
										<td>Buen Estado</td>
										<td>Stock</td>
									</tr>
									<tr>
										<th scope="row">0008</th>
										<td>Dell</td>
										<td>Latitude 5300</td>
										<td>I5 8va / 8 GB Ram / 256 GB</td>
										<td>Buen Estado</td>
										<td>Andres Dagua</td>
									</tr>
								</tbody>
							</table>
						<!-- End Table with stripped rows -->
                	</div>
                	<div class="tab-pane fade " id="agrega-justified" role="tabpanel" aria-labelledby="agrega-tab">
                		<div class="d-flex align-items-center justify-content-center">
							<div class=" col-md-8 ">
								<div class="card-body">
									<h5 class="card-title">Ingrese los Datos del Equipo a Registrar</h5>
									<!-- No Labels Form -->
									<form class="row g-3">
										<div class="col-md-2">
											<input type="text" class="form-control" name="actFijo" placeholder="Activo Fijo">
										</div>
										<div class="col-md-1">
											<select id="inputState" name="benchmark" class="form-select">
												<option selected>Elija La Marca</option>
												<option value="1">HP</option>
												<option value="2">Dell</option>
												<option value="3">Lenovo</option>
											</select>
										</div>
										<div class="col-md-3">
											<input type="text" class="form-control" name="ram" placeholder="Modelo">
										</div>
										<div class="col-md-2">
											<select id="inputState" class="form-select">
												<option selected>Tamaño Ram</option>
												<option value="1">8GB</option>
												<option value="2">12GB</option>
												<option value="3">16GB</option>
											</select>
										</div>
										<div class="col-md-2">
											<select id="inputState" class="form-select">
												<option selected>Procesador</option>
												<option value="1">I5</option>
												<option value="2">I7</option>
											</select>
										</div>
										<div class="col-md-2">
											<select id="inputState" class="form-select">
												<option selected>Generacion</option>
												<option value="1">5ta</option>
												<option value="2">6ta</option>
												<option value="3">7ma</option>
												<option value="4">8va</option>
												<option value="5">9na</option>
												<option value="6">10ma</option>
											</select>
										</div>
										<div class="col-md-3">
											<select id="inputState" class="form-select">
												<option selected>Tamaño Disco</option>
												<option value="1">128 GB</option>
												<option value="2">250 GB</option>
												<option value="3">500 GB</option>
												<option value="3">1 TB</option>
												<option value="3">2 TB</option>
											</select>
										</div>
										<div class="col-md-2">
											<select id="inputState" class="form-select">
												<option selected>Estado</option>
												<option value="1">Buen Estado</option>
												<option value="2">Dañado</option>
											</select>
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-primary">Agregar</button>
											<button type="reset" class="btn btn-secondary">Reset</button>
										</div>
									</form><!-- End No Labels Form -->
								</div>
							</div>                			
                		</div>
                	</div>
	                <div class="tab-pane fade" id="edita-justified" role="tabpanel" aria-labelledby="edita-tab">
	                	<div class="d-flex align-items-center justify-content-center">
							<div class=" col-md-8">
								<div class="card-body">
									<h5 class="card-title">Elija el Activo Fijo para proceder con la Edicion</h5>
									<!-- No Labels Form -->
									<form class="row g-3">
										<div class="col-md-2">
											<select id="inputState" name="benchmark" class="form-select">
												<option selected>Elija el Activo Fijo</option>
												<option value="1">HP</option>
												<option value="2">Dell</option>
												<option value="3">Lenovo</option>
											</select>
										</div>
										<div class="col-md-1">
											<select id="inputState" name="benchmark" class="form-select">
												<option selected>Elija La Marca</option>
												<option value="1">HP</option>
												<option value="2">Dell</option>
												<option value="3">Lenovo</option>
											</select>
										</div>
										<div class="col-md-3">
											<input type="text" class="form-control" name="ram" placeholder="Modelo">
										</div>
										<div class="col-md-2">
											<select id="inputState" class="form-select">
												<option selected>Tamaño Ram</option>
												<option value="1">8GB</option>
												<option value="2">12GB</option>
												<option value="3">16GB</option>
											</select>
										</div>
										<div class="col-md-2">
											<select id="inputState" class="form-select">
												<option selected>Procesador</option>
												<option value="1">I5</option>
												<option value="2">I7</option>
											</select>
										</div>
										<div class="col-md-2">
											<select id="inputState" class="form-select">
												<option selected>Generacion</option>
												<option value="1">5ta</option>
												<option value="2">6ta</option>
												<option value="3">7ma</option>
												<option value="4">8va</option>
												<option value="5">9na</option>
												<option value="6">10ma</option>
											</select>
										</div>
										<div class="col-md-3">
											<select id="inputState" class="form-select">
												<option selected>Tamaño Disco</option>
												<option value="1">128 GB</option>
												<option value="2">250 GB</option>
												<option value="3">500 GB</option>
												<option value="3">1 TB</option>
												<option value="3">2 TB</option>
											</select>
										</div>
										<div class="col-md-2">
											<select id="inputState" class="form-select">
												<option selected>Estado</option>
												<option value="1">Buen Estado</option>
												<option value="2">Dañado</option>
											</select>
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-primary">Agregar</button>
											<button type="reset" class="btn btn-secondary">Reset</button>
										</div>
									</form><!-- End No Labels Form -->
								</div>
							</div>	                		
	                	</div>
	                </div>
	                <div class="tab-pane fade" id="asigna-justified" role="tabpanel" aria-labelledby="asigna-tab">
	                	Asignar
	                	seria invocar el botton con los datos de los dos ids presentes :0 
	                	un input que tambien tenga la opcion de mostrar todos los datos 

	                	ingresas los dos datos, un modal que pregunte si seguro quieres asignar y los datos asignados
	                	el boton sera el que realice la asignacion. 
	                	y me llevara a descargar el documento.
	                </div>
	                <div class="tab-pane fade" id="borra-justified" role="tabpanel" aria-labelledby="borra-tab">
	                	Borrar
	                	Descripcion de razon de Desasignacion o borrado.
	                	Datos de Desvinculacion o Acivo fijo a borrar
	                </div>
              	</div>
            <!-- Contenido de Tabs End -->
        </div>
    </div>
</div>


