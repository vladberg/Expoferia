<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
$id_usuario=$_GET['idusuario'];//Obtiendo el id del usuario
$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas

$eliminar=mysql_query("delete from login where idusuario='$id_usuario'");

$eliminar_datos=mysql_query("delete from usuarios where idusuario='$id_usuario'");



/*echo '<script> alert (".:: El usuario ha sido eliminado ::.") </script>';*/

echo '<script language=Javascript>location.href="../panel/usuarios.php"</script>';
echo '<script>window.close();</script>';

}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
