<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_testmoniales2?></title>
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
        </style>
        
        <script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=525, height=440, top=120, left=350";
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
<center>
 
 <a href="testimoniales.php?i=9" class="ligas2"><span class="titulos_azul" style="font-size:16px">Testimoniales</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;
 <span class="titulos" style="font-size:16px">Historial de videos</span></center>
 
 <div id="contenidos2" style="width:900px; height:360px; margin-top:-70px">
<table>
 <?php  
   $numcolumnas = 4; //Formato a 5 columnas
  $consulta=mysql_query("select * from videos where status=1 order by idvideo desc");
	$resnum = mysql_num_rows($consulta);
   if($resnum<>""){
    $i = 1;   
  while($fila = mysql_fetch_array($consulta)){ 
  //iidimgprop, iidpropiedad, vruta, vimagen, vstatus, dfecha, vhora, ibanner 
 
 
 $idvideo=$fila['idvideo'];
		$code=$fila['codigo'];
	$vtitulo=$fila['titulo'];
	$vclave=$fila['clavevideo'];
	
	$m_titulo=substr($vtitulo,0,35)."...";
  
 
   
  $resto = ($i % $numcolumnas);   
  if($resto == 1){ /*si es el primer elemento creamos una nueva fila*/  
  echo "<tr>";   
  }   
	
	
	
	
	$resto = ($i % $numcolumnas);   
  if($resto == 1){ /*si es el primer elemento creamos una nueva fila*/  
  echo "<tr>";   
  }   


 $li="javascript:cambiostatus('ver_video.php?idv=".$idvideo."')";
echo "<td width=\"155\" valign=\"top\">"."<center>"."<a href=\"#\" onclick=".$li."><img src=\"http://img.youtube.com/vi/".$vclave."/0.jpg\" width=\"200\" style=\"margin-top:11px;\" border=\"0\"  title='".utf8_decode($vtitulo)."'/></a><br>"."</center>"."<center><b><a href=\"#\" onclick=".$li." class=\"ligas2\"><span style=\"font-family:Open Sans Condensed; font-size:11px;\">".utf8_decode($m_titulo)."</span></a></b></center>"."</td><td width=\"20\"></td>";/*mostramos el valor del campo especificado*/ 
 

   if($resto == 0){/*cerramos la fila*/  
  echo "</tr>";   
  } 
  
    
//    
    
  $i++;   /*Incrementando contador en uno*/
    } 
 if($resto != 0){/*Si en la última fila sobran columnas, creamos celdas vacías*/  
  for ($j = 0; $j < ($numcolumnas - $resto); $j++){   
  echo "<td></td>";   
  }   
  echo "</tr>";   
  }  else {
	 $Mensaje="No hay galerías registradas"; 
	 echo $mensaje;
} 
   ?>
   
   <? 
 
   }?>
	
</table>
 
  </div>
 

 
 
  
			
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