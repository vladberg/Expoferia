<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{




@include("../includes/etiquetas.php");
@include("../includes/cn.php");
///Datos empresa seleccionada en ventana consulta_empresa
$vi=$_GET['val'];//Obteniendo id de la empresa seleccionada


if ($vi<>""){
	$vemp=mysql_query("select * from empresas where idempresa='$vi'");
	$vvemp=mysql_fetch_array($vemp);
	$nombre_empresa=$vvemp['empresa'];
	$boton_enviar="";
	}else {
	$boton_enviar="disabled='disabled'";
	
	}
	
	
//////////////////////////////
$id_salon=$_GET['idsal'];//Obteniendo el id del salón
$id_stand=$_GET['ids'];//Obteniendo el nombre del stand
$_stand=$_GET['is'];//Obteniendo el id del stand

if($id_salon==""){
$id_salon=1;
}

//Asignando nombre al salon
switch($id_salon){
	case 1: //Chichen
	$sal="Chichen Itzá";
	$reg="plano_chichen.php";
	break;
	
	case 2: //Uxmal
	$sal="Uxmal";
	$reg="plano_chichen.php";
	break;
	
	case 3: //Ek Balam
	$sal="Ek Balam";
	$reg="plano_ekbalam1.php";
	break;

	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_asignacion?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />


<script language="javascript" >
var ventana;

function crearNuevaVentana(url) {
    
    if (!ventana || ventana.closed) {
        ventana = window.open(url,"sub","status,height=520,width=720,left=300,resizable=no");
    } else if (ventana.focus) {
        
        ventana.focus( );
    }
}
</script>



</head>
<body>
<div id="encabezado"><center><?php
$rimagen="../images/";
 @include("../includes/mostrar_logo.php") ;
 
  ?>
</center>
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
  <a href="panel.php" class="link_ad">Regresar al panel</a>&nbsp;&nbsp;|&nbsp;&nbsp;
   <a href="stands.php?salones=<?php echo $id_salon?>" class="link_ad">Stands</a>&nbsp;&nbsp;|&nbsp;&nbsp;
 
    <a href="finaliza.php" class="link_ad">Salir</a> &nbsp;&nbsp;
  </td></tr></table>
    <table width="842" border="0" align="center" cellspacing="2">
    
  <tr>
  <td width="1664" colspan="2" align="center" >
  <!--Tabla de resultados --->
  <br /><br />
    
  <center><img src="../images/separador.gif" /></center>
  <br />
  
                          <table width="770" border="0" align="center" style="font-size:12px">
                           
                            <tr>
                              <td colspan="3"  align="center"><h3 style="font-size:18px">ASIGNACI&Oacute;N STAND</h3></td>
                            </tr>
                            <tr>
                              <td width="147"  align="right">&nbsp;</td>
                              <td width="281" align="right">&nbsp;</td>
                              <td width="304" rowspan="3" valign="middle"><img src="../images/registro.jpg" width="304" height="222" /></td>
                            </tr>
                            <tr>
                              <td colspan="2"  align="right">
 <table width="100%">
  <tr>
    <td colspan="4"><h3 style="font-size:16px">CONSULTA EMPRESAS REGISTRADAS</h3></td>
    </tr>
  <tr>
    <td width="65"><span class="texto_panel"> Empresa:</span> &nbsp;</td>
    <td width="240"><input id="empresa" name="empresa" type="text" size="40" maxlength="100"  value="<?php echo strtoupper(utf8_decode($nombre_empresa))?>" readonly="readonly"/></td>
    <td width="14">&nbsp;</td>
    <td width="116">
   <a href="#" onclick="Javascript:crearNuevaVentana('consulta_empresas.php?idsal=<?php echo $id_salon?>&is=<?php echo $_stand?>&ids=<?php echo $id_stand?>');" title="Consulta registro de empresa"><img src="../images/iconos/buscar.png"  height="60"/></a>
      
      </td>
  </tr>
  <tr>
    <td colspan="4" align="center"><span class="textalerta"></span></td>
    </tr>
  </table>
 </td>
                            </tr>
                            <tr>
                              <td colspan="2" align="right">
                              
                              
                              
   <form name="asignacion" id="asignacion" action="../includes/asignacion_stand.php" method="post">                             
 <table>
  <tr>
    <td colspan="4"><h3 style="font-size:16px">ASIGNAR STAND</h3></td>
    </tr>
  <tr>
  <td><span class="texto_panel"> Sal&oacute;n:</span> &nbsp;</td>
  <td><input name="n_salon" id="n_salon" type="text" size="30" maxlength="100" readonly="readonly" value="<?php echo utf8_encode($sal)?>"/>
    <input name="val_idsalon" id="val_idsalon" type="hidden" size="3" maxlength="100" readonly="readonly" value="<?php echo $id_salon?>"/>
  
  
  </td>
  <td><span class="texto_panel">Stand</span></td>
  <td><input name="n_stand" id="n_stand" type="text" size="30" maxlength="5" readonly="readonly" value="<?php echo $id_stand?>"/>
    <input name="val_stand" id="val_stand"  type="hidden" size="3" maxlength="5" readonly="readonly" value="<?php echo $_stand?>"/>
    <input name="i_empresa" id="i_empresa"  type="hidden" size="3" maxlength="5" readonly="readonly" value="<?php echo $vi?>"/></td>
  </tr>
  <tr>
    <td colspan="4" align="center">
    

	<?php
	//Si se obtiene valor del id de la empresa seleccionada en la ventana consulta_empresa se muestra el botón de envío
	if($vi<>""){
		?>
		 <input type="submit" name="asignar" id="asignar" value="Aceptar">
	<?
   
	}
	
	?></td>
    </tr>
  </table>
  </form>
                              </td>
                            </tr>
                           
                          </table>
  
  
  <br />
  <center><img src="../images/separador.gif" />
  
  <br />
  <span class="textalerta">* Para asignar el stand seleccionado, se requiere indicar la empresa, abra la ventana de consulta en el icono <img src="../images/iconos/buscar.png"  height="20"/>, una vez encontrada la empresa deseada, de clic en la liga asignar para la carga de datos requeridos para la asignaci&oacute;n, se habilit&aacute; el bot&oacute;n &quot;Enviar&quot;, de clic en &eacute;l para realizar la operaci&oacute;n.</span>
  </center><br />
    
    
  <!--Termina Tabla de resultados --->
    
    </td>
</tr>


</table>
  <br /><br /> 
 

   <!--Termina Espacio para poner algún contenido-->
  </div>
  
  <!--Inicia encabezado3-->
<div id="footer" style="margin-top:300px">

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
