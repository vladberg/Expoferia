<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Vota por Yucatán ::.</title>
 <!--Palabras tag-->
<?php @include("includes/palabrastag.php");?>
<style>
body {
	background:#fff;
	border:0;
	/*font:14px Arial, Helvetica, sans-serif;*/
	font-family:"Open Sans Condensed";
	color:#3c4046;
	line-height:20px;
	font-size:12px;
	
}

/*Para encabezados y textos resaltados*/
.titulos{
font-family:"Cuprum";
font-size:18px; color:#ff1909;
font-weight:normal;
}
.titulos_azul{
font-family:"Cuprum";
font-size:17px;color:#088ec6;
font-weight:normal;	
}

/*Para links del sitio*/
a.ligas2{
	color:#088ec6;
	font-size:17px;
	text-decoration:none;
}

a.ligas2:hover{
	color:#e9028c;
}

/*Para listas*/
ul.lista ul{
	list-style-type: square;
	
}

ul.lista li{
	list-style-type: square;
text-align:justify;
margin-left:20px;
}
</style>
</head>

<body>
<div style="height:2px"></div>
<table width="750" cellspacing="8" align="center"><tr>
     <td colspan="3" align="center">
<b><span class="titulos">Vota por Yucatán y participa para ganar un Viaje redondo México-Londres-México‏</span></b>
     </td>
   </tr>

<tr>
     <td colspan="3" align="center">

     <img src="images/separador.gif" width="520"/>
<br />
     </td>
   </tr>
    <tr>
    <td width="320" rowspan="2" align="center"><img src="images/vota.jpg" width="320"/></td>
   </tr>
   
  <tr>
   
    <td width="16" valign="top">&nbsp;</td>
    <td width="374" valign="top"><center>
    <span class="titulos_azul">Yucatán está nominado en 4 categorías <br />
    en los Food & Travel awards!!!</span>
    </center> 
    <br />
    <span style="font-size:1em; font-family:Cuprum">
    <center>Las categorías son: </center>
    </span><ul>
<li><span style="font-size:1em; font-family:Cuprum">Mejor destino turístico de México</span></li> 
<li><span style="font-size:1em; font-family:Cuprum">Mejor destino gourmet de México</span></li>
<li><span style="font-size:1em; font-family:Cuprum">Mejor Hotel urbano en el interior de la República (Rosas & Chocolate) </span></li>
<li><span style="font-size:1em; font-family:Cuprum">Mejor hotel ecológico en México (Hotel Xixim de Celestún). </span></li>
</ul><span style="font-size:1em; font-family:Cuprum">

<center>

Vota por Yucatán en sus 4 categorías en <a class="ligas2" href="http://www.foodandtravel.mx/awards" target="_blank">http://www.foodandtravel.mx/award</a> <br />
y con tu registro participa para ganar un Viaje redondo México-Londres-México para dos personas. <br /><br />
Suerte! <br />
(Leer las bases en el sitio web)
<br /><br />
Tenemos para votar hasta el 30 octubre de 2015.
</center>
</span>
    </td>
  </tr>     
   
     <tr>
     <td colspan="3" align="center">

     <img src="images/separador.gif" width="520"/>
<br />
     </td>
   </tr>
     </table>
<center>


<input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/></center>

</body>
</html>