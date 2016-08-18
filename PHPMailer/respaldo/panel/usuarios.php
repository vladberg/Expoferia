<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];
$tsad= $_SESSION['sa'];

if( $ids<>"" && $usuario<>"")

{


@include("../includes/etiquetas.php");
@include("../includes/cn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_usuarios?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />

<script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=600, height=440, top=120, left=350";
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
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper(utf8_decode($usuario)) ?></span>

  </td><td width="243" align="right">
   <a href="panel.php" class="link_ad">Regresar al panel</a>&nbsp;&nbsp;|&nbsp;&nbsp;   
  
  <a href="registrar_usuario.php" class="link_ad">Registrar</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
  </td></tr></table>
  <br />
  <table width="842" border="0" align="center" cellspacing="2">

<tr> <td width="411" align="center"><strong>USUARIOS REGISTRADOS</strong></td> 
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
<table width="877" border="0" style="font-size:12px">
  <tr>
    <td width="205"><b>Nombre</b></td>
    <td width="177"><b>Email</b></td>
    <td width="64" align="center"><b>Status</b></td>
    <td width="77"><b>Tipo usuario</b></td>
    <td width="332" align="center"><b>Acciones</b></td>
  </tr>
<?php //Consulta para obtener datos de los usuarios registrados


if ($tsad==1){
$lista=mysql_query("SELECT usuarios.idusuario as idu, nombres,apellidopaterno,usuario,tipo_user, status FROM usuarios inner join login on usuarios.idusuario=login.idusuario and login.idusuario<>$ids order by usuarios.idusuario desc");


}else {

$lista=mysql_query("SELECT usuarios.idusuario as idu, nombres,apellidopaterno,usuario,tipo_user, status FROM usuarios inner join login on usuarios.idusuario=login.idusuario where SA<>1 and tipo_user<>1 and login.idusuario<>$ids order by usuarios.idusuario desc");


}
while($vlista_usuario=mysql_fetch_array($lista)){
	$u_nombre=$vlista_usuario['nombres'];
	$u_apellidop=$vlista_usuario['apellidopaterno'];
	$u_email=$vlista_usuario['usuario'];
	$u_tipousuario=$vlista_usuario['tipo_user'];
	$u_idusuario=$vlista_usuario['idu'];
	$u_status=$vlista_usuario['status'];
	
		
	if($u_tipousuario==1) {
		$u_tipousuario="Administrador";
		$cambiartu="Cambio a usuario";
		$val_status_cambiaru=0;
		}else {
	    $u_tipousuario="Usuario";
		$cambiartu="Cambio a admin";
		$val_status_cambiaru=1;
	}

$nom_completo=$u_nombre." " .$u_apellidop;
?>
  <tr>
    <td width="205" valign="top"><?php echo utf8_decode($nom_completo) ?></td>
    <td width="177" valign="top"><?php echo $u_email ?></td>
    <td width="64" valign="top" align="center"><?php echo $u_status ?></td>
    <td width="77" valign="top"><?php echo $u_tipousuario ?></td>
    <td width="332" align="center" valign="top">
    
    <a  href="verdatos.php?idusuario=<?php echo $u_idusuario?>" class="link_ad">
   Ver info</a>&nbsp;&nbsp; | &nbsp;&nbsp;
     
     
       <a href="#"  onclick="javascript:cambiostatus('../includes/actividades_usuarioi.php?idusuario=<?php echo $u_idusuario?>')" class="link_ad">Permisos</a>&nbsp;&nbsp; | &nbsp;&nbsp;
    
     <a  href="../includes/eliminar_usuario.php?idusuario=<?php echo $u_idusuario?>" class="link_ad">
   Eliminar</a>
     
     
     
    &nbsp;&nbsp;| &nbsp;&nbsp;
    
    
     <a  href="../includes/cambiar_tipousuario.php?idusuario=<?php echo $u_idusuario?>&nstatus=<?php echo $val_status_cambiaru ?>" class="link_ad">
     
     
     
   <?php echo $cambiartu ?></a>
  
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
