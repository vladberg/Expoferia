<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

/*yo verifico de la siguiente forma sin problemas pero

puedes verificar de la forma que quieras, por ejemplo

con isset*/

if($ids<>"" && $usuario<>"")


{



@include("cn.php");





if(isset($_POST["titulo"])){

$titulo1=$_POST['titulo']; 

$titulo=$titulo1; 
$titulo1=strtolower($titulo1);
$url="http://$titulo1.com";

$url=str_replace(" ", "", $url);  //quitar espacios en blanco



//quitar acentos

$tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ";

$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";

$url=(strtr($url,$tofind,$replac));

$fincad=strlen($url);

$URLN=substr($url,7,$fincad);

$total= strpos($URLN,".com"); 

$carN=substr($URLN,0,$total);

$url=$carN; //Quitando el .com a $url





//Validando existencia de la galeria

$existblog=mysql_query("select galeria from galeria where url='$url'");


$texistblog=mysql_fetch_array($existblog);

$a=$texistblog['vurl'];
 

if ($a==""){









$descripcion=utf8_encode($_POST['descripcion']);

$imagen=$_FILES["imagenalbum"]['name'];

$tipo= $_FILES["imagenalbum"]['type'];

$tamanio= $_FILES["imagenalbum"]['size'];

 

//////////////////////////////////////

if($titulo1<>"" && $url<>"") { //Validando campos en blanco

$pathIm="../images/galeria/$url/";

$pathIm2="images/galeria/$url/";



//Creando carpetas

@mkdir("../images/galeria/$url/",0777,true); 

@mkdir("$pathIm",0777,true); 


$fechareg=date("Y-m-d");

$Hora=date("H:i");

 

 

 

@include("fextension.php");

Eextension($tipo);

//$imagen=md5($imagen);
//$imagen="makech_".$imagen;

//$imagen=$imagen.$extension;

$IMG=$pathIm.$imagen;



//Validando extensi�n de imagen

if ($tipo=="image/gif" || $tipo=="image/pjpeg" || $tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/x-png")	{

$formato=true;

}else{

echo  "<script> alert ('Formato Inválido de la imagen'); </script>";

echo "<script> location.href='../registrar_galeria.php' </script>";

}



//Validando peso de la imagen

if($tamanio < 349909206){

$peso=true;

}



//Acciones para variables verdaderas

 if ($formato==true && $peso==true){

 	//@include("reziseimgblog.php");

	copy($_FILES["imagenalbum"]['tmp_name'],$pathIm.$imagen);

	//image_gd($imagen,$pathIm);


	$inblog=mysql_query("insert into galeria (galeria, status, descripcion,url) values ('$titulo',1,'$descripcion','$url')");
			$idg=mysql_insert_id();

	$img=mysql_query("insert into img_galeria (imagen,ruta,status,idgaleria,idestaque,url) values ('$imagen','$pathIm2',1,'$idg',1,'')"); 
	
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="GALERIA";
$accion="ALTA DE LA GALERIA ".$titulo;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$idg','$tabla','$accion','$usuario ')");		
		
		
/*echo '<script> alert (".:: La galer&iacute;a ha sido registrada ::.") </script>';*/


 }//Termina Acciones para variables verdaderas

 //////////////////////////////////////



}else {

echo "<script>alert ('Faltan campos requeridos');</script>";

echo "<script> location.href='../registrar_galeria.php' </script>";

}//Termina Validando campos en blanco

echo '<script language=Javascript> location.href="../panel/galerias.php"</script>';

}else {

echo "<script>alert ('.:: La galería ya existe ::.');</script>";

echo "<script> location.href='../registrar_galeria.php' </script>";

}//Termina Validando existencia de blog



}else {

echo '<script language=Javascript> location.href="../panel/login.php"</script>';
} //Termina el isset post




}

else 

{

header("Location:../panel/login.php");

/*

En este caso mostramos otra pagina

con un mensaje. 

puedes añadir un link a la pagina de inicio de sesion

o mandar directamente a la pagina loguear.php

sin mostrar nada eso depende de ti

*/

}



?>