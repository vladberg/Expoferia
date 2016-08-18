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

if (isset($_POST['adjuntar'])){ 

$imagen=$_FILES["archivo"]['name'];
$tmp_name= $_FILES["archivo"]["tmp_name"];
$tipo= $_FILES['archivo']['type'];
$tamanio= $_FILES['archivo']['size'];
$tipo_archivo=$_POST['tipoformato'];
$tipo_archivo2=$_POST['tipo_archivo'];

if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg")|| strpos($tipo, "png")) )) { 
//Si es diferente a las extensiones
$tipoa=true;
}else{ 
$tipoa=false;
//Si son iguales a las extensiones gif, jpeg, png

echo '<script> alert (".:: La extensión de los archivos no es correcta, solo se permiten archivos que no sean gif, jpg, png, bmp ::.") </script>';

} 

if ($tamanio < 2000000) { 
$tamanioa=true;

}else{
	$tamanioa=false;
	echo '<script> alert (".:: Solo se permiten archivos de 2 Mb máximo ::.") </script>';
}

$mypathPerfil="../formatos/";
if(file_exists($mypathPerfil.$imagen)){
	$copiar=false;
echo $mypathPerfil.$imagen;
	echo  "<script> alert ('.:: El archivo ya existe ::.'); </script>";
}else{
$copiar=true; // indentificador que realiza la copia por ser imagen no repetida
}

//Validando realización de acciones
if ($tipoa==true && $tamanioa==true && $copiar==true){
//Validando carga de archivo
	if (copy($_FILES['archivo']['tmp_name'],$mypathPerfil.$imagen)){ 
	//Insert
	$guardar=mysql_query("insert into formatos values (0,'$imagen',1,'$tipo_archivo','$tipo_archivo2')");
	$id=mysql_insert_id();
	
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas

//Info en bitácora
$tabla="FORMATOS";
$accion="ALTA DE ARCHIVO ".$imagen;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id','$tabla','$accion','$usuario')");
      	echo  "<script> alert ('.:: El archivo ha sido cargado correctamente ::.'); </script>";
		
   	}else{ 
		echo  "<script> alert ('.:: Ocurrió algún error al subir el fichero. No pudo guardarse ::.'); </script>";
      
   	} 

}//Termina Validando realización de acciones
echo '<script language=Javascript> location.href="registro_formatos.php" </script>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_imgcolorear?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">   
function validacion() {

//COMPROBANDO CAMPO EXAMINAR

if (subirimagen.tipo_archivo.value==""){
	alert('.::cIndique el tipo de archivo ::.')
		subirimagen.tipo_archivo.focus();
		return false;
}
if (subirimagen.archivo.value==""){
	alert('.::Contenido del campo EXAMINAR no válido ::.')
		subirimagen.archivo.focus();
		return false;
}

if (subirimagen.nomarchivo.value==""){
	alert('.::Contenido del campo NOMBRE ARCHIVO no válido.::')
		subirimagen.nomarchivo.focus();
		return false;
}


subirimagen.envia.disabled=true;
} //CIERRA LA FUNCIÓN VALIDACIÓN
</script>


</head>
<body>
<div id="encabezado"> <table align="center"><tr><td align="center"><img src="../images/expoferia_logo.png"  /></td></tr></table>
     </div>


<div class="encabezado2">
<br /><br /><br /><br /><br /><br /><br /><br />
<table width="729" align="center"><tr><td width="486">
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span>
  
  </td><td width="231" align="right">
   <a class="link_ad" href="panel.php">Regresar al panel</a>&nbsp;&nbsp;|&nbsp;&nbsp; 
    <a class="link_ad" href="registro_formatos.php">Formatos</a>&nbsp;&nbsp;|&nbsp;&nbsp;    
      <a class="link_ad" href="finaliza.php">Salir</a>
  </td></tr></table>
  <br />
 
 <!-- Contenido-->
 
<table width="726" border="0" align="center" cellspacing="2">
<tr><td colspan="2"><strong>SUBIR ARCHIVOS</strong><br /><br />

<center><img src="../images/separador.gif" /></center>
              <br />

</td>
    <tr><td width="428" height="238" class="bordeado" style="width:700" valign="middle"> 
    <div style="margin-left:40px">
    <form name="subirimagen" id="subirimagen" action="formatos_agregar.php" method="post" onSubmit="return validacion()" enctype="multipart/form-data" >
   <span style="font-size:12px; font-weight:bold">*Tipo de archivo:</span>
   <select name="tipo_archivo">
     <option value="adecuacion_stand">Adecuación stand</option>
     <option value="informacion">Información</option>
     <option value="carta_patrocinadores">Carta a Patrocinadores</option>
     <option value="solicitud_stand">Solicitud Stand</option>
     <option value="tarifas_stand">Tarifas Stand</option>
   </select><br />
  
* <input name="archivo" id="archivo" type="file" size="30" /> <br />
	<span style="font-size:12px;font-weight:bold"> 
	 * Tipo de Formato:</span>
	<select name="tipoformato" id="tipoformato">
	  <option value="0">No Oficial</option>
	  <option value="1">Oficial</option>
	  </select>
      &nbsp;&nbsp;&nbsp;
      <input name="adjuntar" id="adjuntar" type="submit" value="Enviar"/>
      
</form>
    </div>
    
    
    <center><span style="font-size:11px;color:#0000FF"> <br /><br />
      Solamente se admiten formatos que no sean de imagen jpg, gif, bmp, png<br />
    El peso del archivo no debe exceder de 2 Mb</span><br />
      <span style="font-size:10px; color:#F00"> *Todos los campos son requeridos</span><br />
    </center>
    </td>
      <td width="263"><img src="../images/iconos/archivos.png" width="248" height="214"/></td>
    </tr>
	 
	
  </table>  

 <!--Termina contenido-->
</form>
           <br />   
           <center><img src="../images/separador.gif" /></center>
              <br />
                          
                      
              
                           
                    <!--Termina contenido-->
                    
      



<!--</div>-->
<!--Inicia encabezado3-->
<div id="footer" >

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