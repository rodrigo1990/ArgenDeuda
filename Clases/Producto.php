<?php 
class Producto{

	public $numero;
	public $nombre;
	public $moneda;
	public $saldo;
	public $fechaMora;
	public $cuotasAdeudadas;
	public $estado;



	function __construct($numero,$nombre,$moneda,$saldo,$fechaMora,$cuotasAdeudadas,$estado){

		$this->numero=$numero;
		$this->nombre=$nombre;
		$this->moneda=$moneda;
		$this->saldo=number_format((float)$saldo,2,'.','');
		$this->fechaMora=$fechaMora;
		$this->cuotasAdeudadas=$cuotasAdeudadas;
		$this->estado=$estado;


	}




}



 ?>