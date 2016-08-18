<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_galeria?></title>
<meta charset="iso-8859-1">
 <!--Palabras tag-->
<meta name="description" content="¡El evento comercial más grande e importante del sureste ! La Cámara de Comercio te invita a a disfrutar del jueves 16 al domingo 19 de octubre de 2014, en todos los salones de exposición del Centro de Convenciones Yucatán Siglo XXI." />
<meta name="keywords" content="expocomercio, comercio, Mérida, feria, exponer, expositores, productos, centro de convenciones, convenciones, siglo XXI, Yucatán, Canaco, familia, visita, compras, negocio, escaparate, ventas, stands, Cámara, servicios, turismo, exposiciones, Centro de Convenciones siglo XXI, Salón Uxmal, Salón Chichen Iztá, Salón Ek Balam, Expocomercio 2014 Mérida, comerciantes, negocios, medios, publicidad, promocionar, patrocinadores, coca cola, dunosusa, Gobierno del Estado de Yucatán, Infinitum, Osorio, Telcel" />
<meta name="category" content="Expocomercio" />
<meta name="author" content="Expocomercio | http://www.expocomercio.com.mx" />
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
				// Carousel > Demo #5
				$("#carousel-demo5").sliderkit({
					auto:true,
					autospeed:4000,
					shownavitems:2,/*No de imagenes por vista*/
					circular:true,
					fastchange:true,
					scrolleasing:"linear", //"easeOutBounce, easeOutBack"
										scrollspeed:500
				});	
			});	
		</script>
        
        <!-- Slider Kit styles -->
		<link rel="stylesheet" type="text/css" href="lib/css/sliderkit-core.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="lib/css/sliderkit-demos.css" media="screen, projection" />
<!-- -->

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
$idmenu=6;
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
  
<!--Inicia galeria -->
  <!-- Start carousel-demo5 -->
  <div id="carousel-demo5" class="sliderkit" >
		<div class="sliderkit-nav">
			<div class="sliderkit-nav-clip">
				<ul>
 <?php  //consulta para obtener laa carpeta
 $galeria=mysql_query("select galeria.idgaleria as idg, galeria, imagen, ruta, descripcion from galeria inner join img_galeria on galeria.idgaleria=img_galeria.idgaleria where galeria.status=1 and img_galeria.status=1 and img_galeria.idestaque=1 order by galeria.idgaleria desc");
 
 $ngaleria=mysql_num_rows($galeria);
 
 if($ngaleria<>0){
	 while($vgaleria=mysql_fetch_array($galeria)){
	$igal=$vgaleria['idg'];
	$rutag=$vgaleria['ruta'];
	$imageng=$vgaleria['imagen'];
	$nomgal=$vgaleria['galeria'];
?>

<li>
<a href="detalle_galeria.php?i=6&idg=<?php echo $igal?>" title=""><img src="<?php echo $rutag.$imageng ?>" width="410" height="300" alt="<?php echo $nomgal?>" /></a>
<h3>
									
<table width="300" align="center"><tr>
	<td class="titulos">								<?php echo strtoupper(utf8_decode($nomgal))?>
   </td>
   <td width="20px">&nbsp;</td>
   <td>                                 
 <!--Código para compartir en facebook y twitter-->
  <!-- Facebook-->                               
<?php 
$liga="http://www.expoferiadelcomercio.com/detalle_galeria.php?i=6&idg=".$igal;

?>
  
</td>  </tr>  </table>                               
                                    </h3>
                                    
																	</li>




<?



		}//Cierra el while
}//Cierra el fi
 ?>
  </ul>
						</div>
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a href="#" title="Scroll to the left"><span>Previous</span></a></div>
						<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a href="#" title="Scroll to the right"><span>Next</span></a></div>
					</div>
				</div>
  
  
  
  
  
				
				<!-- // end of carousel-demo5 -->
  
  
  
  <!--termina galeria -->

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