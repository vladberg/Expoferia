<?php 
@include("../includes/etiquetas.php");
@include("../includes/google_fonts.php");
@include("../includes/cn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:: <?php echo $title_salon_chichen?> ::.</title>
 
<!--<link rel="stylesheet" type="text/css" media="screen" href="css/style_expo.css">-->

<style type="text/css">
ul#continents {
	list-style: none;
	background: url(../images/planos/expo_salon_chichen.jpg) no-repeat 0 0;
	position: relative;
	width: 791px;
	height: 910px;	
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
	opacity: .75;
	filter:alpha(opacity=75);
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
/*Stands*/
#C020 {
	position: absolute;
	width: 23px;
	height: 34px;
	z-index: 3;
	left: 589px;
	top: 816px;
}
#C021 {
	position: absolute;
	width: 23px;
	height: 34px;
	z-index: 3;
	left: 612px;
	top: 816px;
}
#C022 {
	position: absolute;
	width: 23px;
	height: 34px;
	z-index: 3;
	left: 635px;
	top: 816px;
}
#C023 {
	position: absolute;
	width: 23px;
	height: 34px;
	z-index: 3;
	left: 658px;
	top: 816px;
}
#C024 {
	position: absolute;
	width: 23px;
	height: 34px;
	z-index: 3;
	left: 681px;
	top: 816px;
}
#C025 {
	position: absolute;
	width: 23px;
	height: 34px;
	z-index: 3;
	left: 704px;
	top: 816px;
}

#C026 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 647px;
	top: 754px;
}
#C027 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 647px;
	top: 732px;
}

#C028 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 647px;
	top: 710px;
}
#C029 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 647px;
	top: 688px;
}
#C030 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 647px;
	top: 666px;
}
#C031 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 647px;
	top: 644px;
}
#C032 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 647px;
	top: 622px;
}
#C033 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 647px;
	top: 600px;
}
#C034 {
	position: absolute;
	width: 41px;
	height: 47px;
	z-index: 3;
	left: 647px;
	top: 553px;
}

#C035 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 673px;
	top: 531px;
}

#C036 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 642px;
	top: 531px;
}

#C057 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 572px;
	top: 535px;
}
#C038{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 603px;
	top: 535px;
}
#C056 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 572px;
	top: 557px;
}
#C039{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 603px;
	top: 557px;
}
#C055 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 572px;
	top: 579px;
}
#C040{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 603px;
	top: 579px;
}
#C054 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 572px;
	top: 601px;
}
#C041{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 603px;
	top: 602px;
}

#C042{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 603px;
	top: 624px;
}
#C053 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 572px;
	top: 646px;
}
#C043 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left:603px;
	top: 646px;
}
#C052 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 572px;
	top: 668px;
}
#C044 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left:603px;
	top: 668px;
}
#C051 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 572px;
	top: 690px;
}
#C045 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left:603px;
	top: 690px;
}
#C050 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 572px;
	top: 712px;
}
#C046 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left:603px;
	top: 712px;
}

#C079 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 497px;
	top: 536px;
}
#C058{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 528px;
	top: 536px;
}
#C078 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 497px;
	top: 558px;
}
#C059{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 528px;
	top: 558px;
}
#C077 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 497px;
	top: 580px;
}
#C060{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 528px;
	top: 580px;
}
#C076 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 497px;
	top: 602px;
}
#C061{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 528px;
	top:602px;
}
#C075 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 497px;
	top: 624px;
}
#C062{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 528px;
	top:624px;
}
#C074 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 497px;
	top: 646px;
}
#C063{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 528px;
	top:646px;
}
#C074 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 497px;
	top: 646px;
}
#C063{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 528px;
	top:646px;
}
#C073 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 497px;
	top: 668px;
}
#C064{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 528px;
	top:668px;
}
#C072 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 497px;
	top: 690px;
}
#C065{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 528px;
	top:690px;
}
#C071 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 497px;
	top: 713px;
}
#C066{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 528px;
	top:713px;
}

