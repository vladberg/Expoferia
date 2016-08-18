<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{


@include("../includes/etiquetas.php");
@include("../includes/google_fonts.php");
@include("../includes/cn.php");
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
$e_direccion=$vconsulta['direccion'];
$e_telefono=$vconsulta['telefono'];
$e_email=$vconsulta['contacto'];
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

//Validando si tiene registrado dirección de google maps
if ($e_googlemaps<>""){
	$map=1;
}else {
	$map=0;
}


//Para link de regreso
switch($plano){
	case 1://
	$regresar="#";
	$tit="SALÓN CHICHEN ITZÁ";
	break;
	
	case 2://
	$regresar="#";
	$tit="SALÓN EK BALAM";
	break;
	
	case 3://Ek blama
	$regresar="plano_ekbalam1.php";
	$tit="SALÓN EK BALAM";
	break;

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_apanel?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />

<script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=500, height=330, top=120, left=350";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>





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
<div id="encabezado"><center><img src="../images/expoferia_logo.png" /><br /><br /><img src="../images/separador.gif" /></center>
     </div>



<div class="cuerpo">
<!--Menu-->

<!------>


         <!--Contenedor del flexslider-->

     <!-- Espacio para poner algún contenido-->

   <br /><br /><br /><br /><br /><br /><br /><br />
  <div>

<table width="751" cellspacing="20"><tr>
  <td>
<?php 
switch($info){
	case 0: //Info empresa
	/////
	?>
	<table align="center" cellspacing="8">
<tr>
<td colspan="3" align="center" class="titulos_azul"><a href="<?php echo $regresar?>" class="ligas2"><?php echo utf8_encode($tit)?></a> > <b><?php echo strtoupper(utf8_decode($e_nombre)) ?></b><br /><br />
<center>
<img src="../images/separador.gif" />

</center><br />
</td>
</tr>
<tr>
  <td width="99" rowspan="8" align="center"><img src="<?php echo '../'.$e_ruta.$e_imagen ?>" width="300" height="135"  /></td>
  <td width="99"><b>Stand</b></td>
  <td width="281"><?php echo utf8_encode($stand) ?></td>
</tr>
<tr>
  <td><b>Sal&oacute;n:</b></td>
  <td><?php echo utf8_encode($salon) ?></td>
</tr>
<tr>
  <td><b>Descripci&oacute;n:</b></td>
  <td><?php echo utf8_decode($e_descripcion) ?></td>
</tr>
<tr>
  <td><b>P&aacute;gina web:</b> </td>
  <td><a href="<?php echo $e_url ?>" class="ligas2"><?php echo $e_url ?></a></td>
</tr>
<tr>
  <td><b>Tel&eacute;fono:</b> </td>
  <td><?php echo $e_telefono ?></td>
</tr>
<tr>
  <td><b>Contacto:</b></td>
  <td><?php echo $e_email ?></td>
</tr>
<tr>
  <td><b>Direcci&oacute;n:</b></td>
  <td><?php echo utf8_decode($e_direccion) ?></td>
</tr>
<tr>
  <td colspan="2" align="center">
    <?
  
  if ($map==1){
?>
  <a class="linkopacity" href="detalle_recomendaciones.php?ide=<?php echo $id_empresa ?>&inf=1"><img src="../images/iconos/google_maps.png" height="80" title="Página web"/></a>
    
  <?
}else {
?>
  <img src="../images/iconos/google_maps_off.png" height="80"/>
  <?
}
?>
    
  <!------------------------------------------>
  <?
if ($web==1){
?>
  <a class="linkopacity" href="<?php echo $e_url?>" target="_self"><img src="../images/iconos/pagina_web.png" height="80" title="Google Maps"/></a>
    
  <?
}else {
?>
  <img src="../images/iconos/pagina_web_off.png" height="80"/><?
}
?>
  </td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td></td>
<td></td>
<td></td>
</tr>


</table>
	<?
	
	/////
	break;
	
	case 1: //Google maps
	echo $e_googlemaps ;
	break;
	
	//case 2: //Pagina web
//	@include("includes/recomendaciones_pagina_web.php");
//	break;
	}

?>
<center>


<img src="../images/separador.gif" />

<br /><br />
<input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/></center>
</td></tr>
  
</table>
</div>
  </div>
  
  <!--Inicia encabezado3-->
<div id="footer">

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
