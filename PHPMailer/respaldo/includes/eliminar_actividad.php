<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("cn.php");
$id_actividad=$_GET['idact'];//Obtiendo el id de la actividad
$ident=$_GET['i'];//Actividad o conferencia

$eliminar=mysql_query("delete from actividades where idactividad='$id_actividad'");

//$eD=mysql_query("update actividades set status=0 where idactividad='$id_actividad'");

//Nombre concurso
$nom=mysql_query("select * from actividades where idactividad='$id_actividad'");
$vnom=mysql_fetch_array($nom);
$nomc=$vnom['actividad'];

//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="ACTIVIDADES";
$accion="BAJA DE ACTIVIDAD ".$nomc;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id_actividad','$tabla','$accion','$usuario ')");


/*echo '<script> alert (".:: El usuario ha sido eliminado ::.") </script>';*/


switch($ident){
case 1:// Conferencia
echo '<script language=Javascript>location.href="../panel/lista_conferencias.php"</script>';
break;

default://Actividad
echo '<script language=Javascript>location.href="../panel/actividades.php"</script>';
break;
}

echo '<script>window.close();</script>';

}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
