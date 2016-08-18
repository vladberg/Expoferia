<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_planos?></title>
<meta charset="utf-8">
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all"><link rel="stylesheet" href="css/menu.css" type="text/css" media="all">

   <!--Para abrir ventana popup -->	
<script language="JavaScript"> 
function  abrirventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=880, height=615, top=16, left=250";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>
<!----- -->
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
 <table width="900" height="340" align="center" cellspacing="0" style="margin-top:-40px">
<tr><td colspan="3" align="center"><span class="titulos" style="font-size:16px">Consulta stands disponibles y expositores dando click al plano de cada salón</span></td></tr>
<tr>
 
<td width="300" align="center">
  <a class="linkopacity" href="#" onclick="javascript:abrirventana('plano_chichen.php')" ><img src="images/planos/expoferia-2015-salon-chichen-itza.jpg" width="331" height="360"><br>
  
  </a>

 <span class="titulos_azul" style="font-size:14px; font-weight:normal">Salón Chichén Itzá</span>
  
  </td>
<td width="300" align="center"> 
<a class="linkopacity" href="#" onclick="javascript:abrirventana('plano_uxmal.php')" >
       <img src="images/planos/expoferia-2015-salon-uxmal2.jpg" height="360">
       <br>
  
    </a>
    <span class="titulos_azul" style="font-size:14px; font-weight:normal">Salón Uxmal</span>
  </td>
<td width="300" align="center"> <a class="linkopacity" href="#" onclick="javascript:abrirventana('plano_ekbalam1.php')" >
       <img src="images/planos/expoferia-2015-salon-ekbalam2.jpg" height="360" border="0"><br>
  
    </a><span class="titulos_azul" style="font-size:14px; font-weight:normal">Salón Ek Balam</span></td>
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

<?php @include("includes/google_analytics.php"); ?>
</body>
</html>