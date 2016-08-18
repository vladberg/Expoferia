<?php 
@include("cn.php");
$fecha=date("Y-m-d");
$fecha2=date("d-m-Y");
$hora=date("g:i a"); //Formato de 12 horas

//if ($Idusuario<>""){


if (isset($_POST["nombres"]))
{ 


$nombres=utf8_encode($_POST['nombres']);
$nombres2=utf8_encode($_POST['nombres2']);
$descripcion=utf8_encode($_POST['descripcion']);
$direccion=utf8_encode($_POST['direccion']);
$telefono=$_POST['telefono']; 
$contacto=$_POST['contacto'];
$giroem=utf8_encode($_POST['giros_empresas']);
$giroem2=utf8_encode($_POST['giro2']);
$url=$_POST['url'];
$googlemaps=$_POST['googlemaps'];

$id_emp=$_POST['idem'];
//Validando giro empresa
if ($giroem=="OTRO"){
	
//Validar contenido caja de texto
	if ($giroem2<>"Escriba el giro"){
	$giro=$giroem2;
	$bandera=true;
	}else {
	$bandera=false;
	echo  "<script> alert ('.:: Escriba el giro ::.'); </script>";
	}	


}else{
$giro=$giroem;
$bandera=true;
}

if ($nombres<>$nombres2){//Validando cambio de nombre
	





//Validar si el registro existe
$validar=mysql_query("select empresa from empresas where empresa='$nombres'");

$rvalidar=mysql_num_rows($validar);

if ($rvalidar<>0){
echo '<script> alert (".:: La empresa ya se encuentra registrada ::.") </script>';
}else {
	
//Editando empresa
$fecha=date("Y-m-d");
$hora=date('H:i:s');

if($bandera==true){
$editar=mysql_query("update empresas set empresa='$nombres', url='$url', descripcion='$descripcion', direccion='$direccion', telefono='$telefono', contacto='$contacto', giro='$giro', googlemaps='$googlemaps' where idempresa='$id_emp'");

$id=mysql_insert_id();


echo '<script> alert (".:: Los datos de la empresa han sido modificados ::.") </script>';
}



/////////////////////////////
}//Termina Validar si el correo se encuentra registrado
//aqui va redireccionamiento
	
	}else {
	if($bandera==true){

	$editar=mysql_query("update empresas set empresa='$nombres', url='$url', descripcion='$descripcion', direccion='$direccion', telefono='$telefono', contacto='$contacto', giro='$giro', googlemaps='$googlemaps' where idempresa='$id_emp'");



echo '<script> alert (".:: Los datos de la empresa han sido modificados ::.") </script>';
	}
	}///Termina validando cambio de nombre
echo '<script language=Javascript> location.href="../panel/empresas.php"</script>';
}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post


?>
