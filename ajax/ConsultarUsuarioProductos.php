<?php 
header('Content-type: application/json; charset=utf-8');
require_once("../Clases/Api.php");
require_once("../Clases/Usuario.php");
require_once("../Clases/Persona.php");




$api = new Api();

$usuario  = new Usuario();

$usuario->setSoapClient($api->soapClient);

$usuario->crearUsuarioPorDocumento($_POST['documento'],$api->getTicket());

//$persona = new Persona("rodrigo","reynoso");

echo json_encode($usuario);



 ?>