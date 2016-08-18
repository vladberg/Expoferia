<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

//Recibiendo el id de la empresa
$id_empresa=$_GET['ide'];
$info=$_GET['inf']; //Indica si se carga info empresa (0), o google maps (1) o la p�gina web de la empresa (2)
$e_ruta="images/empresas/";//Ruta im�genes

 $consulta=mysql_query("select * from empresas where idempresa=$id_empresa");

$vconsulta=mysql_fetch_array($consulta);
$e_nombre=$vconsulta['empresa'];
$e_descripcion=$vconsulta['descripcion'];
$e_giro=$vconsulta['giro'];
$e_url=$vconsulta['url'];
$e_googlemaps=$vconsulta['googlemaps'];
$e_imagen=$vconsulta['imagen'];

//Validando si tiene pagina web o no
if ($e_url<>""){
	$web=1;
}else {
	$web=0;
}

//Validando si tiene registrado direcci�n de google maps
if ($e_googlemaps<>""){
	$map=1;
}else {
	$map=0;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo strtoupper(utf8_decode($e_nombre)) ?></title>
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<style>
body {
	background:#fff;
	border:0;
	/*font:14px Arial, Helvetica, sans-serif;*/
	font-family:"Open Sans Condensed";
	color:#3c4046;
	line-height:20px;
	font-size:12px;
	
}
.titulos_azul{
font-family:"Cuprum";
font-size:17px;color:#088ec6;
font-weight:normal;	
}

/*Para links del sitio*/
a.ligas2{
	color:#088ec6;
	font-size:17px;
	text-decoration:none;
}

a.ligas2:hover{
	color:#e9028c;
}

</style>
</head>

<body>

<table width="751" cellspacing="20" align="center"><tr>
  <td>
<?php 
switch($info){
	case 0: //Info empresa
	/////
	?>
<br />

<table width="750" cellspacing="16" align="center"><tr>
     <td colspan="3" align="center" class="titulos_azul">
<b><?php echo strtoupper(utf8_decode($e_nombre)) ?></b><br />
    
<br />
     </td>
   </tr>

<tr>
     <td colspan="3" align="center">

     <img src="images/separador.gif" width="520"/>
<br />
     </td>
   </tr>
    <tr>
    <td width="225" rowspan="4" align="center"><img src="<?php echo $e_ruta.$e_imagen ?>" width="200"/></td>
   </tr>
   
   <tr>
   
    <td valign="top"><b>Descripci&oacute;n:</b>&nbsp;&nbsp;</td>
    <td>
    <?php echo utf8_decode($e_descripcion)?><br></td>
   </tr>
   
     
   <tr>
   
    <td valign="top"><b>P&aacute;gina web: </b>&nbsp;&nbsp;</td>
    <td>
    <a class="ligas2" href="<?php echo $e_url?>"><?php echo $e_url?></a><br></td>
   </tr>
  
     <tr>
 
     <td colspan="2">
     <?
  
  if ($map==1){
?>
  <a class="linkopacity" href="detalle_recomendaciones.php?ide=<?php echo $id_empresa ?>&inf=1"><img src="images/iconos/google_maps.png" height="80" title="Google maps"/></a>
    
  <?
}else {
?>
  <img src="images/iconos/google_maps_off.png" height="80"/>
  <?
}
?>
    
  <!------------------------------------------>
  <?
if ($web==1){
?>
  <a class="linkopacity" href="<?php echo $e_url?>" target="_self"><img src="images/iconos/pagina_web.png" height="80" title="P&aacute;gina web"/></a>
    
  <?
}else {
?>
  <img src="images/iconos/pagina_web_off.png" height="80"/><?
}
?>
     
     </td>
   </tr>
   <tr>
     <td colspan="3" align="center">
    
     <img src="images/separador.gif" width="520"/>

</center>
     </td>
   </tr>
     
     </table>



<?
	
	/////
	break;
	
	case 1: //Google maps
	
	?>
    <table width="750" cellspacing="10" align="center">
    <tr>
     <td align="center" class="titulos_azul">
   <b><a href="detalle_recomendaciones.php?ide=<?php echo $id_empresa ?>&inf=0" class="ligas2"><?php echo strtoupper(utf8_decode($e_nombre)) ?></a></b><br />    <br />
     </td>
     </tr>
    
    <tr>
     <td align="center" >
     <?php echo $e_googlemaps ;?>
     </td>
     </tr>
     </table>
    
    <?
	
	break;
	
	//case 2: //Pagina web
//	@include("includes/recomendaciones_pagina_web.php");
//	break;
	}

?>
<center>


<input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/></center>
</td></tr>
  
</table>
</body>
</html>