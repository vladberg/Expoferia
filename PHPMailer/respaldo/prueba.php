<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_detalleg.$mgaleria?></title>
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
					navitemshover:true,
					circular:true
				});
			});	
		</script>
        
            
        <!-- Slider Kit styles -->
		<link rel="stylesheet" type="text/css" href="lib/css/sliderkit-core1.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="lib/css/sliderkit-demos1.css" media="screen, projection" />
        
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
  <!-- Start newslider-vertical -->
  <div class="sliderkit newslider-vertical">
  <?php  
  $video=mysql_query("select * from videos where status=1");
	$tvideo=mysql_num_rows($video);
	
	
	if ($tvideo<>0){
		while($vvideo=mysql_fetch_array($video)){
		$idvideo=$vvideo['idvideo'];
		$code=$vvideo['codigo'];
	$vtitulo=$vvideo['titulo'];
	
	$m_titulo=substr($vtitulo,0,50)."...";
	
	
	$mostrarI.='
<li><a href="#" title="[link title]"><span style=font-size:14px>'.utf8_decode($m_titulo).'</span></a></li>
 ';
 
 $mostrarU.='	
 <div class="sliderkit-panel">

							<a href="detalle_galeria_redes.php?i=6&idimg='.$iidimagenp.'&idg='.$id_gal.'">'.$code.'</a>
							
							
							
							
						
						</div>';
	
		
	}//Termina el while
	
  
	}//Termina el iff
  
  ?>
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