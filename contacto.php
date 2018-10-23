<?php include("inc/head.php") ?>
</head>
<?php include("inc/header.php") ?>

	<div class="container-fluid img-section-cont">	
		<div class="row img-section margin-to-header padding-bottom">
			<div>

			<img src="img/img-seccion-contacto.jpg" alt="">
			</div>
		</div>
	</div>
<section id="contacto">



	<div class="container ">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
			<h2>COMPLETÁ TUS DATOS</h2>
			<p><img src="img/img-icon.png" alt=""><span><b>PERSONALES</b></span></p>
			<form action="">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for="nombre">Nombre y Apellido</label>
						<input type="text" class="form-control" placeholder="Ej: Juan Rodriguez">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for="nombre">DNI(sin puntos)</label>
						<input type="text" class="form-control" placeholder="Ej: 33952768">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for="nombre">¿Cómo desea ser contactado?</label>
						<input type="text" class="form-control" placeholder="Ej: Mail">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for="nombre">Mail</label>
						<input type="text" class="form-control" placeholder="Ej:juanr@gmail.com">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for="nombre">DNI(sin puntos)</label>
						<select name="" id="" placeholder="Ej:11" class="form-control">
							<option value="11">11</option>
						</select>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for="nombre">Teléfono celular</label>
						<input type="text" class="form-control" placeholder="Ej: 46583925">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for="nombre">Motivo de consulta</label>
						<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
					</div>
				</div>
				<div class="btn-cont">
				<button class="btn"  href="contacto.php">ENVIAR</button>
			</div>
			</form>
			
		</div>
		<div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-center img-cont ">
			<img src="img/figura-contacto.png" alt="" width=95% class="img-lg">
		</div>

		


	</div>

</section>




	


<?php include("inc/footer.php") ?>
<?php include("inc/scripts.php")?>
</body>
</html>