<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");


 $consulta=mysql_query("select * from concurso where status=1");

$vconsulta=mysql_fetch_array($consulta);
$c_nombre=$vconsulta['titulo'];
$c_fechaini=$vconsulta['fechainicial'];
$c_fechafin=$vconsulta['fechafinal'];
$c_bases=$vconsulta['bases'];
$c_premios=$vconsulta['premios'];
$c_com=$vconsulta['comentarios'];


//Dando formato día, fecha y año//
$dia=substr($c_fechaini,8,2);
$mes=substr($c_fechaini,5,2);
$anio=substr($c_fechaini,0,4);
$formfechaini= $dia."-".$mes."-".$anio;

//Dando formato día, fecha y año//
$dia2=substr($c_fechafin,8,2);
$mes2=substr($c_fechafin,5,2);
$anio2=substr($c_fechafin,0,4);
$formfechafin= $dia2."-".$mes2."-".$anio2;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title_concurso ?></title>
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
font-size:17px; color:#e9028c;
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
<b><span class="titulos_azul">Participa en el concurso</span><br /><span class="titulos"><?php echo strtoupper(utf8_decode($c_nombre)) ?></span></b>
     </td>
   </tr>

<tr>
     <td colspan="3" align="center">

     <img src="images/separador.gif" width="520"/>
<br />
     </td>
   </tr>
    <tr>
    <td width="300" rowspan="4" align="center"><img src="images/mascota_color/mascota_concurso.jpg" width="320"/></td>
   </tr>
   
   <tr>
   
    <td width="75" valign="top"><strong>Duraci&oacute;n:</strong></td>
    <td width="335"><strong>Del&nbsp;&nbsp;<?php echo $formfechaini?> &nbsp;a &nbsp;&nbsp;<?php echo $formfechafin?></strong><br></td>
   </tr>
   
     
   <tr>
   
    <td valign="top"><strong>Bases: </strong>&nbsp;&nbsp;</td>
    <td>
    <span class="titulos_azul" style="font-size:15px"><?php echo utf8_decode($c_bases)?></span></td>
   </tr>
<tr>
   
    <td valign="top"><strong>Requisitos: </strong>&nbsp;&nbsp;</td>
    <td valign="top">
   <span class="titulos_azul" style="font-size:15px"> <?php echo utf8_decode($c_premios)?></span>
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