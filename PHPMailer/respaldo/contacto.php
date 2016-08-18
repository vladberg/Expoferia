<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");

if(isset($_POST["enviar"])){
	
	//2) Código para validar recaptcha capturado
	 require_once('recaptchalib.php');
  $privatekey = "6LdSYfESAAAAAB5VtVbrjMI52U-aPjcfLHrlFsGk";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
//Validando el recaptcha
  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    $respuesta=".:: El reCAPTCHA es incorrecto ::.";
	/*echo "<script>alert ('El reCAPTCHA es incorrecto');</script>";*/
	/*die ("El reCAPTCHA es incorrecto, intente de nuevo." .
         "(reCAPTCHA said: " . $resp->error . ")");*/
		
		 
  } else {
    // Your code here to handle a successful verification
	
	$email=$_POST["email"];
		$nombre=$_POST["nombre"];

		$header = "From: ".$nombre."<".$email.">  \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain";
		
		$mensaje = "Este mensaje fue enviado por: ".$nombre." \r\n";
		$mensaje .= "Su correo electrónico es: ".$email." \r\n";
		$mensaje .= "Su comentario o sugerencia es: " . $_POST["men"] . " \r\n\n";
		$mensaje .= "Este mensaje fue enviado el " . date('d-m-Y');
		
		mail("desarrollocomercial@canacomerida.com", "Informes", $mensaje, $header);
		$respuesta = ".:: Mensaje enviado ::.";
	
  }//Termina Validando el recaptcha
	
	
/*	 echo '<script language=Javascript> location.href="contacto.php?res='.$respuesta.'" </script>';*/
		
		
		
	}
	
	

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_canaco?></title>
<meta charset="utf-8">
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/menu.css" type="text/css" media="all">
 <style type="text/css">
<!--
/*captcha*/
label.error { display: none; }
table td{height:10px;}
form label.error, label.error{color:red;padding:0 0 0 10px; font-family:Arial, Helvetica, sans-serif; font-size:11px;}
input.error,select.error,textarea.error{border:1px solid red;}

.required {color:red; font-weight:bold;}
/*captcha*/

.Estilo3 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.Estilo5 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>



<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.validate.js" ></script>
<script>
$(document).ready(function() {
	
	//-----------------
$.validator.methods.equal = function(value, element, param) {
		return value == param;	};
	//------------------
	
/*$.validator.setDefaults({
submitHandler: function() {
	//
	}
		});*/
	//------------------
 $("#reg").validate({
				rules:{
				nombre			:	{required	: true,minlength: 3} ,
				email			:	{required	: true,email:true	},
				men			:   {required	: true,minlength: 10},
				
				},
				messages:{
				nombre				:"<br>Ingrese su nombre y apellido" ,
				email				:"<br>Ingrese un e-mail v&aacute;lido",
				men				:"<br>Ingrese su duda o comentario",
				
				
				}
 			});
 });

 
function colorear(campo)
{
	 var expr    = /[a-z]/i;
	 if(expr.test(document.getElementById(""+campo+"").value))
		 {
	 $("#"+campo+"").addClass("lleno");
		 }else
		 {
			 }
}
 

 
</script>


<style>
.lleno{
	background:#E1E9F6;
	border:#BDC7D8;
	}
	.vacio{background:#fff;}
</style>
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
        <?php @include("includes/logo_expo.php"); ?>
         <div style="height:8px; margin-left:665px; margin-top:2px">
       <a href="panel/prerregistro.php"><img src="images/prerregistro.gif" width="320" style="border:0"></a></div>
        <div class="right">
       <?php 
$idmenu=7;
@include("includes/menu_principal2.php"); ?>
        </div>
      </div>
    </header>
  </div>
</div>
<div class="main">

 <div id="banner_ligas">
 
 <?php @include("includes/ligas.php");?>
 </div>
  <div id="banner">
  <!-- -->
  <table width="900" height="340" cellspacing="0" style="margin-top:-40px">
<tr>
<td width="500">
  <img src="images/expocomercio_contacto.jpg" width="500" height="330">
  
</td>
<td width="30"></td>
    <td width="370" valign="top" align="justify"> 
    <div id="contenidos_contacto">
    <form id="reg" name="reg" method="post" action="contacto.php">
                

                 <table width="335" cellpadding="3" border="0" align="center">
                                <tr>
                                	<td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                      <td width="106" height="10" align="left" class="contenido"> <label for="nombre">Nombre:</label></td>
                                      <td width="219" align="left"><input name="nombre" id="nombre" type="text" maxlength="30" size="27" /><br /></td>
                                </tr>
                                <tr>
                                    <td height="10" align="left"><label for="email" class="contenido">Email:</label></td> 
                                    <td align="left"><input name="email" id="email" type="text"  maxlength="450" size="27"/><br /></td>
                                </tr>
                               <tr>
                                  <td height="128" align="left" valign="top">
                                        <label for="mensaje" class="contenido">Mensaje:</label>                                  </td>
                                  <td align="left">
                                 <textarea name="men"  id="men" rows="6" cols="22" style="resize:none";></textarea><br /><span style="font-size:10px; color:#00F">*Mínimo 10 caracteres</span>                                  </td>
                              </tr>  
                              <tr>
                                  <td colspan="2" align="center" valign="top" class="contenido">
Escribe las palabras que aparecen en el recuadro separadas con un espacio <br />
<?
//1) Código para mostrar la imagen del recaptcha
 require_once('recaptchalib.php');
   $publickey = "6LdSYfESAAAAANiqvHPhc8Gph1RIjGJpZqCDsgek";// you got this from the signup page
  echo recaptcha_get_html($publickey);
?></td>
                              </tr>
                              <tr>
                                <td colspan="2" align="center"><center><span style="font-size:12px; color:#F00"><?php echo $respuesta ?></span> </center></td>
                              </tr>
                              <tr>
                                  <td colspan="2" align="center"><center><input type="submit" name="enviar" value="Enviar Mensaje" /></center></td>
                              </tr>
                                                       </table> 
                  
                  </form>
                  </div>
</td>
</tr>

<tr>
<td colspan="3" align="center">
<center><span class="titulos" style="font-size:20px">¡Llámenos para más información!</span></center>
 <span class="contenidos_text" style="font-size:16px">
Informes y <a class="ligas2" href="expositores.php"><span style="font-size:16px">Ventas de Stands</span></a> <b>+52(999) 942-88-50, Ext. 126 y 127</b> <br>desarrollocomercial@canacomerida.com
</span>

</td>

</tr>
</table>

<!---------->
  </div>
  <div style=" height:24px"></div>
     <?php @include("includes/patrocinadores.php") ?>
     
</div>

<div class="espacio"></div>


<div class="main">
  <section id="content"></section>
</div>
<div class="body2">
  <div class="main">
    <footer>
      <div class="footerlink">
        <?php @include("includes/footer.php") ?>
       <!-- <div style="clear:both;"></div>-->
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
<?php @include("includes/google_analytics.php"); ?>

</body>
</html>