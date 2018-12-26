<?php 
require_once("../Clases/Usuario.php");
session_start();
if(!isset($_SESSION['usuario'])){
	session_destroy();
	header("Location:quiero-pagar-form.php");
}else{
	$_SESSION['productoAPagar'] = $_GET['id'];
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
	
	<form action="Pagar.php" method="POST" id="myForm">
		<label for="email" class="ing-datos-label">Ingrese su email</label>
		<input type="text" name="email" id="email" placeholder="Ej:usuario@argenpesos.com.ar" class="ing-datos-input" autocomplete="off">
		<p class="error" id="email-error">
			Ingrese un email valido
		</p>


		<label for="telefono" class="ing-datos-label">Ingrese su numero telefonico</label>
		<input type="number" name="telefono" id="telefono" placeholder="Ej:1196431100" class="ing-datos-input" autocomplete="off">
		<p class="error" id="telefono-error">
			Ingrese cod. área + número Ej:1144556677
		</p>
		<br><br><br>



		<a id="enviar" class="btn">CONTINUAR</a>
		<br><br>
		<a href="Consultar-Deuda.php" class="volver text-center center-block">
			<h5>VOLVER</h5>
			<img src="img/back-arrow.png" alt="" class="" style="width:60px">
		</a>

	</form>

<script type="text/javascript" src="../js/JQuery.min.js"></script>
<script>
	$("#enviar").click(function(){

	 	var emailValido=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	 	var email = $("#email").val();
	 	var telefono = $("#telefono").val();

	 	if(email.search(emailValido)){

	 		$("#email-error").fadeIn();
	 	
	 	}else if(telefono.length!=10){
	 		
	 		$("#telefono-error").fadeIn();

	 	}else{
	 		$("body").prepend( '<div id="preloader"><h3>Estamos procesando sus datos...</h3><div class="spinner-sm spinner-sm-1" id="status"> </div></div>' );
			$(window).on('load', function() { // makes sure the whole site is loaded 
			  	$('#status').fadeOut(); // will first fade out the loading animation 
				$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
			 	$('body').delay(350).css({'overflow':'visible'});
			 	
			});	
			document.getElementById("myForm").submit();
	 	}


/*
		*/

		});
</script>