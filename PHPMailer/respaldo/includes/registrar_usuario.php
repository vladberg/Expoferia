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
$clave=$_POST['password'];
$email=$_POST['email']; //Nuevo correo
$telefono=$_POST['telefono']; 
$celular=$_POST['celular'];

$clave_correo=$clave;
//Convirtiendo a MD5
$claveA=md5($clave);


//Validar si el correo se encuentra registrado
$validar=mysql_query("select usuario from login where usuario='$email'");

$rvalidar=mysql_num_rows($validar);

if ($rvalidar<>0){
echo '<script> alert ("El email ya se encuentra registrado") </script>';
}else {
	
//Registrando usuario
///////////////////////////
$nuevo_usuario=mysql_query("insert into usuarios (nombres,apellidopaterno,apellidomaterno,direccion,telefono,celular,fecha,hora) values ('$nombres','$apellidos','$apellidosm','$direccion','$telefono','$celular','$fecha','$hora')");
$id=mysql_insert_id();


//Registrando en login
$nuevo_login=mysql_query("insert into login values (0,'$email','$claveA',0,1,'$id')");

echo '<script> alert (".:: Sus datos se han registrado ::.") </script>';

/////////////////////////////
}//Termina Validar si el correo se encuentra registrado
//aqui va redireccionamiento
	
echo '<script language=Javascript> location.href="../panel/usuarios.php"</script>';
}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post


?>