#C099 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 416px;
	top: 536px;
}
#C080{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 447px;
	top: 536px;
}
#C098 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 416px;
	top: 559px;
}
#C081{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 447px;
	top: 559px;
}
#C097 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 416px;
	top: 582px;
}
#C082{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 447px;
	top: 582px;
}
#C096 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 416px;
	top: 605px;
}
#C083{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 447px;
	top: 605px;
}
#C095 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 416px;
	top: 628px;
}
#C083A{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 447px;
	top: 628px;
}
#C094 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 416px;
	top: 651px;
}
#C084{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 447px;
	top: 651px;
}
#C093 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 416px;
	top: 674px;
}
#C085{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 447px;
	top: 674px;
}
#C092 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 416px;
	top: 696px;
}
#C086{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 447px;
	top: 696px;
}
#C091 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 416px;
	top: 716px;
}
#C087{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 447px;
	top: 716px;
}

#C121 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 342px;
	top: 535px;
}
#C100{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 373px;
	top: 535px;
}
#C120 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 342px;
	top: 558px;
}
#C101{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 373px;
	top: 558px;
}
#C119 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 342px;
	top: 580px;
}
#C102{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 373px;
	top: 580px;
}
#C118 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 342px;
	top: 602px;
}
#C103{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 373px;
	top: 602px;
}
#C117 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 342px;
	top: 624px;
}
#C104{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 373px;
	top: 624px;
}

#C116 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 342px;
	top: 646px;
}
#C105{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 373px;
	top: 646px;
}
#C116 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 342px;
	top: 647px;
}
#C105{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 373px;
	top: 647px;
}
#C115 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 342px;
	top: 669px;
}
#C106{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 373px;
	top: 669px;
}
#C114 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 342px;
	top: 691px;
}
#C107{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 373px;
	top: 691px;
}
#C113 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 342px;
	top: 713px;
}
#C108{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 373px;
	top: 713px;
}

#C143 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 265px;
	top: 536px;
}
#C122{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 296px;
	top: 536px;
}
#C142 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 265px;
	top: 559px;
}
#C123{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 296px;
	top: 559px;
}
#C141 {
	position: absolute;
	width: 31px;
	height: 21px;
	z-index: 3;
	left: 265px;
	top: 582px;
}
#C124{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 296px;
	top: 582px;
}
#C140 {
	position: absolute;
	width: 31px;
	height: 24px;
	z-index: 3;
	left: 265px;
	top: 603px;
}
#C125{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 296px;
	top: 604px;
}
#C139 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 265px;
	top: 626px;
}
#C126{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 296px;
	top: 626px;
}
#C138 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 265px;
	top: 649px;
}
#C127{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 296px;
	top: 649px;
}
#C137 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 265px;
	top: 672px;
}
#C128{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 296px;
	top: 672px;
}
#C136 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 265px;
	top: 695px;
}
#C129{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 296px;
	top: 695px;
}
#C135 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 265px;
	top: 717px;
}
#C130{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 296px;
	top: 717px;
}
#C134 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 265px;
	top: 739px;
}
#C131{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 296px;
	top: 739px;
}
#C133 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 265px;
	top: 761px;
}
#C132{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 296px;
	top: 761px;
}

