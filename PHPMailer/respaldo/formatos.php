<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_formatos?></title>
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
     <div class="right">
       <?php 
$idmenu=2;
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
  <div id="banner">
  <!-- -->
  
<table width="900" height="340" cellspacing="0" style="margin-top:-40px">
<tr>
<td width="500">
  <?php @include("includes/panel_top_banner.php");?>
  
</td>
<td width="30"></td>
    <td width="370" valign="top" align="justify">  
   
   <div style="height:10px"></div>
 
<span class="contenidos_text" style="font-size:16px">
Encuentre aquí los archivos informativos y formatos oficiales de la Cámara de Comercio de Mérida para su stand en ExpoFeria del Comercio. Puede bajarlos, contestarlos y enviarlos electrónicamente, o bajarlos e imprimirlos para enviarlos por otros medios.<br><br>

Información <br>
<a class="ligas2" href="#"><span style="font-size:16px"><b>Tarifas de Stands</b></span></a><br>
<br>

Formatos oficiales<br>
<a class="ligas2" href="#"><span style="font-size:16px"><b>Solicitud de stand (Formato de registro)</b></span></a><br>

<a class="ligas2" href="#"><span style="font-size:16px"><b>Adecuación stands</b></span></a><br>

<a class="ligas2" href="#"><span style="font-size:16px"><b>Información</b></span></a><br>


</td>
</tr>
<tr>
  <td colspan="3">
  <table style="margin-top:-20px; margin-left:13%">
<tr>
<td align="center">
 <?php @include("includes/menu_expositores.php");?>

</td>
</tr>
</table>
  
  
  </td>
</tr>


</table>

<!---------->
  </div>
   <div style="height:24px"></div>
     <?php @include("includes/patrocinadores.php") ?>
     
</div>

<div class="espacio"></div>


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