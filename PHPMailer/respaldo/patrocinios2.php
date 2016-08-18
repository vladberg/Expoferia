<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_patrocinios?></title>
<meta charset="utf-8">
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
        <h1><a href="index.php" id="logo">Expo</a></h1>
        <div class="right">
       <?php 
$idmenu=3;
@include("includes/menu_principal.php"); ?>
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
    <td width="370" valign="top" align="justify">  <!--<span class="titulos">¡El evento comercial más grande e importante del sureste cumple 16 años!</span><br>-->
    <span class="contenidos_text" style="font-size:16px">Las empresas Patrocinadoras de Expoferia del Comercio obtienen importantes beneficios, como: <br><br>
   
    </span><ul class="lista" style="color:#088ec6; font-weight:600">
    <li><span class="contenidos_text" style="font-size:16px">Acceso a base de datos de expositores;</span></li><li><span class="contenidos_text" style="font-size:16px">Presencia de su logo en los materiales de la gran campaña publicitaria</span></li>
    <li><span class="contenidos_text" style="font-size:16px">Participación en ruedas de prensa</span></li>
    <li><span class="contenidos_text" style="font-size:16px">Espacio para lonas y logos en todos los salones del evento</span></li>
    <li><span class="contenidos_text" style="font-size:16px">Lugar en el Presidium de inauguración y más</span></li>
    <span class="contenidos_text" style="font-size:16px"><br>
</span></ul>


  <center><span class="titulos" style="font-size:20px">¡Pregunte sobre nuestros diversos esquemas<br> de patrocinio!</span></center><br>
<span class="contenidos_text">Solicite información al <b>(999) 942-88-50, Ext. 126 y 127</b>, o en forma electrónica dando</span> <a class="ligas2" href="<?php echo $pcontacto?>"><span style="font-size:14px">clic aquí</span></a>
</td>
</tr>


</table>

<!---------->
  </div>
     <?php @include("includes/patrocinadores.php") ?>
     
</div>

<div style=" height:30px"></div>


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