<?php 
class Producto{

	public $numero;
	public $nombre;
	public $moneda;
	public $saldo;
	public $fechaMora;
	public $cuotasAdeudadas;
	public $estado;
	public $estudioAsignado;



	function __construct($numero,$nombre,$moneda,$saldo,$fechaMora,$cuotasAdeudadas,$estado,$estudioAsignado){


		if($estado=="Previsionada" && $estudioAsignado==null){

			$estado="Atrasada";

		}elseif($estado=="Previsionada" && $estudioAsignado!=null){

			$estado="En estudio";

		}

		$this->numero=$numero;
		$this->nombre=$nombre;
		$this->moneda=$moneda;
		$this->saldo=number_format((float)$saldo,2,'.','');
		$this->fechaMora=$fechaMora;
		$this->cuotasAdeudadas=$cuotasAdeudadas;
		$this->estado=$estado;
		$this->estudioAsignado=$estudioAsignado;


	}




}



 ?>