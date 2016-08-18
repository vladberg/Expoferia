<?php
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{ 
@include("cn.php");


if (isset($_POST["actividad"]))
{ 


$actividad=utf8_encode($_POST['actividad']);
$descripcion=utf8_encode($_POST['descripcion']);
$fecha1=$_POST['datepicker'];
$hora=$_POST['hora']; 
$lugar=$_POST['lugar'];
$tipoconferencia=$_POST['tipoconferencia'];

//Formato fecha
//Rango, indica posición inicial hasta la final lo que va a imprimirse
$diat=substr($fecha1,0,2);
$mest=substr($fecha1,3,2);
$aniot=substr($fecha1,6,4);
$formfechat= $aniot."-".$mest."-".$diat;

$lugar=utf8_encode($lugar);

//Validar si el registro existe
$validar=mysql_query("select actividad from actividades where actividad='$nombres and conferencia=1 '");

$rvalidar=mysql_num_rows($validar);

if ($rvalidar<>0){
echo '<script> alert (".:: La conferencia se encuentra registrada ::.") </script>';
}else {
	
//Registrando actividad
///////////////////////////

$nuevo_usuario=mysql_query("insert into actividades (actividad, fecha, hora, lugar, descripcion,conferencia,idtipoconferencia) values ('$actividad',' $formfechat','$hora','$lugar','$descripcion',1,'$tipoconferencia')");
$id=mysql_insert_id();

//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="ACTIVIDADES";
$accion="ALTA DE ACTIVIDAD TIPO CONFERENCIA ".$actividad;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id','$tabla','$accion','$usuario ')");

echo '<script> alert (".:: La conferencia ha sido registrada ::.") </script>';







/////////////////////////////
}//Termina Validar si el correo se encuentra registrado
//aqui va redireccionamiento
	
echo '<script language=Javascript> location.href="../panel/lista_conferencias.php"</script>';


}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post

}
else 
{
header("Location:login.php");
}
?>
