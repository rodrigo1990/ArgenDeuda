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
	
	<form action="">
		<label for="cbu" class="">Ingrese un nuevo CBU</label>
		<br>
		<input type="text" name="cbu" id="cbu" placeholder="Ej:12031293812039">
		<br>
		<label for="fecha" class="">Ingrese una fecha de debito</label>
		<br>
		<input type="date" name="fecha" id="fecha" placeholder="Ej:16/11/2018">
		<br><br>	
		<a href="" class="btn">ACTUALIZAR</a>
		<br><br>
		<a href="ValidarCBU.php" class="volver text-center center-block">
			<h5>VOLVER</h5>
			<img src="img/back-arrow.png" alt="" class="" style="width:60px">
		</a>

	</form>