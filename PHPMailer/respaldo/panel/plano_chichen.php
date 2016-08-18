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
	background: url(../images/planos/plano_chichen.jpg) no-repeat 0 0;
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
	width: 75px;
	height: 57px;
	z-index: 1;
	left: 230px;
	top: 276px;
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
	border-color:#FF9900;
   border-width: 1px;
   border-style: solid;
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

#C025 {
	position: absolute;
	width: 22px;
	height: 34px;
	/*z-index: 3;*/
	left: 712px;
	top: 803px;
}

#C026 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 669px;
	top: 758px;
}
#C027 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 669px;
	top: 736px;
}

#C028 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 669px;
	top: 714px;
}
#C029 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 669px;
	top: 692px;
}
#C030 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 669px;
	top: 670px;
}
#C031 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 669px;
	top: 645px;
}
#C032 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 669px;
	top: 624px;
}
#C033 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 669px;
	top: 601px;
}
#C034 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 669px;
	top: 579px;
}

#C035 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 669px;
	top: 557px;
}

#C036 {
	position: absolute;
	width: 26px;
	height: 27px;
	/*z-index: 3;*/
	left: 669px;
	top: 530px;
}

#C057 {
	position: absolute;
	width: 22px;
	height: 23px;
	/*z-index: 3;*/
	left: 570px;
	top: 528px;
}
#C038{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 592px;
	top: 528px;
}
#C056 {
	position: absolute;
	width: 22px;
	height: 23px;
	/*z-index: 3;*/
	left: 570px;
	top: 551px;
}
#C039{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 592px;
	top: 551px;
}
#C055 {
	position: absolute;
	width: 22px;
	height: 23px;
	/*z-index: 3;*/
	left: 570px;
	top: 574px;
}
#C040{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 592px;
	top: 574px;
}
#C054 {
	position: absolute;
	width: 22px;
	height: 23px;
	/*z-index: 3;*/
	left: 570px;
	top: 597px;
}
#C041{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 592px;
	top: 597px;
}

#C042{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 592px;
	top: 620px;
}
#C053 {
	position: absolute;
	width: 22px;
	height: 23px;
	/*z-index: 3;*/
	left: 570px;
	top: 643px;
}
#C043{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 592px;
	top: 643px;
}
#C052 {
	position: absolute;
	width: 22px;
	height: 23px;
	/*z-index: 3;*/
	left: 570px;
	top: 666px;
}
#C044{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 592px;
	top: 666px;
}
#C051 {
	position: absolute;
	width: 22px;
	height: 23px;
	/*z-index: 3;*/
	left: 570px;
	top: 689px;
}
#C045{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 592px;
	top: 689px;
}
#C050 {
	position: absolute;
	width: 22px;
	height: 23px;
	/*z-index: 3;*/
	left: 570px;
	top: 712px;
}
#C046{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 592px;
	top: 712px;
}

#C079 {
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 499px;
	top: 526px;
}
#C058{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 525px;
	top: 526px;
}
#C078 {
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 499px;
	top: 549px;
}
#C059{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 525px;
	top: 550px;
}
#C077{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 499px;
	top: 572px;
}
#C060{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 525px;
	top: 573px;
}

#C076{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 499px;
	top: 596px;
}
#C061{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 525px;
	top: 596px;
}
#C075{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 499px;
	top: 618px;
}
#C062{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 525px;
	top: 620px;
}
#C074{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 499px;
	top: 641px;
}
#C063{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 525px;
	top: 642px;
}
#C073{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 499px;
	top: 664px;
}
#C064{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 525px;
	top: 665px;
}
#C072{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 499px;
	top: 687px;
}
#C065{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 525px;
	top: 688px;
}

#C071{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 499px;
	top: 710px;
}
#C066{
	position: absolute;
	width: 25px;
	height: 23px;
	/*z-index: 3;*/
	left: 525px;
	top: 710px;
}

#C099 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 410px;
	top: 527px;
}
#C080{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 437px;
	top: 527px;
}
#C098 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 410px;
	top: 550px;
}
#C081{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 437px;
	top: 551px;
}
#C097 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 410px;
	top: 573px;
}
#C082{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 437px;
	top: 574px;
}
#C096 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 410px;
	top: 597px;
}
#C083{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 437px;
	top: 597px;
}
#C095 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 410px;
	top: 620px;
}
#C083A{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 437px;
	top: 620px;
}
#C094 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 410px;
	top: 643px;
}
#C084{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 437px;
	top: 643px;
}
#C093 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 410px;
	top: 666px;
}
#C085{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 437px;
	top: 666px;
}
#C092 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 410px;
	top: 689px;
}
#C086{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 437px;
	top: 689px;
}
#C091 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 410px;
	top: 712px;
}
#C087{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 437px;
	top: 712px;
}

