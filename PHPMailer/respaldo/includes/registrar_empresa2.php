<?php 
@include("cn.php");
$fecha=date("Y-m-d");
$fecha2=date("d-m-Y");
$hora=date("g:i a"); //Formato de 12 horas

//if ($Idusuario<>""){


if (isset($_POST["nombres"]))
{ 

@include('../includes/fextension.php');

$nombres=utf8_encode($_POST['nombres']);
$descripcion=utf8_encode($_POST['descripcion']);
$direccion=utf8_encode($_POST['direccion']);
$telefono=$_POST['telefono']; 
$contacto=$_POST['contacto'];
$giroem=utf8_encode($_POST['giros_empresas']);
$giroem2=utf8_encode($_POST['giro2']);
$url=$_POST['url'];
$googlemaps=$_POST['googlemaps'];
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



$imagen=$_FILES["logotipo"]['name'];
$tipo= $_FILES['logotipo']['type'];
$tamanio= $_FILES['logotipo']['size'];


if($imagen==""){
$imagen="sin_imagen.png";
$v=0;
}else {
$v=1;
}


//Validar si el registro existe
$validar=mysql_query("select empresa from empresas where empresa='$nombres'");

$rvalidar=mysql_num_rows($validar);

if ($rvalidar<>0){
echo '<script> alert (".:: La empresa ya se encuentra registrada ::.") </script>';
}else {
	
//Registrando empresa
///////////////////////////
if ($v==1){//Validando $v
Eextension($tipo);
$mypathPerfil="../images/empresas/";
$ruta="../images/empresas/";



//$imagen="expo_".$imagen;
$IMG=$mypathPerfil.$imagen;

if ($tipo=="image/gif" || $tipo=="image/pjpeg" || $tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/x-png")	{
$formato=true;
}else{
echo  "<script> alert ('.:: Formato Inválido de la imagen ::.'); </script>";
}

if($tamanio < 349909206){
$peso=true;
}else {
$peso=false;
}


if ($formato==true && $peso==true){

if(file_exists($mypathPerfil.$imagen)){
	$copiar=false;
	echo  "<script> alert ('.:: La imagen ya existe ::.'); </script>";

}else{
$copiar=true; // indentificador que realiza la copia por ser imagen no repetida
}
}

}else {
$copiar=true; // indentificador
}//Termina validando $v



if($copiar==true && $bandera==true){

if ($v==1){//Validando $v
copy($_FILES['logotipo']['tmp_name'],$mypathPerfil.$imagen);

/*require ('includes/reziseimg.php');
image_gd($mimg,$mypathPerfil);*/
//copy($_FILES['imagenalbum']['tmp_name'],$mypathPerfil.$imagen);
//require ('f/reziseimgblog1.php');
//image_gd($imagen,$mypathPerfil);
}

$fecha=date("Y-m-d");
$hora=date('H:i:s');

$nuevo_usuario=mysql_query("insert into empresas (empresa, url, descripcion, imagen, direccion, telefono, contacto, giro, googlemaps, ipatrocinador) values ('$nombres','$url','$descripcion','$imagen','$direccion','$telefono','$contacto','$giro','$googlemaps',0)");
$id=mysql_insert_id();


/*echo '<script> alert (".:: La empresa ha sido registrada ::.") </script>';
*/}






/////////////////////////////
}//Termina Validar si el correo se encuentra registrado
//aqui va redireccionamiento
	
	echo '<script language=Javascript> location.href="../panel/empresas.php"</script>';
}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post


?>
