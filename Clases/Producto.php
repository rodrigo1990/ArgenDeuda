<?php 
class Producto{

	public $numero;
	public $nombre;
	public $moneda;
	public $saldo;
	public $fechaMora;
	public $cuotasAdeudadas;
	public $cuotasPagas;
	public $estado;
	public $idEstudioAsignado;
	public $nombreEstudioAsignado;
	public $telefonoEstudioAsignado;
	public $fechaLiquidacion;
	public $totalCuotas;
	public $saldoCuota;
	public $valorCuota;
	




	function __construct($numero,$nombre,$moneda,$saldo,$fechaMora,$cuotasAdeudadas,$cuotasPagas,$estado,$idEstudioAsignado,$fechaLiquidacion,$totalCuotas,$saldoCuota,$valorCuota){


		if($estado=="Previsionada" && $idEstudioAsignado==0){

			$estado="Atrasada";

		}elseif($estado=="Previsionada" && $idEstudioAsignado!=0){

			$estado="En estudio";

		}

		$this->numero=$numero;
		$this->nombre=$nombre;
		$this->moneda=$moneda;
		$this->saldo=number_format((float)$saldo,2,'.','');
		$this->fechaMora=$fechaMora;
		$this->cuotasAdeudadas=$cuotasAdeudadas;
		$this->cuotasPagas = $cuotasPagas;
		$this->estado=$estado;
		$this->idEstudioAsignado=$idEstudioAsignado;
		$this->fechaLiquidacion=$fechaLiquidacion;
		$this->totalCuotas = $totalCuotas;
		$this->saldoCuota = $saldoCuota;
		$this->valorCuota = $valorCuota; 

		$this->construirAtributosDeEstudio();


	}


	private function construirAtributosDeEstudio(){

		switch($this->idEstudioAsignado){
			case 46:
				$this->nombreEstudioAsignado="GGGroup";
				$this->telefonoEstudioAsignado="52729035";
				break;
			case 17:
				$this->nombreEstudioAsignado="LaTorre";
				$this->telefonoEstudioAsignado="52775700";
				break;
			case 40:
				$this->nombreEstudioAsignado="Hadad LaTorre";
				$this->telefonoEstudioAsignado="52775700";
				break;
			case 43:
				$this->nombre="Paktar";
				$this->telefonoEstudioAsignado="57762069";
				break;
			case 31:
				$this->nombreEstudioAsignado="Rapan";
				$this->telefonoEstudioAsignado=" 50327301";
				break;
			case 63:
				$this->nombreEstudioAsignado="Cordial Collections";
				$this->telefonoEstudioAsignado=" 52360001";
				break;
			case 59:
				$this->nombreEstudioAsignado="Gestion Legal";
				$this->telefonoEstudioAsignado=" 52732890";
				break;
			case 19:
				$this->nombreEstudioAsignado="Recupero Integral";
				$this->telefonoEstudioAsignado=" 08103454141";
				break;
			case 42:
				$this->nombreEstudioAsignado="Recupero Integral Judicial";
				$this->telefonoEstudioAsignado=" 08103454141";
				break;
			case 45:
				$this->nombreEstudioAsignado="Recupero Integral G Especial SIT3";
				$this->telefonoEstudioAsignado=" 08103454141";
				break;
			case 54:
				$this->nombreEstudioAsignado="ENPRO";
				$this->telefonoEstudioAsignado="39857120";
				break;
			case 56:
				$this->nombreEstudioAsignado="ENPRO Gestion Especial";
				$this->telefonoEstudioAsignado="39857120";
				break;
			case 62:
				$this->nombreEstudioAsignado="HFA";
				$this->telefonoEstudioAsignado="52782201";
				break;
			case 26:
				$this->nombreEstudioAsignado="RAÑA";
				$this->telefonoEstudioAsignado="52633333";
				break;
			case 61:
				$this->nombreEstudioAsignado="PASTORIZA";
				$this->telefonoEstudioAsignado="038315451183";
				break;
			case 57:
				$this->nombreEstudioAsignado="GESPO";
				$this->telefonoEstudioAsignado="52733800";
				break;
			case 58:
				$this->nombreEstudioAsignado="SIPEF";
				$this->telefonoEstudioAsignado="01143941365";
				break;
			case 50:
				$this->nombreEstudioAsignado="WEISFELD JUDICIAL L";
				$this->telefonoEstudioAsignado="37230300";
				break;
			case 29:
				$this->nombreEstudioAsignado="WEISFELD JUDICIAL";
				$this->telefonoEstudioAsignado="37230300";
				break;
			case 60:
				$this->nombreEstudioAsignado="TRANSVALORES";
				$this->telefonoEstudioAsignado="0261153168784";
				break;
			case 6:
				$this->nombreEstudioAsignado="ARGENCOBROS";
				$this->telefonoEstudioAsignado="203";
				break;
			case 0:
				$this->nombreEstudioAsignado="";
				$this->telefonoEstudioAsignado="203";
				break;
			default:
				$this->nombreEstudioAsignado="";
				$this->telefonoEstudioAsignado="203";
		}//SWITCH
		
	}




}



 ?>