<?php 
require_once("Registro.php");

class BaseDatos{

	public $base='argendeuda';
	public $servidor='localhost';
	public $usuario="root";
	public $password;
	public $conexion;
	public $mysqli;
	public $registros = array();


	public function __construct(){
		
		$this->conexion=mysqli_connect($this->servidor,$this->usuario,$this->password,$this->base) or die ("No se ha podido establecer conexion con la base de datos");
	

		$this->mysqli=new mysqli($this->servidor, $this->usuario,$this->password, $this->base);

		$this->mysqli->set_charset("utf8");
	}



	public function consultarReportes(){

			$sql="SELECT *
					FROM reporte 
					";

			$consulta=mysqli_query($this->conexion,$sql);


			while($fila=mysqli_fetch_assoc($consulta)){

				$reg = new Registro($fila['nombre_usuario'],$fila['documento_usuario'],$fila['email_usuario'],$fila['telefono_usuario'],$fila['nro_credito'],$fila['nombre_deuda'],$fila['saldo'],$fila['cantidad_cuotas_adeudadas'],$fila['estudio_asignado'],$fila['fecha_mora'],$fila['fecha_actividad']);

				array_push($this->registros,$reg);

			}//while

				
	}//function


	


	









}//class


?>
