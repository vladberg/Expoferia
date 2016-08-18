<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");
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
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
         <?php @include("includes/logo_expo.php"); ?>
        <div id="evento_organizado"><?php @include("includes/organizador_evento.php"); ?></div>
        <div class="right">
       <?php 
$idmenu=3;
@include("includes/menu_principal2.php"); ?>
        </div>
      </div>
    </header>
  </div>
</div>
<div class="main">

 <div id="banner_ligas">
 
 <?php @include("includes/ligas.php");?>
 </div>
 <center>
 <span class="titulos" style="font-size:16px">Descárgame para acompañar a tu marca</span><br></center>
  <div id="banner" style="height:285px">
  <!-- -->
  
  <div id="contenidos" style="width:900px; height:300px; margin-top:140px"><br><br>
<table width="300"  cellspacing="0" style="margin-top:-5px">
<tr><td>
<a href="detalle_mascota.php?idimg=1" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL1.jpg" width="140"></a>

</td>
<td><a href="detalle_mascota.php?idimg=2" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL2.jpg" width="140"></a>

</td>
<td><a href="detalle_mascota.php?idimg=3" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL3.jpg" width="140"></a>

</td>

<td><a href="detalle_mascota.php?idimg=4" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL4.jpg" width="140"></a>

</td>

<td><a href="detalle_mascota.php?idimg=5" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL5.jpg" width="140"></a>
</td>

<td><a href="detalle_mascota.php?idimg=6" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL6.jpg" width="140"></a>
</td>
</tr>
<tr><td colspan="6" align="center">

<table><tr>
<td><a href="detalle_mascota.php?idimg=7" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL8.jpg" width="140"></a>

</td>
<td><a href="detalle_mascota.php?idimg=8" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL9.jpg" width="140"></a>

</td>

<td><a href="detalle_mascota.php?idimg=9" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL10.jpg" width="140"></a>

</td>

<td><a href="detalle_mascota.php?idimg=10" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL11.jpg" width="140"></a>
</td>

<td><a href="detalle_mascota.php?idimg=11" target="_blank">
<img src="images/mascota_color/mascota-ESPACIAL6.jpg" width="140"></a>
</td>


</tr></table>


</td></tr>
</table>

</div>
<!---------->

  </div>
  
  <center>
 <span class="titulos" style="font-size:16px">Click sobre la imagen para descargar</span><br></center>
  
  <br>
<div style=" height:24px"></div>
     <?php @include("includes/patrocinadores.php") ?>
     
</div>

<div style=" height:6px"></div>


<div class="main">
  <section id="content"></section>
</div>
<div class="body2">
  <div class="main">
    <footer>
      <div class="footerlink">
        <?php @include("includes/footer.php") ?>
       <!-- <div style="clear:both;"></div>-->
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->


</body>
</html>