#C121 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 343px;
	top: 527px;
}
#C100{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 370px;
	top: 527px;
}
#C120 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 343px;
	top: 550px;
}
#C101{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 370px;
	top: 551px;
}
#C119 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 343px;
	top: 573px;
}
#C102{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 370px;
	top: 574px;
}
#C118 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 343px;
	top: 596px;
}
#C103{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 370px;
	top: 597px;
}
#C117 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 343px;
	top: 619px;
}
#C104{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 370px;
	top: 620px;
}


#C116 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 343px;
	top: 642px;
}
#C105{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 370px;
	top: 643px;
}

#C115 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 343px;
	top: 665px;
}
#C106{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 370px;
	top: 666px;
}
#C114 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 343px;
	top: 688px;
}
#C107{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 370px;
	top: 689px;
}
#C113 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 343px;
	top: 711px;
}
#C108{
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 370px;
	top: 712px;
}

#C143 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 527px;
}
#C122{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 527px;
}
#C142 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 550px;
}
#C123{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 550px;
}
#C141 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 573px;
}
#C124{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 573px;
}
#C140 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 596px;
}
#C125{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 596px;
}

#C139 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 619px;
}
#C126{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 619px;
}
#C138 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 642px;
}
#C127{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 642px;
}
#C137 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 665px;
}
#C128{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 665px;
}
#C136 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 688px;
}
#C129{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 688px;
}
#C135 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 711px;
}
#C130{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 711px;
}
#C134 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 734px;
}
#C131{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 734px;
}
#C133 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 264px;
	top: 757px;
}
#C132{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 291px;
	top: 757px;
}

#C163 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top: 528px;
}
#C144{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 528px;
}
#C162 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top: 551px;
}
#C145{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 552px;
}
#C161 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top: 574px;
}
#C146{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 575px;
}
#C160 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top: 597px;
}
#C147{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 597px;
}
#C159A {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top: 620px;
}
#C148{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 620px;
}
#C159 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top: 643px;
}
#C149{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 643px;
}
#C158 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top: 666px;
}
#C150{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 666px;
}
#C157 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top:689px;
}
#C151{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 689px;
}
#C156 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top:712px;
}
#C152{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 712px;
}
#C155A {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top:735px;
}
#C153{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 735px;
}
#C155 {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 188px;
	top:758px;
}
#C154{
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 214px;
	top: 758px;
}
#C175 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 120px;
	top: 524px;
}
#C164 {
	position: absolute;
	width: 26px;
	height: 22px;
	/*z-index: 3;*/
	left: 145px;
	top: 524px;
}
#C165 {
	position: absolute;
	width: 40px;
	height: 23px;
	/*z-index: 3;*/
	left: 130px;
	top: 547px;
}
#C166 {
	position: absolute;
	width: 40px;
	height: 23px;
	/*z-index: 3;*/
	left: 130px;
	top: 570px;
}
#C167 {
	position: absolute;
	width: 40px;
	height: 23px;
	/*z-index: 3;*/
	left: 130px;
	top: 593px;
}
#C168 {
	position: absolute;
	width: 40px;
	height: 23px;
	/*z-index: 3;*/
	left: 130px;
	top: 616px;
}
#C169 {
	position: absolute;
	width: 40px;
	height: 23px;
	/*z-index: 3;*/
	left: 130px;
	top: 639px;
}
#C170 {
	position: absolute;
	width: 40px;
	height: 23px;
	/*z-index: 3;*/
	left: 130px;
	top: 662px;
}
#C171 {
	position: absolute;
	width: 40px;
	height: 23px;
	/*z-index: 3;*/
	left: 130px;
	top: 685px;
}
#C172 {
	position: absolute;
	width: 40px;
	height: 23px;
	/*z-index: 3;*/
	left: 130px;
	top: 708px;
}
#C173 {
	position: absolute;
	width: 40px;
	height: 23px;
	/*z-index: 3;*/
	left: 130px;
	top: 731px;
}
#C174 {
	position: absolute;
	width: 40px;
	height: 23px;
	/*z-index: 3;*/
	left: 130px;
	top: 754px;
}
/*#A {
	position: absolute;
	width: 59px;
	height: 73px;
	z-index: 3;
	left: 163px;
	top: 428px;
}*/
#B {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 238px;
	top: 425px;
}

