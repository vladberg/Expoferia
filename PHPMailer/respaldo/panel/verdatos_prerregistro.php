<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
@include("../includes/etiquetas.php");

$idusuario=$_GET['idusuario'];
//Obteniendo valor seleccionado en el combo
//Obteniendo datos del usuario en sesión
$datos_usuario=mysql_query("select * from prerregistro where idprerregistro='$idusuario'");

$vdatos_usuario=mysql_fetch_array($datos_usuario);
$minombre=$vdatos_usuario['nombres'];
$apellidopatusu=$vdatos_usuario['apellidopaterno'];
$colonia=$vdatos_usuario['colonia'];
$ciudad=$vdatos_usuario['ciudad'];
$estado=$vdatos_usuario['estado'];
$pais=$vdatos_usuario['pais'];
$celularusu=$vdatos_usuario['celular'];
$freg=$vdatos_usuario['fechanac'];
$promo=$vdatos_usuario['recibirpromo'];
$emails=$vdatos_usuario['email'];


$diat=substr($freg,8,2);
$mest=substr($freg,5,2);
$aniot=substr($freg,0,4);
$formfechat= $diat."-".$mest."-".$aniot;

if ($promo==1){
	$s="Si";
	}else{
	$s="No";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_usuariosr?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />

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
   <a class="link_ad" href="lista_prerregistros.php">Regresar a pre registros</a>&nbsp;&nbsp;|&nbsp;&nbsp;     
      <a class="link_ad" href="finaliza.php">Salir</a>
  </td></tr></table>
  <br />

<!-- Contenido-->
                     
  <table width="907" border="0" align="center" style="font-size:12px">
                            <tr>
                                 <td colspan="2"  align="left"><h3 style="font-size:18px">PREREGISTRO <?php echo $minombre.'' .$apellidopatusu?></h3>                                   <br /></td>
                              <td width="340" align="right">&nbsp;</td>
                            </tr>
                            <tr>
                              <td  align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td width="340" rowspan="18" valign="middle"><img src="../images/mascota_expoferiacomercio_registro.jpg"  width="340"/></td>
                            </tr>
                            <tr>
                              <td width="173"  align="right">Nombre(s):</td>
                              <td width="380" align="right"><input type="text" name="nombres" id="nombres"  size="40" value="<?php echo $minombre?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td align="right">Apellido Paterno:</td>
                              <td align="right"><input type="text" name="apellidos" id="apellidos" size="40" value="<?php echo $apellidopatusu?>" readonly="readonly"/></td>
                            </tr>
                            
                            
                            
                            <tr>
                              <td height="24" align="right" valign="top">Pa&iacute;s:</td>
                              <td align="right"><input type="text" name="pais" id="pais" size="40" value="<?php echo $pais?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td height="24" align="right" valign="top">Estado:</td>
                              <td align="right"><input type="text" name="estado" id="estado" size="40" value="<?php echo $estado?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td height="24" align="right" valign="top">Ciudad:</td>
                              <td align="right"><input type="text" name="ciudad" id="ciudad" size="40" value="<?php echo $ciudad?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td align="right">Colonia:</td>
                              <td align="right"><input type="text" name="colonia" id="colonia" size="40" value="<?php echo $colonia?>"/></td>
                            </tr>
                            
                            <tr>
                              <td height="24" align="right" valign="top">Email:</td>
                              <td align="right"><input type="text" name="email" id="email" size="40" value="<?php echo $emails?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td height="24" align="right" valign="top">Celular:</td>
                              <td align="right"><input type="text" name="celular" id="celular" size="40" value="<?php echo $celularusu?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td height="24" align="right" valign="top">*Fecha Nacimiento:</td>
                              <td align="right"><input type="text" name="fechanac" id="fechanac" size="40" value="<?php echo $formfechat?>" readonly="readonly"/>
                             
                              
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" valign="top"><label for="recibirpromo"><span style="font-size:11px; color:#00F">Me gustar&iacute;a recibir ofertas y promociones de la Expoferia del Comercio</span>&nbsp;<span style="font-size:14px; font-weight:bold"><?php echo $s?></span></label></td>
                            </tr>
                            
                            <tr>
                              <td colspan="2" align="center" valign="top">&nbsp;</td>
                            </tr>
                            
                          </table>

                    <!--Termina contenido-->
                  
              

 

</div>


<!--Inicia encabezado3-->
<div id="footer" style="margin-top:320px">

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