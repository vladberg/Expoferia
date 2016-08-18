<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("cn.php");
$id_empresa=$_GET['idemp'];//Obtiendo el id de la empresa
$tipo_status=$_GET['nstatus'];//Obtiendo tipo de usuario para actualizar

$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas

$actualizar=mysql_query("update empresas set mostrar_r='$tipo_status' where idempresa='$id_empresa'");


/*echo '<script> alert (".:: El cambio ha sido realizado ::.") </script>';*/

echo '<script language=Javascript>location.href="../panel/empresas.php"</script>';
echo '<script>window.close();</script>';

}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
