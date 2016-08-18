<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
$id_usuario=$_GET['idusuario'];//Obtiendo el id del usuario
$tipo_usuario=$_GET['nstatus'];//Obtiendo tipo de usuario para actualizar

$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas

$actualizar=mysql_query("update login set tipo_user='$tipo_usuario' where idusuario='$id_usuario'");


echo '<script> alert (".:: El cambio ha sido realizado ::.") </script>';

echo '<script language=Javascript>location.href="../panel/usuarios.php"</script>';
echo '<script>window.close();</script>';

}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
