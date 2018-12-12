<?php 

	class Registro{

	public $nombreUsuario;
	public $documento;
	public $emailUsuario;
	public $telefonoUsuario;
	public $nroCredito;
	public $nombreCredito;
	public $saldo;
	public $cuotasAdeudadas;
	public $nombreEstudioAsignado;
	public $fechaMora;
	public $fechaActividad;


	public function __construct($nombreUsuario,$documento,$emailUsuario,$telefonoUsuario,$nroCredito,$nombreCredito,$saldo,$cuotasAdeudadas,$nombreEstudioAsignado,$fechaMora,$fechaActividad){
		
		$this->nombreUsuario=$nombreUsuario;
		$this->documento=$documento;
		$this->emailUsuario=$emailUsuario;
		$this->telefonoUsuario=$telefonoUsuario;
		$this->nroCredito=$nroCredito;
		$this->nombreCredito=$nombreCredito;
		$this->saldo=$saldo;
		$this->cuotasAdeudadas=$cuotasAdeudadas;
		$this->nombreEstudioAsignado=$nombreEstudioAsignado;
		$this->fechaMora=$fechaMora;
		$this->fechaActividad=$fechaActividad;
		
	}


	


	









}//class

 ?>