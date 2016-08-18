<?php
require_once("../includes/cn.php");



$usuario = $_POST['txtUsuario'];
$contrasenia = md5($_POST['txtcontrasenia']);

$conta_cot=mysql_query("SELECT * FROM login WHERE usuario='$usuario' and password='$contrasenia' and status=1");


$datos = mysql_num_rows($conta_cot);


if($datos !== 0){
$vconta_cot=mysql_fetch_array($conta_cot);
$a=$vconta_cot['idusuario'];
$c=$vconta_cot['tipo_user'];
$tsa=$vconta_cot['SA'];
//Datos
$usudatos=mysql_query("select * from usuarios where idusuario=$a");

$vusudatos=mysql_fetch_array($usudatos);
$nom_usu=$vusudatos['nombres'];
$app_usu=$vusudatos['apellidopaterno'];

/*//Consulta para permisos
$permiso=mysql_query("select explx,expus,expicol,expems,expsns,expfrs,exptes,expacv,expgs,expimms from exua where idusuario='$a'");

$vpermiso=mysql_fetch_array($permiso);
$cad_permiso=$vpermiso['explx'].",".$vpermiso['expus'].",".$vpermiso['expicol'].",".$vpermiso['expems'].",".$vpermiso['expsns'].",".$vpermiso['expfrs'].",".$vpermiso['exptes'].",".$vpermiso['exptes'].",".$vpermiso['expacv'].",".$vpermiso['expgs'].",".$vpermiso['expimms'];*/

session_start();
	$_SESSION['idusuario'] =$a;
	$_SESSION['usuario'] = $nom_usu." ".$app_usu;
	$_SESSION['tipo'] = $c;
	$_SESSION['sa'] = $tsa;
	//$_SESSION['p'] = $cad_permiso;
//Obteniendo datos del usuario registrado
header("Location: panel.php");
}else{
header("Location: login.php");
}
?>