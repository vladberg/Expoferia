<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

$id_img=$_GET['idimg'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_color?></title>
<meta charset="utf-8">
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/menu.css" type="text/css" media="all">

</head>
<body id="page1">
<div class="main">
 <table width="234" align="center">

<form>

	<tr>

    	<td width="186" align="center">
        <?php 
		 $consulta=mysql_query("SELECT * FROM img_colorear where idimgc='$id_img'");
		   $resnum = mysql_num_rows($consulta);
   if($resnum<>""){
    $g_ruta="images/colorear/";
  $fila = mysql_fetch_array($consulta);
  //iidimgprop, iidpropiedad, vruta, vimagen, vstatus, dfecha, vhora, ibanner 
 $g_imagen=$fila['imgc']; //Imagen
  $g_nombre=$fila['nombre']; //Imagen
 $g_idimagen=$fila['idimgc'];//Id de la imagen
   }
		?>
        
        
        <img src="<?php echo $g_ruta.$g_imagen ?>" /></td>

        

    </tr>
	<tr>
	  <td align="center">
      <img src="images/separador.gif" width="150">
      <table width="354"><tr><td width="104" valign="middle">
      
      <?php @include("includes/logo_expo.php"); ?>
      
       
       
      
      </td>
      <td width="123" valign="middle"> <input type="button" name="imprimir" value="Imprimir" onClick="window.print();">&nbsp;&nbsp;&nbsp;
        <input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/></td>
      
      </tr></table>
	  
        
        
        </td>
	  
	  </tr>

</form>

</table>
</div>
</body>
</html>