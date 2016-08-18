<?php
//Validando status de menu activo
$valore=$_GET['i'];
 
if ($valore==""){
$valore=1;
} 
 
?>

<nav>  
    <ul id="menu">
    <?php 
	 //Index
		  if ($valore==1){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
      <li id="<?php echo $a?>"><a href="<?php echo $pinicio?>"><?php echo $inicio?></a></li>
      
       <?php 
	 //Actividades
		  if ($valore==10){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li id="<?php echo $a?>"><a href="<?php echo $pactividades?>"><?php echo $actividades?></a></li>
      
      
       <?php 
	 //Plano expo
		  if ($valore==5){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li id="<?php echo $a?>"><a href="<?php echo $pplano?>"><?php echo $plano?></a></li>
      
      
              <?php 
	 //Galeria
		  if ($valore==6){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li id="<?php echo $a?>"><a href="<?php echo $pgaleria?>"><?php echo $galeria?></a></li>
      
      
        <?php 
	 //Testimoniales
		  if ($valore==9){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li id="<?php echo $a?>"><a href="<?php echo $ptestimoniales?>"><?php echo $testimoniales?></a></li>
       
       <?php 
	 //Expositores
		  if ($valore==2){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
      <li id="<?php echo $a?>"><a href="<?php echo $pexpositores?>"><?php echo $expositores?></a>
      </li>
       
	   <?php 
	 //Como exponer
		  if ($valore==3){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
         <?php /*?><li id="<?php echo $a?>"><a href="<?php echo $pexponer?>"><?php echo $exponer?></a></li> <?php */?>
        <?php 
	 //Patrocinios
		  if ($valore==4){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li id="<?php echo $a?>"><a href="<?php echo $ppatrocinios?>"><?php echo $patrocinios?></a></li>
       

       <?php 
	 //Canaco
		  if ($valore==7){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li id="<?php echo $a?>"><a href="<?php echo $pcanaco?>"><?php echo $canaco?></a></li>
       
       
       
        <?php 
	 //Contacto
		  if ($valore==8){
		$a="menu_active";
		}else {
		
		$a="";
		}
	?>
       <li id="<?php echo $a?>"><a href="<?php echo $pcontacto?>"><?php echo $contacto?></a></li>
   </ul>
</nav>