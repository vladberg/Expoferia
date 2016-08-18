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

$consulta=mysql_query("select * from videos where idvideo='$id_video'");
$vconsulta=mysql_fetch_array($consulta);
$vcodigo=$vconsulta['codigo'];


echo $vcodigo;




}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