#B1 {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 238px;
	top: 464px;
}
#C {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 315px;
	top: 425px;
}

#C1 {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 315px;
	top: 464px;
}
#D {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 392px;
	top: 425px;
}

#D1 {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 392px;
	top: 464px;
}
#E {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 470px;
	top: 425px;
}

#E1 {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 470px;
	top: 464px;
}
#F {
	position: absolute;
	width: 58px;
	height: 75px;
	/*z-index: 3;*/
	left: 548px;
	top: 426px;
}
#G {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 624px;
	top: 425px;
}

#G1 {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 624px;
	top: 464px;
}
#A {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 161px;
	top: 425px;
}

#A1 {
	position: absolute;
	width: 58px;
	height: 37.5px;
	/*z-index: 3;*/
	left: 161px;
	top: 464px;
}


#C5x8 {
	position: absolute;
	width: 45px;
	height: 56px;
	/*z-index: 3;*/
	left: 369px;
	top: 340px;
}
#C12x20 {
	position: absolute;
	width: 144px;
	height: 114px;
	/*z-index: 3;*/
	left: 200px;
	top: 291px;
}

#C205 {
	position: absolute;
	width: 31px;
	height: 21px;
	/*z-index: 3;*/
	left: 424px;
	top: 288px;
}
#C212 {
	position: absolute;
	width: 31px;
	height: 21px;
	/*z-index: 3;*/
	left: 456px;
	top: 288px;
}
#C206 {
	position: absolute;
	width: 31px;
	height: 22px;
	/*z-index: 3;*/
	left: 424px;
	top: 309px;
}
#C211 {
	position: absolute;
	width: 31px;
	height: 22px;
	/*z-index: 3;*/
	left: 456px;
	top: 309px;
}


#C213 {
	position: absolute;
	width: 24px;
	height: 26px;
	/*z-index: 3;*/
	left: 523px;
	top: 282px;
}
#C220 {
	position: absolute;
	width: 24px;
	height: 26px;
	/*z-index: 3;*/
	left: 546px;
	top: 282px;
}
#C214 {
	position: absolute;
	width: 24px;
	height: 26px;
	/*z-index: 3;*/
	left: 523px;
	top: 309px;
}
#C219 {
	position: absolute;
	width: 24px;
	height: 26px;
	/*z-index: 3;*/
	left: 546px;
	top: 309px;
}

#C215 {
	position: absolute;
	width: 24px;
	height: 26px;
	/*z-index: 3;*/
	left: 523px;
	top: 336px;
}
#C218 {
	position: absolute;
	width: 24px;
	height: 26px;
	/*z-index: 3;*/
	left: 546px;
	top: 335px;
}
#C216 {
	position: absolute;
	width: 24px;
	height: 26px;
	/*z-index: 3;*/
	left: 523px;
	top: 362px;
}
#C217 {
	position: absolute;
	width: 24px;
	height: 26px;
	/*z-index: 3;*/
	left: 546px;
	top: 362px;
}
#C5x12 {
	position: absolute;
	width: 38px;
	height: 77px;
	/*z-index: 3;*/
	left: 661px;
	top: 312px;
}
#C1V {
	position: absolute;
	width: 26px;
	height: 23px;
	/*z-index: 3;*/
	left: 114px;
	top: 793px;
}
#C3V {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 130px;
	top: 835px;
}

#C2V {
	position: absolute;
	width: 26px;
	height: 21px;
	/*z-index: 3;*/
	left: 114px;
	top: 814px;
}

#C4V {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 153px;
	top: 835px;
}
#C5V {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 175px;
	top: 835px;
}

#C6V {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 210px;
	top: 835px;
}

#C7V {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 232px;
	top: 835px;
}

#C8V {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 255px;
	top: 835px;
}

#C9V {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 277px;
	top: 835px;
}

#C10V {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 299px;
	top: 835px;
}

#C11V {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 321px;
	top: 835px;
}

#C12V {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 343px;
	top: 835px;
}


