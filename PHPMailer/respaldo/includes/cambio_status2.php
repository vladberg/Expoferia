<?php
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

$valor=$_GET['dp'];//Estatus a aplicar, valor 1/0
$pro_id=$_GET['pid'];//Id del banner
$idm=$_GET['idm'];//Id de la categoría


    $fecha=date("Y-m-d");
    $hora=date('H:i:s');
	$sqlUpdaDs= mysql_query("update banner_sartory set status=$valor where idbanner='$pro_id'") or die ("Error al actualizar".mysql_error());

//Agregar eliminado de archivo png, jpg, en caso de requerirlo
	


/*echo '<script> alert ("El usuario a sido eliminado ") </script>';*/
echo '<script language=Javascript> location.href="../panel/menus_web2.php?categorias='.$idm.'" </script>';

?>

</body>
</html>