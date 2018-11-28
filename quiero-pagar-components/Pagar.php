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
		<h4>1.Comuniquese con el departamento de cobranzas</h4>
		<a  id="click2call_callbtn">
			<img src="img/llamar-icon-01.png" class="llamar-icon" alt="Llamar al departamento de cobranzas">
		</a>
		<a id="click2call_hupbtn">
		<img  src="img/colgar-icon-01.png" class="llamar-icon" alt="Llamar al departamento de cobranzas">
		</a>
		
		<a href="Consultar-Deuda.php" class="volver text-center center-block">
			<h5>VOLVER</h5>
			<img src="img/back-arrow.png" alt="" class="" style="width:60px">
		</a>



		<div id="click2call_msgdiv"></div>
		<div style="visibility: hidden; display: none;">

		<input id="click2call_user" value="987">

		<input id="click2call_domain" value="argen.grancentral.com.ar">

		<input id="click2call_password" value="9d7@a48c">

		<input id="click2call_number" value="203">

		<input id="click2call_host" value="wss://webrtc.anura.com.ar:9084">
		</div>
		<div id="media" style="visibility: hidden; display: none;">
		<video width=800 id="webcam" autoplay="autoplay" hidden="true"></video>
		</div>
		</div>




		
		<script type="text/javascript"
		    src="https://webrtc.anura.com.ar/click2call/js/jquery-2.1.1.min.js">
		</script>
		<script type="text/javascript"
		    src="https://webrtc.anura.com.ar/click2call/js/jquery.json-2.4.min.js">
		</script>
		<script type="text/javascript"
		    src="https://webrtc.anura.com.ar/click2call/js/jquery.cookie.js">
		</script>
		<script type="text/javascript"
		    src="js/verto-min.js">
		</script>
		<script type="text/javascript"
		    src="js/click2call.js">
		</script>


		



		


