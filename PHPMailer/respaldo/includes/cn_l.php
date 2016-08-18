<?php
//Archivo de conexion a la BD
//SERA NECESARIO REMPLAZAR EL HOST, NOMBRE DE USUARIO Y BD
//Servidor
$conexion2 = mysql_connect("listadedatos.db.11354178.hostedresource.com","listadedatos","LSarbd1408!")or die ("Error al conectarse al servidor de base de datos ".mysql_error());


//Local
//$conexion2 = mysql_connect("localhost","root","dg091569")or die ("Error al conectarse al servidor de base de datos ".mysql_error());

mysql_select_db("listadedatos",$conexion2)or die ("Error al seleccionar base de datos ".mysql_error());

//mysql_select_db("palabrasrestringidas",$conexion2)or die ("Error al seleccionar base de datos ".mysql_error());

//+++++++++++++++++++++++++++++++++++++++++++++++
?>