#C163 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 190px;
	top: 536px;
}
#C144{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 220px;
	top: 536px;
}
#C162 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 190px;
	top: 559px;
}
#C145{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 220px;
	top: 559px;
}
#C161 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 190px;
	top: 582px;
}
#C146{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 220px;
	top: 582px;
}
#C160 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 190px;
	top: 605px;
}
#C147{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 220px;
	top: 605px;
}
#C159A {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 190px;
	top: 628px;
}
#C148{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 220px;
	top: 628px;
}
#C159 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 190px;
	top: 651px;
}
#C149{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 220px;
	top: 651px;
}
#C158 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 190px;
	top: 674px;
}
#C150{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 220px;
	top: 674px;
}
#C157 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 190px;
	top: 697px;
}
#C151{
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 220px;
	top: 697px;
}
#C156 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 190px;
	top: 720px;
}
#C152{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 220px;
	top: 720px;
}
#C155A {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 190px;
	top: 742px;
}
#C153{
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 220px;
	top: 742px;
}
#C155 {
	position: absolute;
	width: 31px;
	height: 20px;
	z-index: 3;
	left: 190px;
	top: 764px;
}
#C154{
	position: absolute;
	width: 31px;
	height: 20px;
	z-index: 3;
	left: 220px;
	top: 764px;
}
#C175 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 117px;
	top: 535px;
}
#C164 {
	position: absolute;
	width: 31px;
	height: 23px;
	z-index: 3;
	left: 148px;
	top: 535px;
}
#C165 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 134px;
	top: 559px;
}
#C166 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 134px;
	top: 580px;
}
#C167 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 134px;
	top: 602px;
}
#C168 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 134px;
	top: 624px;
}
#C169 {
	position: absolute;
	width: 41px;
	height: 23px;
	z-index: 3;
	left: 134px;
	top: 646px;
}
#C170 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 134px;
	top: 669px;
}
#C171 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 134px;
	top: 691px;
}
#C172 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 134px;
	top: 713px;
}
#C173 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 134px;
	top: 736px;
}
#C174 {
	position: absolute;
	width: 41px;
	height: 22px;
	z-index: 3;
	left: 134px;
	top: 758px;
}
#A {
	position: absolute;
	width: 59px;
	height: 73px;
	z-index: 3;
	left: 163px;
	top: 429px;
}
#B {
	position: absolute;
	width: 59px;
	height: 73px;
	z-index: 3;
	left: 240px;
	top: 429px;
}
#C {
	position: absolute;
	width: 59px;
	height: 73px;
	z-index: 3;
	left: 317px;
	top: 429px;
}
#D {
	position: absolute;
	width: 59px;
	height: 73px;
	z-index: 3;
	left: 394px;
	top: 429px;
}
#E {
	position: absolute;
	width: 59px;
	height: 73px;
	z-index: 3;
	left: 471px;
	top: 429px;
}
#F {
	position: absolute;
	width: 59px;
	height: 73px;
	z-index: 3;
	left: 548px;
	top: 429px;
}
#G {
	position: absolute;
	width: 59px;
	height: 73px;
	z-index: 3;
	left: 619px;
	top: 429px;
}

#A {
	position: absolute;
	width: 59px;
	height: 73px;
	z-index: 3;
	left: 163px;
	top: 429px;
}
#C6x5 {
	position: absolute;
	width: 33px;
	height: 45px;
	z-index: 3;
	left: 124px;
	top: 315px;
}
#C12x27 {
	position: absolute;
	width: 200px;
	height: 91px;
	z-index: 3;
	left: 194px;
	top: 315px;
}

#C205 {
	position: absolute;
	width: 31px;
	height: 21px;
	z-index: 3;
	left: 419px;
	top: 316px;
}
#C212 {
	position: absolute;
	width: 31px;
	height: 21px;
	z-index: 3;
	left: 451px;
	top: 316px;
}
#C206 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 419px;
	top: 337px;
}
#C211 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 451px;
	top: 337px;
}
#C207 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 419px;
	top: 359px;
}
#C210 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 451px;
	top: 359px;
}
#C208 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 419px;
	top: 381px;
}
#C209 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 451px;
	top: 381px;
}
#C6x12 {
	position: absolute;
	width: 45px;
	height: 89px;
	z-index: 3;
	left: 507px;
	top: 317px;
}

#C213 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 575px;
	top: 315px;
}
#C220 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 605px;
	top: 315px;
}
#C214 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 575px;
	top: 337px;
}
#C219 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 605px;
	top: 337px;
}
#C215 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 574px;
	top: 359px;
}
#C218 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 605px;
	top: 359px;
}
#C216 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 574px;
	top: 381px;
}
#C217 {
	position: absolute;
	width: 31px;
	height: 22px;
	z-index: 3;
	left: 605px;
	top: 381px;
}
#C5x12 {
	position: absolute;
	width: 37px;
	height: 90px;
	z-index: 3;
	left: 660px;
	top: 316px;
}
</style>

