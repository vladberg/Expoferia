<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_como_exponer?></title>
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
<?php 
$var=mysql_query("select archivo from formatos where tipo_archivo='tarifas_stand'");
	$tvar=mysql_num_rows($var);
	
	
	if ($tvar<>0){
		$ri="formatos/";
	$vtvar=mysql_fetch_array($var);
	$link=$ri.$vtvar['archivo'];
	
	}else {
	$link="#";
	
	}



  //Llama archivo consulta contenidos con el id del menú
  //$idmenu=12;
//  include("includes/info_contenidom.php");
  ?>
     <span class="contenidos_text" style="font-size:16px">
Con su stand obtiene múltiples beneficios para posicionarse y aumentar sus ventas, como derecho a participar sin costo en la tarima, shows, desfile de botargas en la ciudad, y más.<br><br>

Es muy fácil participar como Expositor: la Cámara de Comercio de Mérida le ofrece precios accesibles, paquetes y pago en parcialidades. <br>
Consulta nuestras <a class="ligas2" href="<?php echo $link?>"><span style="font-size:16px"><b>tarifas</b></span></a>.</span>
<br><br>

   <center>
  <span class="contenidos_text" style="font-size:16px">
  <a class="ligas2" href="patrocinios.php?e=2"><span style="font-size:16px">Patrocinios</span></a> más impacto para su marca
  </span>
   </center>
<br>


 <center><span class="titulos" style="font-size:20px">¡Llámenos para más información!</span></center>
 <span class="contenidos_text" style="font-size:16px">
Informes y <a class="ligas2" href="<?php echo $pcontacto?>"><span style="font-size:16px">Ventas de Stands</span></a> <b>+52(999) 942-88-50, Ext. 126 y 127</b> <br>desarrollocomercial@canacomerida.com
</span>

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