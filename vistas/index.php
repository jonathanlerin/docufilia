<?php include_once($_SERVER['DOCUMENT_ROOT']."/global.php");?>
<!DOCTYPE html>
<html lang="es">
<head>

	<!--Meta tags-->
	<?php include(engineDIR()."meta-tags.html"); ?>
	<!--Style-->
	<?php include(engineDIR()."estilos.html"); ?>
	<title>Docufilia</title>
</head>

<body>
	<!--Navbar-->
	<?php include(engineDIR()."navbar.html"); ?>
<div class="principal">
	<!--Portada-->
	<div class="portada">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-6">
					<div class="col-content">
						<h2>¿Neceistas ayuda?</h2>
						<p>Si no encuentras respuestas a tus preguntas, no dudes en contactar. El equipo de desarrolloro te ayudará.</p>
					</div>
					<form action="#" method="post">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" placeholder="Correo-e" required="required" name="mail" id="mail">
						</div>
						<div class="form-group">
							<label for="peticion">Peticion</label>
							<textarea class="form-control js-auto-size" placeholder="Mensaje" required="required" id="mensaje-formulario" name="mensaje-formulario" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</div>

			</div>

		</div>
	</div>
	<!--Que es ifelse-->
	<a name="que_es_ifelse"></a>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<!--¿Qué es ifelse?-->
			<div class="col-sm-12 que-es-ifelse">
				<div class="container">
					  <div class="row justify-content-center">
						<div class="col">
							<h2>DOCUFILIA</h2>
							
							<a href="<?php httpVistas();?>conoceme.html" class="btn btn-primary" role="button">¡Comenzar!</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<!--Servicios-->
	<div class="servicios">
		<div class="container">

		</div>
		 	
	</div>

</div>
	<!--JS Files-->
	<?php include(engineDIR()."js-files.html"); ?>
</body
>

</html> 