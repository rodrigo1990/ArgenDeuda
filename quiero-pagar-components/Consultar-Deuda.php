<?php
require_once("../Clases/Api.php");
require_once("../Clases/Usuario.php");
session_start();

$api = new Api();

$usuario  = new Usuario();


if(isset($_POST['documento'])){	

	$usuario->setSoapClient($api->soapClient);

	if($usuario->crearUsuarioPorDocumento($_POST['documento'],$api->getTicket())==true){

		$usuario->obtenerProductosPorDocumento();

		var_dump($usuario);

		$_SESSION['usuario'] = serialize($usuario);
	}

	

}else{

	if(isset($_SESSION['usuario'])){

		$usuario = unserialize($_SESSION['usuario']);

	}else{

		header("Location:quiero-pagar-form.php");

	}
}
//error_reporting(0);

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

	<?php 
		try{
	 ?>

	


	<?php if($usuario->documento!=0 ): ?>

		<h4><?php echo $usuario->nombre;?></h4>

	<!-- si la cantidad de productos es diferente de 0 mostramos las filas de productos -->
	<?php if($usuario->cantidadProductos!=0):  ?>

		<h2>EL DETALLE DE SU DEUDA</h2>

		<p><span>al día de la fecha es:</span></p>

		
		
		<div class="table-responsive">
		<table class="table  text-center">
			<thead>
				<th class="text-center">Nro. de Credito</th>
				<th class="text-center">Nombre</th>
				
				<th class="text-center">Fecha Liquidacion</th>

				<th class="text-center">Total Cuotas</th>
				<th class="text-center">Cuotas Pagadas</th>

				<th class="text-center">Estado</th>

				<th class="text-center">1er Vto impago</th>

				<th class="text-center">Cuotas Vencidas</th>
				
				
				

				<th class="text-center">Saldo Vencido</th>
				<th class="text-center">Valor cuota</th>
				<th class="text-center">Saldo Total</th>
				<th class="text-center">Detalle</th>
			</thead>
			<tbody>


				<?php foreach($usuario->productos as $producto):?>

					<?php// var_dump($producto) ?>
					
					<!-- setear clases de table row -->
					<?php if($producto->estado=="Atrasada"): ?>

							<?php $rowClass="red-bk" ?>

							<?php $color="red" ?>

							<?php $paga=1; ?>

					<?php elseif($producto->estado=="Al dia" || $producto->estado=="Al Día" || $producto->estado=="Al Dia"): ?>

							<?php $rowClass="green-bk" ?>

							<?php $color="green" ?>

							<?php $paga=1; ?>

					<?php elseif($producto->estado=="En estudio" || $producto->estado=="En Estudio"): ?>

							<?php $rowClass="yellow-bk" ?>

							<?php $color="yellow" ?>

							<?php $paga=1; ?>

					<?php elseif($producto->estado=="Cancelada"): ?>

							<?php $rowClass="yellow-bk" ?>

							<?php $color="grey" ?>

							<?php $paga=0; ?>
					

					<?php elseif($producto->estado=="Previsionada"): ?>

						<?php $rowClass="red-bk" ?>

						<?php $color="red" ?>

						<?php $paga=1; ?>

					<?php endif; ?>
					<!-- fin setear clases de table row -->


					<!-- table row -->
					<tr class="<?php echo $rowClass ?>">



						<td><?php echo $producto->numero; ?></td>




						<td><?php echo $producto->nombre; ?></td>


						
				

						<td><?php echo date('d-m-Y',strtotime($producto->fechaLiquidacion)); ?></td>

						<td><?php echo $producto->totalCuotas; ?></td>

						<td><?php echo $producto->cuotasPagas; ?></td>

						<td>
						  	<b class=<?php echo $color ?>><?php echo $producto->estado ?></b>
								
						</td>

						<td><?php echo date('d-m-Y',strtotime($producto->fechaMora)); ?></td>


						<td><?php echo $producto->cuotasAdeudadas; ?></td>

						
						
						

						


						<?php if($producto->nombreEstudioAsignado=="ARGENCOBROS"): ?>
						
							<td>A CONSULTAR</td>

						<?php else: ?>

							<td><?php echo "$ ".number_format($producto->saldo,2, ',', '').""; ?></td>

						<?php endif; ?>


						<td><?php echo "$ ".number_format($producto->valorCuota,2, ',', '').""; ?></td>

						
						<td><?php echo "$".number_format($producto->saldoCuota,2, ',', ''); ?></td>


						<?php if($paga==1): ?>

							  <td><a href="IngresarDatos.php?id=<?php echo $producto->numero ?>">CONSULTAR</a></td>

						<?php else: ?>

							   <td class="grey">CONSULTAR</td>

					  	<?php endif;?>
						

					</tr>
					<!-- fin table row -->


				<?php endforeach;?>

			</tbody>
		</table>
		</div>

		
		<!-- sino, mostramos la leyendra de no poseer creditors, y el numero telefono de argenpesos -->
		<?php else: ?>
				
				<h2>No posee creditos activos a la fecha</h2>


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

				<h2>O comunicate a nuestro Whatsapp</h2>
				<a class="wsp-btn" href="https://api.whatsapp.com/send?phone=5491162213852&text=%C2%A1Hola!%20Queria%20hacer%20una%20consulta%20acerca%20de%20los%20servicios%20vistos%20en%20consulta%20tu%20cuenta%20www.argenpesos.com.ar" target="_blank">
					<i class="fab fa-whatsapp" style=""></i>
				</a>
		<?php endif; ?>


		<br><br><br>
		<a href="quiero-pagar-form.php" class="volver text-center center-block">
			<h5>VOLVER</h5>
			<img src="img/back-arrow.png" alt="" class="" style="width:60px">
		</a>
		





	 
<?php 	else: ?>
			<div class="text-center">
				<h4>Usuario no encontrado</h4>
				<a href="quiero-pagar-form.php" class="volver text-center center-block">
					<h5>VOLVER</h5>
					<img src="img/back-arrow.png" alt="" class="" style="width:60px">
				</a>
			</div>


<?php		endif;?>


		<?php 
		}//end try
		catch(Exception $e) {
		?>
		<h1>¡Ups! Ha ocurrido un error, intente nuevamente.</h1>

		<?php
			}//endCatch
		 ?>


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


</body>
</html>