<?php 
//Obteniendo contenido texto menús

  $consulta=mysql_query("select * from texto_menus where idmenu='$idmenu'");
$vconsulta=mysql_fetch_array($consulta);
$mtexto=$vconsulta['texto'];
$mcontacto=$vconsulta['contacto'];
  echo utf8_decode($mtexto)."<br>";
  echo utf8_decode($mcontacto)."<br>";
  
?>