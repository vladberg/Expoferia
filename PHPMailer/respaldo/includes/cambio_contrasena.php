<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
$id_usuario=$_GET['idusuario'];//Obtiendo el id del usuario
$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas
?>

<html>

<title>.:: EXPOFERIA DEL COMERCIO - CAMBIO DE CONTRASEÑA  ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<head>


<?php 
if(isset($_POST['si'])){
$canterior=md5($_POST['anterior']);
$cnueva=md5($_POST['nueva']);
$id_usuario=$_POST['idusu'];

//Validando que la contraseña actual corresponde al usuario en sesión
$c=mysql_query("select password from login where idusuario='$id_usuario'");
$vc=mysql_fetch_array($c);
$cclave=$vc['password'];

//Comparando
if ($canterior==$cclave){
//Son iguales, reaizar la actualización
$update=mysql_query("update login set password='$cnueva' where idusuario='$id_usuario'");

echo '<script> alert (".:: La contraseña ha sido actualizada ::.") </script>';
////////////r
}else {
//Son diferentes, mensaje de alerta
echo '<script> alert (".:: La contraseña actual no es válida, cambio no autorizado ::.") </script>';


}


echo '<script>window.close();</script>';
}//Termina el post




?>


</head>



<body topmargin="0px" style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:12px">

<table width="450" border="0" align="center">

<form id="form1" name="form1" method="post" action="cambio_contrasena.php">

  <tr>
    
    <td>	</td>
    
  </tr>

  <tr>
    <td align="center"><img src="../images/expoferia_logo.png" /></td>
  </tr>
  <tr>
    
    <td ><br><center>
      
      <span style="font-size:12px; font-weight:bold">CAMBIO DE CONTRASE&Ntilde;A</span><br><br>
      <center><img src="../images/separador.gif" width="430"></center><br>
     <span style="font-size:12px"> Solicitamos la contraseña actual para verificar que sea el propietario <br>de la cuenta.</span>
      </center>
      <br>
  <table>
  <tr>
  <td width="217"><span style="font-size:12px">Escriba la contrase&ntilde;a actual</span></td>
  <td width="215"><input name="anterior" type="password" id="anterior" /></td>
    
  </tr>
  <tr>
    <td><span style="font-size:12px">Escriba la nueva contrase&ntilde;a</span></td>
    <td><input name="nueva"  id="nueva"type="password" />
      <input name="idusu"  id="idusu" type="hidden" value="<?php echo $id_usuario?>" /></td>
  </tr>
  </table>
      
      
      
      
      
      
      </td>
    
  </tr>

  <tr>

    <td>

     

      <div align="center">

        <input name="si" type="submit" id="si" value="Aceptar"  class="colorfondo"/>&nbsp;&nbsp;
        <input name="cancelar" type="button" id="cancelar" value="Cerrar" onClick="window.close();"/></div></td>

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

