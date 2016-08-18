<?php 
@include("cn.php");
date_default_timezone_set("Mexico/General");
$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas
$liga="http://www.expoferiadelcomercio.com/";//Para rutas de estilos e img segùn dominio


if (isset($_POST["email"]))
{ 


//Validando recaptcha
//2) Código para validar recaptcha capturado
	require_once('../recaptchalib.php');
  $privatekey = "6LdSYfESAAAAAB5VtVbrjMI52U-aPjcfLHrlFsGk";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
//Validando el recaptcha
  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
	
	$recaptcha_m="El reCAPTCHA es incorrecto";
	$redireccionA = "<script type='text/javascript'>history.back(alert('$recaptcha_m'));	</script>";
   echo $redireccionA;
    } else {

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$apellidosm=$_POST['apellidosm'];
$colonia=$_POST['colonia'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$ciudad=$_POST['ciudad'];
$email=$_POST['email']; 
$celular=$_POST['celular'];
$telefono=$_POST['telefono']; 
$fechanac=$_POST['datepicker'];
$recibirp=$_POST['recibirpromo'];

//Validando si el checkbox se encuentra activado o no
if ($recibirp=="on"){
$ck=1;//Activado
}else{
	$ck=0; //No activado
	}


$diat=substr($fechanac,8,2);
$mest=substr($fechanac,5,2);
$aniot=substr($fechanac,0,4);
$formfechat= $diat."-".$mest."-".$aniot;


//Validar si el correo se encuentra registrado
$validar=mysql_query("select email from prerregistro where email='$email'");

$rvalidar=mysql_num_rows($validar);

if ($rvalidar<>0){
	
$m=".:: El email ya se encuentra registrado ::.";
	$redireccionA = "<script type='text/javascript'>history.back(alert('$m'));	</script>";
   echo $redireccionA;
	
}else {
	
//Registrando usuario
///////////////////////////
$nuevo_usuario=mysql_query("insert into prerregistro(nombres,apellidopaterno,colonia,pais,estado,ciudad,fechanac,celular,fecha,hora,email,recibirpromo) values ('$nombres','$apellidos','$colonia','$pais','$estado','$ciudad','$fechanac','$celular','$fecha','$hora','$email','$ck')");
$id=mysql_insert_id();

//NOTIFICANDO VIA EMAIL
//////////////////////////
$fundacion="Expoferia del Comercio 2014";
$cont="Desarrollo Comercial";
$mentitulo="Prerregistro de usuario por la web";

//////////////////////////
//ADMINISTRADOR DE LA FUNDACION
// Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales Admin
$cabeceras .= 'From: '.$nombres.' '.$apellidos.'<'.$email.'>' . "\r\n";
//$para  = 'patricia.cituk.perez@gmail.com'; // Email destino
$para  = 'atencionasocios@canacomerida.com'; // Email destino
// Asunto
$titulo = utf8_decode($mentitulo);

// Cuerpo o mensaje para administrador
$mensaje = '
<html>
<head>
  <title></title>
  	<link rel="stylesheet" type="text/css" href='.$liga.'css/main.css" />
</head>
<body>
<center>
<a href="'.$liga.'"><img src="'.$liga.'images/slider/promo_expocomercio.jpg"></a>
</center>
<br><br><br>
  <table width="100%" align="center">
    <tr>
     <td align="center"><h2 style="color:#A8CF45">
	 Un usuario se ha registrado en la <a href="'.$liga.'">'.utf8_decode($fundacion).'</a><br></h2>
	 
	 <br>
	  <b>Nombre:</b> '.utf8_decode($nombres).'<br>
	<b>Apellido:</b> '.utf8_decode($apellidos).'<br>
	  <b>Fecha de nacimiento:</b> '.$formfechat.'<br>
	 <b>Celular: </b> '.$celular.'<br>
	  <b>Colonia:</b> '.utf8_decode($colonia).'<br>
	 <b>Ciudad:</b> '.utf8_decode($ciudad).'<br>
	 <b>Estado:</b> '.utf8_decode($estado).'<br>
	 <b>Pa&iacute;s:</b> '.utf8_decode($pais).'<br>
	 <b>Email:</b> '.$email.'

	  </td>
    </tr>
  </table>
  <div>
  <span style="font-size:10px;color:#000">'.$regi.'</span>
	<br><br><br>
	<center>
   <img src="'.$liga.'images/piemail.jpg">
   </center>
</div>
</div>
</body>
</html>
';

//Enviando correo
mail($para, $titulo, $mensaje, $cabeceras);//ADMINISTRADOR

//**************************************************//
//USUARIO QUE ENVIA EL FORMULARIO DE CONTACTO
// Cabecera que especifica que es un HMTL
$cabeceras2  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Cabeceras para usuario registrante
$cabeceras2 .= 'From: '.$fundacion.'<'.$para.'>' . "\r\n";		

//Correo del destinatario
$para2  = $email; //Correo del usuario

// Asunto
$a="Gracias por registrarte en la Expoferia del Comercio";
$titulo2 = $a;

// Cuerpo o mensaje para usuario registrante
$mensaje2 = '
<html>
<head>
  <title></title>
  	<link rel="stylesheet" type="text/css" href="'.$liga.'css/main.css" />
</head>
<body>
<center><a href="'.$liga.'"><img src="'.$liga.'images/slider/promo_expocomercio.jpg"></a></center>
		<br><br><br>	
  <table align="center" width="100%">
    <tr>
     <td align="center">
		 <h1 style="color:#A8CF45">
	 <b>'.utf8_decode($nombres).' '.utf8_decode($apellidos).' </b><br>Gracias por registrarte en la <a href="'.$liga.'">'.$fundacion.'</a><br></h1>
	<span style="font-size:18px;color:#000">Pronto te haremos llegar noticias sobre nuestras actividades</span><br>
	 	 <br>
	 <b>Contacto:</b> '.$cont.'<br>
	 <b>Email:</b>'.$para.'<br>
	 </td>
    </tr>
  </table>
  <div>
	<br><br><br>
	<center>
   <img src="'.$liga.'images/piemail.jpg">
   </center>
</div>
</div>
</body>
</html>
';
////////
//Enviando correos
mail($para2, $titulo2, $mensaje2, $cabeceras2);//USUARIO

//Termima notificando via email

echo '<script> alert (".:: Sus datos se han registrado ::.") </script>';

/////////////////////////////
}//Termina Validar si el correo se encuentra registrado
//aqui va redireccionamiento
	
}//Termina validancion recaptcha
echo '<script language=Javascript> location.href="../index.php"</script>';
}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post


?>
