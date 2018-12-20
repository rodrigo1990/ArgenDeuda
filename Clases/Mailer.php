<?php 
require_once("php-mailer/class.phpmailer.php");
require_once("Usuario.php");
require_once("Producto.php");

	class Mailer{

		public $phpMailer;
		

		function __construct(){

			$this->phpMailer=new PHPMailer();

			

		}
		
			function enviarReporte(Usuario $usuario,Producto $producto){


				$cuerpo = "";
				$mail = new PHPMailer();
			    $mail->Host = "localhost";
			    $mail->IsHTML(true);


			    $cuerpo="
		              	<img src='http://www.legioncreativa.com/test/argendeuda/img/logo.png' style='width:300px;margin-left:auto;margin-right:auto;display:block'>
			              ";

			     $cuerpo.="
		              	
			              ";

			    $cuerpo  .= "
			      <table style='font-size:1rem;margin-left: auto;margin-right: auto;font-family:arial;border-radius:10px;background-color: #f3f3ff;border:30px solid #f3f3ff;text-align:center; '>";


			      	$cuerpo.="<tr>";
			      	$cuerpo.="<td>";
			      	$cuerpo.="<p>El siguiente usuario ha realizado una solicitud de pago</p>";
			      	$cuerpo.="</td>";
			    	$cuerpo.="</tr>";
			      	$cuerpo.="<tr>";
			      	$cuerpo.="<td>";

			      	$cuerpo.="
						<b>Nombre</b>:".$usuario->nombre."
		              	<br>
		              	<b>Documento</b>:".$usuario->documento."
		              	<br>
		              	<b>Email</b>:".$usuario->email."
		              	<br>
		              	<b>Telefono</b>:".$usuario->telefono.
		              	"
			      	";


			      	$cuerpo.="</td>";
			      	$cuerpo.="</tr>";

			    	$cuerpo .="<tr>";
	     		 	$cuerpo .="<td style='text-align:center'>";
	     		 	$cuerpo .= "<b>Nro. Credito</b>: ".$producto->numero."<br>";
	     		 	$cuerpo .= "<b>Nombre</b>: ".$producto->nombre."<br>";
			        $cuerpo .= "<b>Saldo</b>: ".$producto->saldo."<br>";

			        $cuerpo .= "<b>Cuotas adeudadas</b>: ".$producto->cuotasAdeudadas."<br>";
			        $cuerpo .= "<b>Fecha mora</b>: ".$producto->fechaMora."<br>";
			     
		        
			      	$cuerpo .="</td>";
				    $cuerpo .="</tr>";

			    
				



	
				
				
			 

			    

	   
	    		
			  
			    $cuerpo.="</table>";
















	  			$mail->From = "deudaonline@argenpesos.com.ar";
	  			$mail->FromName = " Argenpesos - sitio web";
				 $mail->Subject = "ArgenPesos - El usuario ".$usuario->nombre." ha realizado una solicitud de pago";
	    		//$mail->AddAddress("deudaonline@argenpesos.com.ar","Deuda Online");
				 $mail->AddAddress("mcd77.1990@gmail.com","Deuda Online");
	    		$mail->Body = $cuerpo;
	     		$mail->AltBody = "";
	     		$mail->Send();

		}//function


	}//class



?>