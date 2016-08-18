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
		  changeYear: true,/*Habilitar cambio de año para selección*/
      changeMonth: true, /*Habilitar campo de mes para selección*/
      yearRange: '-80:+0',/*Rango de años a listarse*/
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
				apellidos			:	{required	: true,minlength: 3} ,
				email			:	{required	: true,email:true	},
				colonia			:	{required	: true,minlength: 3} ,
				datepicker			:	{required	: true} ,
				password			:	{required	: true},
				},
				
				messages:{
				nombres				:"<br>Ingrese su nombre" ,
				apellidos			:"<br>Ingrese su apellido paterno" ,
				email				:"<br>Ingrese un e-mail v&aacute;lido",
				colonia				:"<br>Ingrese la colonia",
				datepicker				:"<br>Ingrese su fecha de nacimiento",
				password				:"<br>Ingrese una clave",
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
</head>
<body>
<div id="encabezado"><center><a href="http://www.expoferiadelcomercio.com/"><img src="../images/expoferia_logo.png" /></a><br /><br /><img src="../images/separador.gif" /></center>
     </div>


<div class="cuerpo">

<br /><br /><br /><br /><br /><br /><br /><br />
  <table width="729" align="center"><tr>
    <td width="486">
  Bienvenidos a la Expoferia del Comercio &iexcl;prerreg&iacute;strate y participa en las trivias!
  
  </td>
  </tr></table>
  <br />
<!-- Contenido-->
  <form action="../includes/prerregistro2.php" method="post" enctype="multipart/form-data" name="fvalida" id="fvalida">
     <table align="center"><tr>
     <td>
     <!-- -->
     <table width="500" border="0" align="center" style="font-size:12px">
                            <tr>
                                 <td colspan="2"  align="left"><h3 style="font-size:18px">PRE REGISTRO</h3>
                              Llene el siguiente formulario<br /></td>
                            </tr>
                            <tr>
                              <td  align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
            </tr>
                            <tr>
                              <td width="173"  align="right">*Nombre(s):</td>
                              <td width="380" align="right"><input type="text" name="nombres" id="nombres"  size="40" /></td>
                            </tr>
                            <tr>
                              <td align="right">*Apellido(s):</td>
                              <td align="right"><input type="text" name="apellidos" id="apellidos" size="40"/></td>
                            </tr>
                            
                            
                            
                            <tr>
                              <td height="47" align="right" valign="top">Pa&iacute;s:</td>
                              <td align="right">
                               <?php 
				//Consulta para obtener los estados
				@include('../includes/cn_l.php');
				$lpais=mysql_query("select pais from paises where status=1 and pais <>'MEXICO'");
				?>
                              <select name="pais" id="pais">';
				
				<?               
			 while($vlpais=mysql_fetch_array($lpais)){
						
			?>
              <option  value="<?php echo $vlpais['pais']; ?>" ><?php echo $vlpais['pais']; ?></option>
              
									<?
					
					
					}
				
					?>
                    <option  value="MEXICO" selected="selected">MEXICO</option>
                    </select></td>
                            </tr>
                            <tr>
                              <td height="47" align="right" valign="top">Estado:</td>
                              <td align="right">
                              <input type="hidden" size="35" name="estado" id="estado"  />
                    
                    <?php 
				//Consulta para obtener los estados
				@include('../includes/cn_l.php');
				$lestado=mysql_query("select estado from estados where status=1 and estado <>'YUCATAN'");
				?>
				<select name="estado" id="estado">';
				
				<?               
			 while($vlestado=mysql_fetch_array($lestado)){
						
			?>
              <option  value="<?php echo $vlestado['estado']; ?>" ><?php echo $vlestado['estado']; ?></option>
              
									<?
					
					
					}
				
					?>
                    <option  value="YUCATAN" selected="selected">YUCATAN</option>
                    </select>
                              
                              </td>
                            </tr>
                            <tr>
                              <td height="47" align="right" valign="top">Ciudad:</td>
                              <td align="right"><input type="text" name="ciudad" id="ciudad" size="40"/></td>
                            </tr>
                            <tr>
                              <td align="right">*Colonia:</td>
                              <td align="right"><input type="text" name="colonia" id="colonia" size="40"/></td>
                            </tr>
                            
                            <tr>
                              <td height="47" align="right" valign="top">*Email:</td>
                              <td align="right"><input type="text" name="email" id="email" size="40"/></td>
                            </tr>
                            <tr>
                              <td height="47" align="right" valign="top">Celular:</td>
                              <td align="right"><input type="text" name="celular" id="celular" size="40"/></td>
                            </tr>
                            <tr>
                              <td height="47" align="right" valign="top">*Fecha Nacimiento:</td>
                              <td align="right">
                              <input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12"   title="Soy"/>**
                              
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" valign="top"><input type="checkbox" name="recibirpromo" id="recibirpromo" />
                              <label for="recibirpromo"><span style="font-size:11px; color:#00F">Me gustar&iacute;a recibir ofertas y promociones de la Expoferia del Comercio</span></label></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" valign="top">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center" valign="top">
                                
                                
                                Escribe las palabras o n&uacute;meros que aparecen en el recuadro (si son dos palabras, <br />separar con un espacio)<br />
  <?
//1) Código para mostrar la imagen del recaptcha
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
                              <td colspan="2" align="center" valign="top">
                                <span style="font-size:10px; color:#000">**Para campo Fecha:</span><br />
  <span style="font-size:10px; color:#0000FF">
    - Clic sobre la caja de texto para desplegar calendario<br />
    - Seleccione primero el mes, luego el a&ntilde;o ypor &uacute;ltimo el d&iacute;a deseados<br />
    - Clic en los botones en el t&iacute;tulo del mes para retroceder o avanzar los meses</span>                              </td>
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
