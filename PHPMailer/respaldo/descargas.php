<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_descargas?></title>
<meta charset="utf-8">
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/menu.css" type="text/css" media="all">

   <script language="JavaScript"> 
function  abrirventana(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=702, height=580, top=80, left=350";
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
        <div id="evento_organizado"><?php @include("includes/organizador_evento.php"); ?></div>
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

  <div id="banner" style="height:285px">
  <!-- -->
  
  <div id="contenidos" style="width:900px; height:300px; margin-top:140px"><br><br>
<table  border="0" cellspacing="10" align="center" width="100%"> 
          <? 
   
 
   $numcolumnas = 5; //Formato a 5 columnas
    $consulta=mysql_query("SELECT salon,idstand_emp, empresa, stand, stands_empresas.status, stands_empresas.idempresa as idemp, imagen
FROM  `stands_empresas` 
INNER JOIN empresas ON stands_empresas.idempresa = empresas.idempresa
INNER JOIN stands ON stands_empresas.idstand = stands.idstand INNER JOIN salones ON salones.idsalon = stands.idsalon where stands_empresas.status=1 order by rand()");
     
	    
    $resnum = mysql_num_rows($consulta);
   if($resnum<>""){
    $i = 1;
	$g_ruta="images/empresas/";   
  while($fila = mysql_fetch_array($consulta)){ 
  //iidimgprop, iidpropiedad, vruta, vimagen, vstatus, dfecha, vhora, ibanner 
 $g_imagen=$fila['imagen']; //Imagen
  $g_id=$fila ['idemp'];//Id empresa
  $g_empresa=$fila ['empresa'];//Empresa
   
  $resto = ($i % $numcolumnas);   
  if($resto == 1){ /*si es el primer elemento creamos una nueva fila*/  
  echo "<tr>";   
  }   


//|&nbsp;&nbsp;Administrar  <span style="font-family:verdana; font-size:14px; color:#000066"> </span><a href =eliminarimagen.php?id=".$var["iidimgprop"]."&Idp=".$Idima.">
echo "<td width=\"155\" valign=\"top\">"."<center>"."<a href=\"#\" class=\"Lkpfl\"><img src=\"$g_ruta$g_imagen\" width=\"150\" style=\"margin-top:10px;\" border=\"0\"  title='".$g_empresa."'/></a><br>"."</center></td>";/*mostramos el valor del campo especificado*/ 
 

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
	   //$Mensaje="No hay imágenes"; 
	// echo $mensaje;
	  ?>
	  
	 
<?
} 
   ?>
   
   <? 
 
   }else {
	   ?>
       <tr><td align="center" colspan="5" height="80px"></td></tr>
	   <tr>
      <td align="center" colspan="5"><img src="images/iconos/no_results.png" width="69" height="69" /><br />No se encontraron resultados</td></tr>
	   <?
	   }
   
   ?>
   </table> 

</div>
<!---------->

  </div>
  <br>
  <center>
 <span class="titulos" style="font-size:16px">Click sobre el logo para ver y descargar el pdf</span><br></center>
  
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