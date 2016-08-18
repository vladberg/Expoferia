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


$pro_id=$_GET['pid'];//Id de la imagen
$idm=$_GET['idm'];//Id del menu


    $fecha=date("Y-m-d");
    $hora=date('H:i:s');
	
	$sqdelim=mysql_query("select imagen from banner_sartory WHERE idbanner='$pro_id'");
$reselim=mysql_fetch_array($sqdelim);
$img=$reselim['imagen'];
	
	
	$delete =mysql_query("DELETE from banner_sartory WHERE idbanner='$pro_id'");
	@unlink("../tienda/img/".$img);

/*echo '<script> alert ("El usuario a sido eliminado ") </script>';*/
echo '<script language=Javascript> location.href="../panel/menus_web2.php?categorias='.$idm.'" </script>';

?>

</body>
</html>