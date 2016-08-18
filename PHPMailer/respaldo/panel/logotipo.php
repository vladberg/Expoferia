<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{


@include("../includes/etiquetas.php");
@include('../includes/fextension.php');
@include("../includes/cn.php");

if (isset($_POST['adjuntarImagen'])){ 

$imagen=$_FILES["imagenalbum"]['name'];
$tmp_name= $_FILES["imagenalbum"]["tmp_name"];
$tipo= $_FILES['imagenalbum']['type'];
$tamanio= $_FILES['imagenalbum']['size'];
$logoant=$_POST['rutalogo'];
$idlogoant=$_POST['idlogo'];

Eextension($tipo);
$mypathPerfil="../images/";
$ruta="../images/";

//$imagen=md5($imagen);
//$imagen="expocomercio_".$imagen;
//$mimg=$imagen;
//$imagen=$imagen.$extension;
//$nombreimg=$imagen;
$IMG=$mypathPerfil.$imagen;


if ($tipo=="image/gif" || $tipo=="image/pjpeg" || $tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/x-png")	{
$formato=true;
}else{
echo  "<script> alert ('Formato Inválido de la imagen'); </script>";
}

if($tamanio < 349909206){
$peso=true;
}

if ($formato==true && $peso==true){

if(file_exists($mypathPerfil.$imagen)){
	$copiar=false;
	echo  "<script> alert ('La imagen ya existe'); </script>";

}else{
$copiar=true; // indentificador que realiza la copia por ser imagen no repetida
}


if($copiar==true){
	
//Borrar imagen anterior
$delete =mysql_query("DELETE from logotipo");
@unlink($logoant);	
	
copy($_FILES['imagenalbum']['tmp_name'],$mypathPerfil.$imagen);


$guardar=mysql_query("insert into logotipo values (0,'$imagen',1)");
$idlogo=mysql_insert_id();

$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="LOGOTIPO";
$accion="CAMBIO DE LOGO ".$imagen;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$idlogo','$tabla','$accion','$usuario ')");
}

}
/*echo '<script language=Javascript> location.href="logotipo.php" </script>';*/
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_logotipo?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">   
function validacion() {

//COMPROBANDO CAMPO EXAMINAR
if (subirimagen.imagenalbum.value==""){
	alert('Contenido del campo EXAMINAR no válido.')
		subirimagen.imagenalbum.focus();
		return false;
}

<!--subirimagen.envia.disabled=true;-->
} //CIERRA LA FUNCIÓN VALIDACIÓN
</script>






</head>
<body>
<div id="encabezado"><center>

<?php
$rimagen="../images/";
 @include("../includes/mostrar_logo.php") ;
 
  ?>
 </center>
     </div>



<div class="cuerpo">
<!--Menu-->

<!------>


         <!--Contenedor del flexslider-->

     <!-- Espacio para poner algún contenido-->

   <br /><br /><br /><br /><br /><br /><br /><br />
  <table width="729" align="center"><tr><td width="486">
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span>
  
  </td><td width="231" align="right">
  <a href="panel.php" class="link_ad">Regresar al panel</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
  </td></tr></table>
  <br />
  <table width="662" cellspacing="10" align="center">
  <tr>
    <td width="244" align="center">
    <?php 
	//$consulta=mysql_query("select * from logotipo where idlogotipo=(select max(idlogotipo) from logotipo where status=1)");
	
	$consulta=mysql_query("select * from logotipo where idlogotipo=(select max(idlogotipo) from logotipo where status=1)");
	
	$vconsulta=mysql_fetch_array($consulta);
	$nimagen=$vconsulta['imagen'];
	$idlog=$vconsulta['idlogotipo'];
	?>
    <b>Logotipo en uso</b><br /><br />
    <img src="<?php echo $rimagen.$nimagen?>" width="161"/><br />
    </td>
    
    <td width="320" align="center">
    
    <center>
<form name="subirimagen" id="subirimagen" action="logotipo.php" method="post" onSubmit="return validacion()" enctype="multipart/form-data" >
	 <input type="hidden" name="idlogo" id="idlogo"  value="<?php echo $idlog ?>"/>
	 <input type="hidden" name="rutalogo" id="rutalogo"  value="<?php echo $rimagen.$nimagen ?>"/>
	 <input name="imagenalbum" id="imagenalbum" type="file" size="30" /><input name="adjuntarImagen" id="adjuntarImagen" type="submit" value="Aceptar"/> <br />
	<span style="font-size:11px;color:#0000FF"> Formatos validos: *.gif, *.png, *.jpg y *.jpeg. <br />
    Medidas recomendadas: 170px de ancho por 102px de alto</span><br />
      
</form>
</center>	 
   
    </td>
    
    </tr>
    <tr><td colspan="2" align="center"><br /><span style="font-size:11px;color:#0000FF">*El cambio de logo se verá reflejado en todo el sitio</span></td></tr>
 </table>
  <br />
  
  <br /> 
 

   <!--Termina Espacio para poner algún contenido-->
  </div>
  
  <!--Inicia encabezado3-->
<div id="footer">

  <!--Inicia fgb-->
  <div class="fbg">
    <div class="fbg_resize">
   
    <div class="col c1"> 
  
      <?php @include("../includes/footer_panel.php") ?>
      </div>
        
    
</div>


</div><!--Termina fgb-->



</div>
</body>
</html>
<?php 

}
else 
{
header("Location:login.php");
}
?>
