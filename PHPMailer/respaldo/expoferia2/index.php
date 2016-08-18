<?php 
@include("includes/etiquetas.php");
@include("includes/google_fonts.php");

 ?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>.:: Bienvenidos a la Expoferia del Comercio - Mérida, Yucatán, México ::.</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<!-- 
Para obtener más información sobre los comentarios condicionales situados alrededor de las etiquetas html en la parte superior del archivo:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
  
Haga lo siguiente si usa su compilación personalizada de modernizr (http://www.modernizr.com/):
* inserte el vínculo del código js aquí
* elimine el vínculo situado debajo para html5shiv
* añada la clase "no-js" a las etiquetas html en la parte superior
* también puede eliminar el vínculo con respond.min.js si ha incluido MQ Polyfill en su compilación de modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
<center>
  <div id="LayoutDiv1">
    <div id="logo">
    <?php include("includes/logo_expo.php");?></div>
    <div id="prerregistro"><a href="panel/prerregistro.php"><img src="images/prerregistro.gif" width="320" style="border:0"></a></div>
    <div id="menu">
     
    </div>
  </div>
  <div id="contenidomedio">
    <div id="ligas">
    <?php @include("includes/ligas.php");?>
    </div>
    <div id="banner">
    <img src="images/slider/expoferia-2015.jpg" width="100%">
    
    </div>
  </div>
  <div id="redes">
  <div style="height:18px"></div>
  <span class="titulos">Conéctate con nosotros</span></p>
    <div id="facebook">
    <!--Facebook-->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=1650374838520136";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/canacoservyturmerida?fref=ts" data-width="440" data-height="460" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/canacoservyturmerida?fref=ts"><a href="https://www.facebook.com/canacoservyturmerida?fref=ts">Canaco Mérida</a></blockquote></div></div>
  <!--Termina facebook-->
    </div>
    <div id="twitter">
    <!--Widget Twitter Canaco Mérida-->
  <a class="twitter-timeline" width="440" href="https://twitter.com/canacomerida" data-widget-id="486888502047436802"  data-tweet-limit="3">Tweets por @canacomerida</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


    </div>
  </div>
  <div id="patrocinadores">
  <div style="height:25px"></div>
    <?php @include("includes/patrocinadores.php") ?>
   <div style="height:25px"></div>
  </div>
    </center>

</div><!--Termina contenedor-->

<div id="footer">
<?php @include("includes/footer.php") ?>
</div>
</body>
</html>
