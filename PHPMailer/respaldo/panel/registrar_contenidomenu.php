<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
@include("../includes/etiquetas.php");

//Obteniendo valor seleccionado en el combo
$conA=$_GET['categorias'];

if($conA<>""){
}else {
$conA=0;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>.:: <?php echo $panel_agregara?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=500, height=460, top=120, left=350";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>





<!-- --->
<style type="text/css">
<!--
/*captcha*/
label.error { display: none; }
table td{height:10px;}
form label.error, label.error{color:red;padding:0 0 0 10px; font-family:Arial, Helvetica, sans-serif; font-size:11px;}
input.error,select.error,textarea.error{border:1px solid red;}

.required {color:red; font-weight:bold;}
/*captcha*/

.Estilo3 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.Estilo5 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js" ></script>
<script>
$(document).ready(function() {
	
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
				descripcion			:	{required	: true,minlength: 10	},
				contacto			:	{required	: true,minlength: 10	},
				
				},
				messages:{
				
				descripcion				:"<br>Ingrese una breve descripci&oacute;n",
				
				contacto				:"<br>Ingrese los datos de contacto",
				
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
	.vacio{background:#fff;}
</style>



    <link href="../css/style_panel.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="encabezado"><center>
<?php
$rimagen="../images/";
 @include("../includes/mostrar_logo.php") ;
 
  ?>
<img src="<?php echo $rimagen.$nimagen1?>" width="161"/>
<br /><br /><img src="../images/separador.gif" /></center>
     </div>


<div class="cuerpo">

<br /><br /><br /><br /><br /><br /><br /><br />
  <table width="729" align="center"><tr><td width="486">
  <span class="tbienvenida"><b>Bienvenido(a)</b></span> &nbsp;<span class="bienvenida"><?php echo strtoupper($usuario) ?></span>
  
  </td>
  <td width="231" align="right">
   <a class="link_ad" href="contenidos_menu.php">Regresar a Contenidos men&uacute;</a>&nbsp;&nbsp;|&nbsp;&nbsp;     
      <a class="link_ad" href="finaliza.php">Salir</a>
  </td></tr></table>
  <br />
<!-- Contenido-->
<tr>
                             <table align="center"> <tr><td colspan="3"  align="center"><h3 style="font-size:18px">REGISTRO DE CONTENIDO MENUS</h3></td></tr></table>
                            </tr>

<form action="registrar_contenidomenu.php" method="get">
						  <?
						     //Consulta para obtener las categorias
$cat=mysql_query("select * from  menus_web where status=1 and menu<>'Testimoniales' and menu<>'Contacto' and menu<>'Actividades' and menu<>'Index' and menu<>'Expositores'  and menu<>'Patrocinios' and menu<>'Conoce_expoferia'  and menu<>'Facilidades_visitantes' and menu<>'Formatos' order by idmenu asc");
$num_cat=mysql_num_rows($cat);

if ($num_cat !== 0){
 ?>
                            <table width="500" align="center"><tr><td height="56" align="center" valign="middle">
                            *Men&uacute;: <select name="categorias" onchange="this.form.submit()">
                              <option value="0">Seleccionar un men&uacute;</option>
                              <?
while($rcat=mysql_fetch_array($cat))
{
$p=$rcat['idmenu'];
//Consulta
$c=mysql_query("select * from texto_menus where idmenu='$p';");
$vc=mysql_num_rows($c);

if ($vc==0){
	
	

?>	

	
?>
                              <option value="<?php echo $idc1=$rcat['idmenu'];?>"><?php echo $idc=$rcat['menu'];?></option>
                              <?
							  
							  }
     }
	?>
                            </select>
                            <?
}

    ?>
                         
                            </td></tr></table>
                            <br />
                           
                            
                            
                            
      </form>         


                      <form action="../includes/registrar_contenidomenu2.php" method="post" enctype="multipart/form-data" name="fvalida" id="fvalida">
                          <table width="770" border="0" align="center" style="font-size:12px">
                            <tr>
                              <td colspan="3"  align="center"><br /><img src="../images/separador.gif" /></td>
                            </tr>
                           
                            <tr>
                              <td  align="right">&nbsp;</td>
                              <td align="right"><input type="hidden" name="idmenu" id="idmenu"  size="9" /value="<?php echo $conA?>"></td>
                              <td width="304" rowspan="8" valign="middle"><img src="../images/registro.jpg" width="304" height="222" /></td>
                            </tr>
                            
                            <tr>
                              <td align="right" valign="top">*Descripci&oacute;n:</td>
                              <td align="right" valign="top"><textarea name="descripcion" id="descripcion" cols="38" rows="8" style="resize:none"></textarea><br />
                              <span style="font-size:10px; color:#0000FF">M&iacute;nimo 10 caracteres</span></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">*Contacto:</td>
                              <td align="right" valign="top"><textarea name="contacto" id="contacto" cols="38" rows="5" style="resize:none"></textarea><br />
                              <span style="font-size:10px; color:#0000FF">M&iacute;nimo 10 caracteres</span></td>
                            </tr>
                           
                           
                            <tr>
                              <td height="68"><!--<div align="center">
                  <input type="checkbox" name="tuid_checbock" id="tuid_checbock"  />
                Acepto los <a  href="terminos.php" class="Lkpfl">T&eacute;rminos y Condiciones</a></div>--></td>
                              <td height="68"><div align="center">
                              
                              <span style="font-size:10px; color:#F00"> (*)Todos los campos son requeridos</span><br /><br />
                                <input type="submit" name="aceptar" id="aceptar" value=" Aceptar " class="botonfomr" />&nbsp;&nbsp;
                                <input name="borrar" type="reset" value=" Borrar " class="botonfomr" />
                                </div></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><br /><img src="../images/separador.gif" /></td>
                            </tr>
                          </table>
               
               
                       
  </form>
                    <!--Termina contenido-->
                  
              

 

</div>


<!--Inicia encabezado3-->
<div id="footer" style="margin-top:332px">

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