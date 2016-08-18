<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

$id_img=$_GET['idimg'];
$g_ruta="images/descargas/";



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
<!--<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">-->
<link rel="stylesheet" href="css/menu.css" type="text/css" media="all">

</head>
<body id="page1">
<form>
<div class="main">
 <table align="center">



	<tr>

    	<td  align="center" valign="middle"><br>      
        <img src="images/descargas/formato_descarga.jpg" width="700"/></td>
      

        

    </tr>
	<tr>
	  <td align="center" colspan="2">
      <img src="images/separador.gif" width="150"></td>
	  
	  </tr>



</table>
</form>
</div>
</body>
</html>