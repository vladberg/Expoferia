<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
@include("includes/cn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:: <?php echo $title_salon_uxmal?> ::.</title>
 
<!--<link rel="stylesheet" type="text/css" media="screen" href="css/style_expo.css">-->

<style type="text/css">
ul#continents {
	list-style: none;
	background: url(images/planos/plano_uxmal.jpg) no-repeat 0 0;
	position: relative;
	width: 791px;
	height: 510px;	
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
	filter:alpha(opacity=75);
	color: #FFF;*/
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
	top: 9px;
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
#U1 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 688px;
	top: 359px;
}

#U2 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 688px;
	top: 333px;
}
#U3 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 688px;
	top: 308px;
}
#U4 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 688px;
	top: 283px;
}
#U5 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 688px;
	top: 258px;
}
#U6 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 688px;
	top: 233px;
}
#U7 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 688px;
	top: 208px;
}
#U8 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 688px;
	top: 183px;
}
#U9 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 655px;
	top: 183px;
}

#U10 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 655px;
	top: 209px;
}
#U11 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 655px;
	top: 234px;
}
#U12 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 655px;
	top: 259px;
}
#U13 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 655px;
	top: 284px;
}
#U14 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 655px;
	top: 309px;
}
#U15 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 655px;
	top: 334px;
}
#U16 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 655px;
	top: 359px;
}
#U17 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 614px;
	top: 359px;
}

#U18 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 614px;
	top: 334px;
}
#U19 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 614px;
	top: 309px;
}
#U20 {
	position: absolute;
	width: 33px;
	height: 26px;
	/*z-index: 3;*/
	left: 614px;
	top: 283px;
}
#U21 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 614px;
	top: 258px;
}
#U22 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 614px;
	top: 233px;
}
#U23 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 614px;
	top: 208px;
}
#U24 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 614px;
	top: 183px;
}
#U17A {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 581px;
	top: 359px;
}

#U18A {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 581px;
	top: 334px;
}
#U19A {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 581px;
	top: 309px;
}
#U20A {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 581px;
	top: 284px;
}
#U21A {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 581px;
	top: 258px;
}
#U22A {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 581px;
	top: 233px;
}
#U23A {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 581px;
	top: 208px;
}
#U24A {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 581px;
	top: 183px;
}

#U29 {
	position: absolute;
	width: 33px;
	height: 23px;
	/*z-index: 3;*/
	left: 539px;
	top: 183px;
}
#U30 {
	position: absolute;
	width: 33px;
	height: 23px;
	/*z-index: 3;*/
	left: 506px;
	top: 183px;
}

#U25 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 539px;
	top: 308px;
}
#U34 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 506px;
	top: 308px;
}

#U41 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 351px;
	top: 166px;
}

#U40 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 384px;
	top: 165px;
}

#U42 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 351px;
	top: 191px;
}

#U39 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 384px;
	top: 191px;
}
#U42A {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 351px;
	top: 216px;
}

#U38A {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 384px;
	top: 216px;
}

#U43 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 351px;
	top: 242px;
}

#U38 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 384px;
	top: 241px;
}
#U44 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 351px;
	top: 267px;
}

#U37 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 384px;
	top: 266px;
}
#U45 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 351px;
	top: 292px;
}

#U36 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 384px;
	top: 292px;
}
#U46 {
	position: absolute;
	width: 33px;
	height: 23px;
	/*z-index: 3;*/
	left: 351px;
	top: 318px;
}

#U35 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 384px;
	top: 316px;
}

#U52 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 261px;
	top: 207px;
}

#U53 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 228px;
	top: 207px
}
#U54 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 261px;
	top: 232px;
}

#U51 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 228px;
	top: 232px
}
#U55 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 261px;
	top: 257px;
}

#U50 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 228px;
	top: 257px
}
#U56 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 261px;
	top: 282px;
}

#U49 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 228px;
	top: 282px
}
#U57 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 261px;
	top: 307px;
}

#U48 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 228px;
	top: 307px
}
#U58 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 261px;
	top: 332px;
}

#U47 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 228px;
	top: 332px
}
#U67 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 143px;
	top: 197px;
}
#U66 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 176px;
	top: 197px;
}
#U68 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 143px;
	top: 222px;
}
#U65 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 176px;
	top: 222px;
}
#U69 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 143px;
	top: 247px;
}
#U64 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 176px;
	top: 247px;
}
#U70 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 143px;
	top: 296px;
}
#U63 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 176px;
	top: 296px;
}
#U71 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 143px;
	top: 321px;
}
#U62 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 176px;
	top: 321px;
}
#U72 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 143px;
	top: 346px;
}
#U61 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 176px;
	top: 346px;
}
#U73 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 143px;
	top: 371px;
}
#U60 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 176px;
	top: 371px;
}
#U74 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 143px;
	top: 396px;
}
#U59 {
	position: absolute;
	width: 33px;
	height: 25px;
	/*z-index: 3;*/
	left: 176px;
	top: 396px;
}
#U84 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 88px;
	top: 197px;
}
#U83 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 112px;
	top: 197px;
}
#U85 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 88px;
	top: 222px;
}
#U82 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 112px;
	top: 222px;
}

