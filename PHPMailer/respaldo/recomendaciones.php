<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");
$tr=$_GET['ident'];//Identificador tipo de recomendación

//Validando giro de  la empresa
if ($tr==1){
$titulo=$title_recomendacion;
$texto_encabezado=$presentacion;
$texto_contenido=$tpresentacion;
$giro="RESTAURANTES";
}else {
$titulo=$title_recomendacion2;
$texto_encabezado=$presentacion2;
$texto_contenido=$tpresentacion2;
$giro="HOTELES";

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $titulo?></title>
<meta charset="iso-8859-1">
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/menu.css" type="text/css" media="all">

 <!--Para abrir ventanita de descargas -->	
<script language="JavaScript"> 
function  abrirventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=880, height=510, top=20, left=250";
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
//$idmenu=1;
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
  <div id="banner_recomendaciones">
  <br>
  <center>
    <span class="titulos_azul" style="font-size:14px;">*Usar el scroll para ver m&aacute;s empresas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Clic sobre la imagen para agrandar</span>
    </center>
<!-- Consulta para obtener las empresas recomendadas-->
         <table width="800" height="350" border="0" align="center" > 
          <? 
   
  $pruta="images/empresas/";//Ruta
  $ptext="Clic para ver detalles";
   $numcolumnas = 4; //Formato a 5 columnas
    $consulta=mysql_query("select * from empresas where status=1 and mostrar_r=1 and giro='$giro' ");
  
    $resnum = mysql_num_rows($consulta);
   if($resnum<>""){
    $i = 1;   
  while($fila = mysql_fetch_array($consulta)){ 
  //iidimgprop, iidpropiedad, vruta, vimagen, vstatus, dfecha, vhora, ibanner 
 $pimagen=$fila['imagen']; //Imagen
  $pempresa=$fila['empresa']; //Nombre
  $pide=$fila['idempresa'];//Id de la empresa
 

 
   
  $resto = ($i % $numcolumnas);   
  if($resto == 1){ /*si es el primer elemento creamos una nueva fila*/  
  echo "<tr>";   
  }   



 ?>
<td width="200" valign="top" align="center"><br>
<a class="linkopacity" href="#" onclick="javascript:abrirventana('detalle_recomendaciones.php?ide=<?php echo $pide?>&inf=0')" >
<img src="<?php echo $pruta.$pimagen?>" width="170" height="104" style="margin-top:10px;" border="0"  title="<?php echo $empresa?>"/></a>

<br>
<a class="ligas2" href="#" onclick="javascript:abrirventana('detalle_recomendaciones.php?ide=<?php echo $pide?>&inf=0')" >
<b><?php echo utf8_decode($pempresa) ?></b></a>
</td>


<?



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
	 echo  "</tr><td>".$mensaje."</td></tr>";
} 
   ?>
   
   <? 
 
   }?>
   </table> 
       
<br><br>
<!--termina Consulta para obtener las empresas recomendadas-->    
  </div>
  
  <div style="height:25px"></div>
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