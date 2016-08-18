<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: MERIMOTO - REGISTRAR USUARIO ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<!--Para apertura de ventanas popup-->



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



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
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
				celular			:	{required	: true,minlength: 10} ,
				email			:	{required	: true,email:true	},
						
				},
				
				messages:{
				nombres				:"<br>Ingrese su nombre" ,
				apellidos			:"<br>Ingrese su apellido paterno" ,
				celular				:"<br>Ingrese su celular" ,
				email				:"<br>Ingrese un e-mail v&aacute;lido",
								
				
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
<div id="encabezado"> <table align="center"><tr><td align="center"><img src="../images/logo_merimoto.png"  /></td></tr></table>
     </div>



<div class="encabezado2">
<!--Menu-->

<!------>


         <!--Contenedor del flexslider-->

     <!-- Espacio para poner algún contenido-->

  <center><img src="../images/separador.gif" /></center>
  <br /><br /><br /><br /><br /><br /><br /><br />
  <table width="600" align="center"><tr><td width="403">
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span>
  
  </td><td width="185">
  
  </td></tr></table>
  <br />
  <center><img src="../images/separador.gif" /></center><br />
  <form id="fvalida" name="fvalida" method="post" action="../includes/registrar_usuario.php">
                          <table width="770" border="0" align="center" style="font-size:12px">
                            <tr>
                                 <td colspan="2"  align="left"><strong>REGISTRO USUARIO</strong></td>
                              <td width="304" align="right">
                             <a href="usuarios.php" class="link_ad">Regresar a usuarios</a>
                             &nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
                              
                               </td>
                            </tr>
                            <tr>
                              <td  align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td width="304" rowspan="12"><img src="../images/registro.jpg" width="304" height="222" /></td>
                            </tr>
                            <tr>
                              <td width="147"  align="right">*Nombre(s):</td>
                              <td width="281" align="right"><input type="text" name="nombres" id="nombres"  size="45" /></td>
                            </tr>
                            <tr>
                              <td align="right">*Apellido Paterno:</td>
                              <td align="right"><input type="text" name="apellidos" id="apellidos" size="45"/></td>
                            </tr>
                            <tr>
                              <td align="right">Apellido Materno:</td>
                              <td align="right"><input type="text" name="apellidosm" id="apellidosm" size="45"/></td>
                            </tr>
                            <tr>
                              <td align="right">Direcci&oacute;n:</td>
                              <td align="right"><input name="direccion" type="text" id="direccion" size="45"/></td>
                            </tr>
                            
                            <tr>
                              <td align="right" valign="top">Tel&eacute;fono:</td>
                              <td align="right"><input name="telefono" type="text" id="telefono" size="45"/>                              <br />
                              <span style="font-size:10px; color:#0000FF"> *Indique su clave lada</span>
                              
                              </td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">Celular:</td>
                              <td align="right"><input name="celular" type="text" id="celular" size="45"/>
                              
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
                              <td align="right"><input type="text" name="email" id="email" size="45"/>
                                <br />
                              <span style="font-size:10px; color:#0000FF"> *Este es tu nombre de usuario</span> </td>
                            </tr>
                            <tr>
                              <td height="68"><!--<div align="center">
                  <input type="checkbox" name="tuid_checbock" id="tuid_checbock"  />
                Acepto los <a  href="terminos.php" class="Lkpfl">T&eacute;rminos y Condiciones</a></div>--></td>
                              <td height="68"><div align="center">
                                <input type="submit" name="aceptar" id="aceptar" value=" Aceptar " class="botonfomr" />&nbsp;&nbsp;
                                <input name="borrar" type="reset" value=" Borrar " class="botonfomr" />
                                </div></td>
                            </tr>
                          </table>
                       
  </form>
	<center><img src="../images/separador.gif" /></center><br />
  <br />
  

  <!--Termina Espacio para poner algún contenido-->
  </div>
  
  <!--Inicia encabezado3-->
<div id="encabezado3_panel" style="margin-top:160px">

  <!--Inicia fgb-->
  <div class="fbg">
    <div class="fbg_resize">
   
    <div class="col c1"> 
   <div style="height:12px"></div>
      <?php include("../includes/direccion.php"); ?>
      </div>
        
     <div class="col c4">
    <?php @include('../includes/redes_sociales_panel.php'); ?>
       </div>
</div>

<div class="footer">
    <div class="footer_resize">
    <?php @include("../includes/footer_panel.php"); ?>
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
