<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");
$id_gal=$_GET['idg'];

//Obteniendo nombre galeria
$nom_gal=mysql_query("select galeria, descripcion from galeria where idgaleria=$id_gal");

$vnom_gal=mysql_fetch_array($nom_gal);
$mgaleria=$vnom_gal['galeria'];
$mdescripcion=$vnom_gal['descripcion'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo strtoupper(utf8_decode($title_detalleg.$mgaleria))?></title>
<meta charset="iso-8859-1">
 <!--Palabras tag-->
<?php
$mcontent="La Cámara de Comercio te invita a a disfrutar del jueves 16 al domingo 19 de octubre de 2014 del evento comercial más grande e importante del sureste, en todos los salones de exposición del Centro de Convenciones Yucatan Siglo XXI."; ?>
 
 <meta name="description" content="<?php echo utf8_encode($mcontent)?> "/>
 
 <?php $b="expocomercio, comercio, Mérida, feria, exponer, expositores, productos, centro de convenciones, convenciones, siglo XXI, Yucatán, Canaco, familia, visita, compras, negocio, escaparate, ventas, stands, Cámara, servicios, turismo, exposiciones, Centro de Convenciones siglo XXI, Salón Uxmal, Salón Chichen Iztá, Salón Ek Balam, Expocomercio 2014 Mérida, comerciantes, negocios, medios, publicidad, promocionar, patrocinadores, coca cola, dunosusa, Gobierno del Estado de Yucatán, Infinitum, Osorio, Telcel"?>
<meta name="keywords" content="<?php echo utf8_encode($b)?>" />
<meta name="category" content="Expocomercio" />
<meta name="author" content="Expocomercio | http://www.expoferiadelcomercio.com/" />
<meta name="reply-to" content="desarrollocomercial@canacomerida.com" />
<meta name="resource-type" content="document" />
<META name="robots" content="INDEX,FOLLOW"> 
<meta name="revisit-after" content="1 day" />
<link href="expocomercio_merida.ico" rel="shortcut icon" />


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
			$(window).load(function(){ //$(window).load() must be used instead of $(document).ready() because of Webkit compatibility				
				// Photo gallery > Vertical
				$(".photosgallery-vertical").sliderkit({
					circular:true,
					mousewheel:true,
					shownavitems:4,
					verticalnav:true,
					navclipcenter:true,
					auto:true
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
  
<table width="869" height="340" cellspacing="0" style="margin-top:-40px">
<tr>
<td width="482">
  <!-- Start photosgallery-vertical -->
				     
                   					
						
                       
                            
                             <?php 
//Consulta para obtener las imágenes de la galería seleccionada
$sqlimag=mysql_query("SELECT * FROM img_galeria where idgaleria='$id_gal' and status=1 order by idimgg desc");
$nConfig=mysql_num_rows($sqlimag);
$contador=0;
for($i = 1; $i <= $nConfig; $i++){
 $resimag=mysql_fetch_array($sqlimag); 
 $ruta=$resimag['ruta']; 
 $imagen=$resimag['imagen'];
 $iidimagenp=$resimag['idimgg'];
 

 $mostrarI.='
<li><a href="#" rel="nofollow" title="[link title]"><img src="'.$ruta.$imagen.'" alt="[Alternative text]" /></a></li>
 ';
 
 $mostrarU.='	
 <div class="sliderkit-panel">
							<a href="detalle_galeria_redes.php?i=6&idimg='.$iidimagenp.'&idg='.$id_gal.'"><img src="'.$ruta.$imagen.'" width="500px" height="350px" /></a>
							
						</div>';
 
 
/*  $mostrarU.='	
 <div class="sliderkit-panel">
							<img src="'.$ruta.$imagen.'" width="500px"/>
							
						</div>';*/
 


		} //Cierra el for
			 ?>
             <div class="sliderkit photosgallery-vertical">
			               
              <div class="sliderkit-nav">	
              <div class="sliderkit-nav-clip">
			<ul>
            <?
                     echo $mostrarI;  
		?>         
                </ul>
				</div>
                        
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a rel="nofollow" href="#" title="Previous line"><span>Previous</span></a></div>
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a rel="nofollow" href="#" title="Next line"><span>Next</span></a></div>
                        
					</div>
					<!--Cerrando sliderkit-nav-->
                    
                    <div class="sliderkit-panels">
					
                       <?
					   echo $mostrarU;
					   
					   ?>
					
								
					</div><!--tdermina sliderkit-panels-->
				</div><!-- Termina sliderkit photosgallery-vertical-->
				<!-- // end of photosgallery-vertical-->
  
</td>
<td width="24"></td>
    <td width="355" valign="top" align="justify">  <!--<span class="titulos">¡El evento comercial más grande e importante del sureste cumple 16 años!</span><br>--><br>
    <a class="ligas2" href="galeria.php?i=6" style="font-size:15px">Galer&iacute;a</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;<span class="titulos_azul"><?php echo strtoupper(utf8_decode($mgaleria))?></span>
    <br>
  <span class="contenidos_text"><?php echo "<br><b>Descripci&oacute;n: </b>". utf8_decode($mdescripcion)?></span><br><br>
 <?php 
$liga="http://www.expoferiadelcomercio.com/detalle_galeria.php?i=6&idg=".$id_gal;

?>

<br><br>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="<?php echo $liga ?>" data-type="button"></div>
 <!--Termina Facebook-->	  
	      
<!--Twitter-->
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $liga ?>" data-lang="en" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>   <!--Termina twitter --> 
<br>

<span class="titulos_azul" style="font-size:13px">&iquest;Deseas compartir una foto en particular?</span>
<br>
<div style="margin-top:-2px">
<span style="font-size:13px;">Clic sobre la imagen deseada</span>
</div>

<br><br>

  <span class="titulos">&iquest;Desea participar como expositor?</span><br>
<span class="contenidos_text">Solicite su stand al (999) 942-88-50, Ext. 126 y 127, o en forma electr&oacute;nica dando</span> <a class="ligas2" href="<?php echo $pcontacto?>"><span style="font-size:14px">clic aqu&iacute;</span></a>

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