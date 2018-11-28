<?php 
require_once("../Clases/Usuario.php");
session_start();

$_SESSION['monto']=$_GET['monto'];

if(isset($_SESSION['usuario'])){

	$usuario  = new Usuario();

	$usuario = unserialize($_SESSION['usuario']);

}else{

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
	<h4><?php echo $usuario->nombre?></h4>

		<h2>GESTIONE SUS CUENTAS</h2>
		<h4>1.Ingrese email y celular</h4>
	<form action="ValidarCBU.php" method="POST">
		<label for="email">Ingrese su email</label>
		<br>
		<input type="text" name="email" id="email" placeholder="Ej:ejemplo@argenpesos.com.ar">
		<br><br>
		<label for="celular">Ingrese su celular</label>
		<br>
		<input type="text" name="celular" id="celular" placeholder="Ej:1120256315">

		<br><br>

		<button class="btn" id="enviar" >Ingresar</button>
		
	</form>




		



		


