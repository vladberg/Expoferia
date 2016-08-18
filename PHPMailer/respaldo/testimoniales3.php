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



<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css"/>
<script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

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


<ul class="galeria" id="imagenesVideos">
   <?php /*?><?php 
    $video=mysql_query("select * from videos where status=1 order by idvideo desc");
	$tvideo=mysql_num_rows($video);
	
	
	if ($tvideo<>0){
		while($vvideo=mysql_fetch_array($video)){
		$idvideo=$vvideo['idvideo'];
		$code=$vvideo['codigo'];
	$vtitulo=$vvideo['titulo'];
	
	$m_titulo=substr($vtitulo,0,50)."...";
	
	?><?php */?>
    
    <li>
        <a href="http://www.youtube.com/watch?v=zlUfiUCUnvc" rel="prettyPhoto[gallery2]" title="Testimonios">
            <img src="images/flash-logo.png" alt="YouTube" width="75" height="75"/>
        </a>
    </li>
    
    <li>
        <a href="http://www.youtube.com/watch?v=L4YLYkxwFYw" rel="prettyPhoto[gallery2]" title="Expoferia del comercio">
            <img src="images/flash-logo.png" alt="YouTube" width="75" height="75"/>
        </a>
    </li>
    
    
    <li>
        <a href="http://www.youtube.com/watch?v=l6RIqK8u66Q" rel="prettyPhoto[gallery2]" title="Mérida: Expo Feria del Comercio se efectuara del 17 al 20 de octubre">
            <img src="images/flash-logo.png" alt="YouTube" width="75" height="75"/>
        </a>
    </li>
    
    <li>
        <a href="http://www.youtube.com/watch?v=k62vPJpCIPw" rel="prettyPhoto[gallery2]" title="XV Expo Feria del Comercio 2013">
            <img src="images/flash-logo.png" alt="YouTube" width="75" height="75"/>
        </a>
    </li>
    <?php /*?><?
 
 	
		
	}//Termina el while
	
  
	}//Termina el iff
  
  ?><?php */?>
  
   
   
   
   
</ul>
 
<script type="text/javascript">
         
    $(document).ready(function(){
        $("#imagenesVideos a[rel^='prettyPhoto']").prettyPhoto({theme: 'facebook'});
    });
     
</script>






  			
</td>

</tr>


</table>

<!---------->
  </div>
   <div style="height:24px"></div>
     <?php @include("includes/patrocinadores.php") ?>
      <div style="height:6px"></div>
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


</body>
</html>