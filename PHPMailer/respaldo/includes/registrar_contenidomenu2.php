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


if($idmenu==0){
$bandera=false;
echo '<script> alert (".:: Seleccione un men&uacute; ::.") </script>';
}else {
$bandera=true;
}


if ($bandera==true){





$nuevo_usuario=mysql_query("insert into texto_menus (idmenu, texto, status,contacto) values ('$idmenu',' $descripcion',1,'$contacto')");
$id=mysql_insert_id();

//Obtener nombre menu
$nm=mysql_query("select menu from menus_web where idmenu='$idmenu'");
$vnm=mysql_fetch_array($nm);
$n_menu=$vnm['menu'];

//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="CONTENIDOS_MENU";
$accion="REGISTRO DE TEXTO CONTENIDO PARA EL MENU ".$n_menu;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id','$tabla','$accion','$usuario ')");

echo '<script> alert (".:: El contenido ha sido registrado ::.") </script>';

}//Termina validando bandera

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
