<div class="container">
<!-- Card with an image on top -->
	<div class="col">
		<div class="card">	
			<div class="card-body">
				<div class="card-title">Empleados</div>
				<div class="card-text">	
					Grid de Cards con fotos, cuando selecciona uno, el grid se divide para mostrar los detalles en la siguiente mitad y abre una card que llama a otro php y dentro de ese dejar las opciones de editar. 
				</div><br>
				<div class="row">	
					<?php for ($i=0; $i < 12; $i++) {  /*Aca se reemplaza por un foreach que itere la base de datos de empleados*/ ?>
					<div class="col-md-3">
						<div class="card">
							<img src="assets/img/card.jpg" class="card-img-top" alt="...">
							<div class="card-body ">
								<h5 class="card-title">Nombre Apellido</h5>
								<p class="card-text">Algunos de sus datos Base</p>
								<!-- Large Modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
								Detalles 
								</button>

								<div class="modal fade" id="largeModal" tabindex="-1">
									<div class="modal-dialog modal-dialog-centered  modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Large Modal</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<?php include('profile.php'); ?>

												Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
													<button type="submit" class="btn btn-primary">Guardar</button>
											</div>
										</div>
									</div>
								</div><!-- End Large Modal-->
							</div>
						</div>
					</div>
					<?php } ?>
				</div>				
			</div>
		</div>		
	</div>

<!-- End Card with an image on top -->
</div>
