<?php 
require_once("../Clases/Usuario.php");
require_once("../Clases/Mailer.php");
require_once("../Clases/Producto.php");
require_once("../Clases/BaseDatos.php");
session_start();

//$_SESSION['monto']=$_GET['monto'];

if(isset($_SESSION['usuario'])){

	$bd = new BaseDatos();

	$usuario  = new Usuario();

	$usuario = unserialize($_SESSION['usuario']);

	$usuario->email=$_POST['email'];

	$usuario->telefono=$_POST['telefono'];

	$mailer  = new Mailer();

	$productoElegido = $usuario->buscarProductoPorNro($_SESSION['productoAPagar']);



	if($bd->buscarReporte($productoElegido->numero,$usuario->documento)==false){
		
		$bd->insertarReporte(
			$productoElegido->numero,
			$usuario->documento,
			$usuario->nombre,
			$usuario->email,
			$usuario->telefono,
			$productoElegido->nombreEstudioAsignado,
			$productoElegido->telefonoEstudioAsignado,
			$productoElegido->nombre,
			$productoElegido->saldo,
			$productoElegido->cuotasAdeudadas,
			$productoElegido->fechaMora,
			date("Y-m-d"));

	}else{
		$bd->actualizarFechaReporte(date("Y-m-d"),$productoElegido->numero,$usuario->documento,$usuario->email,$usuario->telefono);
	}

	

	$mailer->enviarReporte($usuario,$productoElegido);

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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body class="text-center padding-top">
	<h4><?php echo $usuario->nombre?></h4>

		<h2>GESTIONE SUS CUENTAS</h2>
		<h4>1.Comuniquese con el departamento de cobranzas</h4>
		
		

		

			<?php if($productoElegido->telefonoEstudioAsignado==203): ?>

			
			<h2 class="telefono-llamar">7078-6500</h2>
			<h4 class="telefono-llamar">Opcion 3 - Cobranzas</h4>
			<h5 class="telefono-llamar">Lu a Vi 08:00 a 20:00 hs <br> Sab 09:00 a 13:00 hs</h5>

			<a  id="click2call_callbtn" class="llamar-btn">
			<img src="img/llamar-icon-01.png" class="llamar-icon" alt="Llamar al departamento de cobranzas">
			</a>
			<a id="click2call_hupbtn">
			<img  src="img/colgar-icon-01.png" class="llamar-icon" alt="Llamar al departamento de cobranzas">
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


		<?php else: ?>

			<h2 class="telefono-llamar"><?php echo $productoElegido->telefonoEstudioAsignado ?></h2>
			<h2 class="telefono-llamar">Estudio <?php echo $productoElegido->nombreEstudioAsignado ?></h2>

			<a class="llamar-btn"  href="tel:<?php echo $productoElegido->telefonoEstudioAsignado ?>">
			<img src="img/llamar-icon-01.png" class="llamar-icon" alt="Llamar al departamento de cobranzas">
			</a>

		<?php endif; ?>


		<h2>O comunicate a nuestro Whatsapp</h2>
			<a class="wsp-btn" href="https://api.whatsapp.com/send?phone=5491162213852&text=%C2%A1Hola!%20Queria%20hacer%20una%20consulta%20acerca%20de%20los%20servicios%20vistos%20en%20consulta%20tu%20cuenta%20www.argenpesos.com.ar" target="_blank">
				<i class="fab fa-whatsapp" style=""></i>
		</a>














		
		<a href="Consultar-Deuda.php" class="volver text-center center-block">
			<h5>VOLVER</h5>
			<img src="img/back-arrow.png" alt="" class="" style="width:60px">
		</a>

		
		


		
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


		



		


