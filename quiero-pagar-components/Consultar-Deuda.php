<?php error_reporting(0) ?>
<?php 
if(isset($_POST['documento'])){
	session_start();
}else{
	header("Location:quiero-pagar-form.php");
}
//error_reporting(0);
require_once("../Clases/Api.php");
require_once("../Clases/Usuario.php");
$api = new Api();
$usuario  = new Usuario();
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

	<?php 
		try{
	 ?>

	<?php 
		$usuario->setSoapClient($api->soapClient);
		$usuario->crearUsuarioPorDocumento($_POST['documento'],$api->getTicket());
	 ?>


	<?php if($usuario->documento!=0 ): ?>

		<h4><?php echo $usuario->nombre;?></h4>

		<h2>EL DETALLE DE SU DEUDA</h2>

		<p><span>al día de la fecha es:</span></p>


		

		<table class="table text-center">
			<thead>
				<th class="text-center">Nro. de Credito</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Fecha Primer Vto Pago</th>
				<th class="text-center">Estado</th>
				<th class="text-center">Cuotas Adeudadas</th>
				<th class="text-center">Saldo</th>
			</thead>
			<tbody>


				<?php foreach($usuario->obtenerProductosPorDocumento() as $producto):?>
			
					<!-- setear clases de table row -->
					<?php if($producto->estado=="Atrasada"): ?>
							<?php $rowClass="red-bk" ?>
					<?php else: ?>
							<?php $rowClass="green-bk" ?>
					<?php endif; ?>
					<!-- fin setear clases de table row -->


					<!-- table row -->
					<tr class="<?php echo $rowClass ?>">
						<td><?php echo $producto->numero; ?></td>

						<td><?php echo $producto->nombre; ?></td>

						<td><?php echo $producto->fechaMora; ?></td>

						<td>

							<?php if($producto->estado=="Atrasada"): ?>

								  <b class="red"><?php echo $producto->estado ?></b>

							<?php  else:?>

								   <b class="green"><?php echo $producto->estado ?></b>

						  	<?php 	endif;?>
								
						</td>

						<td><?php echo $producto->cuotasAdeudadas; ?></td>

						<td><?php echo "$ ".$producto->saldo." ARS"; ?></td>

					</tr>
					<!-- fin table row -->


				<?php endforeach;?>

			</tbody>
		</table>
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
	 



























	<?php 
	/*foreach($usuario->obtenerProductosPorDocumento() as $producto){

		echo $producto->nombre;
		echo "<br>";
		echo $producto->moneda;
		echo "<br>";

	}

	echo $usuario->documento;
		echo "<br>";
		echo $usuario->nombre;
		echo "<br>";
		echo $usuario->cantidadProductos;
		echo "<br>";
		echo $usuario->saldoTotal;


	*/



	 ?>

	

</body>
</html>