#U86 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 88px;
	top: 247px;
}
#U81 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 112px;
	top: 247px;
}
#U87 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 88px;
	top: 272px;
}
#U80 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 112px;
	top: 272px;
}
#U88 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 88px;
	top: 297px;
}
#U79 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 112px;
	top: 297px;
}
#U89 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 88px;
	top: 322px;
}
#U78 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 112px;
	top: 322px;
}
#U90 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 88px;
	top: 347px;
}
#U77 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 112px;
	top: 347px;
}
#U91 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 88px;
	top: 372px;
}
#U76 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 112px;
	top: 372px;
}
#U92 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 88px;
	top: 397px;
}
#U75 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 112px;
	top: 397px;
}
#U101 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 62px;
	top: 197px;
}
#U100 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 62px;
	top: 222px;
}
#U99 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 62px;
	top: 247px;
}
#U98 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 62px;
	top: 272px;
}
#U97 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 62px;
	top: 297px;
}
#U96 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 62px;
	top: 322px;
}
#U95 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 62px;
	top: 347px;
}
#U94 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 62px;
	top: 372px;
}
#U93 {
	position: absolute;
	width: 23px;
	height: 25px;
	/*z-index: 3;*/
	left: 62px;
	top: 397px;
}

#UA4 {
	position: absolute;
	width: 33px;
	height: 19px;
	/*z-index: 3;*/
	left: 539px;
	top: 205px;
}
#UA5 {
	position: absolute;
	width: 33px;
	height: 19px;
	/*z-index: 3;*/
	left: 506px;
	top: 205px;
}
#UA3 {
	position: absolute;
	width: 33px;
	height: 19px;
	/*z-index: 3;*/
	left: 539px;
	top: 231px;
}
#UA6 {
	position: absolute;
	width: 33px;
	height: 19px;
	/*z-index: 3;*/
	left: 506px;
	top: 231px;
}

#UA6 {
	position: absolute;
	width: 33px;
	height: 19px;
	/*z-index: 3;*/
	left: 506px;
	top: 231px;
}

#UA2 {
	position: absolute;
	width: 33px;
	height: 26px;
	/*z-index: 3;*/
	left: 539px;
	top: 256px;
}
#UA7 {
	position: absolute;
	width: 33px;
	height: 26px;
	/*z-index: 3;*/
	left: 506px;
	top: 256px;
}
#UA1 {
	position: absolute;
	width: 33px;
	height: 19px;
	/*z-index: 3;*/
	left: 539px;
	top: 288px;
}
#UA8 {
	position: absolute;
	width: 33px;
	height: 19px;
	/*z-index: 3;*/
	left: 506px;
	top: 288px;
}
#UA {
	position: absolute;
	width: 66px;
	height: 239px;
	/*z-index: 3;*/
	left: 423px;
	top: 175px;
}

#UC10 {
	position: absolute;
	width: 25px;
	height: 17px;
	/*z-index: 3;*/
	left: 298px;
	top: 222px;
}
#UC1 {
	position: absolute;
	width: 25px;
	height: 17px;
	/*z-index: 3;*/
	left: 323px;
	top: 222px;
}

#UC9 {
	position: absolute;
	width: 25px;
	height: 20px;
	/*z-index: 3;*/
	left: 298px;
	top: 248px;
}
#UC2 {
	position: absolute;
	width: 25px;
	height: 20px;
	/*z-index: 3;*/
	left: 323px;
	top: 248px;
}

#UC8 {
	position: absolute;
	width: 25px;
	height: 20px;
	/*z-index: 3;*/
	left: 298px;
	top: 276px;
}
#UC3 {
	position: absolute;
	width: 25px;
	height: 20px;
	/*z-index: 3;*/
	left: 323px;
	top: 276px;
}

#UC7 {
	position: absolute;
	width: 25px;
	height: 20px;
	/*z-index: 3;*/
	left: 298px;
	top: 306px;
}
#UC4 {
	position: absolute;
	width: 25px;
	height: 20px;
	/*z-index: 3;*/
	left: 323px;
	top: 306px;
}

#UC6 {
	position: absolute;
	width: 25px;
	height: 20px;
	/*z-index: 3;*/
	left: 298px;
	top: 334px;
}
#UC5 {
	position: absolute;
	width: 25px;
	height: 20px;
	/*z-index: 3;*/
	left: 323px;
	top: 334px;
}

#UZ1 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 410px;
}
#UZ2 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 386px;
}
#UZ3 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 362px;
}
#UZ4 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 338px;
}
#UZ5 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 314px;
}
#UZ6 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 290px;
}
#UZ7 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 266px;
}
#UZ8 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 242px;
}
#UZ9 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 218px;
}
#UZ10 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 194px;
}
#UZ11 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top:170px;
}
#UZ12 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 741px;
	top: 146px;
}
#UZ13 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 678px;
	top: 119px;
}
#UZ14 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 652px;
	top: 119px;
}
#UZ15 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 626px;
	top: 119px;
}
#UZ16 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 600px;
	top: 119px;
}
#UZ17 {
	position: absolute;
	width: 26px;
	height: 24px;
	/*z-index: 3;*/
	left: 574px;
	top: 119px;
}
#UB {
	position: absolute;
	width: 48px;
	height: 51px;
	/*z-index: 3;*/
	left: 353px;
	top: 363px;
}
#UC {
	position: absolute;
	width: 40px;
	height: 39px;
	/*z-index: 3;*/
	left: 295px;
	top: 381px;
}
#UD {
	position: absolute;
	width: 40px;
	height: 39px;
	/*z-index: 3;*/
	left: 229px;
	top: 380px;
}
#UE{
	position: absolute;
	width: 40px;
	height: 39px;
	/*z-index: 3;*/
	left: 519px;
	top: 363px;
}
</style>
</head>

<body>
<form>
<center>
<img src="images/planos/expoferia-2015-salon-uxmal.jpg" /><br />
<br><img src="images/separador.gif" width="150px"><br><br />
 <input type="button" name="imprimir" value="Imprimir" onClick="window.print();">&nbsp;&nbsp;&nbsp;
<input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/>

</center>
</form>
</body>
</html>