<?php 
session_start();
$Idusuario		=		$_SESSION['idusuario'];
$Itipousu		=		$_SESSION['itipousu']; //Tipo usuario 1) Administrador, 0) Usuario normal
$Nombreusu		=		$_SESSION['nombre'];
$apellidousu=		$_SESSION['apellidopat'];
$Emailusu		=		$_SESSION['iemail'];

$Nombreusu=$Nombreusu." " .$apellidousu;

//Realizando acciones si un usuario ha iniciado sesión
if ($Idusuario<>""){

include("procesos/conn.php");
//Datos de la empresa
$datosem		=		mysql_query("select * from datos_empresa",$conexion);
$vdatosem		=		mysql_fetch_array($datosem);
$nombre			=		$vdatosem['vnombre'];
$direccion		=		$vdatosem['vdireccion'];
$telefono		=		$vdatosem['vtelefono'];
$celular		=		$vdatosem['dcelular'];


//Obteniendo datos del usuario en sesión
$datos_usuario=mysql_query("select * from usuarios where iidusuario=$Idusuario",$conexion);
$vdatos_usuario=mysql_fetch_array($datos_usuario);
$apellidopatusu=$vdatos_usuario['vapellidopaterno'];
$apellidomatusu=$vdatos_usuario['vapellidomaterno'];
$ciudadusu=$vdatos_usuario['vciudad'];
$estadousu=$vdatos_usuario['vestado'];
$paisusu=$vdatos_usuario['vpais'];
$direccionusu=$vdatos_usuario['vdireccion'];
$claveusu=$vdatos_usuario['vclave'];
$empresausu=$vdatos_usuario['vempresa'];
$telefonousu=$vdatos_usuario['vtelefono'];
$celularusu=$vdatos_usuario['vcelular'];

if ($estadousu<>"" && $paisusu=="MEXICO"){
$mestado=mysql_query("select id_estado from estados where estado='$estadousu'",$conexion);

$vmestado=mysql_fetch_array($mestado);
$iestado=$vmestado['id_estado'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: EDITAR MIS DATOS - BIENES RA&Iacute;CES ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style_admin.css" rel="stylesheet" type="text/css" />
<link href="css/style_menu.css" rel="stylesheet" type="text/css" />
<!-- Para validar formulario de contacto-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js" ></script>
<script type="text/javascript" src="js/estados.js"></script> <!--Para paginado-->

<style type="text/css">
<!--
/*captcha*/
label.error { display:inline-table;}
table td{height:10px;}
form label.error, label.error{color:red;padding:0 0 0 10px; font-family:Arial, Helvetica, sans-serif; font-size:11px;}
input.error,select.error,textarea.error{border:1px solid red;}

.required {color:red; font-weight:bold;}
/*captcha*/

.Estilo3 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.Estilo5 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>



<script>
$(document).ready(function() {
	load_states();
		load_colonia('31',2463); 
		load_communities(31);
	//-----------------
$.validator.methods.equal = function(value, element, param) {
		return value == param;	};
	//------------------
	
/*$.validator.setDefaults({
submitHandler: function() {
	//
	}
		});*/
	//------------------
 $("#fvalida").validate({
				rules:{
				/*password		: 	{required	: true,minlength: 4},*/
				/*pais			: 	{required	: true,minlength: 4},*/
				
				},
				messages:{
				/*password			:"Ingrese su clave" ,	*/
				/*pais				:"Ingrese el país" ,	*/		
				}
 			});
 });

 
function colorear(campo)
{
	 var expr    = /[a-z]/i;
	 if(expr.test(document.getElementById(""+campo+"").value))
		 {
	 $("#"+campo+"").addClass("lleno");
		 }else
		 {
			 }
}
 

 
</script>


<style>
.lleno{
	background:#E1E9F6;
	border:#BDC7D8;
	}

.vacio{
background:#fff;
}
</style>

<script languaje="javascript">
function habilita(form)
{ 

divA = document.getElementById('prueba');
divA.disabled = false;

/*div = document.getElementById('pais');
div.disabled = false;

div2 = document.getElementById('states');
div2.disabled = false;

div3 = document.getElementsById('municipios');
div3.disabled = false;*/
}

function deshabilita(form)
{ 
divA = document.getElementById('prueba');
divA.disabled = true;

/*div = document.getElementById('pais');
div.disabled = true;

div2 = document.getElementById('states');
div2.disabled = true;

div3 = document.getElementById('municipios');
div3.disabled = true;*/

}

</script>


</head>
<body onload="deshabilita(this.form)">
<!--Al cargar la pagina muestra valores por defecto -->
<div id="encabezado">
   <div class="header">
      <div class="header_resize"><center>
      <a href="index.php"><img src="images/logo.jpg"  height="90" border="0"/></a>
	  </center>
	   <div class="clr">  </div>    
    </div>
  </div>
  </div>
 
   <div id="encabezado2_r">
  <div class="content">
    <div class="content_resize">
	<!-- Contenido-->
	
<table width="691" border="0" align="center">
  <tr>
    <td width="681"><div align="center" style="font-size:14px; font-weight:bold">
<!--Encabezado-->	
<span id="leyenda">BIENVENIDO(A)</span>&nbsp;&nbsp;<span class="nusuario"> <?php  echo strtoupper(utf8_encode($Nombreusu)) ?> </span>
 </div>
<!--Termina Encabezado-->	
</td>
  </tr>
</table>
<br />
<!--Formulario de registro -->
                  <table width="752" border="0" align="center">
                    <tr>
                      <td width="742">
                      <form id="fvalida" name="fvalida" method="post" action="procesos/editar_usuario.php">
                          <table width="741" border="0" align="center">
                            <tr>
                                 <td colspan="2"  align="left"><strong>EDITAR MIS DATOS</strong></td>
                              <td width="282" align="right">
                              <a href="propiedades.php" class="linkfl">Regresar a Propiedades</a>&nbsp;&nbsp;| &nbsp;&nbsp;
  							  <a href="procesos/salir.php" class="linkfl">Cerrar sesi&oacute;n</a> &nbsp;&nbsp;
                              
                               </td>
                            </tr>
                            <tr>
                              <td  align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td width="282" rowspan="14"><img src="images/registro.jpg" width="304" height="222" /></td>
                            </tr>
                            <tr>
                              <td width="147"  align="right">Nombre(s):</td>
                              <td width="273" align="right"><input type="text" name="nombres" id="nombres"  size="45" value="<?php echo utf8_decode($Nombreusu) ?>"  readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td align="right">Apellido Paterno:</td>
                              <td align="right"><input type="text" name="apellidos" id="apellidos" size="45" value="<?php echo utf8_decode($apellidopatusu) ?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td align="right">Apellido Materno:</td>
                              <td align="right"><input type="text" name="apellidosm" id="apellidosm" size="45" value="<?php echo utf8_decode($apellidomatusu) ?>" /></td>
                            </tr>
                            <tr>
                              <td align="right"><p>
                                <input type="radio" name="mod" id="radio1" value="modificar" onClick="habilita(this.form)"/>
                                Modificar</p>
                                <p>
                                  <input type="radio" name="mod" id="radio2" value="no_modificar" checked="checked" onclick="deshabilita(this.form)"/>
                                  No Modificar
                                  <label for="radio"></label>
                              </p></td>
                              <td align="right">
                              <span style="font-size:11px; color:#F00"> Si desea cambiar los datos de ciudad, estado y pa&iacute;s, de clic en radiobutton Modificar</span><br />
                              <div id="prueba">
                            
                              <span class="etiformulario">
           Pais:<strong><?php echo $pais ?>&nbsp;</strong>
           
            <span class="clr">
                   
                   
            <select name="pais"  id="pais" class="etiformulario" onchange="valid_country(this.value);">
              <?php 
			  $pusu= strtoupper(utf8_encode($paisusu));
			  
		//Consulta para obtener lista de propiedades
		$lista_prop=mysql_query("select * from paises where istatus=1 order by iidpais",$conexion);
		while ($vlista_prop=mysql_fetch_array($lista_prop)){
		$pais=$vlista_prop['vpais'];
		$c  = (utf8_decode($pais)=="MÉXICO")?   'selected'  :  "";
		
		
			?>
              <option  <?php echo $c; ?>  value="<?php echo $pais ?>" ><?php echo utf8_decode($pais)?></option>
             
			  <?
		}//Cierra el while
		?>
            </select>
            </span>
            
            </span>&nbsp;<span class="etiformulario"><strong><?php echo $estado ?></strong> 
           
           <br />
           Estado:
           <span id="estados_select">
           
           <select id="states" name="estado" onChange="load_communities(this.value);">
                      <?php

$q = "SELECT * FROM `estados` WHERE id_estado != 31";//Seleccionamos Estados
$r = mysql_query($q,$conexion);
while($estados = mysql_fetch_array($r))
{
$id = $estados["id_estado"];
echo '<option '.$select.'  value="'.$id["id_estado"].'">'. utf8_encode(strtoupper($estados["estado"])).'</option>';
}
						   ?>
                      <option value="31" selected="selected"> YUCATAN</option>
                    </select>       
           </span>
           
                    <br />Ciudad:
            <strong></strong>
            
            
            <!-- Municipios, ciudades-->
            <span  class="municipios"id="municipios" name="ciudad"></span> 
            <!-- Municipios, ciudades-->
            
            
            </span>
                             
                              
                             </div> 
                              </td>
                            </tr>
                            <tr>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="right">Ciudad:</td>
                              <td align="right"><input name="ciudad1" id="ciudad1" type="text" size="45" value="<?php echo utf8_decode($ciudadusu) ?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td align="right"><input type="hidden" name="stado" id="stado"  value="<?php echo $iestado ?>"/>
                              Estado:</td>
                              <td align="right"><input name="estado1" id="estado1"  type="text" size="45" value="<?php echo utf8_decode($estadousu)?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td align="right">*Pa&iacute;s:</td>
                              <td align="right"><input name="pais1" type="text1" id="pais1" size="45" value="<?php echo utf8_decode($paisusu) ?>" readonly="readonly"/></td>
                            </tr>
                            <tr>
                              <td align="right">Direcci&oacute;n:</td>
                              <td align="right"><input name="direccion" type="text" id="direccion" size="45" value="<?php echo utf8_decode($direccionusu) ?>"/></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">Empresa:</td>
                              <td align="right"><input name="empresa" type="text" id="empresa" size="45" value="<?php echo utf8_decode($empresausu) ?>"/></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">Tel&eacute;fono:</td>
                              <td align="right"><input name="telefono" type="text" id="telefono" size="45" value="<?php echo $telefonousu ?>"/></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">Celular:</td>
                              <td align="right"><input name="celular" type="text" id="celular" size="45" value="<?php echo $celularusu ?>"/></td>
                            </tr>
                            <tr>
                              <td height="68"><!--<div align="center">
                  <input type="checkbox" name="tuid_checbock" id="tuid_checbock"  />
                Acepto los <a  href="terminos.php" class="Lkpfl">T&eacute;rminos y Condiciones</a></div>-->
                                <input type="text" name="nombres2" id="nombres2"  size="10" value="<?php echo $Nombreusu ?>" style="visibility:hidden"/>
                                <input name="idusu" type="text" id="idusu" style="visibility:hidden" value="<?php echo $Idusuario ?>" size="2" input>
                              <input name="password2" type="text" id="password2" style="visibility:hidden" value="<?php echo $claveusu ?>" size="2" input="input" /></td>
                              <td height="68"><div align="center">
                                <input type="submit" name="aceptar" id="aceptar" value=" Aceptar " class="botonfomr" /></div></td>
                            </tr>
                          </table>
                        <center>
                          <input name="email2" type="hidden" id="email2" value="<?php echo $Emailusu ?>" size="10" input />
                          &nbsp;&nbsp;
                          <!-- <input type="button" name="button" id="button" value="Cancelar" class="colorfondo"/>-->
                        </center>
                      
                        </form></td>
                    </tr>
                    <tr>
                      <td><center><span style="color:#F00">(*)Campos requeridos</span>
                      </center>
                      </td>
                    </tr>
                  </table>
    <!--Termina formulario de registrado -->
    </div>
	</div>
	
	<!--Termina contenido-->
      <div class="clr"></div>
    </div>

   <div id="encabezado3" style="top:850px">
  <div class="footer">
     <div class="footer_resize"> <table width="1001" height="80" border="0">
  <tr>
    <td align="center" height="10">
	
	</td>
  </tr>
  <tr>
    <td width="615" align="center">
	<?php include ("procesos/piepagina.php")?>
	</td>
  </tr>
  
  
</table>
	 
    </div>
  </div>
</div>
</body>
</html>
<?php 
}else {
session_destroy();
echo "<script> location.href='login_sesion.php' </script>";
}?>