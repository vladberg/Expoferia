<?php 
//conectando
@include('cn.php');
?>
<!-- sliderman.js -->
<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
<link rel="stylesheet" type="text/css" href="js/sliderman_index.css" />
<!-- /sliderman.js -->


<table width="90%" cellpadding="0" cellspacing="0" border="0"><tr><td >


            <div id="slider_container_2">
<div id="SliderName_2" class="SliderName_2">
                                        
 <?php

 $rimagen="images/slider/";

		//Consulta para obtener imágenes para galería, muestra 10 de ellas en forma aleatoria

		$sqlimag=mysql_query("select * from img_menus_web where status=1 and idmenu='$idmenu' order by idimg asc");
		

				//Obteniendo total imágenes

		$nConfig=mysql_num_rows($sqlimag);

		//Inicia el for para obtener imágenes para galería

		for ($i=1; $i<=$nConfig; $i++){

			$resimag=mysql_fetch_array($sqlimag); 

			$imagen=$resimag['imagen'];
			$nimagen=$resimag['nombanner'];
			$rulimagen=$resimag['url'];

			 //Si se obtiene imagen, desplegar
if ($imagen<>""){
	if($rulimagen<>""){
		//Con  url
?>
<a href="<?php echo $rulimagen ?>" target="_self">
         <img src="<?php echo $rimagen.$imagen; ?>" width="100%"  alt="<?php echo $nimagen; ?>" title="<?php echo $nimagen; ?>" /></a>
		
<?
	}else {
		//No url
?>

         <img src="<?php echo $rimagen.$imagen; ?>" width="100%"  alt="<?php echo $nimagen; ?>" title="<?php echo $nimagen; ?>" />
<?

}//Termina if validando url
}//Termina el if de if ($imagen<>"")

		?>

<br />

				<!--<span>Texto bajo la imagen de galería</span>-->

		  

		<?

		}//Cierra el for para obtener imágenes para galería

		?>
     
</div>
<div id="SliderNameNavigation_2"></div>
             
              
              <script type="text/javascript">
	effectsDemo2 = 'rain,stairs,fade';
	var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 900, height: 350, effects: effectsDemo2,
	display: {
	autoplay: 6000,
	loading: {background: '#000000', opacity: 0.5, image: 'images/loading.gif'},
	buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
		navigation: {container: 'SliderNameNavigation_2', label: '<img src="images/clear.gif" />'}
	}
	});
	</script>
              
              
              </div>
           
         




</td></tr>
</table>  