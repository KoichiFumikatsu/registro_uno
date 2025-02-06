<?php include("main/view/header.php");  ?>

<?php 
	if (isset($_POST['send'])) {
		switch ($_POST['send']) {
			case 'Empleado':
				include("main/app/empleados.php");
				break;
			
			case 'Documentos':
				include("main/app/documentos.php");
				break;
			
			case 'Equipos':
				include("main/app/equipos.php");
				break;
			
			case 'Firmas':
				include("main/app/firmas.php");
				break;
			
			case 'Procesos':
				include("main/app/proceso.php");
				break;
			
			case 'Perfiles':
				include("main/app/profile.php");
				break;
		}
	}else {
		include("main/app/app.php");	
	}
?>
<?php include("main/view/footer.php"); ?>

