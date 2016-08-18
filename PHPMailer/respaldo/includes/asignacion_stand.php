<?php
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{ 



@include("cn.php");
$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas
//Registrar
//Validando registro de empresa
if (isset($_POST["asignar"]))
{
$isalon=$_POST['val_idsalon'];
$istand=$_POST['val_stand'];	
$iempresa=$_POST['i_empresa'];

//Guardando el registro
$guardar=mysql_query("insert into stands_empresas values (0, '$istand','$iempresa','$fecha','$hora',1)");
}
$id=mysql_insert_id();

//Bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas

//Info en bitácora
//Obtener nombre de stand y salon
$dato=mysql_query("select stand, salon, empresa from stands_empresas inner join stands on stands_empresas.idstand=stands.idstand inner join salones on stands.idsalon=salones.idsalon inner join empresas on stands_empresas.idempresa=empresas.idempresa where stands.idstand='$istand'");

$vdato=mysql_fetch_array($dato);
$nom_stand=$vdato['stand'];
$nom_salon=$vdato['salon'];
$nom_empresa=$vdato['empresa'];

$tabla="STANDS_EMPRESAS";
$accion="ASIGNACION DE STAND ". $nom_stand." EN ".$nom_salon." A LA EMPRESA ".strtoupper($nom_empresa);


$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id','$tabla','$accion','$usuario')");

 /*echo "<script> alert('Stand asignado');</script>";*/
echo '<script language=Javascript> location.href="../panel/stands.php?salones='.$isalon.'"</script>';

}
else 
{
session_destroy();
echo "<script> location.href='../panel/login.php' </script>";
}
 ?>