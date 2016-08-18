<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{

@include("cn.php");
$fecha=date("Y-m-d");
$fecha2=date("d-m-Y");
$hora=date("g:i a"); //Formato de 12 horas

//if ($Idusuario<>""){


if (isset($_POST["titulo"]))
{ 

$vtitulo=utf8_encode($_POST['titulo']);
$vcodigo=$_POST['codigo'];
$vclave=$_POST['clavev'];
$idv=$_POST['idvideos'];
	
//Registrando actividad
///////////////////////////
$nuevo_usuario=mysql_query("update videos set titulo='$vtitulo', codigo='$vcodigo' where idvideo='$idv'");


//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="VIDEOS";
$accion="EDICION VIDEO YOUTUBE";
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$idv','$tabla','$accion','$usuario ')");

echo '<script> alert (".:: El video ha sido modificado ::.") </script>';


	
echo '<script language=Javascript> location.href="../panel/testimonios.php"</script>';
}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post

}
else 
{
header("Location:login.php");
}
?>