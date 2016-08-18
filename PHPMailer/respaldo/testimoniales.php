<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_testimoniales?></title>
<meta charset="iso-8859-1">
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/menu.css" type="text/css" media="all">
<!-- Para navegación galeria-->
<!-- jQuery library -->
		<script type="text/javascript" src="lib/js/external/_oldies/jquery-1.3.min.js"></script>
		<!-- jQuery Plugin scripts -->
		<script type="text/javascript" src="lib/js/external/jquery.easing.1.3.min.js"></script>
		<script type="text/javascript" src="lib/js/external/jquery.mousewheel.min.js"></script>
		
		<!-- Slider Kit scripts -->
		<script type="text/javascript" src="lib/js/sliderkit/jquery.sliderkit.1.9.2.pack.js"></script>	

<!-- Slider Kit launch -->
		<script type="text/javascript">
			$(window).load(function(){ // News slider > Vertical
				$(".newslider-vertical").sliderkit({
					shownavitems:6,
					verticalnav:true,
					navitemshover:false, //Para que se muestre el contenido cuando se pase el mouse sobre él
					circular:true,
					auto:false //Indica si se muestra como carrusel (true) o no (false)
				});
			});	
		</script>
        
            
        <!-- Slider Kit styles -->
		<link rel="stylesheet" type="text/css" href="lib/css/sliderkit-core1.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="lib/css/sliderkit-demos1.css" media="screen, projection" />
		<style type="text/css">
		#apDiv1 {
	position: absolute;
	width: 520px;
	height: 350px;
	z-index: 6;
	left: 260px;
	/*background-color:#003;*/
}
        #apDiv2 {
	position: absolute;
	width: 200px;
	height: 35px;
	z-index: 1;
	left: 295px;
	top: 420px;
}
        </style>
        
        <script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=570, height=440, top=120, left=350";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>
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

 
  <div id="apDiv2">
  <br><br>
                  <a href="testimoniales_historial.php?i=9" class="ligas2">Ver m&aacute;s videos</a>
  
  </div>
  <div class="sliderkit newslider-vertical">
  <?php  
  $video=mysql_query("select * from videos where status=1 order by idvideo desc");
	$tvideo=mysql_num_rows($video);
	
	
	if ($tvideo<>0){
		while($vvideo=mysql_fetch_array($video)){
		$idvideo=$vvideo['idvideo'];
		$code=$vvideo['codigo'];
	$vtitulo=$vvideo['titulo'];
	$vclave=$vvideo['clavevideo'];
	
	$m_titulo=substr($vtitulo,0,50)."...";
	
	
	$mostrarI.='
<li><a href="#" title="[link title]"><span style=font-size:14px>'.utf8_decode($m_titulo).'</span></a></li>
 ';
 
 $li="javascript:cambiostatus('ver_video.php?idv=".$idvideo."')";
 
 $mostrarU.='
  <div class="sliderkit-panel">
  <a href="#" onclick="'.$li.'">
<img src="http://img.youtube.com/vi/'.$vclave.'/0.jpg" width="500" height="330"></a></div>';
							
							
		
		
	}//Termina el while
	
  
	}//Termina el iff
  
  ?>
  
   <!-- Start newslider-vertical -->
 
  <div class="sliderkit-nav">
					<div class="sliderkit-nav-clip">
                  <ul>
                  <?
                  echo $mostrarI;  
				  
				  ?>
                  
                  </ul>
                  
                        
  </div>
 
   </div>
 

 
  <div class="sliderkit-panels">
  		<?
                  echo $mostrarU;  
				  
				  ?>	
                 
  </div>
  
  
 </div>
  <!-- --->
  
			
</td>

</tr>


</table>

<!---------->
  </div>
   <div style="height:24px"></div>
     <?php @include("includes/patrocinadores.php") ?>
      <div class="espacio"></div>
</div>


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