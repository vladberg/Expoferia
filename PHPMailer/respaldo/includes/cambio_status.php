<?php
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php

$valor=$_GET['dp'];
$pro_id=$_GET['pid'];
$idm=$_GET['idm'];

	$sqlUpdaDs= mysql_query("update img_menus_web set status=$valor where idimg='$pro_id'") or die ("Error al actualizar".mysql_error());


//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas

//Obteniendo nombre imagen
$n=mysql_query("select imagen from img_menus_web where idimg='$pro_id'");
$vn=mysql_fetch_array($n);
$nom=$vn['imagen'];



if ($valor==0){
$v="CAMBIO STATUS A BAJA";
}else {
$v="CAMBIO STATUS A ALTA";
}
$tabla="IMG_MENUS_WEB";
$accion=$v." DE LA IMAGEN ".$nom;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$pro_id','$tabla','$accion','$usuario ')");

//Agregar eliminado de archivo png, jpg, en caso de requerirlo
	


/*echo '<script> alert ("El usuario a sido eliminado ") </script>';*/
echo '<script language=Javascript> location.href="../panel/menus_web.php?categorias='.$idm.'" </script>';


}else {
session_destroy();
echo "<script> window.location='login_sesion.php' </script>";
}

?>

</body>
</html>