 <?php 
@include("cn.php");

 $logo=mysql_query("select * from logotipo where status=1");
 $vlogo=mysql_fetch_array($logo);

	$log=$vlogo['imagen'];
	$rlogo="images/";
?>
 
 <h1><a href="index.php"><img src="<?php echo $rlogo.$log?>"/></a></h1>