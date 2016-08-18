<?php
//Validando status de menu activo
$valore=$_GET['i'];

if ($valore==""){
//$valore=1;
} 
 
?>

<div id="menu">  
    <ul>
    <?php 
	 //Index
		  if ($valore==1){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
      <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pinicio?>"><?php echo $inicio?></a></li>
      
      
       <?php 
	 //Que es la expo
		  if ($valore==11){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pexpo?>"><?php echo $expo?></a></li>
       
      
      
      
      
       <?php 
	 //Actividades
		  if ($valore==10){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pactividades?>"><?php echo $actividades?></a></li>
       
       
       <?php 
	 //Conferencias
		  if ($valore==12){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pconferencias?>"><?php echo $conferencias?></a></li>
      
      
       <?php 
	 //Plano expo
		  if ($valore==5){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pplano?>"><?php echo $plano?></a></li>
      
      
              <?php 
	 //Galeria
		  if ($valore==6){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pgaleria?>"><?php echo $galeria?></a></li>
      
      
        <?php 
	 //Testimoniales
		  if ($valore==9){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $ptestimoniales?>"><?php echo $testimoniales?></a></li>
       
       <?php 
	 //Expositores
		  if ($valore==2){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
      <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pexpositores?>"><?php echo $expositores?></a>
  <?php /*?>  <ul class="cinco">
     
      <li id="<?php echo $a?>"><a href="<?php echo $pqexponer?>"><?php echo $qexponer?></a></li>
      
     
      <li id="<?php echo $a?>"><a href="<?php echo $ppatrocinios?>"><?php echo $patrocinios?></a></li>
      
      
      
       <li><a href="<?php echo $pvisitantes?>"><?php echo $visitantes?></a></li>
        <li><a href="<?php echo $pformatos?>"><?php echo $formatos?></a></li>
      </ul><?php */?>
      
      </li>
       
	   <?php 
	 //Como exponer
		//  if ($valore==3){
//		$a="menu_active";
//		}else {
//		
//		$a="";
//		}
	?>
         <?php /*?><li id="<?php echo $a?>"><a href="<?php echo $pexponer?>"><?php echo $exponer?></a></li> <?php */?>
           

       <?php 
	 //Canaco
		  if ($valore==7){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a  class="nivel1" href="<?php echo $pcanaco?>"><?php echo $canaco?></a></li>
       
       
       
        <?php 
	 //Contacto
		  if ($valore==8){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li class="nivel1" id="<?php echo $a?>"><a class="nivel1" href="<?php echo $pcontacto?>"><?php echo $contacto?></a></li>
       
       
       
       
   </ul>
</div>