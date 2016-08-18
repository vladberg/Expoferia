<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");
 ?>
<html>
<head>
<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Retina - Free CSS template by ChocoTemplates.com</title>
<link rel="stylesheet" href="css/style_2.css" type="text/css" media="all" />

</head>

<body>

<div id="wrapper">
	<!-- shell -->
	<div class="shell">
		<!-- container -->
		<div class="container">
        <!-- header -->
        
                
			<header id="header">
				
               
                 <table><tr>
                <td width="47%"><h1 id="logo"><a href="#"><img src="images/expoferia_logo.png"></a></h1> </td>
                <td width="53%"> 
				<?php $idmenu=1;
			@include("includes/menu_principal.php"); ?></td>
                </tr>
                </table>
				
                              <!-- search -->
				<div class="search">
					<img src="images/slider/expocomercio_2014.jpg" width="100%">
				</div>
				<!-- end of search -->
				<div class="cl">&nbsp;</div>
			</header>
			<!-- end of header -->
       
         <?php @include("includes/patrocinadores.php") ?>
        
        <!-- footer -->
			<div id="footer">
				<div class="footer-nav">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Solutions</a></li>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contacts</a></li>
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
				
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of footer -->
        </div><!-- container-->
        </div><!-- shell-->
        </div><!--wrapper-->
        <!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <script type="text/javascript" charset="utf-8"
src="http://meridatv.com/player/dist/clappr.min.js"></script>
  <script type="text/javascript" charset="utf-8"
src="http://meridatv.com/player/dist/level-selector.min.js"></script>
  <title>Player DVR </title>
  <script type="text/javascript" charset="utf-8">
window.onload = function() {
  var player = new Clappr.Player({
    source: 'http://74.222.3.185:1935/live/ngrp:meridatv_all/playlist.m3u8',
    watermark: "http://meridatv.com/wp-content/uploads/2015/03/logomeridatvma1.png",
position: 'bottom-left',
    hideMediaControl: true,
    autoPlay: true,
    allowFullScreen: "true",
    plugins: {
      core: [LevelSelector]
    },
    width: 500, height: 320,
    parentId: '#player-wrapper'
  });
}
  </script>
</head>
<body>
  <div align="center">
    <div id="player-wrapper">
  </div>
  </div>
</body>
</html>
</body>
</html>