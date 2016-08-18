<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_color?></title>
<meta charset="utf-8">
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/menu.css" type="text/css" media="all">



 <!--Para abrir ventanita de descargas -->	
<script language="JavaScript"> 
function  abrirventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=880, height=620, top=20, left=250";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>
<!--Termina  abrir ventanita de descargas -->
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
 <center>
 <span class="titulos" style="font-size:16px">¡Amiguito, Coloréame y ponme nombre!</span>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
 <a class="ligas2" href="#" onclick="javascript:abrirventana('bases_concurso.php')" >
<b><span class="titulos_azul" style="font-size:16px">Consulta las bases del concurso</span></b></a>
 
 
 <br></center>
  <div id="banner" style="height:285px">
  <!-- -->
  
  <div id="contenidos" style="width:900px; height:300px; margin-top:140px">
<table width="300"  cellspacing="0" style="margin-top:-20px">
<? 
   
 
   $numcolumnas = 5; //Formato a 5 columnas
    $consulta=mysql_query("SELECT * FROM img_colorear where status=1 order by RAND();");
     
    $resnum = mysql_num_rows($consulta);
   if($resnum<>""){
    $i = 1; 
	 $g_ruta="images/colorear/";
  while($fila = mysql_fetch_array($consulta)){ 
  //iidimgprop, iidpropiedad, vruta, vimagen, vstatus, dfecha, vhora, ibanner 
 $g_imagen=$fila['imgc']; //Imagen
 $g_idimagen=$fila['idimgc'];//Id de la imagen
 

 
   
  $resto = ($i % $numcolumnas);   
  if($resto == 1){ /*si es el primer elemento creamos una nueva fila*/  
  echo "<tr>";   
  }   


//|&nbsp;&nbsp;Administrar  <span style="font-family:verdana; font-size:14px; color:#000066"> </span><a href =eliminarimagen.php?id=".$var["iidimgprop"]."&Idp=".$Idima.">
echo "<div style=\"height:12px\"></div><td width=\"155\" valign=\"top\">"."<center>"."<a href=\"detalle_colorear.php?idimg=".$g_idimagen."\" class=\"Lkpfl\" target=\"_blank\"><img src=\"$g_ruta$g_imagen\" width=\"180\" style=\"margin-top:30px;\" border=\"0\" /></a></center></td>";/*mostramos el valor del campo especificado*/ 
 

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
	 $Mensaje="No hay imágenes"; 
	 echo $mensaje;
} 
   ?>
   
   <? 
 
   }?>

</table>

</div>
<!---------->

  </div>
  
  <center>
 <span class="titulos" style="font-size:16px">Click sobre la imagen para agrandar e imprimir</span><br></center>
  
  <br>
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