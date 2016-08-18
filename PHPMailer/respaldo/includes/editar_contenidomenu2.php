<?php
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{ 
@include("cn.php");


if (isset($_POST["descripcion"]))
{ 


$descripcion=utf8_encode($_POST['descripcion']);
$contacto=utf8_encode($_POST['contacto']);
$idmenu=$_POST['idmenu'];

$nuevo_usuario=mysql_query("update texto_menus set idmenu='$idmenu', texto=' $descripcion', contacto='$contacto' where idtextom='$idmenu'");


//Obtener nombre menu
$nm=mysql_query("select menu from menus_web inner join texto_menus on menus_web.idmenu=texto_menus.idmenu where idtextom='$idmenu'");
$vnm=mysql_fetch_array($nm);
$n_menu=$vnm['menu'];

//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="CONTENIDOS_MENU";
$accion="EDICION DE TEXTO CONTENIDO PARA EL MENU ".$n_menu;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$idmenu','$tabla','$accion','$usuario ')");

echo '<script> alert (".:: El contenido ha sido modificado ::.") </script>';

echo '<script language=Javascript> location.href="../panel/contenidos_menu.php"</script>';


}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post

}
else 
{
header("Location:login.php");
}
?>
