<?php 
include("procesos/cEnc.php");
@include("procesos/conn.php");
$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas

$ids=$_GET['sigin'];
//Desencriptar id de la propiedad
$Cen= new enc;
$Cen->desc($ids);
$ids=$cadenad;


if(isset($_POST["correo2"])){
$ids=$_POST['idusu'];

//Validando existencia de usuario por su id desencriptado
$scorreo=mysql_query("select vnombres,vapellidopaterno,vemail from usuarios where iidusuario='$ids'");
$mcorreo=mysql_num_rows($scorreo);
	
if ($mcorreo<>0){//Validando existencia
$vscorreo=mysql_fetch_array($scorreo);
$dcorreo=$vscorreo['vemail'];
$nombres=$vscorreo['vnombres'];
$apelpat=$vscorreo['vapellidopaterno'];

$nclave=$_POST['correo2'];	
//Actualizar contraseña
$clavesinc=$nclave;
$nclaveA=md5($clavesinc);

//Actualizando clave
$actualizar=mysql_query("update usuarios set vclave='$nclaveA' where iidusuario='$ids' and vemail='$dcorreo'");
$guardab=mysql_query("insert into bitacora values (0,'$fecha','$hora','Cambio de contraseña','$dcorreo','$id','usuarios')",$conexion); 

$liga="http://www.realestateonline.mx";
$Empresa="Real Estate, Grupo Inmobiliario Internacional";
$liga_sesion="http://test.yubidubi.com.mx/bienes_raices/login_sesion.php";
$liga2="http://www.realestateonline.mx";
$imaglog="http://test.yubidubi.com.mx/bienes_raices/images/logo_realestate.png";


//Enviando email al usuario
$mensaje= '<a href='.$liga2.'><img src='.$imaglog.' width="350px" border="0"></a><br><br>Estimado<strong> '.$nombres.' '.$apelpat.'</strong>:<br>Tu clave ha sido actualizada, ahora tus datos de acceso son:<br><br>
		  Usuario: '.$dcorreo.'<br>
		  Contraseña: '.$clavesinc.'<br> Visita el mejor portal de bienes raíces <a href='.$liga.'>'.$Empresa.'</a><br>
		 <a href='.$liga_sesion.'>Inicia sesión aquí</a> ';
         
         $de="Real Estate - Grupo Inmobiliario Internacional";
          $asunto="Cambio de contraseña";
         $cabeceras = "From: Real Estate (Grupo Inmobiliario Internacional) - julian@realestateonline.mx <julian@realestateonline.mx>\r\nContent-type: text/html\r\n";
		 mail($dcorreo,$asunto,$mensaje,$cabeceras);
		 echo '<script> alert ("Su contraseña ha sido actualizada, hemos enviado a su email los nuevos datos de acceso.") </script>';	 
		 	
}else {
	echo "<script>alert ('El usuario no existe');</script>";	
}//Termina Validando existencia





	
//Aqui va redireccionamiento a login sesion
/*echo '<script language=Javascript> location.href="login_sesion.php"</script>';*/
}//Termima iset
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: Bienvenidos al panel de Admnistración de Grupo Inmobiliario Internacional ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style_admin.css" rel="stylesheet" type="text/css" />
<link href="css/style_menu.css" rel="stylesheet" type="text/css" />

<!--Validando campo de correo-->
<script language="javascript">
 //funcion que se utiliza para validar las variables que se reciben
function validardatos(){
var vemail          =document.getElementById("correo2").value;
var contaerror      = 0; 
    
    	
	 //validamos es correo del vendedor
	 if(vemail != ""){	    
	       contaerror = contaerror + 1;	
	 }else{
	   alert ("Escriba su nueva contraseña");
	  }
	  
	  
		
	 
		
	//validamos si todo esta bien
	if(contaerror==1){   
               document.getElementById('form2').submit();
    }			  
			  
	
}//cierre de la funcion
 </script>
</head>
<body>
<!--Al cargar la pagina muestra valores por defecto -->
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo"><a href="index.php"><img src="images/logogii.png"  border="0"/></a></div>
	  
	  <div class="nomempresa"><br /><img src="images/grupo_inmobiliario_internacional.png"  border="0" /></div>
		 
	  <div class="clr"></div>
	   
		
      
	  <!--Banner promo portal bienes raíces-->
	 <?php //include("procesos/encabezados.php") ?>
	    
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
	<!-- Contenido-->
	
	<br /><br /><br />
<table width="691" border="0" align="center">
  <tr>
    <td width="681"><div align="center" style="font-size:14px; font-weight:bold">
<!--Encabezado-->	
<span class="nusuario"></span><span id="leyenda">GRUPO INMOBILIARIO INTERNACIONAL </span> </div>
<!--Termina Encabezado-->	
</td>
  </tr>
</table>

<br />


	<fieldset>
	 <table width="574" border="0" align="center">
<form id="form2" name="form2" method="post" action="recuperar_contrasena.php" enctype="multipart/form-data">
  <tr>
    <td colspan="2">
	</td>
  <tr>
    <td colspan="2">
	<br />
	<center><strong>RECUPERAR CONTRASEÑA</strong></center>
	 <div id="lineinf"></div>
	
	</td>
    </tr>
  <tr>
    <td colspan="2" height="10"></td>
    </tr>
  <tr>
    <td width="200" align="right">Nueva Contrase&ntilde;a&nbsp;&nbsp;</td>
    <td width="364">
   
        <input name="correo2" type="password" id="correo2"  size="43" />
        <label for="textfield"></label>
        <input type="hidden" name="idusu" id="idusu" value="<?php echo $ids ?>" />        <br />
        </td>
    </tr>
  <tr>
    <td colspan="2" height="10"></td>
    </tr>
  <tr>
    <td colspan="2" align="center"><label>
      <input name="aceptar" type="button" id="aceptar" value=" Aceptar " class="botonfomr" onClick="validardatos();"/>&nbsp;&nbsp;
      <input name="Cancelar" type="button" id="Cancelar" onclick="window.close()" value=" Cancelar " class="botonfomr"/>
    </label>
      <br />
      <span style="color:#F00; font-size:10px">Escriba el correo registrado, de clic en aceptar y le enviaremos al correo proporcionado los pasos para cambiar su contraseña.</span></td>
    </tr>
  </form>
</table>
	</fieldset>

<br />
<table width="691" border="0" align="center">
  <tr>
    <td width="681"><div align="center">Ir a <a href="http://www.realestateonline.mx" class="linkfl" target="_blank">http://www.realestateonline.mx</a></div></td>
  </tr>
</table>
</div>
	
	
	<!--Termina contenido-->
      <div class="clr"></div>
    </div>
  </div>
  
  <div class="footer">
     <div class="footer_resize"> <table width="1001" height="80" border="0">
  <tr>
    <td align="center" height="10">
	<div class="footer_resize">
	<div align="center">
	</div>
    </div>
	</td>
  </tr>
  <tr>
    <td width="615" align="center">
	<?php include ("procesos/piepagina.php")?>
	</td>
  </tr>
  
  
</table>
	 
    </div>
  </div>
</div>
</body>
</html>
