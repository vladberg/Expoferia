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
<title>.:: <?php echo $panel_stands?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />

<script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=500, height=330, top=120, left=350";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>

</head>
<body>
<div id="encabezado"><center><img src="../images/expoferia_logo.png" /><br /><br /><img src="../images/separador.gif" /></center>
     </div>



<div class="cuerpo">
 <?php //Consulta para obtener datos de los stands registrados
$idsalon=$_GET['salones'];
$leyenda=""; 
if ($idsalon=="" || $idsalon==0){
$criterio="order by idstand_emp desc";
$v=0;//Indica si se muestra la columna salón
$leyenda=" EN TODOS LOS SALONES";
}else {
	$criterio="where salones.idsalon='$idsalon'";
	$v=1;
	//Validando nombre de salón para encabezado
	if ($idsalon==1){
	$leyenda=" SAL&Oacute;N CHICHEN ITZ&Aacute;";
	}
	
	if ($idsalon==2){
	$leyenda=" SAL&Oacute;N UXMAL";
	}
	
	if ($idsalon==3){
	$leyenda=" SAL&Oacute;N EK BALAM";
	}
	//
}

$lista=mysql_query("SELECT salon,idstand_emp, empresa, stand, stands_empresas.status, fecha, hora
FROM  `stands_empresas` 
INNER JOIN empresas ON stands_empresas.idempresa = empresas.idempresa
INNER JOIN stands ON stands_empresas.idstand = stands.idstand INNER JOIN salones ON salones.idsalon = stands.idsalon $criterio");
?>

         <!--Contenedor del flexslider-->

     <!-- Espacio para poner algún contenido-->

   <br /><br /><br /><br /><br /><br /><br /><br />
  <table width="729" align="center"><tr><td width="474">
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span>

  </td>
  <td width="243" align="right">
   <a href="panel.php" class="link_ad">Regresar al panel</a>&nbsp;&nbsp;|&nbsp;&nbsp;   
  
  <a href="stands.php" class="link_ad">Planos</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
  </td></tr></table>
  <br />
  
  
  
  <table width="505" height="42" align="center">
  <tr><td height="26" align="center">
    
  <form action="registro_stands.php" method="get">
    <span class="texto_panel"> Sal&oacute;n:</span> &nbsp;<select name="salones" id="salones" onchange="this.form.submit()">
      <option value="0">Todos</option>
      <option value="1">Sal&oacute;n Chichen Itz&aacute;</option>
      <option value="3">Sal&oacute;n Ek Balam</option>
      <option value="2">Sal&oacute;n Uxmal</option>
       </select>
  </form></td></tr>
  
  </table>
  <br />
  
  <table width="842" border="0" align="center" cellspacing="2">

<tr> <td width="631"><strong>STANDS ASIGNADOS&nbsp;<?php echo $leyenda?></strong></td> 
  <td width="265" align="right">
 
  </td>
</tr>


<tr>
  <td colspan="2"  height="5"></td>
</tr>

<tr>
  <td colspan="2" align="center" >
<!--Tabla de resultados --->
<span class="etiformulario">
<center><img src="../images/separador.gif" /></center><br />
<div style="overflow:auto; width:900px; height:250px">

<table width="789" border="0" style="font-size:12px">
 
  <tr>
    <td width="160"><b>Empresa</b></td>
     <?
	if ($v==0){
		?>
	<td width="156" align="center"><b>Sal&oacute;n</b></td>
	<?
	}
	?>
    
    <td width="118" align="center"><b>Stand</b></td>
    <td width="137" align="center"><b>Fecha y hora</b></td>
    <td width="74" align="center"><b>Status</b></td>
    <td width="118" align="center"><b>Acciones</b></td>
  </tr>
<?php //Consulta para obtener datos de los stands registrados
$total=mysql_num_rows($lista);
if ($tlista<>0){
while($vlista=mysql_fetch_array($lista)){
	$idst=$vlista['idstand_emp'];
	$stempresa=$vlista['empresa'];
	$ststand=$vlista['stand'];
	$ststatus=$vlista['status'];
$stfecha=$vlista['fecha'];
$sthora=$vlista['hora'];
$stsalon=$vlista['salon'];

	//status
	if($ststatus==1) {
		$status="Activo";
		}else {
	    $status="Inactivo";
		
	}
//Formato fecha
//Rango, indica posición inicial hasta la final lo que va a imprimirse
$diat=substr($stfecha,8,2);
$mest=substr($stfecha,5,2);
$aniot=substr($stfecha,0,4);
$formfechat= $diat."-".$mest."-".$aniot;

?>
  <tr>
    <td width="160" valign="top"><?php echo utf8_decode($stempresa)?></td>
    
    <?
	if ($v==0){
		?>
	 <td width="156"  valign="top"><?php echo utf8_encode($stsalon)?></td>
	<?
	}
	?>
   
    <td width="118"  valign="top"><?php echo $ststand?></td>
     <td width="137"  valign="top"><?php echo $formfechat."&nbsp;&nbsp;&nbsp;&nbsp;".$sthora ?></td>
    <td width="74" align="center" valign="top"><?php echo $status ?></td>
    <td width="118" align="center" valign="top"><a  href="../includes/eliminar_stand_asignado.php?idact=<?php echo $idst?>" class="link_ad">Eliminar</a></td>
  </tr>

  
 <?php   
}//Termina el while
}else {
	
	?>
    <tr>
      <td align="center" colspan="6"><img src="../images/iconos/no_results.png" width="69" height="69" /><br />No se encontraron resultados</td></tr>
    <?
	
}//termina el if
?>

</table><br />
<center><img src="../images/separador.gif" /></center><br />
</div>
</span>
<!--Termina Tabla de resultados --->

 </td>
  </tr>


</table>
  <br /><br /> 
 

   <!--Termina Espacio para poner algún contenido-->
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
