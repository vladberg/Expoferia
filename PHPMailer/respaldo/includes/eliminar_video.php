<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("cn.php");
$id_video=$_GET['idv'];//Obtiendo el id del video
$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas

//$eliminar=mysql_query("delete from videos where idvideo='$id_video'");
$eliminar=mysql_query("update videos set status=0 where idvideo='$id_video'");

//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="VIDEOS";
$accion="BAJA VIDEO YOUTUBE";
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id_video','$tabla','$accion','$usuario ')");


echo '<script language=Javascript>location.href="../panel/testimonios.php"</script>';
echo '<script>window.close();</script>';

}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