</head>

<body>


<ul id="continents">
<div id="C5x12"></div>
<?php 
//if ($i==1){
//Contar los stands que tiene el salón
//Ruta
$ruta="images/empresas/";
$d_url2="panel/login.php";//formulario de alta stand

$reg=mysql_query("select stand from stands where idsalon=1");

while($ve=mysql_fetch_array($reg)){
	$etiqueta=$ve['stand'];

//Consulta para saber si el espacio se encuentra ocupado o disponible
$status=mysql_query("SELECT * FROM stands_empresas inner join stands on stands_empresas.idstand=stands.idstand where stand='$etiqueta' and idsalon=1");
		
$total=mysql_num_rows($status);
	if($total==0){
		//Disponible
		$status_stand="background: rgba(245, 199, 0, 0.7)";
		}else {
		//Ocupado
		//Almacenar id de la empresa para sus datos
		$vstatus=mysql_fetch_array($status);
		$id_empresa=$vstatus['idempresa'];
		$status_stand="background: rgba(233, 2, 140, 0.7)";


//Obtener datos de la empresa que ocupa el espacio
$datos_em=mysql_query("select empresa, descripcion, imagen, direccion, telefono, contacto, url from empresas where idempresa='$id_empresa'");

$vdatos_em=mysql_fetch_array($datos_em);
$d_nombre=$vdatos_em['empresa'];
$d_descripcion=$vdatos_em['descripcion'];
$d_imagen=$vdatos_em['imagen'];
$d_direccion=$vdatos_em['direccion'];
$d_telefono=$vdatos_em['telefono'];
$d_contacto=$vdatos_em['contacto'];
$d_url=$vdatos_em['url'];

$nombre_emp=substr($d_nombre,0,10);
$d_url="info_empresa.php?ide=".$id_empresa."&inf=0&plano=3";
//Termina obtener datos de la empresa....
		
	}//Termina el if
////////
		
//Mostrar resultados		
	
	
	
	
	//Validando para muestra de resultados
	if($total==0){
	/*$mostrarI.='
<li id="'.$etiqueta.'" style="'.$status_stand.'">
<a href="'.$d_url2.'" target="_blank"><span style="color:#fff">
<strong>Registrar empresa</strong></a>

</span></li>
 ';*/
	
	$mostrarI.='
<li id="'.$etiqueta.'" style="'.$status_stand.'">
<span style="color:#fff">
<strong></strong>

</span></li>
 ';
	
	}else{
	
	$mostrarI.='
<li id="'.$etiqueta.'" style="'.$status_stand.'">
<div style="font-size:6px; margin-left:6px;text-transform:uppercase; margin-top:5px">'.utf8_encode($nombre_emp).'</div>
<a href="'.$d_url.'" target="_self">
<span>
<strong><img src="'.$ruta.$d_imagen.'" width="80"><br>
'.$etiqueta.' - '.$d_nombre.'<br></strong> 
</span></a>

</li>
 ';
	
	}
	//////////
	
	
	
	
	
	
}//Termina el while
//}//Termina el if



  echo $mostrarI;  

?>



</ul>
<div id="apDiv1"><img src="../images/expoferia_logo.png" /></div>
<div id="apDiv2">
  <div id="apDiv3" style="background-color:rgba(245, 199, 0, 0.7)"></div>
   <div id="apDiv4"><span style="font-size:12px; font-family:Arial, Helvetica, sans-serif">Disponible</span></center></div>
   
   
   
  <div id="apDiv5" style="background-color:rgba(233, 2, 140, 0.7)"></div>
   <div id="apDiv6"><span style="font-size:12px; font-family:Arial, Helvetica, sans-serif">Ocupado</span></center></div>
</div><br />
<center>


<img src="images/separador.gif" />

<br /><br />
<input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/></center>
</body>
</html>