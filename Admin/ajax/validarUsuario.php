<?php 
session_start();
require_once("../Clases/Validador.php");

$val=new Validador();

$mensaje=$val->validarUsuario($_POST['email'],md5($_POST['contrasena']));

$_SESSION['pass']=md5($_POST['contrasena']);
$_SESSION['email']=$_POST['email'];


if(isset($_POST['recordar'])){
	if($_POST['recordar']==1){
		$_SESSION['recordarUsuario']=true;
	}
}else{
	$_SESSION['recordarUsuario']=false;
}

if($mensaje==TRUE){
echo "TRUE";
}else{
echo "FALSE";
}




 ?>