<?php 

@include("../includes/cn.php");
@include("../includes/etiquetas.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: <?php echo $panel_usuariosr?> ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style_panel.css" rel="stylesheet" type="text/css" />

<!--Calendario jquery-->
<link rel="stylesheet" type="text/css" href="../calendariojquery/jquery-ui-1.7.2.custom.css" />

    
   
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
    
     <link rel="stylesheet" type="text/css" href="calendariojquery/generic.css" />
	<link rel="stylesheet" type="text/css" href="calendariojquery/main.css" />
	
    
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
		dateFormat: 'yy-mm-dd', /*Indica formato de fecha*/
		firstDay: 1,
		isRTL: false,
		  changeYear: true,/*Habilitar cambio de a�o para selecci�n*/
      changeMonth: true, /*Habilitar campo de mes para selecci�n*/
      yearRange: '-80:+0',/*Rango de a�os a listarse*/
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



<!--<script type="text/javascript" src="../js/jquery-1.4.2.js"></script>-->
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
				nombres			:	{required	: true,minlength: 3} ,
								ocupacion		:	{required	: true,minlength: 3} ,
				email			:	{required	: true,email:true	},
				
				},
				
				messages:{
				nombres				:"<br>Ingrese su nombre" ,
				ocupacion			:"<br>Ingrese su puesto" ,
				email				:"<br>Ingrese un e-mail v&aacute;lido",
				
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





}/*Termina document ready function*/
 
</script>

<!--<script type="text/javascript" src="jquery-1.4.2.min.js"></script>-->
        <script language="JavaScript" type="text/JavaScript">
/*Prueba combos*/
            $(document).ready(function(){
                $("#select1").change(function(event){
                    var id = $("#select1").find(':selected').val();
                    $("#select2").load('../js/genera-select.php?id='+id);
									
                });
				
				
				$("#select2").change()(function(event){
                   var id2 = $("#select2").find(':selected').val();/*Id de lo seleccionado en el combo 2*/					$("#miseleccion").load('../js/genera-select2.php?id2='+id2);	

					                });
				
            });
        </script>


<script>
function seleccinado_select2(value)
{
     var v2 = document.getElementById("select2");
    var valor2 = v2.options[v2.selectedIndex].value;
    var text2 = v2.options[v2.selectedIndex].text;
	    
    alert("Se ha seleccionado el valor "+valor2+" ("+text2+") del segundo select");
	 $('#miseleccion').append('<option value="'+valor2+'">'+text2+'</option>');
}


</script>

