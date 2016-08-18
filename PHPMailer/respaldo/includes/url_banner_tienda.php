<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
$id_banner=$_GET['idbanner'];//Obtiendo el id del banner
$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas

//Validando si la variable tiene valor, hacer consulta
if($id_banner<>""){
//Obteniendo datos del banner
$consulta=mysql_query("select * from banner_sartory where idbanner=$id_banner");

$vconsulta=mysql_fetch_array($consulta);
$url=$vconsulta['url'];
$imagen=$vconsulta['imagen'];
$rutaim="../tienda/img/";
}



?>

<html>

<title>.:: MERIMOTO - ACTUALIZACI&Oacute;N URL  ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<head>


<?php 
if(isset($_POST['si'])){
$url_banner=$_POST['urlb'];
$id_banner=$_POST['idb'];

//Actualizando campo url
$update=mysql_query("update banner_sartory set url='$url_banner' where idbanner='$id_banner'");

echo '<script> alert (".:: La url ha sido actualizada ::.") </script>';
echo '<script>window.close();</script>';
}//Termina el post




?>


</head>



<body topmargin="0px" style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:12px">

<table width="450" border="0" align="center">

<form id="form1" name="form1" method="post" action="url_banner_tienda.php">

  <tr>
    
    <td>	</td>
    
  </tr>

  <tr>
    <td align="center"><img src="../images/logo_merimoto.png"></td>
  </tr>
  <tr>
    
    <td ><br><center>
      
      <span style="font-size:12px; font-weight:bold">URL BANNER TIENDA</span><br></span>
      <center><img src="../images/separador.gif" width="430"></center><br>
      
      <img src="<?php echo $rutaim.$imagen ?>" width="150" border=0/><br><br>
      <span style="font-size:12px; font-weight:normal">
   Vaya a la sección de la tienda donde desee que sea acceso directo a través de esta imagen, copie la url y pegue en la caja de texto, clic en botón "Aceptar".</span>
      </center>
      <br>
  <table>
  <tr>
  <td width="45"><span style="font-size:12px">Url</span></td>
  <td width="387"><input name="urlb" type="text" id="urlb" size="60" value="<?php echo $url ?>"/></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="idb"  id="idb" type="hidden" value="<?php echo $id_banner?>" /></td>
  </tr>
  </table>
      
      
      
      
      
      
      </td>
    
  </tr>

  <tr>

    <td>

     

      <div align="center">

        <input name="si" type="submit" id="si" value="Aceptar"  class="colorfondo"/>&nbsp;&nbsp;
        <input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/>
      </div></td>

    </tr>

  <tr>

    <td><br><center><img src="../images/separador.gif" width="430"></center><br></td>

  </tr>

  </form>

</table>

</body>

</html>

<?php 



}else {
session_destroy();
echo "<script> window.location='login_sesion.php' </script>";
}

?>

