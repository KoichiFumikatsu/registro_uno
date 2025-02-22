

<div class="row d-flex justify-content-center align-items-center">
	<div class="col-lg-10">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Proceso de seleccion</h5>
				en cada lista un par de botones que ejecutan una consulta SQL. y actualiza las lista, despues de todo las listas las muestra de la BD en tiempo real
				<!-- Accordion without outline borders -->
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
									Pendiente Llamada
								</button>
							</h2>
							<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<!-- Small tables -->
										<table class="table table-sm">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Name</th>
													<th scope="col">Position</th>
													<th scope="col">Age</th>
													<th scope="col">Start Date</th>
													<th scope="col">Process</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Brandon Jacob</td>
													<td>Desing</td>
													<td>28</td>
													<td>2016-05-25</td>
													<td><button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i>Pasa</button>/<button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i>Descartado</button></td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Bridie Kessler</td>
													<td>Developer</td>
													<td>35</td>
													<td>2014-12-05</td>
													<td><button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i>Pasa</button>/<button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i>Descartado</button></td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Ashleigh Langosh</td>
													<td>Finance</td>
													<td>45</td>
													<td>2011-08-12</td>
													<td><button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i>Pasa</button>/<button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i>Descartado</button></td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Angus Grady</td>
													<td>HR</td>
													<td>34</td>
													<td>2012-06-11</td>
													<td><button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i>Pasa</button>/<button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i>Descartado</button></td>
												</tr>
												<tr>
												<th scope="row">5</th>
													<td>Raheem Lehner</td>
													<td>Dynamic Division Officer</td>
													<td>47</td>
													<td>2011-04-19</td>
													<td><button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i>Pasa</button>/<button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i>Descartado</button></td>
												</tr>
											</tbody>
										</table>
									<!-- End small tables -->
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
									Entrevista
								</button>
							</h2>
							<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									Lista de Personas ya llamadas y pendiente para entrevista de seleccion
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
									Contratacion
								</button>
							</h2>
							<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									Seleccionados y aprobados por contratacion, generacion de documentos y fecha de vinculacion
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
									Despidos y/o Retiros
								</button>
							</h2>
							<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									Seleccionados y aprobados por contratacion, generacion de documentos y fecha de vinculacion
								</div>
							</div>
						</div>
					</div>
				<!-- End Accordion without outline borders -->
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Formularios AZC</h5>
          <!-- List group with Links and buttons -->
	          <div class="list-group">
	          	<form>
	            	<button type="button" class="list-group-item list-group-item-action" name="formJob" value="SA">Registro Agente de Servicio</button>
	              <button type="button" class="list-group-item list-group-item-action" name="formJob" value="PL">Registro Abogado Bilingue</button>
	              <button type="button" class="list-group-item list-group-item-action" name="formJob" value="I">Registro Interprete</button>
	              <button type="button" class="list-group-item list-group-item-action" name="formJob" value="L">Registro Abogado Laboralista/Litigante/Comercial/Administracion</button>
	          	</form>            
	          </div>
          <!-- End List group with Links and buttons -->
			</div>
		</div>
	</div>
</div>
