<?php 
error_reporting(0);
require_once("../Clases/Api.php");
require_once("../Clases/Usuario.php");
$api = new Api();
$usuario  = new Usuario();
$usuario->setSoapClient($api->soapClient);
$usuario->crearUsuarioPorDocumento($_POST['documento'],$api->getTicket());
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
	
	<?php if($usuario->documento!=0 ): ?>

		<h4><?php echo $usuario->nombre;?></h4>

		<h2>EL DETALLE DE SU DEUDA</h2>

		<p><span>al día de la fecha es:</span></p>


		

		<table class="table text-center">
			<thead>
				<th class="text-center">Nombre</th>
				<th class="text-center">Fecha Primer Vto Pago</th>
				<th class="text-center">Estado</th>
				<th class="text-center">Cuotas Adeudadas</th>
				<th class="text-center">Saldo</th>
			</thead>
			<tbody>
				<?php foreach($usuario->obtenerProductosPorDocumento() as $producto):?>
					<tr>
						<td><?php echo $producto->nombre; ?></td>
						<td><?php echo $producto->fechaMora; ?></td>
						<td><?php echo $producto->estado ?></td>
						<td><?php echo $producto->cuotasAdeudadas; ?></td>
						<td><?php echo "$ ".$producto->saldo." ARS"; ?></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>





	 
<?php 	else:

			echo "Usuario no encontrado";


		endif;?>
	 



























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