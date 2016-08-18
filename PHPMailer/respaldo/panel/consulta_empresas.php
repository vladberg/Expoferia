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

//Obteniendo valores salón y stand
$ce_idsalon=$_GET['idsal'];
$ce_idstand=$_GET['is'];
$ce_nomstand=$_GET['ids'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />
<title>Documento sin t&iacute;tulo</title>

<script language="javascript" >
function devolverValor() {

/*   window.opener.document.forms["asignacion"].i_empresa.value = document.forms["form1"].idempresa[3].value;
*/ 
opener.document.miBandera = 1; //mando una variable llamada a miBandera a padre.php
opener.document.location.reload();

 
 
  window.close();
}
</script>




</head>

<body>
<center><?php
$rimagen="../images/";
 @include("../includes/mostrar_logo.php") ;
 
  ?>
</center>




<center>


<table width="658" height="42" align="center">
 <tr>
    <td height="56" align="center" valign="middle" class="bordeado">
<form action="consulta_empresas.php?idsal=<?php echo $ce_idsalon?>&is=<?php echo $ce_idstand?>&ids=<?php echo $ce_nomstand?>" method="post" name="consulta" target="_self">
<span style="font-size:12px; font-weight:bold">Empresa</span>
<input name="empresa" id="empresa" type="text" size="45"/><input name="enviar" type="submit" value="Consultar" />
<label for="salon"></label>
</form>
</td></tr></table>
<br />
 <table  border="0" align="center" cellspacing="2"><tr><td>
<strong>EMPRESAS REGISTRADAS</strong>
<img src="../images/separador.gif" />
</td></tr></table>
<div style="overflow:auto; width:680px; height:215px">


<br />
<?php echo utf8_decode($respuesta)?>
<form id="form1" name="form1">
<table width="658" border="0" style="font-size:12px" align="center">
  <tr>
    <td width="271"><b>Nombre</b></td>
    <td width="150"><b>Giro</b></td>
    <td width="111" align="center"><b>Status</b></td>
    <td width="108" align="center"><b>Acciones</b></td>
  </tr>
<?php //Consulta para obtener datos de los usuarios registrados

//Recibiendo el valor
$nom_empresa=utf8_encode($_POST['empresa']);


$lista=mysql_query("select * from empresas where empresa like '%$nom_empresa%' order by idempresa desc");

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

$nm=$nm +1;
	$nom_text="idempresa".$nm;
		//Patrocinador o no
	if($e_patrocinador==1) {
		$patrocinio="Si";
		}else {
		$patrocinio="No";
	    
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


?>
  <tr>
    <td width="271"><?php echo utf8_decode($e_empresa)?>
     
      <?php /*?><input type="text" name="idempresa[<?php echo $nm?>]" id="idempresa[<?php echo $nm?>]" value="<?php echo $e_idempresa?>" size="6"/><?php */?></td>
    <td width="150"><?php echo utf8_decode($e_giro) ?></td>
    <td width="111" align="center"><?php echo $status ?></td>
    <td width="108" align="center">
    <a href="#" onclick="opener.document.location='asignar_stands.php?val=<?php echo $e_idempresa; ?>&idsal=<?php echo $ce_idsalon?>&is=<?php echo $ce_idstand?>&ids=<?php echo $ce_nomstand?>';  window.close();">Asignar</a>
   
    
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

</table></form>

</div>


<center><img src="../images/separador.gif" />
<br />
<span class="textalerta">* Click en el link "Asignar" correspondiente a la empresa que desee  registrar el alta de su stand</span>
<div style="height:10px"></div>

<input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/>

</center>
</body>
</html>
<?php 

}
else 
{
header("Location:login.php");
}
?>