<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{


@include("../includes/etiquetas.php");
@include("../includes/cn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $lista_conferencias?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />

<script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=500, height=330, top=120, left=350";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>

</head>
<body>
<div id="encabezado"><center>
<?php
$rimagen="../images/";
 @include("../includes/mostrar_logo.php") ;
 
  ?>
</center>
     </div>



<div class="cuerpo">
<!--Menu-->

<!------>


         <!--Contenedor del flexslider-->

     <!-- Espacio para poner algún contenido-->

   <br /><br /><br /><br /><br /><br /><br /><br />
  <table width="729" align="center"><tr><td width="474">
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span>

  </td><td width="243" align="right">
   <a href="panel.php" class="link_ad">Regresar al panel</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
  </td></tr></table>
  <br />
  <table width="729" height="42" align="center">
 <tr>
    <td height="56" align="center" valign="middle" class="bordeado">
    <form action="lista_registros_conferencias.php" method="get" name="consulta" target="_self">
<span style="font-size:12px; font-weight:bold">Conferencia</span>
<input name="formato" id="formato" type="text" size="45"/><input name="enviar" type="submit" value="Consultar" />

    </form></td></tr>
  
  </table>
  <br />
  
  <table width="842" border="0" align="center" cellspacing="2">

<tr> <td width="411" align="center"><strong>INSCRIPCIONES A CONFERENCIAS</strong></td> 
  <td width="421" align="right">
 
  </td>
</tr>


<tr>
  <td colspan="2"  height="5"></td>
</tr>

<tr>
  <td colspan="2" align="center" >
<!--Tabla de resultados --->
<span class="etiformulario">
<div style="overflow:auto; width:900px; height:250px">
<center><img src="../images/separador.gif" /></center><br />
<table width="848" border="0" style="font-size:12px">
  <tr>
    <td width="202"><b>Nombre</b></td>
    <td width="147"><b>Puesto</b></td>
    <td width="191"><b>Email</b></td>
    <td width="290"><b>Conferencia</b></td>
  <!--  <td width="67" align="center"><b>Status</b></td>-->
    
  </tr>
<?php //Consulta para obtener datos de los usuarios registrados
//Obteniendo el valor de la cajita
$formatop=utf8_encode($_GET['formato']);

if ($formatop==""){
$criterio=	" order by registro_conferencias.idreg desc";
}else{
$criterio=	" where regconf_tipos.conferencia like '%$formatop%' order by registro_conferencias.idreg  desc";
}


$lista=mysql_query("SELECT nombre, empresa, puesto,telefono, email, conferencia FROM `registro_conferencias` inner join regconf_tipos on registro_conferencias.idreg=regconf_tipos.idreg $criterio");

$tlista=mysql_num_rows($lista);
$num=$tlista;
if ($tlista<>0){
while($vlista=mysql_fetch_array($lista)){
$u_nombres=$vlista['nombre'];
$u_email=$vlista['email'];
$u_id=$vlista['idreg'];
$u_puesto=$vlista['puesto'];
$conf=$vlista['conferencia'];
/*$a_fecha=$vlista['fecha'];
$diat=substr($a_fecha,8,2);
$mest=substr($a_fecha,5,2);
$aniot=substr($a_fecha,0,4);
$formfechat= $diat."-".$mest."-".$aniot;*/


	

?>

  <tr>
    <td width="202" valign="top"><?php echo $u_nombres?></td>
    <td width="147"  valign="top"><?php echo $u_puesto?></td>
    <td width="191"  valign="top"><?php echo $u_email?></td>
    <td width="290"  valign="top"><?php echo $conf?></td>
<?php /*?>    <td width="67" align="center" valign="top"><?php echo $status ?></td><?php */?>
    
  </tr>

  
 <?php   
}
}else {
	
	?>
    <tr>
      <td align="center" colspan="5"><img src="../images/iconos/no_results.png" width="69" height="69" /><br />No se encontraron resultados</td></tr>
    <?
	
}//termina el if
?>

</table>

</div>
</span>
<!--Termina Tabla de resultados --->

 </td>
  </tr>


</table>
  <br /><br /> 
 
<center><img src="../images/separador.gif" /></center><br />
<center>

<?php

if ($num<>0){

?>
<!--<a href="imprimir_rconferencias.php" target="_blank">-->
<a href="../reporte/lista_conferencias.php" target="_blank">
<input name="Imprimir" type="button" id="imprimir" value="Imprimir resultados"/></a><br />


<?
}
?>
</center>
   <!--Termina Espacio para poner algún contenido-->
  </div>
  
  <!--Inicia encabezado3-->
<div id="footer" style="margin-top:160px">

  <!--Inicia fgb-->
  <div class="fbg">
    <div class="fbg_resize">
   
    <div class="col c1"> 
  
      <?php @include("../includes/footer_panel.php") ?>
      </div>
        
    
</div>


</div><!--Termina fgb-->



</div>
<?php @include("includes/google_analytics.php"); ?>
</body>
</html>
<?php 

}
else 
{
header("Location:login.php");
}
?>
