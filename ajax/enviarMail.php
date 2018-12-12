<?php 
require("../Clases/php-mailer/class.phpmailer.php");

	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	$contacto = $_POST['contacto'];
  	$email = $_POST['email'];
  	$cod_area = $_POST['cod_area'];
  	$celular = $_POST['celular'];
  	$mensaje = $_POST['mensaje'];

	$cuerpo = "";
	$mail = new PHPMailer();
    $mail->Host = "localhost";
    $mail->IsHTML(true);
			
    $cuerpo  = "
      <table style='font-size:1rem;margin-left: auto;margin-right: auto;font-family:arial;border-radius:10px;background-color: #f3f3ff;border:30px solid #f3f3ff;text-align:center; '>";

    $cuerpo.="<tr>
              <td>
              <img src='http://www.legioncreativa.com/test/argendeuda/img/logo.png' style='width:300px;margin-left:auto;margin-right:auto;display:block'>
              </td>
            </tr>";

   
    $cuerpo .="<tr>";
      $cuerpo .="<td style='text-align:center'>";
        $cuerpo .= "<b>Nombre</b>: ".$nombre."<br>";
        $cuerpo .= "<b>dni</b>: ".$dni."<br>";
        $cuerpo .= "<b>contacto</b>: ".$contacto."<br>";
        $cuerpo .= "<b>email</b>: ".$email."<br>";
        $cuerpo .= "<b>Celular</b>:".$cod_area."-".$celular."<br>";
         $cuerpo .= "<b>Mensaje</b>: ".$mensaje."<br>";
        
      $cuerpo .="</td>";
    $cuerpo .="</tr>";
  
    $cuerpo.="</table>";


  $mail->From = "info@c1250353.ferozo.com";
  	$mail->FromName = "Formulario de contacto Argenpesos-Deuda Online";
	 $mail->Subject = "Consulta via sitio web";
    $mail->AddAddress("tmallo@argenpesos.com.ar","Deuda Online");
    //$mail->AddAddress("mcd77.1990@gmail.com","Deuda Online");
    $mail->Body = $cuerpo;
     $mail->AltBody = "";
     $mail->Send();
 ?>