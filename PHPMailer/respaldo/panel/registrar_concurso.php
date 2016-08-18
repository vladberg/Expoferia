<?php 
//iniciando sesión
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
@include("../includes/etiquetas.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>.:: <?php echo $panel_agconcursos?> ::.</title>
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
		
		$(document).ready(function() {
           $("#datepicker2").datepicker();
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
				titulo			:	{required	: true,minlength: 3} ,
				datepicker		:   {required	: true},
				datepicker2		:   {required	: true},
				
				bases			:	{required	: true,minlength: 10	},
				
				premios			:	{required	: true,minlength: 10	},
				
				},
				messages:{
				titulo				:"<br>Ingrese el t&iacute;" ,
				
				datepicker				:"<br>Ingrese la fecha inicial",
				datepicker2			:"<br>Ingrese la fecha final",
				
				bases				:"<br>Ingrese las bases",
				premios				:"<br>Ingrese los premios",
				
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
   <a class="link_ad" href="concursos.php">Regresar a concursos</a>&nbsp;&nbsp;|&nbsp;&nbsp;     
      <a class="link_ad" href="finaliza.php">Salir</a>
  </td></tr></table>
  <br />
<!-- Contenido-->
                      <form action="../includes/registrar_concurso2.php" method="post" enctype="multipart/form-data" name="fvalida" id="fvalida">
                          <table width="770" border="0" align="center" style="font-size:12px">
                            <tr>
                              <td colspan="3"  align="center"><br /><img src="../images/separador.gif" /></td>
                            </tr>
                            <tr>
                              <td colspan="3"  align="center"><h3 style="font-size:18px">REGISTRO DE CONCURSO</h3></td>
                            </tr>
                            <tr>
                              <td  align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td width="304" rowspan="8" valign="middle"><img src="../images/registro.jpg" width="304" height="222" /></td>
                            </tr>
                            <tr>
                              <td width="147"  align="right">*T&iacute;tulo:</td>
                              <td width="281" align="left"><input type="text" name="titulo" id="titulo"  size="45" /></td>
                            </tr>
                            
                            <tr>
                              <td align="right" valign="top">*Fecha inicial:</td>
                              <td align="left">
                             
                               <input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12" />
                               **</td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">*Fecha final:</td>
                              <td align="left">
                             
                               <input type="text" name="datepicker2" id="datepicker2" readonly="readonly" size="12" />
                               **</td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">*Bases:</td>
                              <td align="left"><textarea name="bases" id="bases" cols="35" rows="5" style="resize:none"></textarea><br />
                              <span style="font-size:10px; color:#0000FF">M&iacute;nimo 10 caracteres</span></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">*Premios:</td>
                              <td align="left" valign="top"><textarea name="premios" id="premios" cols="35" rows="5" style="resize:none"></textarea><br />
                              <span style="font-size:10px; color:#0000FF">M&iacute;nimo 10 caracteres</span></td>
                            </tr>
                            <tr>
                         
                              <td height="68" align="left" valign="top" colspan="2"><br />
                                <span style="font-size:10px; color:#000">**Para campos Fecha inicial y fecha final:</span><br />
<span style="font-size:10px; color:#0000FF">
- Clic sobre la caja de texto para desplegar calendario<br />
- Clic sobre la fecha deseada<br />
- Clic en los botones en el t&iacute;tulo del mes para retroceder o avanzar los meses</span>
                              </td>
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