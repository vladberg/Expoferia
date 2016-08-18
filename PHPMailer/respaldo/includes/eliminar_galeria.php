<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{
@include("cn.php");
$id_galeria=$_GET['idgal'];//Obtiendo el id de la galeria
$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas

//Obtener las imagenes para borrar
$img=mysql_query("select * from img_galeria where idgaleria='$id_galeria'");



while($vimg=mysql_fetch_array($img)){
$ruta=$vimg['ruta'];
$imagen=$vimg['imagen'];
$idimg=$vimg['idimgg'];

//Borrando imagen
@unlink("../".$ruta.$imagen);

$delblog=mysql_query("DELETE FROM img_galeria WHERE idimgg='$idimg'");
}




//Nombre carpeta
$c=mysql_query("select * from galeria where idgaleria='$id_galeria'");
$vc=mysql_fetch_array($c);
$ngal=$vc['url'];
$n_galeria=$vc['galeria'];

$ruta_carpeta="../images/galeria/".$ngal."/";
@rmdir($ruta_carpeta);


$delblog=mysql_query("DELETE FROM galeria WHERE idgaleria='$id_galeria'");
 
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="GALERIA";
$accion="ELIMINADO DE LA GALERIA ".$n_galeria;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id_galeria','$tabla','$accion','$usuario ')");

/*echo '<script> alert (".:: El usuario ha sido eliminado ::.") </script>';*/

echo '<script language=Javascript>location.href="../panel/galerias.php"</script>';
echo '<script>window.close();</script>';

}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
