<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");

//Obteniendo valor seleccionado en el combo
$conA=$_GET['categorias'];
$cat=$_GET['idc'];

if($conA<>""){

}else {
//Obtener el id de la primera categoría
$c=mysql_query("select min(categories_id) as idc2 from banner_sartory");	
$vc=mysql_fetch_array($c);
$conA=$vc['idc2'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: MERIMOTO - BANNERS CATEGORÍAS TIENDA ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />


<script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=500, height=400, top=120, left=350";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>
</head>
<body>
<div id="encabezado"> <table align="center"><tr><td align="center"><img src="../images/logo_merimoto.png"  /></td></tr></table>
     </div>


<div class="encabezado2">
  <div class="header">
         <!--Contenedor del flexslider-->
 <div class="container">
     <!-- Espacio para poner algún contenido-->
  <div class="content_resize_panel">
  <center><img src="../images/separador.gif" /></center>
  <div align="center" style="margin-top:100px">
                  
                 
                
                      
                      
                       <!-- Contenido-->
                      <table width="450" border="0" align="center">
                        <tr>
                          <td height="21" colspan="2" align="center"><?php echo $id2.$usuario2?> </td>
                        </tr>
                        <tr>
                          <td height="21" colspan="2" align="center"></td>
                        </tr>
                        
                        <tr>
                          <td width="619" align="left" valign="top"><b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span></td>
      <td width="237" align="right">
      <a class="link_ad" href="panel.php">Regresar a panel</a>&nbsp;&nbsp;|&nbsp;&nbsp;     
      <a class="link_ad" href="finaliza.php">Salir</a></td>
                          <td width="1" align="left" valign="top">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2"><table width="860" align="center">
                            <tr>
                              <td height="52" align="center"><h2>BANNERS PARA LAS CATEGORÍAS PRINCIPALES DE LA TIENDA</h2></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="52" colspan="2" align="center">
						  <form action="menus_web2.php" method="get">
						  <?
    //Consulta para obtener las categorias
$cat=mysql_query("select distinct(categories_name) as categoriaA, categories.categories_id as idc from categories_description inner join categories on categories_description.categories_id=categories.categories_id where parent_id=0 ");
$num_cat=mysql_num_rows($cat);

if ($num_cat !== 0){
 ?>
                            <table width="500" align="center"><tr><td height="56" align="center" valign="middle">
                            <select name="categorias" onchange="this.form.submit()">
                              <option value="0">Seleccionar un menú</option>
                              <?
while($rcat=mysql_fetch_array($cat))
{
	
?>
                              <option value="<?php echo $idc1=$rcat['idc'];?>"><?php echo $idc=$rcat['categoriaA'];?></option>
                              <?
     }
	 
	?>
                            </select>
                            <?
}
 
    ?>
                            &nbsp;&nbsp;
                          
                           <a href="menus_agregarimg2.php?idm=<?php echo $conA?>" ><img src="../images/iconos/boton_agregar.png" height="35" title="Agregar imágenes al menú listado"/></a>
                            </td></tr></table>
                            <br />
                            <img src="../images/separador.gif" /><br />
                            
                            
                            
      </form>                      <!-- Pasando por get el id del menu--></td>
                        </tr>
                        <tr>
                          <td height="41" colspan="2" align="center"><!--Contenido menus-->
<?php 

//Validando si se selecciono alguna opción
if($conA<>""){
}else {
//Obtener el id de la primera categoría
$c=mysql_query("select min(categories_id) as idc2 from banner_sartory");	
$vc=mysql_fetch_array($c);
$conA=$vc['idc2'];

}


/////////////////
//Consulta para obtener el nombre de la categoría del producto
$con_categoria=mysql_query("SELECT categories_name FROM categories_description WHERE categories_id=$conA");
$r_con_categoria=mysql_fetch_array($con_categoria);
$nom_cat=$r_con_categoria['categories_name'];

//Almacenando valor de la categoría seleccionada para el paginado
$categoria=$conA;


//Consulta para obtener los datos
$consulta1="select * from banner_sartory where categories_id=$conA order by idbanner desc";

$resultado = mysql_query($consulta1)or die (mysql_error());

$numeroRegistros = mysql_num_rows($resultado);





if($numeroRegistros<=0) 

{ 

    echo "<div align='center'>"; 

    echo "<font face='verdana' size='-2'>No se encontraron resultados para menu $nom_cat</font>"; 

    echo "</div>"; 

}else{ 

    //////////elementos para el orden 

    if(!isset($orden)) 

    { 

       $orden="dfecha"; 

    } 

    //////////fin elementos de orden 



    //////////calculo de elementos necesarios para paginacion 

    //tamaño de la pagina 

    $tamPag=3; 



    //pagina actual si no esta definida y limites 

    if(!isset($_GET["pagina"])) 

    { 

       $pagina=1; 

       $inicio=1; 

       $final=$tamPag; 

    }else{ 

       $pagina = $_GET["pagina"]; 

    } 

    //calculo del limite inferior 

    $limitInf=($pagina-1)*$tamPag; 



    //calculo del numero de paginas 

    $numPags=ceil($numeroRegistros/$tamPag); 

    if(!isset($pagina)) 

    { 

       $pagina=1; 

       $inicio=1; 

       $final=$tamPag; 

    }else{ 

       $seccionActual=intval(($pagina-1)/$tamPag); 

       $inicio=($seccionActual*$tamPag)+1; 



       if($pagina<$numPags) 

       { 

          $final=$inicio+$tamPag-1; 

       }else{ 

          $final=$numPags; 

       } 



       if ($final>$numPags){ 

          $final=$numPags; 

       } 

    } 



//////////fin de dicho calculo 
?>
                            <center>
                              <div style="width:800px;">
                                <table width="500" border="0">
                                  <tr>
                                    <td><?
//Encabezado categoría y número de resultados encontrados
$leyendac=" Menu: ";
echo $leyendac."<span style='font-size:18px; font-weight:bold'>".strtoupper($nom_cat)."</span><br>";
$leyenda=" Resultados de la consulta ";
 echo $leyenda."<span style='color:#00F; font-weight:bold'>(".$numeroRegistros.")</span>";
 ?></td>
                                  </tr>
                                </table><br />
                               <img src="../images/separador.gif" /><br /><br />
                              </div>
                            </center>
                            <?
 //++++++++++++++++++++++++++++++++++

$rutaim="../tienda/img/"; //Ruta de las imágenes
//consulta con limite

$sqlconsulta=mysql_query("select * from banner_sartory where categories_id=$conA order by idbanner desc LIMIT $limitInf,$tamPag ");

while($datos=mysql_fetch_array($sqlconsulta)) 

{ 

$idimg=$datos['idbanner'];
$imagen=$datos['imagen'];
$status=$datos['status'];
$idmenu_img=$datos['categories_id'];
 
 if ($status==0){
	 //Estado inactivo
	 $P_destaque="Activar";
	 $dp=1;
	}else {
		//Estado activo
	 $P_destaque="Inactivar";
	 $dp=0;
	}
 
 
 ?>
                            <!--Ejemplo 1-->
                            <table width="523" border="0" align="center">
                              <tr>
                                <td width="399" height="118" align="center" valign="middle"><img src="<?php echo $rutaim.$imagen ?>" width="399" height="161" border=0/></td>
                                <td width="2">&nbsp;</td>
                                <td width="108" valign="middle"  style="text-align:justify"><span style="font-size:12px; color:#00F">Id imagen: <?php echo $idimg ?></span><br /><br />
<span style="font-size:12px">Acciones</span>    
<hr width="100px" />      
                                
                               <a href="#"  onclick="javascript:cambiostatus('../includes/url_banner_tienda.php?idbanner=<?php echo $idimg?>')" class="link_ad">- Actualizar url</a>
                                <br />
                                  <a class="link_ad" href="../includes/cambio_status2.php?dp=<?php echo $dp?>&pid=<?php echo $idimg?>&idm=<?php echo $idmenu_img?> "><span style="color:#00F">- <?php echo $P_destaque ?></span></a>
                                  
                                  <br />
                                 <a class="link_ad" href="../includes/eliminar_imagen2.php?pid=<?php echo $idimg?>&idm=<?php echo $idmenu_img?>"><span style="color:#00F">- Eliminar</span></a></td>
                              </tr>
                              <tr>
                                <td colspan="3"><br />
                                  <center>
                                    <hr width="400px" />
                                  </center></td>
                              </tr>
                            </table>
                            <?php 

 } //Cierra el while

 } //Cierra el if

?>
                            <br />
                            <br />
                            <table border="0" cellspacing="0" cellpadding="0" align="center">
                              <tr>
                                <td align="center" valign="top"><? 

    if($pagina>1) 

    { 

       echo "<a class='Lkpfl' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina-1)."&categorias=".$categoria."'>"; 

       echo "<font face='verdana' size='-2'>Anterior</font>"; 

       echo "</a> "; 

    } 



    for($i=$inicio;$i<=$final;$i++) 

    { 

       if($i==$pagina) 

       { 

          echo "<font face='verdana' size='-2'><b>".$i."</b> </font>"; 

       }else{ 

          echo "<a class='Lkpfl' href='".$_SERVER["PHP_SELF"]."?pagina=".$i."&categorias=".$categoria."'>"; 

          echo "<font face='verdana' size='-2'>".$i."</font></a> "; 

       } 

    } 

    if($pagina<$numPags) 

   { 

       echo " <a class='Lkpfl' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina+1)."&categorias=".$categoria."'>"; 

       echo "<font face='verdana' size='-2'>Siguiente</font></a>"; 

   } 

//////////fin de la paginacion 

?></td>
                              </tr>
                            </table>
                            <!--Termina contenido menus --></td>
                        </tr>
                        <tr>
                          <td height="41" colspan="2" align="center"><img src="../images/separador.gif" /></td>
                        </tr>
                        <tr>
                          <td height="3" colspan="2" align="left">
                         
                          <span style="font-size:12px; color:#F00">- Medidas recomendadas: 870px de ancho por 300px de alto<br />
                            - Las imágenes con status activo son las que están visibles en cada menú.<br />
                            - Para cambiar el status, dar clic sobre el link que indica la operación a realizar. Solamente cambia el status, la imagen permanece almacenada en el servidor.</span></td>
                        </tr>
                      </table>
                    <!--Termina contenido-->
                    
                    
                </div>
  
  </div>
   <!--Termina Espacio para poner algún contenido-->
  
  
  
  
  <!-- ---->
   <!--Inicia fgb-->
  <!--Termina fgb-->

 


</div></div>

 

</div>


<!--Inicia encabezado3-->
<div id="encabezado3">

  <!--Inicia fgb-->
  <div class="fbg">
    <div class="fbg_resize">
   
    <div class="col c1"> 
   <div style="height:12px"></div>
      <?php include("../includes/direccion.php"); ?>
      </div>
        
     <div class="col c4">
    <?php @include('../includes/redes_sociales_panel.php'); ?>
       </div>
</div>

<div class="footer">
    <div class="footer_resize">
    <?php @include("../includes/footer_panel.php"); ?>
     </div>
  </div>

</div><!--Termina fgb-->



</div>
</body>
</html>
<?php 

}
else 
{
header("Location:login.php");
}
?>