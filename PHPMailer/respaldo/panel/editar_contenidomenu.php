<?php 
//iniciando sesi�n
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
@include("../includes/etiquetas.php");

//Obteniendo valor seleccionado en el combo
$idm=$_GET['idact'];


$lista=mysql_query("select * from texto_menus inner join menus_web on texto_menus.idmenu=menus_web.idmenu where idtextom='$idm'");

$vlista=mysql_fetch_array($lista);
$nom=$vlista['menu'];
$a_descripcion=$vlista['texto'];
$a_contacto=$vlista['contacto'];
$a_idactividad=$vlista['idtextom'];



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>.:: <?php echo $panel_edcontenidom?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<script language="JavaScript"> 
function  cambiostatus(pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=500, height=460, top=120, left=350";
 Elcmnd=window.open(pagina,"",opciones);
}
</script>



<!--Calendario jquery-->
<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.7.2.custom.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
 	<script type="text/javascript">
jQuery(function($){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '&#x3c;Ant',
		nextText: 'Sig&#x3e;',
		currentText: 'Hoy',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		'Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
		dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
		weekHeader: 'Sm',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});    

        $(document).ready(function() {
           $("#datepicker").datepicker();
        });
    </script>
    <!--Termina calendario jquery-->


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
				actividad			:	{required	: true,minlength: 3} ,
				descripcion			:	{required	: true,minlength: 10	},
				datepicker		:   {required	: true},
				hora		:   {required	: true},
				lugar		:   {required	: true},
				
				},
				messages:{
				actividad				:"<br>Ingrese la actividad" ,
				descripcion				:"<br>Ingrese una breve descripci&oacute;n",
				fecha				:"<br>Ingrese la fecha",
				hora				:"<br>Ingrese la hora",
				lugar				:"<br>Ingrese el lugar",
				
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
                              <td colspan="3"  align="center"><h3 style="font-size:18px">EDITAR CONTENIDO MENU&nbsp;&nbsp;<?php echo strtoupper(utf8_decode($nom))?></h3></td>
                            </tr>




                      <form action="../includes/registrar_contenidomenu2.php" method="post" enctype="multipart/form-data" name="fvalida" id="fvalida">
                          <table width="770" border="0" align="center" style="font-size:12px">
                            <tr>
                              <td colspan="3"  align="center"><br /><img src="../images/separador.gif" /></td>
                            </tr>
                           
                            <tr>
                              <td  align="right">&nbsp;</td>
                              <td align="right"><input type="hidden" name="idmenu" id="idmenu"  size="9" /value="<?php echo $a_idactividad?>">
                              
                              </td>
                              <td width="304" rowspan="8" valign="middle"><img src="../images/registro.jpg" width="304" height="222" /></td>
                            </tr>
                            
                            <tr>
                              <td align="right" valign="top">*Descripci&oacute;n:</td>
                              <td align="right" valign="top"><textarea name="descripcion" id="descripcion" cols="38" rows="8" style="resize:none"><?php echo utf8_decode($a_descripcion) ?></textarea><br />
                              <span style="font-size:10px; color:#0000FF">M&iacute;nimo 10 caracteres</span></td>
                            </tr>
                            
                            <tr>
                              <td align="right" valign="top">*Contacto:</td>
                              <td align="right" valign="top"><textarea name="contacto" id="contacto" cols="38" rows="5" style="resize:none"><?php echo utf8_decode($a_contacto) ?></textarea><br />
                              <span style="font-size:10px; color:#0000FF">M&iacute;nimo 10 caracteres</span></td>
                            </tr>
                           
                            <tr>
                              <td height="68"><!--<div align="center">
                  <input type="checkbox" name="tuid_checbock" id="tuid_checbock"  />
                Acepto los <a  href="terminos.php" class="Lkpfl">T&eacute;rminos y Condiciones</a></div>--></td>
                              <td height="68"><div align="center">
                              
                              <span style="font-size:10px; color:#F00"> (*)Campo requerido</span><br /><br />
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