<?php 
require_once("Producto.php");
	class Usuario{

		public $parametros;
		public $soapClient;
		public $email;
		public $telefono;

		public $documento;
		public $nombre;
		public $cantidadProductos;
		public $saldoTotal;
		public $datos;
		public $productos=array();

		function __construct(){}
		
		function setSoapClient(SoapClient $soapClient){

			$this->soapClient = $soapClient;

		}//function





		function crearUsuarioPorDocumento($documento,$ticket){

			$this->parametros["documento"]=$documento;
			$this->parametros["ticket"]=$ticket;
			$this->datos=$this->soapClient->ConsultaPorDocumento($this->parametros);

			if(isset($this->datos->ConsultaPorDocumentoResult->Documento)){
				
				$this->documento = $this->datos->ConsultaPorDocumentoResult->Documento;
				$this->nombre = $this->datos->ConsultaPorDocumentoResult->Nombre;
				$this->cantidadProductos = $this->datos->ConsultaPorDocumentoResult->CantidadProductos;
				$this->saldoTotal = $this->datos->ConsultaPorDocumentoResult->SaldoTotal;

				return true;

			}else{

				return false;

			}
		}//function


		function obtenerProductosPorDocumento(){

			if ($this->datos){
				if($this->cantidadProductos!=0){
					//Si nada mas tiene un producto lo agregar al array productos de manera directa
					if($this->cantidadProductos==1){

						array_push($this->productos,
							new Producto(
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->Numero,
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->Nombre,
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->Moneda,
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->Saldo,
							date("Y-m-d",strtotime($this->datos->ConsultaPorDocumentoResult->Productos->Producto->FechaMora)),
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->CuotasAdeudadas,
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->CuotasPagas,
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->Status,
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->EstudioAsignado,
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->FechaLiquidacion,
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->TotalCuotas,
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->SaldoCuota,
							$this->datos->ConsultaPorDocumentoResult->Productos->Producto->ImporteCuota


						));

						return $this->productos;

					//Sino va a iterar en cada objeto Producto del Array Productos proveniente del web service
					}else{
						foreach($this->datos->ConsultaPorDocumentoResult->Productos->Producto as $productoService){
							array_push(
								$this->productos,
								new Producto(
									$productoService->Numero,
									$productoService->Nombre,
									$productoService->Moneda,
									$productoService->Saldo,
									date("Y-m-d",strtotime($productoService->FechaMora)),
									$productoService->CuotasAdeudadas,
									$productoService->CuotasPagas,
									$productoService->Status,
									$productoService->EstudioAsignado,
									$productoService->FechaLiquidacion,
									$productoService->TotalCuotas,
									$productoService->SaldoCuota,
									$productoService->ImporteCuota
								));
						}

						return $this->productos;
					}//
				}

			}else{

				echo "Obtenga un usuario por documento primero !! ";

			}


		


		}//function


		function buscarProductoPorNro($nro){

			foreach($this->productos as $producto){

				if($producto->numero==$nro){


					return $producto;

				}


			}


		}//funcion












	}//class



?>