<style>
.lleno{
	background:#E1E9F6;
	border:#BDC7D8;
	}
	.vacio{background:#fff;}
</style>
</head>
<body>
<div id="encabezado"><center><a href="http://www.expoferiadelcomercio.com/"><img src="../images/expoferia_logo.png" /></a><br /><br /><img src="../images/separador.gif" /></center>
     </div>


<div class="cuerpo">

<br /><br /><br /><br /><br /><br /><br /><br />
  <table width="729" align="center"><tr>
    <td width="486">
  &iquest;Te interesa alguna conferencia? Inscr&iacute;bete a las que asistir&aacute;s
  
  </td>
  </tr></table>
  <br />
<!-- Contenido-->
  <form action="../includes/registro_conferencias2a.php" method="post" enctype="multipart/form-data" name="fvalida" id="fvalida">
     <table align="center"><tr>
     <td>
     <!-- -->
     <table width="500" border="0" align="center" style="font-size:12px">
                            <tr>
                                 <td colspan="2"  align="left"><h3 style="font-size:18px">INSCRIPCI&Oacute;N ASISTENTES A CONFERENCIAS</h3>
                              Llene el siguiente formulario<br /></td>
                            </tr>
                            <tr>
                              <td  align="right">Tipos conferencia</td>
                              <td align="right">
                                <select name="select1" id="select1">
                            <option value="" selected="selected">Selecciona</option>                               
 <?php
								
$con_conf=mysql_query("select * from tiposconferencias where status=1");

while($vcon_conf=mysql_fetch_array($con_conf)){
	$idtcon=$vcon_conf['idconferencia'];
	$tcon=$vcon_conf['tipoconferencia'];
?>
<option value="<?php echo $idtcon?>"><?php echo utf8_encode($tcon)?></option>
<?

}//Termina while
								
?>
                              </select>
                              <br /></td>
            </tr>
                            <tr>
                              <td colspan="2"  align="right"><select name="select2" id="select2" multiple="multiple" onchange='seleccinado_select2();'>
                              </select></td>
                            </tr>
                            <tr>
                              <td  align="right">&nbsp;</td>
                              <td align="right"><label for="miseleccion"></label>
                                <select name="miseleccion" size="6" id="miseleccion">
                              </select>
                           <!-- <input type="button" value="Eliminar" onCLick="delOption()">
<input type="button" value="Eliminar todo" onCLick="delAllOptions()">-->
                              
                              </td>
                            </tr>
                            <tr>
                              <td width="173"  align="right">*Nombre:</td>
                              <td width="380" align="right"><input type="text" name="nombres" id="nombres"  size="40" /></td>
                            </tr>
                            <tr>
                              <td height="47" align="right" valign="top">Empresa: </td>
                              <td align="right"><input type="text" name="empresa" id="empresa" size="40"/></td>
                            </tr>
                            <tr>
                              <td height="47" align="right" valign="top">*Puesto / Ocupaci&oacute;n::</td>
                              <td align="right"><input type="text" name="ocupacion" id="ocupacion" size="40"/></td>
                            </tr>
                            <tr>
                              <td height="47" align="right" valign="top">*Email:</td>
                              <td align="right"><input type="text" name="email" id="email" size="40"/></td>
                            </tr>
                            <tr>
                              <td height="47" align="right" valign="top">Tel&eacute;fono:</td>
                              <td align="right"><input type="text" name="celular" id="celular" size="40"/></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" valign="top">Indique la(s) conferencia(s) deseadas:</td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" valign="top">
                              
                      <!--Conferencias-->    
                              <table width="100%">
                              <tr>
                              <td width="33%">Tipo de conferencia:</td>
                              <td width="67%"><label for="tipoconferencia"></label>
                                <select name="tipoconferencia" id="tipoconferencia">
                                  <option value="1">Desempe&ntilde;o empresarial</option>
                                  <option value="2">Tecnolog&iacute;a</option>
                                  <option value="3">Salud</option>
                                  <option value="4">Oportunidad de negocios</option>
                                </select></td>
                              </tr>
                              <tr>
                                <td valign="top">Escriba el(os) nombre(s) de la(s) Conferencia(s):</td>
                                <td><textarea name="conferencias" cols="40" rows="6" id="conferencias"></textarea></td>
                              </tr>
                              </table>
                              <!--Termina conferencias-->
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" valign="top">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" valign="top">
                                
                                
                                Escribe las palabras o n&uacute;meros que aparecen en el recuadro (si son dos palabras, <br />separar con un espacio)<br />
  <?
//1) C�digo para mostrar la imagen del recaptcha
 require_once('../recaptchalib.php');
  $publickey = "6LdSYfESAAAAANiqvHPhc8Gph1RIjGJpZqCDsgek"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
?></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="68" colspan="2"><!--<div align="center">
                  <input type="checkbox" name="tuid_checbock" id="tuid_checbock"  />
                Acepto los <a  href="terminos.php" class="Lkpfl">T&eacute;rminos y Condiciones</a></div>-->                                <div align="center">
                                <input type="submit" name="aceptar" id="aceptar" value=" Aceptar " class="botonfomr" />&nbsp;&nbsp;
                                <input name="borrar" type="reset" value=" Borrar " class="botonfomr" />
                              </div></td>
                            </tr>
                          </table>
     
     <!-- -->
     </td>
     <td>
     <!-- -->
     <a href="http://www.expoferiadelcomercio.com/"><img src="../images/mascota_expoferiacomercio_registro.jpg" /></a>
     <!-- -->
     </td>
     </tr>
     </table>                     
                       
  </form>
                    <!--Termina contenido-->
                  
              

 

</div>


<!--Inicia encabezado3-->
<div id="footer" style="margin-top:320px">

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
