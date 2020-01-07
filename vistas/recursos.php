<?php include_once($_SERVER['DOCUMENT_ROOT']."/global.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
	<!--Google Analytics-->
	<?php include(engineDIR()."google-analytics.html"); ?>
	<!--Meta tags-->
	<?php include(engineDIR()."meta-tags.html"); ?>
	<!--Style-->
	<?php include(engineDIR()."estilos.html"); ?>
	<title>IFELSE</title>
</head>

<body>
	<!--Navbar-->
	<?php include(engineDIR()."navbar.html"); ?>
<div class="principal">
	<!--Recursos-->
	<section class="recursos">
		<div class="container">

			<div class="row">
				<!--Sección novedades-->
				<div class="col-sm-12">
					<div class="card text-black bg-warning mb-3">
						<div class="card-header">Novedades</div>
						<div class="card-body">
						  <p class="card-text">En esta sección encontrarás los últimos recursos añadidos.</p>
						</div>
					  </div>
				</div>
				<!--Fin-->
			</div>

			<div class="row">
				<!--Plantilla HTML con SEO-->
				<div class="col-sm">
					<div class="card">
					  <div class="card-header">
					    Desarrollo WEB
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Plantilla HTML con SEO</h5>
					    <p class="card-text">Obtendrás una plantilla con el esqueleto que debe tener toda página web con las correspondientes etiquetas meta que deberás rellenar para cumplir con lso estándares SEO.</p>
					    <a class="btn btn-primary" donwload href="<?php httpSources();?>plantillaSeotada.zip">Descargar</a>
					  </div>
					</div>
				</div>
				<!--Fin-->

				<!--Proyecto con Bootstrap preconfigurado-->
				<div class="col-sm">
					<div class="card">
					  <div class="card-header">
					    Desarrollo WEB
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Proyecto con Bootstrap preconfigurado</h5>
					    <p class="card-text">Proyecto inicial con estructura de carpetas y framework Boostrap preconfigurado para que tu única preocupación sea desarrollar una flamante web.</p>
					    <a class="btn btn-primary" donwload href="<?php httpSources();?>WebConBootstrap.zip">Descargar</a>
					  </div>
					</div>
				</div>
				<!--Fin-->
			</div>

			<div class="row">
				<!--Sección Referencia-->
				<div class="col-sm-12">
					<div class="card text-white bg-dark mb-3">
						<div class="card-header">Referencia y documentación</div>
						<div class="card-body">
						  <p class="card-text">En esta sección encontrarás contenido de referencia, manuales y documentación.</p>
						</div>
					  </div>
				</div>
				<!--Fin-->
			</div>

			<div class="row">
				<!--Plantilla HTML con SEO-->
				<div class="col-sm">
					<div class="card">
					  <div class="card-header">
					    Desarrollo WEB
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">HTML básico</h5>
					    <p class="card-text">Lugar de referencia para consultas sobre html básico</p>
					    <a class="btn btn-primary" donwload href="<?php httpVistas();?>HTMLdoc/HTML-basico.html">Consultar</a>
					  </div>
					</div>
				</div>
				<!--Fin-->
			</div>


		</div>
	</section>
</div>

	<!--JS Files-->
	<?php include(engineDIR()."js-files.html"); ?>
	
</body>

</html> 