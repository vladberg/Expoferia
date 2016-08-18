<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];
$usu_p= $_SESSION['p'];

if( $ids<>"" && $usuario<>"")

{


@include("../includes/etiquetas.php");
@include("../includes/cn.php");

//Consulta permisos si es usuario
if($tusu==0){
//Consulta para permisos
$permiso=mysql_query("select * from exua where idusuario='$ids'");


$vpermiso=mysql_fetch_array($permiso);
$l=$vpermiso['explx'];
$u=$vpermiso['expus'];
$imc=$vpermiso['expicol'];
$em=$vpermiso['expems'];
$st=$vpermiso['expsns'];
$for=$vpermiso['expfrs'];
$test=$vpermiso['exptes'];
$act=$vpermiso['expacv'];
$gal=$vpermiso['expgs'];
$imm=$vpermiso['expimms'];
$conc=$vpermiso['expcon'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_apanel?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />

<script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=500, height=330, top=120, left=350";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>







</head>
<body>
<div id="encabezado"><center><img src="../images/expoferia_logo.png" /><br /><br /><img src="../images/separador.gif" /></center>
     </div>



<div class="cuerpo">
<!--Menu-->

<!------>


         <!--Contenedor del flexslider-->

     <!-- Espacio para poner algún contenido-->

   <br /><br /><br /><br /><br /><br /><br /><br />
   <table width="729" align="center"><tr><td width="486">
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?><?php echo $cad_permiso?> </span>

  </td><td width="231" align="right">
 
   <a href="editar_usuario.php" class="link_ad">Editar mis datos</a>&nbsp;&nbsp; | &nbsp;&nbsp;
   
    <a href="#"  onclick="javascript:cambiostatus('../includes/cambio_contrasena.php?idusuario=<?php echo $ids?>')" class="link_ad">Cambiar password</a>
  </td></tr></table>
   <?php 
   //0) User / 1) Admin
   if($tusu==1){//Validando tipo de usuario
 ?>
 <br />
  <table width="600px" cellspacing="20" align="center">
      <tr>
  <td align="center">
  <a href="logotipo.php" class="linkopacity"><img src="../images/expoferia_logo.png" height="70" /><br /><span class="texto_panel">Logotipo expo</span></a></td>
  
  <td align="center"><a href="galerias.php" class="linkopacity"><img src="../images/iconos/images.png" height="90"/><br /><span class="texto_panel">Galerías</span></a></td>
  
  <td align="center"><a href="empresas.php" class="linkopacity"><img src="../images/iconos/empresas.png" height="90"/><br /><span class="texto_panel">Empresas</span></a></td>
  
  <td align="center"><a href="menus_web.php" class="linkopacity"><img src="../images/iconos/images.png" height="90"/><br /><span class="texto_panel">Imágenes Menús</span></a></td>
 
 <td align="center"><a href="registro_stands.php" class="linkopacity"><img src="../images/iconos/stand.png" height="90"/><br /><span class="texto_panel">Stands</span></a></td>
  <td align="center"><a href="lista_registros_conferencias.php" class="linkopacity"><img src="../images/iconos/conferencias.png" height="90"/><br /><span class="texto_panel">Inscripciones  a Conferencias</span></a></td>
 <td align="center"><a href="lista_conferencias.php" class="linkopacity"><img src="../images/iconos/contenidomenu.png" height="90"/><br /><span class="texto_panel">Conferencias</span></a></td>
 </tr>
 <tr>
  <td align="center"><a href="actividades.php" class="linkopacity"><img src="../images/iconos/actividades.png" height="90"/><br /><span class="texto_panel">Actividades</span></a></td>
  
  
   <td align="center"><a href="testimonios.php" class="linkopacity"><img src="../images/iconos/testimonios.png" height="90"/><br /><span class="texto_panel">Testimonios</span></a></td>
  
  
   <td align="center">
   <a href="usuarios.php" class="linkopacity"><img src="../images/iconos/usuarios.png" height="90"/><br /><span class="texto_panel">Usuarios</span></a>
    </td>
   <td align="center"><a href="registro_formatos.php" class="linkopacity"><img src="../images/iconos/formatos.png" height="85"/><br /><span class="texto_panel">Formatos</span></a></td>
  <td align="center"><a href="concursos.php" class="linkopacity"><img src="../images/iconos/concursos.png" height="85"/><br /><span class="texto_panel">Concursos</span></a></td>
 <td align="center"><a href="lista_prerregistros.php" class="linkopacity"><img src="../images/iconos/prerregistro.png" height="85"/><br /><span class="texto_panel">Prerregistros</span></a></td>
 
 <td>
 <a href="finaliza.php" class="linkopacity"><img src="../images/iconos/salir.png" height="85"/><br /><span class="texto_panel">Salir</span></a>
  </td>  </tr>
   
  
  </table>
 <?
   }else {
	  //////////////////  
	  //Para usuario
	  ?>
	
	   <br />
  <table width="600px" cellspacing="20" align="center">
      <tr>
  <td align="center">
  <?php 
   if ($l==1){
  ?>
 <a href="logotipo.php" class="linkopacity"><img src="../images/iconos/expoferia_logo1.png" height="70" /><br /><span class="texto_panel">Logotipo expo</span></a>
<?
}else{
?>	
<img src="../images/iconos/expoferia_logo1_off.png" height="70" /><br /><span class="texto_panel">Logotipo expo</span>
<?
}
 ?>
 </td>
  
  <td align="center">
    <?php 
   if ($gal==1){
  ?>
  <a href="galerias.php" class="linkopacity"><img src="../images/iconos/images.png" height="90"/><br /><span class="texto_panel">Galerías</span></a>
<?
}else{
?>	
<img src="../images/iconos/images_off.png" height="90"/><br /><span class="texto_panel">Galerías</span>
<?
}
 ?>
 </td>
  
  <td align="center">
   <?php 
   if ($em==1){
  ?>
  <a href="empresas.php" class="linkopacity"><img src="../images/iconos/empresas.png" height="90"/><br /><span class="texto_panel">Empresas</span></a>
<?
}else{
?>	
<img src="../images/iconos/empresas_off.png" height="90"/><br /><span class="texto_panel">Empresas</span>
<?
}
 ?>
  </td>
  
  <td align="center">
  <?php 
   if ($imm==1){
  ?>
   <a href="menus_web.php" class="linkopacity"><img src="../images/iconos/images.png" height="90"/><br /><span class="texto_panel">Imágenes Menús</span></a>
<?
}else{
?>	
<img src="../images/iconos/images_off.png" height="90"/><br /><span class="texto_panel">Imágenes Menús</span>
<?
}
 ?>
  </td>
 
 <td align="center">
  <?php 
   if ($st==1){
  ?>
 <a href="registro_stands.php" class="linkopacity"><img src="../images/iconos/stand.png" height="90"/><br /><span class="texto_panel">Stands</span></a>
<?
}else{
?>	
<img src="../images/iconos/stand_off.png" height="90"/><br /><span class="texto_panel">Stands</span>
<?
}
 ?>
 </td>
  <td align="center">
  <?php 
   if ($imc==1){
  ?>
 <a href="lista_registros_conferencias.php" class="linkopacity"><img src="../images/iconos/conferencias.png" height="90"/><br /><span class="texto_panel">Inscripciones a Conferencias</span></a>
<?
}else{
?>	
<img src="../images/iconos/conferencias_off.png" height="90" /><br /><span class="texto_panel">Inscripciones a Conferencias</span>
<?
} 
 ?>
  </td>
  
 </tr>
 <tr>
  <td align="center">
   <?php 
   if ($act==1){
  ?>
 <a href="actividades.php" class="linkopacity"><img src="../images/iconos/actividades.png" height="90"/><br /><span class="texto_panel">Actividades</span></a>
<?
}else{
?>	
<img src="../images/iconos/actividades_off.png" height="90"/><br /><span class="texto_panel">Actividades</span>
<?
} 
 ?>
 </td>
  
  
   <td align="center">
   <?php 
   if ($test==1){
  ?>
   <a href="testimonios.php" class="linkopacity"><img src="../images/iconos/testimonios.png" height="90"/><br /><span class="texto_panel">Testimonios</span></a>
<?
}else{
?>	
<img src="../images/iconos/testimonios_off.png" height="90"/><br /><span class="texto_panel">Testimonios</span>
<?
} 
 ?>
 </td>
  
  
   <td align="center">
   <?php 
   if ($u==1){
  ?>
   <a href="usuarios.php" class="linkopacity"><img src="../images/iconos/usuarios.png" height="90"/><br /><span class="texto_panel">Usuarios</span></a>
<?
}else{
?>	
 <img src="../images/iconos/usuarios_off.png" height="90"/><br /><span class="texto_panel">Usuarios</span>
<?
}
 ?>
 </td>
   <td align="center">
   <?php 
   if ($for==1){
  ?>
   <a href="registro_formatos.php" class="linkopacity"><img src="../images/iconos/formatos.png" height="85"/><br /><span class="texto_panel">Formatos</span></a>
<?
}else{
?>	
<img src="../images/iconos/formatos_off.png" height="85"/><br /><span class="texto_panel">Formatos</span>
<?
}
 ?>
 </td>
  
  <td align="center">
  <?php 
   if ($conc==1){
  ?>
  <a href="concursos.php" class="linkopacity"><img src="../images/iconos/concursos.png" height="85"/><br /><span class="texto_panel">Cpncursos</span></a>
<?
}else{
?>	
<img src="../images/iconos/concursos_off.png" height="85"/><br /><span class="texto_panel">Concursos</span>
<?
}
 ?>
  </td>
  
  
  
 <td align="center"><a href="finaliza.php" class="linkopacity"><img src="../images/iconos/salir.png" height="85"/><br /><span class="texto_panel">Salir</span></a></td>
  </td>  </tr>
   
  
  </table>
  <?

//////////////////////////////
}//Termina validando tipo de usuario
  
  
  ?>
   
   
 
  
  <br /><br /> 
 

   <!--Termina Espacio para poner algún contenido-->
  </div>
  
  <!--Inicia encabezado3-->
<div id="footer">

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
