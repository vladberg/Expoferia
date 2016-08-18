<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

//Recibiendo el id de la empresa
$id_actividad=$_GET['ide'];
 $eventos=mysql_query("select * from actividades where idactividad=$id_actividad");
 $veventos=mysql_fetch_array($eventos);

	$vactividad=$veventos['actividad'];
	$vdescripcion=$veventos['descripcion'];
	$vlugar=$veventos['lugar'];
	$vfecha=$veventos['fecha'];
	$vhora=$veventos['hora'];
	
	//Dando formato día, fecha y año//
 $diat=substr($vfecha,8,2);
 $mest=substr($vfecha,5,2);
 $aniot=substr($vfecha,0,4);
 $formfecha= $diat."-".$mest."-".$aniot;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo utf8_decode($vactividad) ?></title>
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



</style>
</head>

<body>
 
<br />
<table width="544" cellspacing="10" align="center">
<tr>
     <td colspan="3" align="center">

     <img src="images/separador.gif" width="520"/>
<br />
     </td>
   </tr>
    <tr>
    <td width="144" rowspan="5" align="center"> <?php @include("includes/logo_expo.php"); ?></td>
   
    <td width="76" valign="top"><b>Actividad:</b>&nbsp;<br></td>
    <td width="298"><span class="titulos_azul"><?php echo utf8_decode($vactividad)?></span></td>
   </tr>
   
   <tr>
   
    <td valign="top"><b>Descripci&oacute;n:</b>&nbsp;&nbsp;</td>
    <td>
    <?php echo utf8_decode($vdescripcion)?><br></td>
   </tr>
   
     
   <tr>
   
    <td valign="top"><b>Fecha: </b>&nbsp;&nbsp;</td>
    <td>
    <?php echo $formfecha?><br></td>
   </tr>
   <tr>
   
     <td valign="top"><b>Hora: </b>&nbsp;&nbsp;</td>
     <td><?php echo $vhora?></td>
   </tr>
   <tr>
 
     <td valign="top"><b>Lugar: </b>&nbsp;</td>
     <td><?php echo utf8_decode($vlugar)?></td>
   </tr>
   <tr>
     <td colspan="3" align="center">
    
     <img src="images/separador.gif" width="520"/>

<br /><br />
<input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/></center>
     </td>
   </tr>
     
     </table>
</body>
</html>