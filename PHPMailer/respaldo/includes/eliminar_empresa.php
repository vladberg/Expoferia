<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("cn.php");
$id_empresa=$_GET['idemp'];//Obtiendo el id de la empresa
$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas

$consulta=mysql_query("select * from empresas where idempresa='$id_empresa'");

	$vconsulta=mysql_fetch_array($consulta);
	$nimagen=$vconsulta['imagen'];
	
	//Borrando logo
	@unlink("../images/empresas/".$nimagen);


$eliminar=mysql_query("delete from empresas where idempresa='$id_empresa'");

/*echo '<script> alert (".:: El usuario ha sido eliminado ::.") </script>';*/

echo '<script language=Javascript>location.href="../panel/empresas.php"</script>';
echo '<script>window.close();</script>';

}else {
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
?>
