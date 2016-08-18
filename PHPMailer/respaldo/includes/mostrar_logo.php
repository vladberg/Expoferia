<?php 
@include("cn.php");
	$consulta1=mysql_query("select imagen from logotipo where idlogotipo=(select max(idlogotipo) from logotipo where status=1)");
	
	$vconsulta1=mysql_fetch_array($consulta1);
	$nimagen1=$vconsulta1['imagen'];
		?>
    <img src="<?php echo $rimagen.$nimagen1?>" width="170" height="102"/>
    <br /><br /><img src="../images/separador.gif" />