<?php
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

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


$pro_id=$_GET['idform'];//Id del formato

  
$rut="../formatos/";	
	

$sqdelim=mysql_query("select nombre, archivo from formatos WHERE idformato='$pro_id'");
$reselim=mysql_fetch_array($sqdelim);
$nom=$reselim['nombre'];
$archivo=$reselim['archivo'];
	
	$delete =mysql_query("DELETE from formatos WHERE idformato='$pro_id'");
	@unlink($rut.$archivo);

//Bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas

$tabla="FORMATOS";
$accion="BAJA DE FORMATO ". strtoupper($nom);

$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$pro_id','$tabla','$accion','$usuario')");


/*echo '<script> alert ("El usuario a sido eliminado ") </script>';*/
echo '<script language=Javascript> location.href="../panel/registro_formatos.php" </script>';

?>

</body>
</html>
<?
}
else 
{
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>