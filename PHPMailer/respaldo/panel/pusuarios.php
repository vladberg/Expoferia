<?php 
include("procesos/conn.php");
//Datos de la empresa
$datosem=mysql_query("select * from datos_empresa",$conexion);
$vdatosem=mysql_fetch_array($datosem);

$nombre=$vdatosem['vnombre'];
$direccion=$vdatosem['vdireccion'];
$telefono=$vdatosem['vtelefono'];
$celular=$vdatosem['dcelular'];
$email=$vdatosem['vemail'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: Bienvenidos al panel de Admnistración de Grupo Inmobiliario Internacional ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style_admin.css" rel="stylesheet" type="text/css" />
<link href="css/style_menu.css" rel="stylesheet" type="text/css" />
<!-- Para validar formulario de contacto-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js" ></script>
<style type="text/css">
<!--
/*captcha*/
label.error { display:inline-table;}
table td{height:10px;}
form label.error, label.error{color:red;padding:0 0 0 10px; font-family:Arial, Helvetica, sans-serif; font-size:11px;}
input.error,select.error,textarea.error{border:1px solid red;}

.required {color:red; font-weight:bold;}
/*captcha*/

.Estilo3 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.Estilo5 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>



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
 $("#fvalida").validate({
				rules:{
				usuario			:	{required	: true,minlength: 3} ,
				pass			: 	{required	: true,minlength: 4},
				
				},
				messages:{
				usuario				:"Ingrese su usuario" ,
				pass			    :"Ingrese su clave",
								
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

.vacio{
background:#fff;
}
</style>
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
<span class="nusuario">  
<?php  echo utf8_encode($nombre) ?> </span>
<span id="leyenda">BIENVENIDO A GRUPO INMOBILIARIO INTERNACIONAL </span> </div>
<!--Termina Encabezado-->	
</td>
  </tr>
</table>

<br />


	<fieldset><table width="735" border="0" align="center" cellspacing="2">

<tr> <td align="center">USUARIOS</td> 
</tr>
<tr>
  <td align="center" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="images/usuarios.png" width="100" height="100" title="Usuarios" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
<tr>
<td align="center">
  <div align="center"></div></td>
</tr>
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
