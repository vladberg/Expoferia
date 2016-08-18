<?
function conectarse()
{
 $db_host="68.178.217.51"; //Nombre del Host al que se conecta, habitualmente es el 'localhost'
 $db_nombre='expoforo'; //Esta linea NO DEBE MODIFICARSE
 $db_user="expoforo"; //Nombre del usuario con permisos para acceder
 $db_pass="Expofor0#"; //Contrase�a del usuario


 $link=mysql_connect($db_host,$db_user,$db_pass) or die ("Error Conectando a la base de datos");

  mysql_select_db($db_nombre,$link) or die ("Error Seleccionando la base de datos");
  
  mysql_query ("SET NAMES 'utf8'");

  return $link;
}

function conectarse_servicios()
{
 $db_host="68.178.217.51"; //Nombre del Host al que se conecta, habitualmente es el 'localhost'
 $db_nombre='expoforo'; //Esta linea NO DEBE MODIFICARSE
 $db_user="expoforo"; //Nombre del usuario con permisos para acceder
 $db_pass="Expofor0#"; //Contrase�a del usuario


 $link=mysql_connect($db_host,$db_user,$db_pass) or die ("Error Conectando a la base de datos");

  mysql_select_db($db_nombre,$link) or die ("Error Seleccionando la base de datos");
  
  mysql_query ("SET NAMES 'utf8'");

  return $link;
}
?>