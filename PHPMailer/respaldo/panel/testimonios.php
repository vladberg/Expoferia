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
<title>.:: <?php echo $panel_videos?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />

<script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=525, height=440, top=120, left=350";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>

</head>
<body>
<div id="encabezado"><center><?php
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
  
  <a href="registrar_video.php" class="link_ad">Registrar</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
  </td></tr></table>
 <br />
  <table width="729" height="42" align="center">
 <tr>
    <td height="56" align="center" valign="middle" class="bordeado">
    <form action="testimonios.php" method="get" name="consulta" target="_self">
<span style="font-size:12px; font-weight:bold">Video</span>
<input name="formato" id="formato" type="text" size="45"/><input name="enviar" type="submit" value="Consultar" />

    </form></td></tr>
  
  </table>
  <br />
  
  <table width="842" border="0" align="center" cellspacing="2">

<tr> <td width="411" align="center"><strong>VIDEOS EN YOUTUBE</strong></td> 
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
<table width="789" border="0" style="font-size:12px">
  <tr>
    <td width="342"><b>T&iacute;tulo</b></td>
    <td width="105"><b>Status</b></td>
    <td width="328" align="center"><b>Acciones</b></td>
  </tr>
<?php //Consulta para obtener datos de los usuarios registrados
$formatop=utf8_encode($_GET['formato']);


if ($formatop==""){
$criterio=	" where status=1 order by idvideo desc";
}else{
$criterio=	" where titulo like '%$formatop%' and status=1 order by idvideo desc";
}


$lista=mysql_query("select * from videos $criterio");
$tlista=mysql_num_rows($lista);

if ($tlista<>0){
while($vlista=mysql_fetch_array($lista)){
	$a_video=$vlista['titulo'];
	$a_idvideo=$vlista['idvideo'];
$a_status=$vlista['status'];

	//status
	if($a_status==1) {
		$status="Activo";
		}else {
	    $status="Inactivo";
		
	}


?>
  <tr>
    <td width="342" valign="top"><?php echo utf8_decode($a_video)?></td>
    <td width="105" valign="top"><?php echo $status ?></td>
    <td width="328" align="center" valign="top">
    <a href="#" onclick="javascript:cambiostatus('ver_video.php?idv=<?php echo $a_idvideo?>')" class="link_ad">Ver</a>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;
     
     
    <a  href="editar_video.php?idv=<?php echo $a_idvideo?>" class="link_ad">Editar</a>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;
    <a  href="../includes/eliminar_video.php?idv=<?php echo $a_idvideo?>" class="link_ad">Eliminar</a></td>
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
