<?php
require_once("Clases/BaseDatos.php");
session_start();

header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=reporteCashflow.xls");

if(!isset($_SESSION['pass'])&&!isset($_SESSION['email'])){
	header("Location:index.php");
}

$bd  = new BaseDatos();

$bd->consultarReportes();
 ?>

</head>
<body>

			<table class="table">
				<thead>
					<tr>
						<th class="text-center">Nro.Credito</th>
						<th class="text-center">Documento del usuario</th>
						<th class="text-center">Nombre del usuario</th>
						<th class="text-center">Email del usuario</th>
						<th class="text-center">Celular del usuario</th>
						<th class="text-center">Nombre de credito</th>
						<th class="text-center">saldo</th>
						<th class="text-center">cantidad cuotas adeudadas</th>
						<th class="text-center">fecha mora</th>
						<th class="text-center">fecha actividad</th>
					</tr>
				</thead>
				<tbody>
			 		

					<?php foreach ($bd->registros as $registro):?>
						<tr>
							<td class="text-center"><?php echo $registro->nroCredito ?></td>
							<td class="text-center"><?php echo $registro->documento ?></td>
							<td class="text-center"><?php echo $registro->nombreUsuario ?></td>
							<td class="text-center"><?php echo $registro->emailUsuario ?></td>
							<td class="text-center"><?php echo $registro->telefonoUsuario ?></td>
							<td class="text-center"><?php echo $registro->nombreCredito ?></td>
							<td class="text-center">$<?php echo $registro->saldo ?></td>
							<td class="text-center"><?php echo $registro->cuotasAdeudadas ?></td>
							<td class="text-center"><?php echo $registro->fechaMora ?></td>
							<td class="text-center"><?php echo $registro->fechaActividad ?></td>
						</tr>
	

					<?php  endforeach;?>

			 
				</tbody>
		</table>
	

	
	
</body>
</html>
