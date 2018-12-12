<?php 
session_start();
require_once("../Clases/Validador.php");

$val=new Validador();

$mensaje=$val->validarUsuario($_POST['email'],md5($_POST['contrasena']));

$_SESSION['pass']=md5($_POST['contrasena']);
$_SESSION['email']=$_POST['email'];

if($mensaje==TRUE){
echo "TRUE";
}else{
echo "FALSE";
}




 ?>