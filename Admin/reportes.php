<?php 
require_once("Clases/BaseDatos.php");
session_start();
if(!isset($_SESSION['pass'])&&!isset($_SESSION['email'])){
	header("Location:index.php");
}
$bd  = new BaseDatos();

$bd->consultarReportes();

 ?>

<?php include("inc/head.php") ?>
</head>
<body>
<header>
	<div class="row cerrar-sesion-row">
		<div class="container">
			<a href="index.php?session=0" style="float:right"><i class="fas fa-power-off"></i></a>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="col-lg-4">
				<img src="img/logo.png" alt="Argenpesos" width="300">
			</div>
			<div class="col-lg-8">
				<h1>REPORTE DE ACTIVIDADES</h1>
			</div>
		</div>
	</div>
</header>
	<div class="row">
		<div class="container-fluid">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center">Nro.Credito</th>
						<th class="text-center">Documento del usuario</th>
						<th class="text-center">Nombre del usuario</th>
						<th class="text-center">Email del usuario</th>
						<th class="text-center">Celular del usuario</th>
						<th class="text-center">Nombre de credito</th>
						<th class="text-center">saldo</th>
						<th class="text-center">cantidad cuotas adeudadas</th>
						<th class="text-center">Estudio Asignado</th>
						<th class="text-center">fecha mora</th>
						<th class="text-center">fecha actividad</th>
					</tr>
				</thead>
				<tbody>
			 		

					<?php foreach ($bd->registros as $registro):?>

						<tr>
							<td class="text-center"><?php echo $registro->nroCredito ?></td>
							<td class="text-center"><?php echo $registro->documento ?></td>
							<td class="text-center"><?php echo $registro->nombreUsuario ?></td>
							<td class="text-center"><?php echo $registro->emailUsuario ?></td>
							<td class="text-center"><?php echo $registro->telefonoUsuario ?></td>
							<td class="text-center"><?php echo $registro->nombreCredito ?></td>
							<td class="text-center">$<?php echo $registro->saldo ?></td>
							<td class="text-center"><?php echo $registro->cuotasAdeudadas ?></td>
							<td class="text-center"><?php echo $registro->nombreEstudioAsignado ?></td>
							<td class="text-center"><?php echo date('d-m-Y',strtotime($registro->fechaMora)) ?></td>
							<td class="text-center"><?php echo date('d-m-Y',strtotime($registro->fechaActividad)) ?></td>
						</tr>
	

					<?php  endforeach;?>

			 
				</tbody>
		</table>
		<a href="exportarXLS.php" class="btn">EXPORTAR XLS</a>
		</div>
	</div>

	
	
</body>
</html>

