<?php 
//iniciando sesi�n
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
@include("../includes/etiquetas.php");

$idusuario=$_GET['idusuario'];
//Obteniendo valor seleccionado en el combo
//Obteniendo datos del usuario en sesi�n
$datos_usuario=mysql_query("select nombres,apellidopaterno,apellidomaterno,direccion,telefono,celular,usuario from usuarios inner join login on usuarios.idusuario=login.idusuario where usuarios.idusuario='$idusuario'");

$vdatos_usuario=mysql_fetch_array($datos_usuario);
$minombre=$vdatos_usuario['nombres'];
$apellidopatusu=$vdatos_usuario['apellidopaterno'];
$apellidomatusu=$vdatos_usuario['apellidomaterno'];
$direccionusu=$vdatos_usuario['direccion'];
$telefonousu=$vdatos_usuario['telefono'];
$celularusu=$vdatos_usuario['celular'];
$emailusu=$vdatos_usuario['usuario'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_usuariosvd?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />


<script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=500, height=460, top=120, left=350";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>
<!-- --->
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



<script type="text/javascript" src="../js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js" ></script>
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
				nombres			:	{required	: true,minlength: 3} ,
				apellidos			:	{required	: true,minlength: 3} ,
				telefono		:	{required	: true} ,
				email			:	{required	: true,email:true	},
				password			:	{required	: true},
				},
				
				messages:{
				nombres				:"<br>Ingrese su nombre" ,
				apellidos			:"<br>Ingrese su apellido paterno" ,
				telefono			:"<br>Ingrese su tel&eacute;fono" ,
				email				:"<br>Ingrese un e-mail v&aacute;lido",
				password				:"<br>Ingrese una clave",
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
<body>
<div id="encabezado"><center><img src="../images/expoferia_logo.png" /><br /><br /><img src="../images/separador.gif" /></center>
     </div>


<div class="cuerpo">

<br /><br /><br /><br /><br /><br /><br /><br />
  <table width="729" align="center"><tr><td width="486">
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span>
  
  </td>
  <td width="231" align="right">
   <a class="link_ad" href="usuarios.php">Regresar a usuarios</a>&nbsp;&nbsp;|&nbsp;&nbsp;     
      <a class="link_ad" href="finaliza.php">Salir</a>
  </td></tr></table>
  <br />
<!-- Contenido-->
                     
                          <table width="770" border="0" align="center" style="font-size:12px">
                            <tr>
                                 <td colspan="2"  align="left"><h3 style="font-size:18px">DATOS USUARIO</h3></td>
                              <td width="304" align="right">&nbsp;</td>
                            </tr>
                            <tr>
                              <td  align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td width="304" rowspan="11"><img src="../images/registro.jpg" width="304" height="222" /></td>
                            </tr>
                            <tr>
                              <td width="147"  align="right">*Nombre(s):</td>
                              <td width="281" align="right"><input type="text" name="nombres" id="nombres"  size="45" value="<?php echo utf8_decode($minombre)?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td align="right">*Apellido Paterno:</td>
                              <td align="right"><input type="text" name="apellidos" id="apellidos" size="45" value="<?php echo utf8_decode($apellidopatusu)?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td align="right">Apellido Materno:</td>
                              <td align="right"><input type="text" name="apellidosm" id="apellidosm" size="45" value="<?php echo utf8_decode($apellidomatusu)?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td align="right">Direcci&oacute;n:</td>
                              <td align="right"><input type="text" name="direccion" id="direccion" size="45" value="<?php echo utf8_decode($direccionusu)?>" readonly="readonly"/></td>
                            </tr>
                            
                            <tr>
                              <td align="right" valign="top">*Tel&eacute;fono:</td>
                              <td align="right"><input name="telefono" type="text" id="telefono" size="45" value="<?php echo $telefonousu?>" readonly="readonly"/>                              <br />
                              <span style="font-size:10px; color:#0000FF"> *Indique su clave lada</span>
                              
                              </td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">Celular:</td>
                              <td align="right"><input name="celular" type="text" id="celular" size="45" value="<?php echo $celularusu?>" readonly="readonly"/>
                              
                              </td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" valign="top"><b>DATOS DE ACCESO</b></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">*Correo:</td>
                              <td align="right"><input type="text" name="email" id="email" size="45" value="<?php echo $emailusu?>" readonly="readonly"/>
                                <br />
                              <span style="font-size:10px; color:#0000FF"> *Este es tu nombre de usuario</span> </td>
                            </tr>
                          </table>
 
                    <!--Termina contenido-->
                  
              

 

</div>


<!--Inicia encabezado3-->
<div id="footer" style="margin-top:332px">

 <!--Inicia fgb-->
  <div class="fbg">
    <div class="fbg_resize">
   
    <div class="col c1"> 
  
      <?php @include("../includes/footer_panel.php") ?>
      </div>
        
    
</div>


</div><!--Termina fgb-->



</div>
</body>
</html>
<?php 

}
else 
{
header("Location:login.php");
}
?>