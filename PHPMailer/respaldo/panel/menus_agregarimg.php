<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include('../includes/cn.php');
@include('../includes/fextension.php');
@include('../includes/etiquetas.php');

$idmenu=$_GET['idm'];
//Consulta para obtener nombre menu
$con=mysql_query("select menu from menus_web where idmenu='$idmenu'");

$vcon=mysql_fetch_array($con);
$nom=$vcon['menu'];



if (isset ($_FILES["archivos"])) {
$VDfecha=date("Y-m-d");
$horah=date("H:i:s");
$id_menu=$_POST['idmenuc'];

$mypathPerfil = "../images/slider/";

//obtenemos la cantidad de elementos que tiene el arreglo archivos
$tot = count($_FILES["archivos"]["name"]) ;
for ($i =0; $i < $tot; $i++)
{
$name = $_FILES["archivos"]["name"][$i]; 
$tmp_name= $_FILES["archivos"]["tmp_name"][$i];
$tipo= $_FILES['archivos']['type'][$i];
$_FILES['archivos']['error'][$i];

if ($name==""){ //Validando si hay imagen para cargar
echo "<script> alert('No se ha seleccionado la imagen');</script>";
} else {
///Hay imagen puede cargar
///Validaciones/////
Eextension($tipo); //Obteniendo el tipo mediante función 'f/fextension.php', para validar tipo permitido

if ($tipo=="image/gif" || $tipo=="image/pjpeg" || $tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/x-png")	{
$formato=true;
}else {
$formato=false;
echo "<script> alert('Formato no permitido de la imagen');</script>";
}
/////////////Validando tamaño de archivo
if($tamanio < 349909206){
$peso=true;
}else{
$peso=false;
}
/////////////////////

//////Validando si existe
if(file_exists($mypathPerfil.$name)){ //Validando si existe la imagen
	$copiar=false;
	echo "<script> alert('La imagen ya existe');</script>";
} else {
$copiar=true; // indentificador que realiza la copia por ser imagen no repetida
} //Termina validando si existe la imagen
////////////////////

//Validando criterios para guardado (peso y que no esté duplicada en la carpeta)
if($copiar==true && $peso==true && $formato==true){ //Validando si puede guardar la(s) imagen(es) o no


$guarda=mysql_query("INSERT INTO `img_menus_web` (`imagen`, `status`, `idmenu`) VALUES ('$name', 1, '$id_menu')");
$idimg=mysql_insert_id();

echo ("INSERT INTO `img_menus_web` (`imagen`, `status`, `idmenu`) VALUES ('$name', 1, '$id_menu')");

//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="IMG_MENUS_WEB";
$accion="ALTA DE IMAGEN ".$name;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$idimg','$tabla','$accion','$usuario ')");

move_uploaded_file($tmp_name,$mypathPerfil.$name);
//image_gd($name,$mypathPerfil);

} //Termina Validando si puede guardar o no la(s) imagen(es)
///////////////
} //Termina validando si hay imagen para cargar
} //Termina el for
 

echo '<script language=Javascript> location.href="menus_web.php?categorias='.$id_menu.'" </script>';
$tipo="";
} //Validando el isset post
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_agregar_img?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">   
function validacion() {

//COMPROBANDO CAMPO EXAMINAR
if (subirimagen.archivo.value==""){
	alert('Contenido del campo EXAMINAR no válido.')
		subirimagen.archivo.focus();
		return false;
}

subirimagen.envia.disabled=true;
} //CIERRA LA FUNCIÓN VALIDACIÓN
</script>


<!-- Función para mostrar mas objetos de examinar-->
<script type="text/javascript">
 	var numero = 0; //Esta es una variable de control para mantener nombres  diferentes de cada campo creado dinamicamente.
	evento = function (evt) { //esta funcion nos devuelve el tipo de evento disparado
   	return (!evt) ? event : evt;}
	addCampo = function () { 
	subirimagen.envia.disabled=false; //Habilitando botón de cargar imágenes
	//Creamos un nuevo div para que contenga el nuevo campo
   	nDiv = document.createElement('div');
	//con esto se establece la clase de la div
  	 nDiv.className = 'archivo';
	//este es el id de la div, aqui la utilidad de la variable numero
	//nos permite darle un id unico
   	nDiv.id = 'file' + (++numero);
	//creamos el input para el formulario:
   nCampo = document.createElement('input');
//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
   nCampo.name = 'archivos[]';
 //Establecemos el tipo de campo
   nCampo.type = 'file';
 //Ahora creamos un link para poder eliminar un campo que ya no deseemos
    a = document.createElement('a');
//El link debe tener el mismo nombre de la div padre, para efectos de localizarla y eliminarla
   a.name = nDiv.id;
//Este link no debe ir a ningun lado
   a.href = '#';
//Establecemos que dispare esta funcion en click
   a.onclick = elimCamp;
//Con esto ponemos el texto del link
   a.innerHTML = '&nbsp;Quitar <u>|X|</u> ';
//Bien es el momento de integrar lo que hemos creado al documento,
//primero usamos la función appendChild para adicionar el campo file nuevo
   nDiv.appendChild(nCampo);
//Adicionamos el Link
   nDiv.appendChild(a);
    container = document.getElementById('adjuntos');
   container.appendChild(nDiv);
 }
 //con esta función eliminamos el campo cuyo link de eliminación sea presionado
