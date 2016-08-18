<?php
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{ 
@include("cn.php");


if (isset($_POST["titulo"]))
{ 


$concurso=utf8_encode($_POST['titulo']);
$fecha1=$_POST['datepicker'];
$fecha2=$_POST['datepicker2'];
$bases=utf8_encode($_POST['bases']);
$premios=utf8_encode($_POST['premios']);

//Formato fecha
//Rango, indica posición inicial hasta la final lo que va a imprimirse
$diat=substr($fecha1,0,2);
$mest=substr($fecha1,3,2);
$aniot=substr($fecha1,6,4);
$formfechat= $aniot."-".$mest."-".$diat;


$diat2=substr($fecha2,0,2);
$mest2=substr($fecha2,3,2);
$aniot2=substr($fecha2,6,4);
$formfechat2= $aniot2."-".$mest2."-".$diat2;


//Validar si el registro existe
$validar=mysql_query("select titulo from concurso where titulo='$concurso'");

$rvalidar=mysql_num_rows($validar);

if ($rvalidar<>0){
echo '<script> alert (".:: El concurso se encuentra registrado ::.") </script>';
}else {
	
//Registrando concurso
///////////////////////////

$nuevo_usuario=mysql_query("insert into concurso (titulo, fechainicial, fechafinal,bases,premios,status) values ('$concurso',' $formfechat','$formfechat2','$bases','$premios',1)");
$id=mysql_insert_id();

//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="CONCURSO";
$accion="ALTA DE CONCURSO ".$concurso;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id','$tabla','$accion','$usuario ')");

echo '<script> alert (".:: El concurso ha sido registrado ::.") </script>';

///////////////////////
}//Termina Validar si el correo se encuentra registrado
//aqui va redireccionamiento
	
echo '<script language=Javascript> location.href="../panel/concursos.php"</script>';


}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post

}
else 
{
header("Location:login.php");
}
?>
