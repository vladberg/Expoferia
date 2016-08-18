<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_expositores?></title>
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
  <?php @include("includes/panel_top_banner_expositores.php");?>
<table style="margin-top:-20px; margin-left:10%">
<tr>
<td align="center">
 <?php @include("includes/menu_expositores.php");?>

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
<?php @include("includes/google_analytics.php"); ?>

</body>
</html>