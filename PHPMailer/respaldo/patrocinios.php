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
  <div id="banner">
  <!-- -->
  
<table width="900" height="340" cellspacing="0" style="margin-top:-40px">
<tr>
<td width="500">
  <?php @include("includes/panel_top_banner.php");?>
 
 </td>
<td width="30"></td>
    <td width="370" valign="top" align="justify"><div style="height:5px"></div>
    <?php 
	//Consulta para obtener archivo
	$var=mysql_query("select archivo from formatos where tipo_archivo='carta_patrocinadores'");
	$tvar=mysql_num_rows($var);
	
	
	if ($tvar<>0){
		$ri="formatos/";
	$vtvar=mysql_fetch_array($var);
	$link=$ri.$vtvar['archivo'];
	
	}else {
	$link="#";
	
	}
	
	
	?>
    Las empresas Patrocinadoras de Expoferia del Comercio obtienen importantes beneficios, consulta nuestra <a class="ligas2" href="<?php echo $link?>"><span style="font-size:15px"><b>Carta a Patrocinadores</b></span></a> para más detalles.
    <div style="height:9px"></div>
   
  <center><span class="titulos" >Esquemas de Patrocinio</span></center>
 <div id="contenidos2">
 <div style="height:13px"></div>
 <table width="345" align="center">
 <tr>
 <td align="justify">
 <!--Contenido-->
 <span class="titulos_azul">Patrocinador A</span><br>
 Su marca en: Prensa, radio, TV, lonas, sitio web y rueda de prensa. Sin stand.
 <br><br>
  <span class="titulos_azul">Patrocinador AA</span><br>
Exclusividad de giro en publicidad. Su marca en toda la publicidad: Prensa, radio, TV, lonas, sitio web y rueda de prensa. 2 stands de 3 x 3. Espacio para lonas en columnas dentro del recinto ferial.
  <br><br>
  <span class="titulos_azul">Patrocinador AAA</span><br>
Exclusividad de giro en piso y publicidad. Su marca en toda la publicidad: Prensa, radio, TV, lonas, sitio web y rueda de prensa, posición preferencial. 2 stands de 3 x 3 en área preferencial y espacio para lonas en columnas dentro del recinto ferial.
 
 
 
 <!--Termina contenido.-->
 
 
 </td>
 </tr>
 </table>
 
 </div> 
 
<div id="contenidos_informes">
 <center><span class="titulos" style="font-size:18px">¡Ven y participa!</span></center>
<span class="contenidos_text">Solicite información al <b>+52(999) 942-88-50, Ext. 126 y 127</b>, o en forma electrónica dando</span> <a class="ligas2" href="<?php echo $pcontacto?>"><span style="font-size:15px">clic aquí</span></a>

</div>
</td>
</tr>

<tr>
  <td colspan="3">
  <table style="margin-top:-20px; margin-left:25%">
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