#C13V {
	position: absolute;
	width: 26px;
	height: 21px;
	/*z-index: 3;*/
	left: 356px;
	top: 815px;
}

#C14V {
	position: absolute;
	width: 26px;
	height: 21px;
	/*z-index: 3;*/
	left: 356px;
	top: 793px;
}

#C15V {
	position: absolute;
	width: 26px;
	height: 21px;
	/*z-index: 3;*/
	left: 356px;
	top: 770px;
}

#C205 {
	position: absolute;
	width: 26px;
	height: 25px;
	/*z-index: 3;*/
	left: 365px;
	top: 287px;
}

#C206 {
	position: absolute;
	width: 26px;
	height: 25px;
	/*z-index: 3;*/
	left: 365px;
	top: 313px;
}

#C211 {
	position: absolute;
	width: 26px;
	height: 25px;
	/*z-index: 3;*/
	left: 391px;
	top: 287px;
}

#C212 {
	position: absolute;
	width: 26px;
	height: 25px;
	/*z-index: 3;*/
	left: 391px;
	top: 313px;
}

#C207A {
	position: absolute;
	width: 26px;
	height: 25px;
	/*z-index: 3;*/
	left: 432px;
	top: 343px;
}

#C210A {
	position: absolute;
	width: 26px;
	height: 25px;
	/*z-index: 3;*/
	left: 458px;
	top: 343px;
}

#C208A {
	position: absolute;
	width: 26px;
	height: 25px;
	/*z-index: 3;*/
	left: 432px;
	top: 368px;
}

#C209A {
	position: absolute;
	width: 26px;
	height: 25px;
	/*z-index: 3;*/
	left: 458px;
	top: 368px;
}

#C221 {
	position: absolute;
	width: 24px;
	height: 27px;
	/*z-index: 3;*/
	left: 592px;
	top: 277px;
}
#C228 {
	position: absolute;
	width: 24px;
	height: 27px;
	/*z-index: 3;*/
	left: 615px;
	top: 277px;
}
#C222 {
	position: absolute;
	width: 24px;
	height: 27px;
	/*z-index: 3;*/
	left: 592px;
	top: 305px;
}
#C227 {
	position: absolute;
	width: 24px;
	height: 27px;
	/*z-index: 3;*/
	left: 615px;
	top: 305px;
}
#C223 {
	position: absolute;
	width: 24px;
	height: 27px;
	/*z-index: 3;*/
	left: 592px;
	top: 333px;
}
#C226 {
	position: absolute;
	width: 24px;
	height: 27px;
	/*z-index: 3;*/
	left: 615px;
	top: 333px;
}
#C224 {
	position: absolute;
	width: 24px;
	height: 27px;
	/*z-index: 3;*/
	left: 592px;
	top: 360px;
}
#C225 {
	position: absolute;
	width: 24px;
	height: 27px;
	/*z-index: 3;*/
	left: 615px;
	top: 360px;
}
#CVD1 {
	position: absolute;
	width: 45px;
	height: 29px;
	/*z-index: 3;*/
	left: 112px;
	top: 377px;
}

#CVD2 {
	position: absolute;
	width: 32px;
	height: 29px;
	/*z-index: 3;*/
	left: 125px;
	top: 344px;
}

#CVD3 {
	position: absolute;
	width: 32px;
	height: 52px;
	/*z-index: 3;*/
	left: 125px;
	top: 289px;
}

#CVD4 {
	position: absolute;
	width: 23px;
	height: 29px;
	/*z-index: 3;*/
	left: 116px;
	top: 235px;
}
#CVD5 {
	position: absolute;
	width: 35px;
	height: 17px;
	/*z-index: 3;*/
	left: 136px;
	top: 267px;
}
#CVD6 {
	position: absolute;
	width: 64px;
	height: 14px;
	/*z-index: 3;*/
	left: 116px;
	top: 194px;
}
#CVD7 {
	position: absolute;
	width: 34px;
	height: 14px;
	/*z-index: 3;*/
	left: 180px;
	top: 194px;
}
#CVD8 {
	position: absolute;
	width: 34px;
	height: 14px;
	/*z-index: 3;*/
	left: 214px;
	top: 194px;
}

