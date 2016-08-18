<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

$cond=$_GET['adia'];//Indica si se ven las actividades del d�a (1) o todas (0)
$ord=$_GET['ordenar'];//Indica criterio de ordenamiento seleccionado en combo

//Habilitando el combo de ordenamiento cuando se trate de ver a todas las actividades
if($cond==0){
$habilita="";

}else {
$habilita="disabled";
}

//Obteniendo fecha actual
// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
date_default_timezone_set('UTC');
 //Imprimimos la fecha actual dandole un formato
$fhoy=date("Y-m-d");
$form_fecha=date("d-m-Y");
$d="d�a";
////////////////////////////////////

//Validando etiqueta como encabezado
if ($cond==1){
//del dia
$etiqueta=" para ".$form_fecha;

}else{
//Todas ordenamiento
  switch($ord){
	case 0://Seleccionar (todos)
	$etiqueta="";
	break;
	
	case 1://Por fecha
	$etiqueta=" por Fecha";
	break;
	
	case 2://Por salon
	$etiqueta=" por Sal�n";
	break;
	
	}//Termnina switch
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_conferencias?></title>

<meta charset="iso-8859-1">
 <!--Palabras tag-->
 <meta name="description" content="La C�mara de Comercio te invita a a disfrutar del jueves 15 al domingo 18 de octubre de 2015 del evento comercial m�s grande e importante del sureste, en todos los salones de exposici�n del Centro de Convenciones Yucatan Siglo XXI. Conoces nuestras actividades"/>
 
 <?php $b="expocomercio, comercio, M�rida, feria, exponer, expositores, productos, centro de convenciones, convenciones, siglo XXI, Yucat�n, Canaco, familia, visita, compras, negocio, escaparate, ventas, stands, C�mara, servicios, turismo, exposiciones, Centro de Convenciones siglo XXI, Sal�n Uxmal, Sal�n Chichen Izt�, Sal�n Ek Balam, Expocomercio 2015 M�rida, comerciantes, negocios, medios, publicidad, promocionar, patrocinadores, coca cola, dunosusa, Gobierno del Estado de Yucat�n, Infinitum, Osorio, Telcel"?>
<meta name="keywords" content="<?php echo utf8_encode($b)?>" />
<meta name="category" content="Expocomercio" />
<meta name="author" content="Expocomercio | http://www.expoferiadelcomercio.com/" />
<meta name="reply-to" content="desarrollocomercial@canacomerida.com" />
<meta name="resource-type" content="document" />
<META name="robots" content="INDEX,FOLLOW"> 
<meta name="revisit-after" content="1 day" />
<link href="expocomercio_merida.ico" rel="shortcut icon" />

<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/menu.css" type="text/css" media="all">
 <!--Para abrir ventanita de descargas -->	
<script language="JavaScript"> 
function  abrirventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=660, height=450, top=90, left=390";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>
<!--Termina  abrir ventanita de descargas -->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
         <?php @include("includes/logo_expo.php"); ?>
    <div style="height:8px; margin-left:665px; margin-top:2px">
       <a href="panel/prerregistro.php"><img src="images/prerregistro.gif" width="320" style="border:0"></a></div>
              <div class="right" >
       <?php 
$idmenu=10;
@include("includes/menu_principal2.php"); ?>
        </div>
      </div>
    </header>
  </div>
</div>
<div class="main">

 <div id="banner_ligas">
 
 <?php @include("includes/ligas.php");?>
 </div>
  <div id="banner">
  
  

  
<!--<table width="900" height="351" cellspacing="0" style="margin-top:-40px; background-repeat:no-repeat" background="images/calendario_actividades.jpg" >-->

<table width="900" height="400" cellspacing="0" style="margin-top:-40px; background-repeat:no-repeat" background="images/calendario_conferencias.jpg" >
<tr>
<td width="168" height="329" align="center">
<!-- Jueves 16-->
<div style="height:4px"></div>
<span style="font-size:18px; font-weight:bold; color:#FFF">Jueves 15</span><br> 
   <?php 
//consulta para obtener actividades
$d="2015-10-15";
$d16=mysql_query("select * from actividades where fecha='$d' and conferencia=1 order by idactividad asc");

$vd16=mysql_num_rows($d16);

if($vd16<>0){
//
?>
<br>
  <table width="151" height="31" cellspacing="4" align="center">
<?

while($vd16=mysql_fetch_array($d16)){
$tactividad=$vd16['actividad'];
$thora=$vd16['hora'];
$tidactividad=$vd16['idactividad'];
$idtipc=$vd16['idtipoconferencia'];

$colorfont="actividades";
$horac="hora_actividades";

switch($idtipc){
	case 1://Desarrollo empresarial
	$bgcolor="#002060";//Azul
	
	break;
	
	case 2://Tecnolog�a
	$bgcolor="#c00000";//Rojo
	break;
	
	case 3://Salud
	$bgcolor="#008000";//Verde
	break;
	
	case 4://Oportunidad de negocios
	$bgcolor="#ffff00";//Amarillo
	$colorfont="actividades2";
	$horac="hora_actividades2";
	break;

}
$bgcolor="#fff";
?>

<tr><td align="justify" bgcolor="<?php echo $bgcolor?>">
<div style="width:140; margin-left:3px">
<a class="<?php echo $colorfont ?>" href="#" onclick="javascript:abrirventana('detalle_conferencia.php?ide=<?php echo $tidactividad?>')" ><?php echo utf8_decode($tactividad)?>&nbsp;&nbsp;<?php echo $thora?></a></div></td>

</tr>
<tr><td height="6px"></td></tr>
<?

}//Termnina el while
?>
</table>

<?

}else{
//$mensae="No hay actividades registradas";
echo '<center>'.$mensae.'</center>';
}
?>

<!--Termina jueves 16-->
</td>
<td width="167" align="center">
<!--Viernes 17-->
<div style="height:4px"></div>
<span style="font-size:18px; font-weight:bold; color:#FFF">Viernes 16</span><br> 
   <?php 
//consulta para obtener actividades
$d="2015-10-16";
$d17=mysql_query("select * from actividades where fecha='$d' and conferencia=1 order by idactividad asc");

$vd17=mysql_num_rows($d17);

if($vd17<>0){
//
?>
<br>
  <table width="151" height="31" cellspacing="4" align="center">
<?

while($vd17=mysql_fetch_array($d17)){
$tactividad=$vd17['actividad'];
$thora=$vd17['hora'];
$tidactividad=$vd17['idactividad'];
$idtipc=$vd17['idtipoconferencia'];

$colorfont="actividades";
$horac="hora_actividades";

switch($idtipc){
	case 1://Desarrollo empresarial
	$bgcolor="#002060";//Azul
	break;
	
	case 2://Tecnolog�a
	$bgcolor="#c00000";//Rojo
	break;
	
	case 3://Salud
	$bgcolor="#008000";//Verde
	break;
	
	case 4://Oportunidad de negocios
	$bgcolor="#ffff00";//Amarillo
	$colorfont="actividades2";
	$horac="hora_actividades2";
	break;

}

$bgcolor="";//Amarillo

?>

<tr><td align="justify" bgcolor="<?php echo $bgcolor?>">
<div style="width:140; margin-left:3px">
<a class="ligas2" href="#" onclick="javascript:abrirventana('detalle_conferencia.php?ide=<?php echo $tidactividad?>')" ><?php echo utf8_decode($tactividad)?>&nbsp;&nbsp;<?php echo $thora?></a>
</div></td>

</tr>
<tr><td height="6px"></td></tr>
<?

}//Termnina el while
?>
</table>

<?

}else{
$mensae="No hay actividades registradas";
echo '<center>'.$mensae.'</center>';

}

?>
<!--Termina viernes 17-->
</td>
    <td width="167" valign="top" align="center">
    <!--S�bado 18-->
<div style="height:4px"></div>
<span style="font-size:18px; font-weight:bold; color:#FFF">S&aacute;bado 17</span><br> 
   <?php 
//consulta para obtener actividades
$d="2015-10-17";
$d18=mysql_query("select * from actividades where fecha='$d' and conferencia=1 order by idactividad asc");

$vd18=mysql_num_rows($d18);

if($vd18<>0){
//
?>
<br>
  <table width="151" height="31" cellspacing="4" align="center">
<?

while($vd18=mysql_fetch_array($d18)){
$tactividad=$vd18['actividad'];
$thora=$vd18['hora'];
$tidactividad=$vd18['idactividad'];
$idtipc=$vd18['idtipoconferencia'];

$colorfont="actividades";
$horac="hora_actividades";

switch($idtipc){
	case 1://Desarrollo empresarial
	$bgcolor="#002060";//Azul
	break;
	
	case 2://Tecnolog�a
	$bgcolor="#c00000";//Rojo
	break;
	
	case 3://Salud
	$bgcolor="#008000";//Verde
	break;
	
	case 4://Oportunidad de negocios
	$bgcolor="#ffff00";//Amarillo
	$colorfont="actividades2";
	$horac="hora_actividades2";
	break;

}
$bgcolor="";
?>

<tr><td align="justify" bgcolor="<?php echo $bgcolor?>">
<div style="width:140; margin-left:3px">
<a class="ligas2" href="#" onclick="javascript:abrirventana('detalle_conferencia.php?ide=<?php echo $tidactividad?>')" ><?php echo utf8_decode($tactividad)?>&nbsp;&nbsp;<?php echo $thora?></a>
</div>
</td>

</tr>
<tr><td height="6px"></td></tr>
<?

}//Termnina el while
?>
</table>

<?

}else{
$mensae="No hay actividades registradas";

}

?>
<!--Termina S�bado 18-->
    
    </td> 
    <td width="168" valign="top" align="center"> 
    <!--Domingo 19-->
<div style="height:4px"></div>
<span style="font-size:18px; font-weight:bold; color:#FFF">Domingo 18</span><br> 
   <?php 
//consulta para obtener actividades
$d="2015-10-18";
$d19=mysql_query("select * from actividades where fecha='$d' and conferencia=1 order by idactividad asc");

$vd19=mysql_num_rows($d19);

if($vd19<>0){
//
?>
<br>
  <table width="151" height="31" cellspacing="4" align="center">
<?

while($vd19=mysql_fetch_array($d19)){
$tactividad=$vd19['actividad'];
$thora=$vd19['hora'];
$tidactividad=$vd19['idactividad'];
$idtipc=$vd19['idtipoconferencia'];

$colorfont="actividades";
$horac="hora_actividades";

switch($idtipc){
	case 1://Desarrollo empresarial
	$bgcolor="#002060";//Azul
	break;
	
	case 2://Tecnolog�a
	$bgcolor="#c00000";//Rojo
	break;
	
	case 3://Salud
	$bgcolor="#008000";//Verde
	break;
	
	case 4://Oportunidad de negocios
	$bgcolor="#ffff00";//Amarillo
	$colorfont="actividades2";
	$horac="hora_actividades2";
	break;

}
$bgcolor="";
?>

<tr><td align="justify" bgcolor="<?php echo $bgcolor?>">
<div style="width:140; margin-left:3px">
<a class="ligas2" href="#" onclick="javascript:abrirventana('detalle_conferencia.php?ide=<?php echo $tidactividad?>')" ><?php echo utf8_decode($tactividad)?>&nbsp;&nbsp;<?php echo $thora?></a>
</div>
</td>

</tr>
<tr><td height="6px"></td></tr>
<?

}//Termnina el while
?>
</table>

<?

}else{
$mensae="No hay actividades registradas";

}
?>
<!--Termina Domingo 19-->
    </td> 
    <td align="center">
    
    <table align="center">
    <tr><td height="55"></td></tr>
    <tr><td>
    <a class="linkopacity" href="panel/registro_conferencias.php">
    <img src="images/conferencias_expoferia.jpg"></a>
    </td></tr>
    </table>
    <br>
   
    <?php /*?><table width="203" align="center">
    <tr><td colspan="2" align="center"><strong>Tipos de Conferencia</strong><br>
    <div style="height:3px"></div>
    </td></tr>
    <tr>
    <td bgcolor="#002060" width="20"></td>
    <td>&nbsp;&nbsp;Desempe&ntilde;o empresarial</td>
    </tr>
    <tr>
    <td height="10"></td>
    <td></td>
    </tr>
     <tr>
    <td bgcolor="#c00000" width="20"></td>
    <td>&nbsp;&nbsp;Tecnolog&iacute;a</td>
    </tr>
    <tr>
    <td height="10"></td>
    <td></td>
    </tr>
     <tr>
    <td bgcolor="#008000" width="20"></td>
    <td>&nbsp;&nbsp;Salud</td>
    </tr>
    <tr>
    <td height="10"></td>
    <td></td>
    </tr>
    <tr>
    <td bgcolor="#ffff00" width="20"></td>
    <td>&nbsp;&nbsp;Oportunidad de Negocio</td>
    </tr>
    </table><?php */?>
    
    
    </td>  </tr>
<tr>
  <td colspan="5" align="center">
   <?php $liga="http://www.expoferiadelcomercio.com/conferencias.php?i=12&adia=0"?>
   
   
  <div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="<?php echo $liga ?>" data-type="button"></div>

 <!--Termina Facebook-->	  
	      
<!--Twitter-->
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $liga ?>" data-lang="en" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>   <!--Termina twitter -->
  </td>
  </tr>


</table>
  </div>
  
  <!--Im�genes conferencias -->
  <div style="width:100%">
  <img src="images/Banner para expo Octubre-06.jpg" width="98%">
  <div style="height:1.5%"></div>
   <img src="images/Banner para expo Octubre-07.jpg" width="98%">
   <div style="height:1.5%"></div>
    <img src="images/Banner para expo Octubre-08.jpg" width="98%">
  </div>
  <!--Termina im�genes conferencias-->
  <div style=" height:24px; margin-top:100px"></div>

     <?php @include("includes/patrocinadores.php") ?>
     
</div>

<div class="espacio"></div>


<div class="main">
  <section id="content"></section>
</div>
<div class="body2">
  <div class="main">
    <footer>
      <div class="footerlink">
        <?php @include("includes/footer.php") ?>
       <!-- <div style="clear:both;"></div>-->
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->


</body>
</html>