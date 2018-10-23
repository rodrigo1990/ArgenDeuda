<?php 
class Producto{

	public $nombre;
	public $moneda;
	public $saldo;
	public $fechaMora;
	public $cuotasAdeudadas;
	public $estado;



	function __construct($nombre,$moneda,$saldo,$fechaMora,$cuotasAdeudadas,$estado){

		$this->nombre=$nombre;
		$this->moneda=$moneda;
		$this->saldo=number_format((float)$saldo,2,'.','');
		$this->fechaMora=$fechaMora;
		$this->cuotasAdeudadas=$cuotasAdeudadas;
		$this->estado=$estado;


	}




}



 ?>