#CVD9 {
	position: absolute;
	width: 32px;
	height: 19px;
	/*z-index: 3;*/
	left: 266px;
	top: 201px;
}
#CVD10 {
	position: absolute;
	width: 23px;
	height: 19px;
	/*z-index: 3;*/
	left: 302px;
	top: 201px;
}
#CVD11 {
	position: absolute;
	width: 21px;
	height: 19px;
	/*z-index: 3;*/
	left: 329px;
	top: 201px;
}
#CVD12 {
	position: absolute;
	width: 20px;
	height: 19px;
	/*z-index: 3;*/
	left: 353px;
	top: 201px;
}

#CVD13 {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 203px;
	top: 259px;
}

#CVD14 {
	position: absolute;
	width: 20px;
	height: 19px;
	/*z-index: 3;*/
	left: 237px;
	top: 258px;
}

#CVD15 {
	position: absolute;
	width: 20px;
	height: 19px;
	/*z-index: 3;*/
	left: 270px;
	top: 257px;
}
#CVD16 {
	position: absolute;
	width: 22px;
	height: 16px;
	/*z-index: 3;*/
	left: 337px;
	top: 258px;
}
#apDiv7 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
}
</style>
 
</head>

<body>

<form>

<ul id="continents">

<div id="CVD16"></div>

<?php 
//if ($i==1){
//Contar los stands que tiene el salón
//Ruta
$ruta="../images/empresas/";

$reg=mysql_query("select * from stands where idsalon=1 and status=1");

while($ve=mysql_fetch_array($reg)){
	$etiqueta=$ve['stand'];
	$id_st=$ve['idstand'];
	$d_url2="asignar_stands.php?ids=".$etiqueta."&idsal=1&is=".$id_st;//formulario de alta stand
	
//Consulta para saber si el espacio se encuentra ocupado o disponible
//Consulta para saber si el espacio se encuentra ocupado o disponible
$status=mysql_query("SELECT * FROM stands_empresas inner join stands on stands_empresas.idstand=stands.idstand where stand='$etiqueta' and idsalon=1");
		
$total=mysql_num_rows($status);
	if($total==0){
		//Disponible
		$status_stand="background: rgba(245, 199, 0, 1.0); border-color:#FF9900;
   border-width: 1px;
   border-style: solid;	font-family: 'Open Sans Condensed'";
		}else {
		//Ocupado
		//Almacenar id de la empresa para sus datos
		$vstatus=mysql_fetch_array($status);
		$id_empresa=$vstatus['idempresa'];
		$status_stand="background: rgba(255, 255, 255, 1.0);border-color:#088ec6;
   border-width: 1px;
   border-style: solid;font-family: 'Open Sans Condensed'";


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


$nombre_emp=substr($d_nombre,0,8);
$d_url="info_empresa.php?ide=".$id_empresa."&inf=0&plano=1";
//Termina obtener datos de la empresa....
		
	}//Termina el if
////////
		
//Mostrar resultados		
	
	
	
	
	//Validando para muestra de resultados
	if($total==0){
		
$mostrarI.='
<li id="'.$etiqueta.'" style="'.$status_stand.'">
<span style="color:#fff">
<strong><div style="font-size:9px;text-transform:uppercase; margin-top:5px"><center>'.$etiqueta.'</center></div></strong>

</span>
<a href="'.$d_url2.'" target="_self"><span style="color:#fff">
<strong>Registrar empresa en '.$etiqueta.'</strong></span></a>
</li>
 ';
	
	}else{
	
	$mostrarI.='
<li id="'.$etiqueta.'" style="'.$status_stand.'">
<div style="font-size:8px; text-transform:uppercase; margin-top:5px"><center>'.utf8_encode($nombre_emp).'</center></div>
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
<div id="apDiv1" style="background-color:#fff"></div>
<div id="apDiv2">
  <div id="apDiv3" style="background-color:rgba(245, 199, 0, 0.7)"></div>
   <div id="apDiv4"><span style="font-size:12px; font-family:Arial, Helvetica, sans-serif">Disponible</span></div>
   
   
   
  <!--<div id="apDiv5" style="background-color:rgba(233, 2, 140, 0.7)"></div>
   <div id="apDiv6"><span style="font-size:12px; font-family:Arial, Helvetica, sans-serif">Ocupado</span></center></div>-->
</div><br />
<center>


<img src="../images/separador.gif" />

<br />
<br><img src="../images/separador.gif" width="150px"><br><br />
 
</form>
</body>
</html>