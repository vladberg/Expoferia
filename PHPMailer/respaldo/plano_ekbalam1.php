<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:: <?php echo $title_salon_ek?> ::.</title>
 
<!--<link rel="stylesheet" type="text/css" media="screen" href="css/style_expo.css">-->

<style type="text/css">
ul#continents {
	list-style: none;
	background: url(images/planos/plano_ekbalam.jpg) no-repeat 0 0;
	position: relative;
	width: 710px;
	height: 560px;	
	margin: auto;
	padding: 0;
}

ul#continents li {
	position: absolute;
}

ul#continents li a{
	display: block;
	height: 100%;
	text-decoration: none;
	text-align:center;
}
/*Stands*/
#EK1 {
	position: absolute;
	width: 91px;
	height: 58px;
	/*z-index: 1;*/
	left: 571px;
	top: 88px;
}

	#EK2{
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index:1;*/
	left: 614px;
	top: 147px;
}

	#EK3 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 614px;
	top: 208px;
}

	#EK4 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index:1;*/
	left: 614px;
	top: 268px;
}

	#EK5 {
	position: absolute;
	width: 48px;
	height: 54px;
	/*z-index: 1;*/
	left: 614px;
	top: 329px;
}

	#EK6 {
	position: absolute;
	width: 48px;
	height: 68px;
	/*z-index: 1;*/
	left: 614px;
	top: 384px;
}

#EK7 {
	position: absolute;
	width: 92px;
	height: 59px;
	/*z-index: 1;*/
	left: 570px;
	top: 452px;
}


#EK8 {
	position: absolute;
	width: 61px;
	height: 52px;
	/*z-index: 1;*/
	left: 509px;
	top: 459px;
}

#EK9 {
	position: absolute;
	width: 61px;
	height: 52px;
	/*	z-index: 1;*/
	left: 449px;
	top: 459px;
}

#EK10 {
	position: absolute;
	width: 62px;
	height: 52px;
	/*	z-index: 1;*/
	left: 388px;
	top: 459px;
}

#EK11 {
	position: absolute;
	width: 62px;
	height: 52px;
	/*	z-index: 1;*/
	left: 326px;
	top: 459px;
}
#EK12 {
	position: absolute;
	width: 61px;
	height: 52px;
	/*z-index: 1;*/
	left: 266px;
	top: 459px;
}
#EK13 {
	position: absolute;
	width: 61px;
	height: 52px;
	/*z-index: 1;*/
	left: 205px;
	top: 459px;
}

#EK14 {
	position: absolute;
	width: 58px;
	height: 89px;
	/*	z-index: 1;*/
	left: 147px;
	top: 422px;
}

#EK15 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 146px;
	top: 361px;
}

#EK16 {
	position: absolute;
	width: 48px;
	height: 64px;
	/*z-index: 1;*/
	left: 146px;
	top: 299px;
}

#EK17 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 146px;
	top: 239px;
}

#EK18 {
	position: absolute;
	width: 48px;
	height: 62px;
	/*z-index: 1;*/
	left: 146px;
	top: 176px;
}

#EK19 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 219px;
	top: 179px;
}

#EK26 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 267px;
	top: 179px;
}
#EK20 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 219px;
	top: 241px;
}

#EK25 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 267px;
	top: 240px;
}
#EK21 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 219px;
	top: 302px;
}

#EK24 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 267px;
	top: 301px;
}
#EK22 {
	position: absolute;
	width: 48px;
	height: 62px;
	/*z-index: 1;*/
	left: 219px;
	top: 362px;
}

#EK23 {
	position: absolute;
	width: 48px;
	height: 62px;
	/*z-index: 1;*/
	left: 267px;
	top: 362px;
}

#EK27 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 354px;
	top: 179px;
}

#EK34 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 404px;
	top: 179px;
}
#EK28 {
	position: absolute;
	width: 48px;
	height: 62px;
	/*z-index: 1;*/
	left: 354px;
	top: 240px;
}

#EK33 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 404px;
	top: 240px;
}
#EK29 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 354px;
	top: 302px;
}

#EK32 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 404px;
	top: 301px;
}
#EK30 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 354px;
	top: 362px;
}

#EK31 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 404px;
	top: 362px;
}

#EK35 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 475px;
	top: 179px;
}

#EK42 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 524px;
	top: 179px;
}

#EK36 {
	position: absolute;
	width: 48px;
	height: 62px;
	/*z-index: 1;*/
	left: 475px;
	top: 240px;
}

#EK41 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 524px;
	top: 239px;
}
#EK37 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 475px;
	top: 301px;
}

#EK40 {
	position: absolute;
	width: 48px;
	height: 60px;
	/*z-index: 1;*/
	left: 524px;
	top: 300px;
}

#EK38 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 475px;
	top: 361px;
}

#EK39 {
	position: absolute;
	width: 48px;
	height: 61px;
	/*z-index: 1;*/
	left: 524px;
	top: 361px;
}


ul#continents li a span {
	display: none;
	z-index: 5;
}

ul#continents li a:hover span {
	display: block;
	z-index: 5;
}

ul#continents li a:hover span {
	display: block;
	padding: 5px;
	width: 150px;
	background: #000;
	position: relative;
	top: 50%;
	font: 11px Arial, Helvetica, sans-serif;
	/*opacity: .75;
	filter:alpha(opacity=75);*/
	color: #FFF;
	z-index: 5;
	
}

ul#continents li a:hover span strong {
	display: block;
	margin-bottom: 2px;
	font-size: 12px;
	text-decoration: none;
	z-index: 5;
}






#apDiv1 {
	position: absolute;
	width: 159px;
	height: 103px;
	z-index: 1;
	left: 40px;
	top: 8px;
}
#apDiv2 {
	position: absolute;
	width: 363px;
	height: 28px;
	z-index: 2;
	left: 57px;
}
#apDiv3 {
	position: absolute;
	width: 21px;
	height:19px;
	z-index: 1;
}
#apDiv4 {
	position: absolute;
	width: 98px;
	height: 19px;
	z-index: 1;
	left: 28px;
	top: 1px;
}

#apDiv5 {
	position: absolute;
	width: 21px;
	height: 19px;
	z-index: 1;
	left: 149px;
}
#apDiv6 {
	position: absolute;
	width: 98px;
	height: 19px;
	z-index: 1;
	left: 178px;
	top: 1px;
}
</style>
</head>

<body>

<form>
<center>
<img src="images/planos/expoferia-2015-salon-ekbalam.jpg" />
<br />
<br><img src="images/separador.gif" width="150px"><br><br />
 <input type="button" name="imprimir" value="Imprimir" onClick="window.print();">&nbsp;&nbsp;&nbsp;
<input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/>
</center>
</form>
</body>
</html>