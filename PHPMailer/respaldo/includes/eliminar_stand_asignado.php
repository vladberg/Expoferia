<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("cn.php");
$id_actividad=$_GET['idact'];//Obtiendo el id de la actividad

//$eliminar=mysql_query("update stands_empresas set status=0 where idstand_emp='$id_actividad'");


$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas

//Info en bitácora
//Obtener nombre de stand y salon
$dato=mysql_query("select stand, salon, empresa from stands_empresas inner join stands on stands_empresas.idstand=stands.idstand inner join salones on stands.idsalon=salones.idsalon inner join empresas on stands_empresas.idempresa=empresas.idempresa where idstand_emp='$id_actividad'");

$vdato=mysql_fetch_array($dato);
$nom_stand=$vdato['stand'];
$nom_salon=$vdato['salon'];
$nom_empresa=$vdato['empresa'];

$tabla="STANDS_EMPRESAS";
$accion="BAJA DE STAND ". $nom_stand." EN ".$nom_salon." DE LA EMPRESA ".strtoupper($nom_empresa);


$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id_actividad','$tabla','$accion','$usuario')");

$eliminar=mysql_query("delete from stands_empresas where idstand_emp='$id_actividad'");
/*
echo '<script> alert (".:: El usuario ha sido eliminado ::.") </script>';*/

echo '<script language=Javascript>location.href="../panel/registro_stands.php"</script>';
echo '<script>window.close();</script>';

}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
