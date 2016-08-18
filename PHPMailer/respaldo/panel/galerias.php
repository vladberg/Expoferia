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
<title>.:: <?php echo $panel_galerias?> ::.</title>
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
<div id="encabezado"><center><?php
$rimagen="../images/";
 @include("../includes/mostrar_logo.php") ;
 
  ?></center>
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
  
  <a href="registrar_galeria.php" class="link_ad">Registrar</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
  </td></tr></table>
  <br />
  <table width="842" border="0" align="center" cellspacing="2">

<tr> <td width="411" align="center"><strong>GALER&Iacute;AS REGISTRADAS</strong></td> 
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
<table width="824" border="0" style="font-size:12px">
  <tr>
    <td width="218"><b>Galer&iacute;a</b></td>
    <td width="249" align="center"><b>Descripci&oacute;n</b></td>
    <td width="81" align="center"><b>Status</b></td>
    <td width="223" align="center"><b>Acciones</b></td>
  </tr>
<?php //Consulta para obtener datos de los usuarios registrados
$lista=mysql_query("select * from galeria order by idgaleria desc");
while($vlista=mysql_fetch_array($lista)){
	$galeria=$vlista['galeria'];
	$gdescripcion=$vlista['descripcion'];
$gstatus=$vlista['status'];
$gidgaleria=$vlista['idgaleria'];


	//status
	if($gstatus==1) {
		$status="Activo";
		}else {
	    $status="Inactivo";
		
	}


?>
  <tr>
    <td width="218" valign="top"><?php echo utf8_decode($galeria)?></td>
    <td width="249"  valign="top"><?php echo utf8_decode($gdescripcion)?></td>
    <td width="81" align="center" valign="top"><?php echo $status ?></td>
    <td width="223" align="center" valign="top">
      <!--<a  href="editar_actividad.php?idgal=<?php echo $a_idactividad?>" class="link_ad">
        Editar</a>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp; --><a  href="../includes/eliminar_galeria.php?idgal=<?php echo $gidgaleria?>" class="link_ad">Eliminar</a>
        
        &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp; <a  href="galeria_agregarimg.php?idgal=<?php echo $gidgaleria?>" class="link_ad">Agregar im&aacute;genes</a>
        </td>
  </tr>

  
 <?php   
}
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
