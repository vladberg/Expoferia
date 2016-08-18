<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

//Recibiendo el id de la empresa
$id_empresa=$_GET['ide'];
$info=$_GET['inf']; //Indica si se carga info empresa (0), o google maps (1) o la página web de la empresa (2)
$plano=$_GET['plano']; //Indica el plano al que pertenece la empresa para el link de regreso
$e_ruta="images/empresas/";//Ruta imágenes


//Consulta para obtener datos del stand
$stands=mysql_query("select stand, salon from stands_empresas inner join stands on stands_empresas.idstand=stands.idstand inner join salones on stands.idsalon=salones.idsalon where idempresa=".$id_empresa);

$vstands=mysql_fetch_array($stands);
$stand=$vstands['stand'];
$salon=$vstands['salon'];

 $consulta=mysql_query("select * from empresas where idempresa=$id_empresa");

$vconsulta=mysql_fetch_array($consulta);
$e_nombre=$vconsulta['empresa'];
$e_descripcion=$vconsulta['descripcion'];
$e_giro=$vconsulta['giro'];
$e_url=$vconsulta['url'];
$e_googlemaps=$vconsulta['googlemaps'];
$e_imagen=$vconsulta['imagen'];

//Validando si tiene pagina web o no
if ($e_imagen==""){
	$e_imagen="sin_imagen.jpg";

}


//Validando si tiene pagina web o no
if ($e_url<>""){
	$web=1;
}else {
	$web=0;
}

//Validando si tiene registrado dirección de google maps
if ($e_googlemaps<>""){
	$map=1;
}else {
	$map=0;
}


//Para link de regreso
switch($plano){
	case 1://
	$regresar="plano_chichen.php";
	$tit="SALÓN CHICHEN ITZÁ";
	$p=1;
	break;
	
	case 2://
	$regresar="plano_uxmal.php";
	$tit="SALÓN UXMAL";
	$p=2;
		break;
	
	case 3://Ek blama
	$regresar="plano_ekbalam1.php";
	$tit="SALÓN EK BALAM";
	$p=3;
	break;

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo strtoupper(utf8_decode($e_nombre)) ?></title>
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<!--<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">-->
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
<br /><br /><br />

<table width="750" cellspacing="16" align="center"><tr>
     <td colspan="3" align="center" class="titulos_azul">
<a href="<?php echo $regresar?>" class="ligas2"><?php echo strtoupper(utf8_encode($salon))?></a> > <b><?php echo strtoupper(utf8_decode($e_nombre) ." (".$e_giro.")") ?></b><br />
    
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
    <td width="225" rowspan="4" align="center"><img src="<?php echo $e_ruta.$e_imagen ?>" width="300"/></td>
   
    <td width="113" valign="top"><b>Stand:</b>&nbsp;<br></td>
    <td width="364"><span class="titulos_azul"><?php echo $stand?></span></td>
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
  <a class="linkopacity" href="info_empresa.php?ide=<?php echo $id_empresa ?>&inf=1&plano=<?php echo $p?>"><img src="images/iconos/google_maps.png" height="80" title="Google maps"/></a>
    
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
    <a href="<?php echo $regresar?>" class="ligas2"><?php echo strtoupper(utf8_encode($salon))?></a> > <b><a href="info_empresa.php?ide=<?php echo $id_empresa ?>&inf=0" class="ligas2"><?php echo strtoupper(utf8_decode($e_nombre)."(".$e_giro.")") ?></a></b><br />    <br />
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