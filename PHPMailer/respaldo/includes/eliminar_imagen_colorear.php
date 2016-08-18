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

    $fecha=date("Y-m-d");
    $hora=date('H:i:s');
$rut="images/colorear/";	
	$sqdelim=mysql_query("select * from img_colorear WHERE idimgc='$pro_id'");
$reselim=mysql_fetch_array($sqdelim);
$img=$reselim['imagen'];
	
	
	$delete =mysql_query("DELETE from img_colorear WHERE idimgc='$pro_id'");
	@unlink("../".$rut.$img);

/*echo '<script> alert ("El usuario a sido eliminado ") </script>';*/
echo '<script language=Javascript> location.href="../panel/imgcolorear_agregarimg.php" </script>';

?>

</body>
</html>