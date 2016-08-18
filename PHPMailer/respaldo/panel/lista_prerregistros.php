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
<title>.:: <?php echo $panel_actividades?> ::.</title>
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
    <form action="lista_prerregistros.php" method="get" name="consulta" target="_self">
<span style="font-size:12px; font-weight:bold">Apellido Paterno</span>
<input name="formato" id="formato" type="text" size="45"/><input name="enviar" type="submit" value="Consultar" />

    </form></td></tr>
  
  </table>
  <br />
  
  <table width="842" border="0" align="center" cellspacing="2">

<tr> <td width="411" align="center"><strong>PRERREGISTROS</strong></td> 
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
    <td width="281"><b>Nombre</b></td>
    <td width="121"><b>Tel&eacute;fono</b></td>
    <td width="158"><b>Email</b></td>
  <!--  <td width="67" align="center"><b>Status</b></td>-->
    <td width="270" align="center"><b>Acciones</b></td>
  </tr>
<?php //Consulta para obtener datos de los usuarios registrados
//Obteniendo el valor de la cajita
$formatop=utf8_encode($_GET['formato']);

if ($formatop==""){
$criterio=	" where status=1 order by idprerregistro desc";
}else{
$criterio=	" where apellidopaterno like '%$formatop%' and status=1 order by idprerregistro  desc";
}


$lista=mysql_query("select * from prerregistro $criterio");

$tlista=mysql_num_rows($lista);
$num=$tlista;
if ($tlista<>0){
while($vlista=mysql_fetch_array($lista)){
$u_nombres=$vlista['nombres']." ".$vlista['apellidopaterno'];
	$u_telefono=$vlista['celular'];
$u_email=$vlista['email'];
$u_id=$vlista['idprerregistro'];
$u_status=$vlista['status'];
$diat=substr($a_fecha,8,2);
$mest=substr($a_fecha,5,2);
$aniot=substr($a_fecha,0,4);
$formfechat= $diat."-".$mest."-".$aniot;


	//status
	if($u_status==1) {
		$status="Activo";
		$val_status_cambiaru=0;
		}else {
	    $status="Inactivo";
		$val_status_cambiaru=1;
		
	}


?>

  <tr>
    <td width="281" valign="top"><?php echo$u_nombres?></td>
    <td width="121"  valign="top"><?php echo $u_telefono?></td>
    <td width="158"  valign="top"><?php echo $u_email?></td>
<?php /*?>    <td width="67" align="center" valign="top"><?php echo $status ?></td><?php */?>
    <td width="270" align="center" valign="top">
     <a href="verdatos_prerregistro.php?idusuario=<?php echo $u_id?>" class="link_ad">
        Ver datos</a><?php /*?>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp; 
        
          <a  href="#" onclick="javascript:cambiostatus('mail_unete.php?idusuario=<?php echo $u_id?>')" class="link_ad">
          Enviar email
  </a><?php */?>
   
               
     &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp; <?php echo $status?>&nbsp;<a  href="../includes/cambiar_status_prerregistro.php?idusuario=<?php echo $u_id?>&nstatus=<?php echo $val_status_cambiaru ?>" class="link_ad">Cambiar</a></td>
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
<a href="../reporte/listaimp_preregistros.php" target="_blank">
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
