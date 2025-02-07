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
								<button>un boton</button>
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