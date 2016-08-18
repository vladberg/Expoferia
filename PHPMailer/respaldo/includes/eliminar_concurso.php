<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("cn.php");
$id_concurso=$_GET['idcon'];//Obtiendo el id del concurso


//$eliminar=mysql_query("delete from actividades where idactividad='$id_actividad'");

$eD=mysql_query("update concurso set status=0 where idconcurso='$id_concurso'");


//Nombre concurso

$nom=mysql_query("select * from concurso where idconcurso='$id_concurso'");
$vnom=mysql_fetch_array($nom);
$nomc=$vnom['titulo'];

//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="CONCURSO";
$accion="BAJA DEL CONCURSO ".$nomc;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id_concurso','$tabla','$accion','$usuario ')");


/*echo '<script> alert (".:: El usuario ha sido eliminado ::.") </script>';*/

echo '<script language=Javascript>location.href="../panel/concursos.php"</script>';
echo '<script>window.close();</script>';

}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
