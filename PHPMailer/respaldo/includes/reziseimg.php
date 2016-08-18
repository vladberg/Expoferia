<?php 
function image_gd($archivo,$ruta) 
{ 
global $nombreimagennormal,$nombreimagenminiatura;

$target=$ruta.$archivo;

$imagepath = $archivo;
$extension = explode(".",$archivo); 
$ext = count($extension)-1; 


$save = $ruta.$imagepath; //imagen que uso para reducir
$file = $ruta.$imagepath; //imagen original

$nombreimagennormal=$archivo;

list($width, $height) = getimagesize($file) ; 
if($width<$height){

if($width<500){
 //$modwidth=$width;
  $modwidth=500; //quita si no sirve
 }else{
 $modwidth = 500; 
 }

if($height<250){
 //$modheight = $height / $diff;
 $modheight = 350; //Medida por default para alto
}else{
$modwidth = 500; 
$modheight = 350;
}
}else{
////////////////
if($width<500){
 //$modwidth=$width;
 $modwidth=500;
 }else{
 $modwidth = 500; 
 }
$diff = $width / $modwidth;
 //$modheight = $height / $diff;
 $modheight = 350;//Medida por default para alto
}
	
	$diff = $width / $modwidth;
	
 
     $tn = imagecreatetruecolor($modwidth, $modheight) ; 
     if($extension[$ext] == "jpg" || $extension[$ext] == "jpeg")      { 
			  $image = imagecreatefromjpeg($file) ;
			   
	}
	 if($extension[$ext] == "gif"){ 
            $image = imagecreatefromgif($file); 
      }
		
		 if($extension[$ext] == "png"){
		$image= imagecreatefrompng($file);
		} 	 
			   
			    
			   
              imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
 
              imagejpeg($tn, $save, 100) ; 
 
              $save = "$ruta/sml_".$imagepath; //imagen a reducir
              $file = "$ruta/".$imagepath; //imagen original
              
			  $nombreimagenminiatura="sml_".$archivo;
			     
              list($width, $height) = getimagesize($file) ; 
 
             // $modwidth = 70; 
 
              //$diff = $width / $modwidth;
 
             // $modheight = $height / $diff; 
             
			 // $tn = imagecreatetruecolor($modwidth, $modheight) ; 
			  $tn = imagecreatetruecolor(80, 90) ; 
              $image = imagecreatefromjpeg($file) ; 
			  
			  
			  
              imagecopyresampled($tn, $image, 0, 0, 0, 0, 80,90,$width,$height) ; 
			 // imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
 
              imagejpeg($tn, $save, 100) ;  

} 
?>