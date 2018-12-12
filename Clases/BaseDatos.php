<?php 

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



	public function insertarReporte($nroCredito,$documentoUsuario,$nombreUsuario,$emailUsuario,$telefonoUsuario,$estudioAsignado,$telefonoEstudioAsignado,$nombreCredito,$saldo,$cantidadCuotas,$fechaMora,$fechaActividad){


		
			//INSERCION EN BD
			$stmt=$this->mysqli->prepare("
				INSERT INTO reporte(nro_credito,documento_usuario,nombre_usuario,email_usuario,telefono_usuario,estudio_asignado,telefono_estudio_asignado,nombre_deuda,saldo,cantidad_cuotas_adeudadas,fecha_mora,fecha_actividad)
				VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

			$stmt->bind_param("iissisisdiss",$nroCredito,$documentoUsuario,$nombreUsuario,$emailUsuario,$telefonoUsuario,$estudioAsignado,$telefonoEstudioAsignado,$nombreCredito,$saldo,$cantidadCuotas,$fechaMora,$fechaActividad);
			$stmt->execute();



		$stmt->close();



	}//insertarAcademica


	public function buscarReporte($nroCredito,$documentoUsuario){

		$stmt=$this->mysqli->prepare("
				SELECT id
				FROM reporte
				WHERE documento_usuario=(?) AND nro_credito=(?)");

			$stmt->bind_param("ii",$documentoUsuario,$nroCredito);
			$stmt->execute();

			$resultado=$stmt->get_result();

			$fila=$resultado->fetch_assoc();

			if($fila['id']==''){
				$stmt->close();
				return false;

			}else{
				$stmt->close();
				return true;
			}
	}


	public function actualizarFechaReporte($fechaActividad,$nroCredito,$documentoUsuario,$emailUsuario,$telefonoUsuario){

			$stmt=$this->mysqli->prepare("
				UPDATE reporte
				SET fecha_actividad=(?),email_usuario=(?),telefono_usuario=(?)
				WHERE documento_usuario=(?) AND nro_credito=(?) 
				");

			$stmt->bind_param("ssiii",$fechaActividad,$emailUsuario,$telefonoUsuario,$documentoUsuario,$nroCredito);
			$stmt->execute();

			$stmt->close();

			

	}//function


	


	









}//class


?>
