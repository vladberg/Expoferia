<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{

@include("cn.php");
$fecha=date("Y-m-d");
$fecha2=date("d-m-Y");
$hora=date("g:i a"); //Formato de 12 horas

//if ($Idusuario<>""){


if (isset($_POST["titulo"]))
{ 

$vtitulo=utf8_encode($_POST['titulo']);
$vcodigo=$_POST['codigo'];
$vclave=$_POST['clavev'];




//Validar si el registro existe
$validar=mysql_query("select titulo from videos where titulo='$vtitulo'");

$rvalidar=mysql_num_rows($validar);

if ($rvalidar<>0){
echo '<script> alert (".:: El video se encuentra registrado ::.") </script>';
}else {
	
//Registrando actividad
///////////////////////////
$fecha=date("Y-m-d");
$hora=date('H:i:s');

$nuevo_usuario=mysql_query("insert into videos (titulo,codigo,status,clavevideo) values ('$vtitulo','$vcodigo',1,'$vclave')");
$id=mysql_insert_id();


//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="VIDEOS";
$accion="ALTA DE VIDEO YOUTUBE";
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id','$tabla','$accion','$usuario ')");

echo '<script> alert (".:: El video ha sido registrado ::.") </script>';







/////////////////////////////
}//Termina Validar si el correo se encuentra registrado
//aqui va redireccionamiento
	
echo '<script language=Javascript> location.href="../panel/testimonios.php"</script>';
}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post

}
else 
{
header("Location:login.php");
}
?>