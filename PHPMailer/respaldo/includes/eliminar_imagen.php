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


$pro_id=$_GET['pid'];//Id de la imagen
$idm=$_GET['idm'];//Id del menu


	$sqdelim=mysql_query("select imagen from img_menus_web WHERE idimg='$pro_id'");
$reselim=mysql_fetch_array($sqdelim);
$img=$reselim['imagen'];
	
	//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas


$tabla="IMG_MENUS_WEB";
$accion="BORRADO DE LA IMAGEN ".$img;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$pro_id','$tabla','$accion','$usuario ')");

	
	
	$delete =mysql_query("DELETE from img_menus_web WHERE idimg='$pro_id'");
	@unlink("../images/slider/".$img);



/*echo '<script> alert ("El usuario a sido eliminado ") </script>';*/
echo '<script language=Javascript> location.href="../panel/menus_web.php?categorias='.$idm.'" </script>';
}else {
session_destroy();
echo "<script> window.location='login_sesion.php' </script>";
}
?>

</body>
</html>