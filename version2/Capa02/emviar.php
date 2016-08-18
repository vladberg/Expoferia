<?php
error_reporting(0);
include_once("lib/template.php");
$link=conectarse();
$id_categoria=$_GET['id'];

if($_POST){
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empre'];
$text = $_POST['mensaje'];

//Librerías para el envío de mail
include_once('PHPMailer/class.phpmailer.php');
include_once('PHPMailer/class.smtp.php');
 
//Recibir todos los parámetros del formulario
//$para = 'ventas@sartory.mx';
$para = 'bergman.pereira.novelo@gmail.com';
$asunto = 'Contacto';
$mensaje = '<h2>'.$nombre.'</h2><h3>'.$emprea.'</h3><h3>'.$email.'</h3><h3>'.$telefono.'</h3><h3>'.$text.'</h3>';
$archivo = $imagen;
 
//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->SMTPAuth = true;
$mail->SMTPSecure = "tsl";
$mail->Host = "localhost";
$mail->Port = 25;
 
//Nuestra cuenta
//$mail->Username ='bergman.pereira.novelo@gmail.com';
//$mail->Password = 'vladberg01'; //Su password
 
//Agregar destinatario
$mail->AddAddress($para);
$mail->Subject = $asunto;
$mail->Body = $mensaje;
//Para adjuntar archivo
$mail->AddAttachment($archivo, $archivo);
$mail->MsgHTML($mensaje);
  
//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");            
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
         </script>';
}
 }

