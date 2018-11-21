<?php 
session_start();
if(!isset($_SESSION['usuario'])){
	session_destroy();
	header("Location:quiero-pagar-form.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Argen deuda</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body class="text-center padding-top">
	<!-- CONSULTAR CBU -->
			<table class="table text-center">
			<thead>
				<th class="text-center">Banco</th>
				<th class="text-center">CBU</th>
				<th class="text-center">Fecha de debito</th>
			</thead>
			<tbody>
					<tr>
						<td>PATAGONIA S.A</td>
						<td>03465498726498</td>
						<td>03/02/2018</td>
					</tr>
			</tbody>
		</table>
		<br>
		<br>
<div class="container validarCBU">
		<a href="GestionPagos.php" class="btn">CONTINUAR</a>
		<br><br>	
		<a href="IngresarCBU.php" class="btn-second center-block">ESTOS DATOS SON <br> INCORRECTOS</a>
		<a href="Consultar-Deuda.php" class="volver text-center center-block">
			<h5>VOLVER</h5>
			<img src="img/back-arrow.png" alt="" class="" style="width:60px">
		</a>

</div>