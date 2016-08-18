<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_facilidades?></title>
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
Para las decenas de Expositores que nos acompañan de otros estados de la República y de otros países, la Canaco-Servytur Mérida les ofrece apoyo y facilidades para su estancia, así como una relación de sitios de interés para ubicar servicios como hoteles. Si necesita información específica por favor llámenos al (999)942-88-50, Ext. 126.<br><br>
<span class="titulos" style="font-size:16px; font-weight:normal">Conozca Yucatán, el lugar más bello del mundo</span><br><a class="ligas2" href="http://yucatan.travel/yucatan/"><span style="font-size:16px">Secretaría de Fomento Turístico de Yucatán</span></a>
<br><br>

<span class="contenidos_text" style="font-size:16px">
¡Prepárese para comer delicioso! La gastronomía yucateca no tiene igual. Conozca más.
</span>

<a class="ligas2" href="recomendaciones.php?ident=1"><span style="font-size:16px">Restaurantes</span></a>
<br><br>

<span class="contenidos_text" style="font-size:16px">
Mérida cuenta con decenas de hoteles para todos los bolsillos: Desde económicos hasta Gran Turismo. Vea opciones en
</span>
<a class="ligas2" href="recomendaciones.php?ident=2"><span style="font-size:16px">Hoteles</span></a>

 <center></center></td>
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