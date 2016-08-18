<?php 
@include("cn.php");
$fecha=date("Y-m-d");
$fecha2=date("d-m-Y");
$hora=date("g:i a"); //Formato de 12 horas

//if ($Idusuario<>""){


if (isset($_POST["email"]))
{ 

$nombres=utf8_encode($_POST['nombres']);
$apellidos=utf8_encode($_POST['apellidos']);
$apellidosm=utf8_encode($_POST['apellidosm']);
$direccion=utf8_encode($_POST['direccion']);
$email=$_POST['email']; //Nuevo correo
$email2=$_POST['email2']; //Antiguo
$telefono=$_POST['telefono']; 
$celular=$_POST['celular'];
$iduser=$_POST['idusuariop'];

if ($email <> $email2)
{
	
	


//Validar si el correo se encuentra registrado
$validar=mysql_query("select usuario from login where usuario='$email'");

$rvalidar=mysql_num_rows($validar);

if ($rvalidar<>0){
echo '<script> alert (".:: El email ya se encuentra registrado ::.") </script>';
}else {
	
//Registrando usuario
///////////////////////////
$actualiza=mysql_query("update usuarios set nombres='$nombres', apellidopaterno='$apellidos', apellidomaterno='$apellidosm',direccion='$direccion',telefono='$telefono',celular='$celular' where idusuario='$iduser'");

$id=mysql_insert_id();


//Actualizando en login
$nuevo_login=mysql_query("update login set usuario= '$email' where idusuario='$iduser'");

echo '<script> alert (".:: Los datos del usuario han sido modificados::.") </script>';

/////////////////////////////
}//Termina Validar si el correo se encuentra registrado
//aqui va redireccionamiento
	
	}else {
	
	///////////////////////////
$actualiza=mysql_query("update usuarios set nombres='$nombres', apellidopaterno='$apellidos', apellidomaterno='$apellidosm',direccion='$direccion',telefono='$telefono',celular='$celular' where idusuario='$iduser'");

//$id=mysql_insert_id();

//Actualizando en login
//$nuevo_login=mysql_query("update login set usuario= '$email'");

echo '<script> alert (".:: Los datos del usuario han sido modificados::.") </script>';
	}	
	
echo '<script language=Javascript> location.href="../panel/usuarios.php"</script>';
}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post


?>
