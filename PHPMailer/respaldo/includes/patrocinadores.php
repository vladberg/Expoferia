<div align="center">
<?php /*?><?php 
//conectando
@include('cn.php');
$ruta_p="images/empresas/";
$patrocinadores=mysql_query("select empresa,imagen,url from  empresas where status=1 and ipatrocinador=1");

$total=mysql_num_rows($patrocinadores);

if ($total!=0){//inicia el if
while($v_patrocinadores=mysql_fetch_array($patrocinadores)){//inicia el while

$n_patrocinador=$v_patrocinadores['patrocinador'];
$img_patrocinador=$v_patrocinadores['imagen'];
$url_patrocinador=$v_patrocinadores['url'];

if($url_patrocinador!=""){//Validando url
?>

    <a class="linkpat" href="<?php echo $url_patrocinador?>" target="_blank"><img src="<?php echo $ruta_p.$img_patrocinador?>" height="35" title="<?php echo $n_patrocinador?>"></a>

 <?
}else {
?>

    <img src="<?php echo $ruta_p.$img_patrocinador?>" height="35" title="<?php echo $n_patrocinador?>">
    
 <?
}//Termina validando url

}//Termina el while
}//Termina el if
?><?php */?>
 <!--Patrocinadores-->
 <img src="images/patrocinadores-2015-expoferia.jpg">
</div>  