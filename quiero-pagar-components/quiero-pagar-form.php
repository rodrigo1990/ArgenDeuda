<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">

	<style>
		
	

	</style>

</head>
<body>

<form action="Consultar-Deuda.php" method="POST"  id="myForm"  class="text-center" >
	<h2>ESTADOS DE CUENTA A MI NOMBRE</h2>
	
			<p>Ingrese su número de DNI <br> para conocer el estado de cuenta.</p>
			
			<input type="number"  name="documento" id="documento" autocomplete="off">
			
				<p class="error" id="documento-error">
					Ingrese un documento valido
				</p>
			
			<br><br>
		
		<a class="btn" id="enviar" >ENVIAR</a>
	
</form>


<script type="text/javascript" src="../js/JQuery.min.js"></script>
<script>
	$("#enviar").click(function(){

		var soloNumeros=/^[0-9]*$/;
	 	var documento = $("#documento").val();


	 	if(documento.length<7 || documento.length>8 || documento.search(soloNumeros)){


	 		$("#documento-error").fadeIn();

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
	
</body>
</html>
