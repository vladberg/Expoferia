<? 	include_once("lib/conexion.php");
	$link=conectarse(); 
	
		$ids=$_GET['id'];
		$tranx="delete from conferencias where idconferencias=$ids";					
					$rtranx=mysql_query($tranx, $link);
					$idreg = mysql_insert_id($link);
					header("Location:filtro_conferencias.php");
	
	?>