<? 	include_once("lib/conexion.php");
	$link=conectarse(); 
	
		$ids=$_GET['id'];
		$tranx="delete from mensaje where id_mensaje=$ids";					
					$rtranx=mysql_query($tranx, $link);
					$idreg = mysql_insert_id($link);
					header("Location:filtro_proveedores.php");
	
	?>