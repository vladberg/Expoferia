<?php
include_once("lib/template.php");
cabezal();
function contador()
    {
        $archivo = "contador.txt"; //el archivo que contiene en numero
        $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
        if($f)
        {
            $contador = fread($f, filesize($archivo)); //leemos el archivo
            $contador = $contador + 1; //sumamos +1 al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contador);
            fclose($f);
        }
        return $contador;
    }
    $cont=contador();
?>
<link rel="stylesheet" type="text/css" href="css/style.css" />  
<script type="text/javascript" src="js/jquery2.js"></script>
<!--<script type="text/javascript">
function openDialog() {
  $('#overlay').fadeIn('fast', function() {
    $('#popup').css('display','block');
        $('#popup').animate({'left':'30%'},500);
    });
}

function closeDialog(id) {
  $('#'+id).css('position','absolute');
  $('#'+id).animate({'left':'-100%'}, 500, function() {
    $('#'+id).css('position','fixed');
    $('#'+id).css('left','100%');
    $('#overlay').fadeOut('fast');
  });
}
</script>-->
<?php 
slider();
?>
<section class="bg-primary">
	<article>
		<div id="testimonios" class="carousel slide text-center" data-ride="carousel" style="padding-top: 50px; padding-bottom: 50px; background-color: #009933; color: #ffffff;">
  	
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php
  $link=conectarse();
  $query="select * from mensaje where estatus=1";
  $resultado=mysql_query($query, $link);
$icont=0;
      while($row=mysql_fetch_array($resultado)){ 
        $icont++;

        $bienvenida=$row['bienvenida'];
        $pie=$row['pie'];  
        $laclase=($icont%2==0?"":"active");  
  ?>
   	
  <div class="item <?php echo $laclase;?>" style="overflow: hidden;text-overflow: ellipsis;">
   		<h2>"<?php echo $bienvenida;?>"</h2>
   		<p><?php echo $pie;?></p>
   	</div>
    <?php
  }
  ?>

    
    </div>
	

  <!-- Left and right controls -->
  <a class="left carousel-control" href="http://expoeficienciaenergetica.com/index.html#testimonios" role="button" data-slide="prev">
    <span class="fa fa-chevron-left fa-5x" aria-hidden="true" style="margin-top: 60px;"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="http://expoeficienciaenergetica.com/index.html#testimonios" role="button" data-slide="next">
    <span class="fa fa-chevron-right fa-5x" aria-hidden="true" style="margin-top: 60px;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</article>
</section>

<section style="background-color: #ffffff">
	<article class="container seccion-30">
		<p text-center=""><img src="img/logoEXPOFORO.png" alt="" class="img-responsive center-block"></p>
	</article>
</section>
<!--<div id="content ">
<div id="overlay" class="overlay "></div>
<div id="popup" class="container popup img-responsive center-block">
  <a onclick="closeDialog('popup');" class="close"></a>
  <div>
      
    
    <img src="img/CONVOCATORIA.jpg" alt="" class="img-responsive center-block" style="width: 700px ">
    </div>
 
    </div>
  </div>
</div>
</div>-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77709089-1', 'auto');
  ga('send', 'pageview');

</script>
<?php
footer();
?>
