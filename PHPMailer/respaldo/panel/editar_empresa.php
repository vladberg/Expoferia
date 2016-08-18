<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
@include("../includes/etiquetas.php");

//Obteniendo valor seleccionado en el combo
$id_empresa=$_GET['idemp'];

//Consulta obtener datos de la empresa
//Consulta para obtener datos de los usuarios registrados
$lista=mysql_query("select * from empresas where idempresa='$id_empresa'");

$vlista=mysql_fetch_array($lista);
	$e_empresa=$vlista['empresa'];
	$e_descripcion=$vlista['descripcion'];
	$e_direccion=$vlista['direccion'];
	$e_telefono=$vlista['telefono'];
$e_contacto=$vlista['contacto'];
$e_giro=$vlista['giro'];
$e_url=$vlista['url'];
$e_googlemaps=$vlista['googlemaps'];
$e_patrocinador=$vlista['ipatrocinador'];
$e_status=$vlista['status'];
$e_idempresa=$vlista['idempresa'];


	
		//Patrocinador o no
	if($e_patrocinador==1) {
		$patrocinio="Si";
		}else {
		$patrocinio="No";
	    
	}
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_editar?> ::.</title>
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
				nombre			:	{required	: true,minlength: 3} ,
				descripcion			:	{required	: true,minlength: 10	},
				
				giro		:   {required	: true},
				logotipo		:   {required	: true},
				
				},
				messages:{
				nombre				:"<br>Ingrese el nombre de la empresa" ,
				descripcion				:"<br>Ingrese una breve descripci&oacute;n",
				giro				:"<br>Ingrese el giro de la empresa",
				logotipo				:"<br>Ingrese el logotipo",
				
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

<!--Habilitando campo de texto cuando se seleccione en combo giro OTRO-->
<script>
function cambiarTextfields(selec) { 
if (selec.value == "OTRO") { 
document.getElementById('giro2').disabled = false; 

} 
else  { 
document.getElementById('giro2').disabled = true; 
 
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
   <a class="link_ad" href="empresas.php">Regresar a empresas</a>&nbsp;&nbsp;|&nbsp;&nbsp;     
      <a class="link_ad" href="finaliza.php">Salir</a>
  </td></tr></table>
  <br />
<!-- Contenido-->
                      <form action="../includes/editar_empresa2.php" method="post" enctype="multipart/form-data" name="fvalida" id="fvalida">
                          <table width="770" border="0" align="center" style="font-size:12px">
                            <tr>
                              <td colspan="3"  align="center"><br /><img src="../images/separador.gif" /></td>
                            </tr>
                            <tr>
                              <td colspan="3"  align="center"><h3 style="font-size:18px">EDITAR EMPRESA</h3></td>
                            </tr>
                            <tr>
                              <td  align="right">&nbsp;</td>
                              <td align="right"><input type="hidden" name="nombres2" id="nombres2"  size="45" value="<?php echo utf8_decode($e_empresa)?>"/>                                <input type="hidden" name="idem" id="hidem" value="<?php echo $e_idempresa?>"/></td>
                              <td width="304" rowspan="11" valign="middle"><img src="../images/registro.jpg" width="304" height="222" /></td>
                            </tr>
                            <tr>
                              <td width="147"  align="right">*Nombre empresa:</td>
                              <td width="281" align="right"><input type="text" name="nombres" id="nombres"  size="45" value="<?php echo utf8_decode($e_empresa)?>"/></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">*Descripcion:</td>
                              <td align="right" valign="top"><textarea name="descripcion" id="descripcion" cols="35" rows="5" style="resize:none"><?php echo utf8_decode($e_descripcion)?></textarea><br />
                              <span style="font-size:10px; color:#0000FF">M&iacute;nimo 10 caracteres</span></td>
                            </tr>
                            <tr>
                              <td align="right">Direcci&oacute;n:</td>
                              <td align="right"><input type="text" name="direccion" id="direccion" size="45" value="<?php echo utf8_decode($e_direccion)?>"/></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">Tel&eacute;fono:</td>
                              <td align="right" valign="top"><input name="telefono" type="text" id="telefono" size="45" value="<?php echo $e_telefono?>"/>                              <br />
                             
                              
                              </td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">Contacto:</td>
                              <td align="right"><input name="contacto" type="text" id="contacto" size="45" value="<?php echo $e_contacto?>"/>
                              
                              </td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">*Giro:</td>
                              <td align="right" valign="top"><select name="giros_empresas" onchange="cambiarTextfields(this);">
                                <option value="<?php echo	utf8_decode($e_giro)?>"><?php echo utf8_decode($e_giro)?></option>
                                
							  <?php 
							  $g=$e_giro;
							  $t=mysql_query("select distinct(giro) from empresas where giro <> '$g' order by giro asc") ;
							 						 
							 $num_t=mysql_num_rows($t);
							 if ($num_t<>0){
						while($vnum=mysql_fetch_array($t)){
							$girom=$vnum['giro'];
							
														
?>						<option value="<?php echo utf8_decode($girom)?>"><?php echo utf8_decode($girom);?></option>
						
                        <?
                         
							
						}//Termina el while 
						
								
							}
							 
							  
							  ?>
                              <option value="OTRO">OTRO</option>
                    </select>
                              <input name="giro2" type="text" id="giro2" size="25" disabled="disabled" style="color:#666666; text-transform:uppercase" onfocus="if(this.value=='Escriba el giro') this.value='';" onblur="if(this.value=='') this.value='Escriba el giro';" value="Escriba el giro"/>
                              
                              
                              </td>
                            </tr>
                            <tr>
                              <td height="17" align="right" valign="top">Url</td>
                              <td height="17" align="right" valign="top"><input name="url" type="text" id="url" size="45" value="<?php echo $e_url?>"/><br />
                              <span style="font-size:10px; color:#0000FF"> *Ejemplo: http//www.sartory.mx</span></td>
                            </tr>
                            <tr>
                              <td height="68" align="right" valign="top">Google maps</td>
                              <td height="68" align="right" valign="top"><label for="textarea"></label>
                              <textarea name="googlemaps" id="googlemaps" cols="35" rows="5" style="resize:none"><?php echo $e_googlemaps?></textarea></td>
                            </tr>
                         
                            <tr>
                              <td height="68"><!--<div align="center">
                  <input type="checkbox" name="tuid_checbock" id="tuid_checbock"  />
                Acepto los <a  href="terminos.php" class="Lkpfl">T&eacute;rminos y Condiciones</a></div>--></td>
                              <td height="68"><div align="center">
                              
                              <span style="font-size:10px; color:#F00"> (*) Campos requeridos</span><br /><br />
                                <input type="submit" name="aceptar" id="aceptar" value=" Aceptar " class="botonfomr" />&nbsp;&nbsp;
                                <input name="borrar" type="reset" value=" Borrar " class="botonfomr" />
                                </div></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><br /><img src="../images/separador.gif" /></td>
                            </tr>
                          </table>
                       
  </form>
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