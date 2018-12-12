<?php 
require_once("BaseDatos.php");

class Validador{

	 



				
	
	public function validarUsuario($email,$contrasenia){

			$bd = new BaseDatos();

			$stmt=$bd->mysqli->prepare("SELECT pass
										  FROM admin
										  WHERE usuario=(?)");

			$stmt->bind_param("s",$email);

			$stmt->execute();

			$resultado=$stmt->get_result();

			$fila=$resultado->fetch_assoc();

			if($fila["pass"]==$contrasenia){
				return TRUE;
				header("Location: home.php");

			}else{
				return FALSE;
			}

			$stmt->close();

		}//function

	
}//class


?>
