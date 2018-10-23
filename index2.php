<?php 
/*$servicio="http://nube.argenpesos.com.ar:59111/ServiceDOL.asmx?WSDL"; //url del servicio
$parametros=array(); //parametros de la llamada
$parametros['usuario']="IExternaDOL";
$parametros['clave']="1234";
$client = new SoapClient($servicio);
$ticket = $client->GetTicket($parametros);//llamamos al métdo que nos interesa con los parámetros



$parametrosConsulta=array();
$parametrosConsulta['ticket']=(string)$ticket->GetTicketResult;
$parametrosConsulta['documento']="27021800";
$client = new SoapClient($servicio);
$usuario = $client->ConsultaPorDocumento($parametrosConsulta);*/
require_once("Clases/Api.php");
require_once("Clases/Usuario.php");
$api = new Api();
$usuario  = new Usuario();
$usuario->setSoapClient($api->soapClient);
$usuario->crearUsuarioPorDocumento('27021800',$api->getTicket());




 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Argen deuda</title>
</head>
<body>
	
	<?php 

	var_dump($usuario);

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";



		foreach($usuario->obtenerProductosPorDocumento() as $producto){
		echo "<br>";
		echo $producto->nombre;
		echo "<br>";
		echo $producto->moneda;
		echo "<br>";
		echo $producto->saldo;
		echo "<br>";
		echo $producto->fechaMora;
		echo "<br>";

	}

	echo $usuario->documento;
		echo "<br>";
		echo $usuario->nombre;
		echo "<br>";
		echo $usuario->cantidadProductos;
		echo "<br>";
		echo $usuario->saldoTotal;

	



	 ?>


	

</body>
</html>