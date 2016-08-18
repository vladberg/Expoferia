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
$idem=$_GET['idemp']; //Id de la empresa
$consultaA=mysql_query("select empresa from empresas where idempresa='$idem'");
$vconsultaA=mysql_fetch_array($consultaA);
$nomb_empresa=$vconsultaA['empresa'];

if (isset($_POST['adjuntarImagen'])){ 

$imagen=$_FILES["imagenalbum"]['name'];
$tmp_name= $_FILES["imagenalbum"]["tmp_name"];
$tipo= $_FILES['imagenalbum']['type'];
$tamanio= $_FILES['imagenalbum']['size'];
$id_empresa=$_POST['idempresa'];

	


Eextension($tipo);
$mypathPerfil="../images/empresas/";
$ruta="../images/empresas/";

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
	
copy($_FILES['imagenalbum']['tmp_name'],$mypathPerfil.$imagen);

$actualizar=mysql_query("update empresas set imagen='$imagen' where idempresa=$id_empresa");


}

}
$idem=$id_empresa;
echo '<script language=Javascript> location.href="logotipo_empresa.php?idemp='.$id_empresa.'" </script>';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: CAMBIO DE LOGO <?php echo strtoupper(utf8_decode($nomb_empresa))?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
 @include("../includes/mostrar_logo.php")  ?>
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
  <a href="empresas.php" class="link_ad">Regresar a empresas</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
  </td></tr></table>
  <br />
  <table width="662" cellspacing="10" align="center">
  <tr>
    <td width="244" align="center">
    <?php 
	$consulta=mysql_query("select * from empresas where idempresa='$idem'");

	$vconsulta=mysql_fetch_array($consulta);
	$nimagen=$vconsulta['imagen'];
	 $rimagen2="../images/empresas/";
	?>
    <b>Logo <br /><?php echo strtoupper(utf8_decode($nomb_empresa))?></b><br />
    <label for="textfield"></label>
   <input type="hidden" name="imgant" id="imgant"  value="<?php echo $nimagen?>"/>
    <br />
    
    <img src="<?php echo $rimagen2.$nimagen?>" width="161"/><br />
    </td>
    
    <td width="320" align="center">
    
    <center>
<form name="subirimagen" id="subirimagen" action="logotipo_empresa.php" method="post" onSubmit="return validacion()" enctype="multipart/form-data" >
	 <input type="hidden" name="idempresa" id="idempresa" value="<?php echo $idem?>" />
	 <input name="imagenalbum" id="imagenalbum" type="file" size="30" /><input name="adjuntarImagen" id="adjuntarImagen" type="submit" value="Enviar"/> <br />
	<span style="font-size:11px;color:#0000FF"> Formatos validos: *.gif, *.png, *.jpg y *.jpeg. <br />
    Medidas recomendadas: 640px de ancho por 480px de alto</span><br />
      
</form>
</center>	 
   
    </td>
    
    </tr>
 </table>
  <br /><br /> 
 

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
