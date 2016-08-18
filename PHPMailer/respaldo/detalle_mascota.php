<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

$id_img=$_GET['idimg'];
$g_ruta="images/mascota_color/";



switch($id_img){
case 1:
$g_imagen="mascota-ESPACIAL1.jpg";
break;

case 2:
$g_imagen="mascota-ESPACIAL2.jpg";
break;

case 3:
$g_imagen="mascota-ESPACIAL3.jpg";
break;

case 4:
$g_imagen="mascota-ESPACIAL4.jpg";
break;

case 5:
$g_imagen="mascota-ESPACIAL5.jpg";
break;

case 6:
$g_imagen="mascota-ESPACIAL6.jpg";
break;

case 7:
$g_imagen="mascota-ESPACIAL8.jpg";
break;

case 8:
$g_imagen="mascota-ESPACIAL9.jpg";
break;

case 9:
$g_imagen="mascota-ESPACIAL10.jpg";
break;

case 10:
$g_imagen="mascota-ESPACIAL11.jpg";
break;

case 110:
$g_imagen="mascota-ESPACIAL12.jpg";
break;
}
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
 <table width="964" align="center">

<form>

	<tr>

    	<td width="618" align="center" valign="middle"><br>      
        <img src="<?php echo $g_ruta.$g_imagen ?>" width="650"/></td>
        <td width="334" valign="middle">
          <table width="30">
          <tr><td><?php @include("includes/logo_expo.php"); ?>
          </td></tr>
          </table>
          <br><br><b>
         Instrucciones de descarga</b><br><br>
        - Clic botón derecho del mouse<br>
        - Seleccionar del menú la opción "Guardar imagen como..."<br>
        - Seleccionar la carpeta Click en botón "Guardar"<br><br>
        <center><input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/></center></td>

        

    </tr>
	<tr>
	  <td align="center" colspan="2">
      <img src="images/separador.gif" width="150"></td>
	  
	  </tr>

</form>

</table>
</div>
</body>
</html>