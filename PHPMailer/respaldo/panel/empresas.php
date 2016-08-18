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
<title>.:: <?php echo $panel_empresas?> ::.</title>
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
<!--Menu-->

<!------>


         <!--Contenedor del flexslider-->

     <!-- Espacio para poner algún contenido-->

   <br /><br /><br /><br /><br /><br /><br /><br />
  <table width="729" align="center"><tr><td width="474">
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span>

  </td><td width="243" align="right">
   <a href="panel.php" class="link_ad">Regresar al panel</a>&nbsp;&nbsp;|&nbsp;&nbsp;   
  
  <a href="registrar_empresa.php" class="link_ad">Registrar</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
  </td></tr></table>
  <br />
  <table width="729" height="42" align="center">
 <tr>
    <td height="56" align="center" valign="middle" class="bordeado">
    <form action="empresas.php" method="get" name="consulta" target="_self">
<span style="font-size:12px; font-weight:bold">Empresa</span>
<input name="formato" id="formato" type="text" size="45"/><input name="enviar" type="submit" value="Consultar" />

    </form></td></tr>
  
  </table>
  <br />
  <table width="842" border="0" align="center" cellspacing="2">

<tr> <td width="411" align="center"><strong>EMPRESAS REGISTRADAS</strong></td> 
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
<div style="overflow:auto; width:970px; height:200px">
<center><img src="../images/separador.gif" /></center><br />
<table width="945" border="0" style="font-size:12px">
  <tr>
    <td width="283"><b>Nombre</b></td>
    <td width="196"><b>Giro</b></td>
    <td width="100" align="center"><b>Patrocinio</b></td>
    <td width="120" align="center"><b>Status</b></td>
    <td width="239" align="center"><b>Acciones</b></td>
  </tr>
<?php //Consulta para obtener datos de los usuarios registrados
//Obteniendo el valor de la cajita
$formatop=utf8_encode($_GET['formato']);

if ($formatop==""){
$criterio=	" order by idempresa desc";
}else{
$criterio=	" where empresa like '%$formatop%' order by idempresa desc";
}


$lista=mysql_query("select * from empresas $criterio");
$tlista=mysql_num_rows($lista);

if ($tlista<>0){
while($vlista=mysql_fetch_array($lista)){
	$e_empresa=$vlista['empresa'];
	$e_telefono=$vlista['telefono'];
$e_contacto=$vlista['contacto'];
$e_giro=$vlista['giro'];
$e_patrocinador=$vlista['ipatrocinador'];
$e_status=$vlista['status'];
$e_idempresa=$vlista['idempresa'];
$e_mostrar=$vlista['mostrar_r'];

	
		//Patrocinador o no
	if($e_patrocinador==1) {
		$patrocinio="Si";
		$mpatro=0;
		}else {
		$patrocinio="No";
			$mpatro=1;
	    
	}
	
	//status
	if($e_status==1) {
		$status="Activo";
		$cambiartu="Inactivar";
		$val_status_cambiaru=0;
		}else {
	    $status="Inactivo";
		$cambiartu="Activar";
		$val_status_cambiaru=1;
	}







	//Mostrar en recomendaciones
	if($e_mostrar==1) {
		$mostrar="MR";
		$cmotrar=0;
		}else {
		$mostrar="NMR";
		$cmotrar=1;
	   
	}
	
?>
  <tr>
    <td width="283"><?php echo utf8_decode($e_empresa)?></td>
    <td width="196">
	<?php
	if ($e_giro=="HOTELES" || $e_giro=="RESTAURANTES" ){
		 echo utf8_decode($e_giro)." - ".$mostrar?>
            &nbsp;| &nbsp;<a  href="../includes/cambiar_mostrar.php?idemp=<?php echo $e_idempresa?>&nstatus=<?php echo $cmotrar ?>" class="link_ad">Cambiar</a>
            <?

		}else {
			 echo utf8_decode($e_giro);
		}
	
	
	 
	 
	  ?></td>
    <td width="100" align="center"><?php echo $patrocinio ?> &nbsp;| &nbsp;<a  href="../includes/cambiar_patrocinio.php?idemp=<?php echo $e_idempresa?>&nstatus=<?php echo $mpatro ?>" class="link_ad">Cambiar</a></td>
       <td width="120" align="center"><?php echo $status ?>
       &nbsp;&nbsp;| &nbsp;&nbsp;
      <a  href="../includes/cambiar_statuse.php?idemp=<?php echo $e_idempresa?>&nstatus=<?php echo $val_status_cambiaru ?>" class="link_ad">
        Cambiar</a>
       
       </td>
    <td width="239" align="center">
      <a  href="editar_empresa.php?idemp=<?php echo $e_idempresa?>" class="link_ad">
        Editar</a>&nbsp;&nbsp; | &nbsp;&nbsp;
        <a  href="logotipo_empresa.php?idemp=<?php echo $e_idempresa?>" class="link_ad">
       Cambio logo</a>
       
      
      
      
      
   
      
      &nbsp;&nbsp;| &nbsp;&nbsp; <a  href="../includes/eliminar_empresa.php?idemp=<?php echo $e_idempresa?>" class="link_ad">Eliminar</a></td>
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

</table><br />
<center><img src="../images/separador.gif" /></center><br />
</div>
</span>
<!--Termina Tabla de resultados --->

 </td>
  </tr>


</table>
  <br />
 <center>
   <span style="font-size:11px;color:#0000FF">indicadores de que la empresa (tanto de HOTELES como de RESTAURANTES, se muestra en el apartado de recomendaciones (MR) o no (NMR)</span>
 </center>

  <!--Termina Espacio para poner algún contenido-->
  </div>
  
  <!--Inicia encabezado3-->
<div id="footer" style="margin-top:50px">

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
