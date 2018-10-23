<?php 
class Api{

	public $url="http://nube.argenpesos.com.ar:59111/ServiceDOL.asmx?WSDL";

	public $usuario="IExternaDOL";

	public $clave="1234";

	public $parametrosConexion=array();

	public $soapClient;

	public $ticket;



	 function __construct(){

		$this->soapClient = new SoapClient($this->url);

		$this->parametrosConexion["usuario"] = $this->usuario;

		$this->parametrosConexion["clave"] = $this->clave;

		$this->ticket = $this->soapClient->GetTicket($this->parametrosConexion);

	}

	 function getTicket(){

		return $this->ticket->GetTicketResult;
	}

	 

	




}




 ?>