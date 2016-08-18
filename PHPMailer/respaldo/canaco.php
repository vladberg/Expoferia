<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_canaco?></title>
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
        <div style="height:8px; margin-left:665px; margin-top:2px">
       <a href="panel/prerregistro.php"><img src="images/prerregistro.gif" width="320" style="border:0"></a></div>
        <div class="right">
       <?php 
$idmenu=7;
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
    <td width="370" valign="top" align="justify">  <!--<span class="titulos">¡El evento comercial más grande e importante del sureste cumple 16 años!</span><br>--><div style="height:30px"></div>
 <div id="contenidos" style="height: 30px;"></div>
<span class="contenidos_text" style="font-size:16px">La Cámara Nacional de Comercio, Servicios y Turismo de Mérida, se dedica a impulsar el comercio y las actividades productivas en Yucatán realizando múltiples actividades para promover el crecimiento económico ofreciendo múltiples servicios a sus afiliados.<br><br>

<span class="titulos_azul">Pertenecer a <a href="http://www.canacomerida.com.mx" class="ligas2"><span style="font-size:17px; font-family:Cuprum">Canaco-Servytur Mérida</span></a> brinda a su negocio infinidad de ventajas.</span><br><br>
<span class="titulos" style="font-size:16px">¡Pida, sin compromiso, que un representante le visite para conocer más!</span><br><br>
<span class="contenidos_text">Solicite información al (999) 942-88-50, Ext. 126 y 127, o en forma electrónica dando</span> 

<a class="ligas2" href="<?php echo $pcontacto?>"><span style="font-size:14px">clic aquí</span></a>
</span>

</td>
</tr>


</table>

<!---------->
  </div>
  <div style=" height:24px"></div>
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