elimCamp = function (evt){
   evt = evento(evt);
   nCampo = rObj(evt);
   div = document.getElementById(nCampo.name);
   div.parentNode.removeChild(div);}
//con esta función recuperamos una instancia del objeto que disparo el evento
rObj = function (evt) { 
   return evt.srcElement ?  evt.srcElement : evt.target;}
   
 </script>
</head>
<body><center>

<?php
$rimagen="../images/";
 @include("../includes/mostrar_logo.php") ;
 
  ?>
<img src="<?php echo $rimagen.$nimagen1?>" width="161"/>
<br /><br /><img src="../images/separador.gif" /></center>
     </div>


<div class="encabezado2">
<br /><br />
  <table width="729" align="center"><tr><td width="486">
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span>
  
  </td><td width="231" align="right">
   <a class="link_ad" href="panel.php">Regresar a panel</a>&nbsp;&nbsp;|&nbsp;&nbsp;     <a class="link_ad" href="menus_web.php?categorias=<?php echo $idmenu?>">Banners</a>&nbsp;&nbsp;|&nbsp;&nbsp;
      <a class="link_ad" href="finaliza.php">Salir</a>
  </td></tr></table>
  <br />
  
  <center><img src="../images/separador.gif" /></center>
              
 <!-- Contenido-->
                      <table width="860" border="0" align="center">

                    	<tr>

                       		<td height="60" colspan="4" align="center">

                            	<h3>AGREGAR IMAGENES A MENU</h3>

                           	</td>

                     	</tr>

                        <tr>

                        <td>

                        	

                        </td>

                        </tr>

                      <tr>

                        <td height="52" align="center">MENU:  <b><?php echo $nom ?></b></td>

                      </tr>
                      <tr>
                        <td height="41" align="center">
                        
                        <!--Contenido menus-->

                        <center>
                          <div id="panel">
<center><img src="images/lineadecorativa2.jpg" width="515" height="1" /></center>
<!--Div contenedor del resultado de consulta-->
<form name="subirimagen" id="subirimagen" action="menus_agregarimg.php?a=<?php echo $tip?>" method="post" enctype="multipart/form-data" onSubmit="return validacion()">
<table width="530" border="0" align="center" cellspacing="2">
    <tr><td width="519" colspan="2"> 
      <!--<input name="imagenalbum1" id="imagenalbum1" type="file" size="30" />-->
      
      <div id="adjuntos">
        <!--<input type="file" name="imagenalbum[]"/>--></div>
      <span style="font-size:9px;color:#0000FF"> Formatos válidos: *.gif, *.png, *.jpg, *.jpeg</span>
      <br /><br />
      <input name="idmenuc" type="hidden" value="<?php echo $idmenu?>" />
      <input type="submit" value="Cargar imágenes seleccionadas" id="envia" name="envia"  disabled="disabled"/>
      <input type="button" name="nuevo_campo" onclick="addCampo()"  value="Agregar más imágenes" />
      </td>
    </tr>
	 
	 <tr>
	   <td colspan="2" ></td>
	   </tr>
	<tr>
	  <td colspan="2">&nbsp;</td>
	  </tr>
  </table>  
</form>
 </div>
                          
                          
                          
                          
                        </center>

                        <!--Ejemplo 1--><br />

  

    <br> 

    <table border="0" cellspacing="0" cellpadding="0" align="center"> 

    <tr><td align="center" valign="top"> 

<? 

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

?> 

    </td></tr> 

    </table> 
                        
                        
                        
                        <!--Termina contenido menus -->
                        
                        </td>
                      </tr>
                      <tr>
                        <td height="41" align="center"><img src="../images/separador.gif" /></td>
                      </tr>
                       <tr>
                        <td height="3" align="left"><span style="font-size:12px; color:#F00">-  Medidas recomendadas: Únicamente para el index 900px de ancho por 350px de alto / Para el resto de los menús  500px de ancho por 350px de alto<br />
                        - Para mostrar más cajas de texto, clic en botón Agregar más imágenes.<br />
                        - Si desea borrar alguna caja de texto, clic en link "Quitar[X]"<br />
                        - Para guardar, una vez adjuntados los archivos, clic en botón Cargar imágenes seleccionadas</span>
                        </td>
                      </tr>

                    </table>
                    <!--Termina contenido-->
                    
              



</div>
<!--Inicia encabezado3-->
<div id="footer" style="margin-top:250px">

 <!--Inicia fgb-->
  <div class="fbg">
    <div class="fbg_resize">
   
    <div class="col c1"> 
  
      <?php @include("../includes/footer_panel.php") ?>
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