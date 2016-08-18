<?php
include_once("lib/conexion.php");
//onload="openDialog();"
function cabezal(){
?>
<!DOCTYPE html>
<!-- saved from url=(0046)http://expoeficienciaenergetica.com/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Expoforo Ambiental</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
  <link rel=”stylesheet” type=”text/css” href=”http://fonts.googleapis.com/css?family=Roboto_Condensed”>

  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/supernice.css">
  <link rel="stylesheet" href="css/style-cons.css">
  <link href="css/css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="img/icon.png">
<style type="text/css">
  body{
    background-color: #ffffff
  }
  .text-success {
    color: #FEFFFE;
    font-size: 80px;

}
</style></head>
<body> 

<nav class="navbar navbar-default">
  <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">MENU</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">EXPOFORO AMBIENTAL</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Inicio</a></li>
            <li class="dropdown">
                <a href="http://expoeficienciaenergetica.com/index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acerca Nosotros <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="expo.php">Evento</a></li>
                  <li><a href="somos.php">Organizador</a></li>
                  <li><a href="sede.php">Sede</a></li>                 
                 <li><a href="convocatorias.php">Convocatorias</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="http://expoeficienciaenergetica.com/index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Visitantes<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="disabled"><a href="expositores.php">Expositores</a></li>
                  <li class="disabled"><a href="conferencias.php">Conferencias</a></li>
                  <li><a href="plano.php">Plano</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="http://expoeficienciaenergetica.com/index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Expositor <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="porque_participar.php">Porque participar</a></li>
                  <li><a href="costos.php">Costos Stands</a></li>
                  <li><a href="porque_patrocinador.php">Porque ser patrocinador</a></li>
                  <li><a href="plano.php">Plano del Evento</a></li>
                </ul>
            </li>
            <li><a href="galeria.php" >Galeria</a></li>
            <li><a href="directorio.php">Directorio</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
          
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php }
function slider(){
?>
<header class="container sliders seccion-30" id="backgroud">  
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
       
    </style>
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
       
       <?php 
         include_once("lib/conexion.php");
       $link=conectarse();
                        echo $query="select * from banners where estatus=1 order by fecha_creacion asc";
            $resultado=mysql_query($query, $link);
            if($resultado !=0){
            while($row=mysql_fetch_array($resultado)){ 
      $imagen=$row['imagen'];
      $nombre_categoria=$row[1];
      $archivo=$row[2];
      $url=$row['url'];
      ?>
            <div data-p="225.00" style="display: none;">
                <a href="<?php echo $url;?>"><img data-u="image" src="banners/<?php echo $imagen;?>" class="img-responsive img-thumbnail"/></a>
            </div>
            
            <?php }
        }
        ?>
           
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div></header>
<?php }
function footer(){
?>
<section class="bg-primary">
  <article class="container text-center">
    <div class="col-sm-3 seccion-30">
      <p class="text-success"><span class="fa fa-dashboard" aria-hidden="true"></span></p>
      <a href="conferencias.php" type="button" class="btn btn-primary disabled">Conferencias</a>
    </div>
    <div class="col-sm-3 seccion-30">
      <p class="text-success"><span class="fa fa-list" aria-hidden="true"></span></p>
      <a href="expositores.php" type="button" class="btn btn-primary disabled">Lista de expositores</a>
    </div>
    <div class="col-sm-3 seccion-30">
      <p class="text-success"><span class="fa fa-map-marker" aria-hidden="true"></span></p>
      <a href="plano.php" type="button" class="btn btn-primary">Plano del evento</a>
    </div>
    <div class="col-sm-3 seccion-30">
      <p class="text-success"><span class="fa fa-bullhorn" aria-hidden="true"></span></p>
      <a href="convocatorias.php" type="button" class="btn btn-primary">Convocatorias</a>
    </div>
  </article>
</section>
<section class="bg-blanco">
	<article class="container text-center">
		<h2>Patrocinadores</h2>
			<div class="row">
			<?php
$link=conectarse();
   $query="select * from categorias where estatus=1 order by orden asc";
$resultado=mysql_query($query, $link);

              //echo $resultado; 



              $icont=0;

              $class='success';
              if(mysql_num_rows($resultado)>0){



                while($row = mysql_fetch_array($resultado)){
                $nombre=$row['categoria'];
                $imagen=$row['imagen'];
                 ?>
				<div class="col-sm-3 col-xs-4" style="padding-bottom: 10px;">
					<a href="#" target="_blank"><img src="patrocinadores/<?php echo $imagen;?>" alt="..." class="img-responsive"></a>				
				</div>
				<?php
			}
		}
		?>
				
			</div>
	</article>
</section>
<footer class="bg-success"> 
  <article class="container text-center ">
   <p class="text-center"> <h2 style="color:#ffffff">Siguenos: </h2><a href="https://www.facebook.com/expoforoambiental/" target="_blank" ><img src="img/facebook_icon_white.png"  class="img-responsive center-block" width="7%"></a> </p>
      

		<!-- Button trigger modal -->
		
		<a href="http://expoeficienciaenergetica.com/index.html"></a>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title text-primary" id="myModalLabel">Aviso de Privacidad</h4>
		      </div>
		      <div class="modal-body text-primary text-justify">
		        <p>Asociación Promotora de Exposiciones, A.C. es responsable del tratamiento de sus datos personales, con domicilio en Ave. Fundidora 501 Loc. 62, P.B. Col. Obrera, Monterrey, N.L., México, C.P. 64010, tel. (52) 81-8369-6660. Nos puede contactar a través del correo electrónico: datospersonales@apex.org.mx</p>
				<h4>Protección de la información</h4>
				<p>Asociación Promotora de Exposiciones, A.C. mantendrá estrictos mecanismos de protección, para garantizar la seguridad, integridad, privacidad y confidencialidad de la información recopilada.
				Tratamiento.</p>
				<p>Sus datos personales serán utilizados para las siguientes finalidades: proveer información sobre nuestros productos y servicios, elaboración de encuestas, promoción de eventos, estacionamiento, seguridad durante su estancia y fines estadísticos.</p>
				<h4>Datos personales</h4>
				<p>Para las finalidades señaladas en el presente aviso de privacidad, podemos recabar sus datos personales de distintas formas: cuando usted nos los proporciona directamente, cuando visita nuestro sitio de Internet o utiliza nuestros servicios en línea, y cuando obtenemos información a través de otras fuentes que están permitidas por la ley. Podremos recabar uno, algunos o todos los siguientes datos personales: nombre completo, domicilio, teléfono, sexo, entre otros Datos Personales no sensibles.</p>
				<h4>Acceso, revocación, cancelación y oposición</h4>
				<p>Usted tiene el derecho de acceder a sus datos personales que poseemos y a los detalles del tratamiento de los mismos, así como a rectificarlos en caso de ser inexactos o instruirnos cancelarlos cuando considere que resulten ser excesivos o innecesarios para las finalidades que justificaron su obtención u oponerse al tratamiento de los mismos para fines específicos. Así mismo podrá revocar el consentimiento que nos ha otorgado para el tratamiento de sus datos personales, a fin de que dejemos de hacer uso de los mismos.</p>
				<p>El mecanismo para el ejercicio de dichos derechos es a través de presentar la solicitud respectiva en: nuestro Departamento de Seguridad de Información ubicado en Ave. Fundidora 501 Loc. 62, P.B. Col. Obrera, Monterrey, N.L., México, tel. (52) 81-8369-6660, con una identificación oficial como Credencial de Elector o Pasaporte. Su petición deberá ir acompañada de los documentos que acrediten la identidad o, en su caso, la representación legal del titular; documento con el nombre del titular, correo electrónico o en caso de no contar con uno, algún teléfono para comunicarle la respuesta a su solicitud. Así también deberá contener la descripción clara y precisa de los datos personales respecto de los que se busca ejercer alguno de los derechos antes mencionados, y cualquier otro elemento que facilite la localización de los datos personales. Tendremos un plazo máximo de 20 días hábiles para atender su petición y le informaremos sobre la procedencia de la misma al teléfono y/o dirección de correo electrónico que nos haya indicado.</p>
				<p>Para mayor información, favor de comunicarse con el Departamento de Seguridad de Información  a través del correo electrónico datospersonales@apex.org.mx o al teléfono (52) 81-8369-6660.</p>
				<h4>Transferencia</h4>
				<p>Asociación Promotora de Exposiciones, A.C., no realizará transferencia de sus datos personales a terceros, salvo los requeridos o previstos por las leyes vigentes.</p>
				<h4>Cambios en el aviso de privacidad</h4>
				<p>Nos reservamos el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente aviso de privacidad, para la atención de novedades legislativas o jurisprudenciales, políticas internas, nuevos requerimientos para la prestación u ofrecimiento de nuestros servicios o productos y prácticas del mercado.
				Estas modificaciones estarán disponibles al público a través de nuestro Departamento de Seguridad de Información ubicado en Ave. Fundidora 501 Loc. 62, P.B. Col. Obrera, Monterrey, N.L., México, tel. (52) 81-8369-6660, así también podrán consultarse en la siguiente página de Intranet: http://www.apex.org.mx/privacidad 
				La fecha de la última actualización al presente aviso de privacidad: 27/Diciembre/2012.</p>
		      </div>
		    </div>
		  </div>
		</div>
	</article>
</footer>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body></html>
<?php 
}
?>