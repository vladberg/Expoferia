<?php 
@include("../includes/etiquetas.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />





<link rel="stylesheet" type="text/css" href="estilos.css" media="all">

<link rel="stylesheet" href="../style_panel.css" type="text/css" />



<title>.:: <?php echo $panel_login?> ::.</title>

<style type="text/css">

<!--

.style1 {	font-family: Arial, Helvetica, sans-serif;

	font-size: 14px;

	color: #666666;

}

.style2 {	font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

	color: #666666;

	font-style: italic;

}

.style3 {color: #666666}

.style5 {color: #333333

}

.style6 {	font-size: 10px;

	font-style: italic;

}

.style7 {color: #CCCCCC}

.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #CCCCCC; }

#centrado { 
margin: 90px auto; 
width: 800px;

}

a.web:link {
	color:#990000;
	text-decoration:none;
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	font-weight:normal;
}


a.web:hover {
	color:#00F;
	text-decoration:none;
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	font-weight:normal;
}
-->

</style>

</head>

<body>
<div id="centrado">
    <table width="870" height="330" cellpadding="0" cellspacing="0" border="0" align="center">

        <tr>

            <td width="860" height="200"><table width="741" border="0">

              <tr valign="baseline">

                <td width="860" height="25"><div align="center">

                    <table width="794" border="0" align="center">

                    	<tr>

                       		<td height="60" colspan="5" align="center">

                            	<font size="4" face="Arial, Helvetica, sans-serif" color="#990000">PANEL DE ADMINISTRACIÓN</font>

                           	</td>

                     	</tr>

                        <tr>

                        	<td colspan="5" height="35" align="center" valign="top">

                            	<font size="2" face="Arial, Helvetica, sans-serif" color="#990000">Uso exclusivo de personal</font>

                         	</td>

                 		</tr>

                        <tr>

                        <td colspan="2">

                        	<table width="860" align="center">

                            	<tr>

                                	<td width="150"></td>

                                    <td><img src="../images/separador.gif" /></td>

                                    <td width="150"></td>

                                </tr>

                            </table>

                        </td>

                        </tr>

                      <tr>

                        <td width="349" height="250" align="center"><img src="../images/expoferia_logo.png"  /></td>

                        <td width="435" height="250">

                        <br />

                        <p align="left" class="style1">

                      
                        <form name="form" method="post" action="comprueba.php">
<table><tr><td>
                        <p align="left" class="style1"><label for="txtUsuario">Usuario:</label>

                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" title="Ingrese su usuario" name="txtUsuario"  size="30"/><br/><br/>

                        <label for="txtcontrasenia">Contraseña:</label>

                        <input type="password" title="Ingrese su contrasenia" name="txtcontrasenia" size="30"/><br/><br/>
</p></td></tr>

<tr><td align="center"> <input type="submit" name="Submit" value="Entrar" /></td></tr>
</table>

      <br />

                        </form>
</p>
                        </td>

                        

                      </tr>
                      <tr>
                        <td height="3" colspan="2" align="center"><img src="../images/separador.gif" /></td>
                      </tr>
                       <tr>
                        <td height="3" colspan="2" align="center"><span style="font-size:18px"><a class="web" href="http://www.expoferiadelcomercio.com/" target="_blank">http://www.expoferiadelcomercio.com/</a></span><span style="font-size:18px"></span>                      </td>
                      </tr>

                    </table>

                </div></td>

              </tr>

          </table></td>

      </tr>

    </table>

 </div>
</body>

</html>

