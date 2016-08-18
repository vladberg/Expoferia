<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{


@include("../includes/etiquetas.php");
@include("../includes/google_fonts.php");
@include("../includes/cn.php");

$id_salon=$_GET['salones'];

if($id_salon==""){
$id_salon=1;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_stands?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />









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
  <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span>
  
  </td><td width="231" align="right">
 <a href="registro_stands.php" class="link_ad">Regresar stands</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
  </td></tr></table>
  <br />
  <table width="842" border="0" align="center" cellspacing="2">

<tr>
  <td width="1664" colspan="2" align="center" >
  <!--Tabla de resultados --->
    
  <center><img src="../images/separador.gif" /></center>
  <br />
  <table width="505" height="42">
  <tr><td height="26" align="center">
    
  <form action="stands.php" method="get">
    <span class="texto_panel"> Salón:</span> &nbsp;<select name="salones" id="salones" onchange="this.form.submit()">
      <option value="0">Seleccionar salón</option>
      <option value="1">Salón Chichen Itzá</option>
      <option value="3">Salón Ek Balam</option>
      <option value="2">Salón Uxmal</option>
  </select>
  </form></td></tr>
  <tr><td>
  <?php 
//Validando llamado de archivo del plano
switch($id_salon){
case 1: //Salón chichen itzá
@include("plano_chichen.php");
break;

case 2: //Salón uxmal
@include("plano_uxmal.php");
break;

case 3: //Salón Ek balam
@include("plano_ekbalam1.php");
break;
}

?>
    
  </td></tr>
  </table>
  <center><img src="../images/separador.gif" /></center><br />
    
    
  <!--Termina Tabla de resultados --->
    
    </td>
</tr>


</table>
  <br /><br /> 
 

   <!--Termina Espacio para poner algún contenido-->
  </div>
  
  <!--Inicia encabezado3-->
<div id="footer" style="margin-top:760px">

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
