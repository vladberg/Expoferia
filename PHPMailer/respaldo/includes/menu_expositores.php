<?php
//Validando status de menu activo
$valore2=$_GET['e'];
 
if ($valore2==""){
$valore=1;
} 
 
?>

<div id="menu">  
    <ul>
    <?php 
	 //Quiero exponer
		  if ($valore2==1){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
      <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pqexponer?>"><span style="font-size:14px"><?php echo $qexponer?></span></a></li>
      
       <?php 
	 //Planos expo
		  if ($valore2==5){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
      <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pplano?>"><span style="font-size:14px"><?php echo $plano?></span></a></li>
      
       <?php 
	 //Patrocinios
		  if ($valore2==2){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $ppatrocinios?>"><span style="font-size:14px"><?php echo $patrocinios?></span></a></li>
       
      
      
      
      
       <?php 
	 //Facilidades visitantes
		  if ($valore2==3){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pvisitantes?>"><span style="font-size:14px"><?php echo $visitantes?></span></a></li>
      
      
       <?php 
	 //Formatos
		  if ($valore2==4){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pformatos?>"><span style="font-size:14px"><?php echo $formatos?></span></a></li>
      
      
       <?php 
	 //Descargar formatos pdf por empresa
		  if ($valore2==5){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pdmascota?>"><span style="font-size:14px"><?php echo $dmascota?></span></a></li>
       <?php /*?> <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="#"><span style="font-size:14px"><?php echo $dmascota?></span></a></li><?php */?>
      
   
   </ul>
</div>