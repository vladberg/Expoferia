<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
$id_video=$_GET['idv'];//Obtiendo el id del video
$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas

$consulta=mysql_query("select * from videos where idvideo='$id_video'");
$vconsulta=mysql_fetch_array($consulta);
$vcodigo=$vconsulta['codigo'];
$vtitulo=$vconsulta['titulo'];

echo '<center><b><span style="font-family:arial">'.utf8_decode($vtitulo).'</span></b></center><br>';
echo $vcodigo.'<br><br>
<center>
<input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/></center>

';




}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo utf8_decode($vtitulo)?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</script>







</head>
<body>


</body></html>
