<?php
//Archivo de conexion a la BD
//SERA NECESARIO REMPLAZAR EL HOST, NOMBRE DE USUARIO Y BD
$conexion = mysql_connect("expocomercio.db.11354178.hostedresource.com","expocomercio","Expo14!sar")or die ("Error al conectarse al servidor de base de datos ".mysql_error());


//Local
//$conexion = mysql_connect("localhost","root","dg091569")or die ("Error al conectarse al servidor de base de datos ".mysql_error());

mysql_select_db("expocomercio",$conexion)or die ("Error al seleccionar base de datos ".mysql_error());
//+++++++++++++++++++++++++++++++++++++++++++++++
?>