<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{

@include("cn.php");
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas

//if ($Idusuario<>""){


if (isset($_POST["actividad"]))
{ 


$actividad=utf8_encode($_POST['actividad']);
$actividad2=utf8_encode($_POST['actividad2']);
$descripcion=utf8_encode($_POST['descripcion']);
$fecha1=$_POST['datepicker'];
$hora=$_POST['hora']; 
$lugar=$_POST['lugar'];
$lugarA=$_POST['lugar'];
$lugar2=$_POST['lugar2'];
$idac=$_POST['idactividad'];

//Formato fecha
//Rango, indica posición inicial hasta la final lo que va a imprimirse
$diat=substr($fecha1,0,2);
$mest=substr($fecha1,3,2);
$aniot=substr($fecha1,6,4);
$formfechat= $aniot."-".$mest."-".$diat;



$c="Cambiar a";
if ($lugar==$c){
$lugar=$lugar2;

if ($lugar<>""){
$lugar=utf8_encode($lugar);
$bandera=true;
	
	
}else {
$bandera=false;
echo '<script> alert (".:: Seleccione un salón ::.") </script>';
}



}else {

$lugar=utf8_encode($lugarA);
$bandera=true;

}





if ($actividad<>$actividad2){//Validando cambio de nombre
//Validar si el registro existe
$validar=mysql_query("select actividad from actividades where actividad='$actividad'");

$rvalidar=mysql_num_rows($validar);

if ($rvalidar<>0){
echo '<script> alert (".:: La actividad se encuentra registrada ::.") </script>';
}else {
	
//Editando actividad
if($bandera==true){
$editar=mysql_query("update actividades set actividad='$actividad', descripcion='$descripcion', fecha='$formfechat', hora='$hora', lugar='$lugar' where idactividad='$idac'");

//Info en bitácora
$tabla="ACTIVIDADES";
$accion="EDICION DE LA ACTIVIDAD ".$actividad;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$idac','$tabla','$accion','$usuario')");

////

echo '<script> alert (".:: Los datos de la actividad han sido modificados ::.") </script>';
}



/////////////////////////////
}//Termina Validar si el registro existe
//aqui va redireccionamiento
}else {
	
	if($bandera==true){
	$editar=mysql_query("update actividades set actividad='$actividad', descripcion='$descripcion', fecha='$formfechat', hora='$hora', lugar='$lugar' where idactividad='$idac'");


//Info en bitácora
$tabla="ACTIVIDADES";
$accion="EDICION ACTIVIDAD ".$actividad;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$idac','$tabla','$accion','$usuario ')");

////
echo '<script> alert (".:: Los datos de la actividad han sido modificados ::.") </script>';
	}
	}///Termina validando cambio de nombre	
echo '<script language=Javascript> location.href="../panel/actividades.php"</script>';
}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post

}
else 
{
header("Location:login.php");
}
?>
