<?php 
session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];
$tusu= $_SESSION['tipo'];

if( $ids<>"" && $usuario<>"")

{
@include("../includes/cn.php");
$id_usuario=$_GET['idusuario'];//Obtiendo el id del usuario
//Obtener datos del usuario
$us=mysql_query("select * from usuarios where idusuario='$id_usuario'");
$vus=mysql_fetch_array($us);
$nom=$vus['nombres'];
$apelli=$vus['apellidopaterno'];
$nom_usu=$nom." " .$apelli;

$fecha=date("Y-m-d");
$hora=date("g:i a"); //Formato de 12 horas

//Validando si tiene permisos registrados o no
$pusu=mysql_query("select * from exua where idusuario='$id_usuario'");

$nt=mysql_num_rows($pusu);
if ($pusu<>0){
	
	$vpusu=mysql_fetch_array($pusu);
	$idregistro=$vpusu['expids'];
	
	$v1=$vpusu['explx'];
		if ($v1==1){
		$x1="checked";
	}
	
	$v2=$vpusu['expgs'];
		if ($v2==1){
		$x2="checked";
	}
	
	$v3=$vpusu['expems'];
		if ($v3==1){
		$x3="checked";
	}
	
	$v4=$vpusu['expimms'];
		if ($v4==1){
		$x4="checked";
	}
	
	$v5=$vpusu['expsns'];
		if ($v5==1){
		$x5="checked";
	}
	
	$v6=$vpusu['expicol'];
		if ($v6==1){
		$x6="checked";
	}
	
	$v7=$vpusu['expacv'];
		if ($v7==1){
		$x7="checked";
	}
	
	$v8=$vpusu['exptes'];
		if ($v8==1){
		$x8="checked";
	}
	
	$v9=$vpusu['expfrs'];
		if ($v9==1){
		$x9="checked";
	}
	$v10=$vpusu['expcon'];
		if ($v10==1){
		$x10="checked";
	}

}
?>

<html>

<title>.:: EXPOFERIA DEL COMERCIO - ACCESO PANEL  ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<head>


<?php 
if(isset($_POST['si'])){
$idr=$_POST['idregistro'];
$puser=$_POST['idusu'];	
  foreach ($_POST['casilla'] as $value){ 
   
	switch($value){
	case 1://Logo
	$vlogo=1;
	$t1="LOGOTIPO";
	break;
	
	case 2://Galerías
	$vgal=1;
	$t2="GALERIAS";
	break;
	
	case 3://Empresas
	$vemp=1;
	$t3="EMPRESAS";
	break;
	
	case 4://Imgmenu
	$vimg_m=1;
	$t4="IMG_MENU";
	break;
	
	case 5://Stands
	$vstand=1;
	$t5="STANDS";
	break;
	
	case 6://Img colorear
	$vimg_c=1;
	$t6="IMG_COLOREAR";
	break;
	
	case 7://Actividades
	$vact=1;
	$t7="ACTIVIDADES";
	break;
	
	case 8://Testimonios
	$vtes=1;
	$t8="TESTIMONIOS";
	break;
	
	case 9://Formatos
	$vform=1;
	$t9="FORMATOS";
	break;
		
	case 10://Concursos
	$vconc=1;
	$t10="CONCURSOS";
	break;
	}
	
} 
unset($value); 



if ($idr<>0){
	//Actualizando regiro existente
$pe=mysql_query("update exua set explx='$vlogo',  expicol='$vimg_c', expems='$vemp', expsns='$vstand', expfrs='$vform', exptes='$vtes', expacv='$vact', expgs='$vgal', expimms='$vimg_m',expcon='$vconc' where idusuario='$puser'");	

$id=$idr;

}else{
//Insertando registro nuevo
$pe=mysql_query("insert into exua (explx, expus, expicol, expems, expsns, expfrs, exptes, expacv, expgs, expimms, expcon, idusuario) values ('$vlogo', 0,'$vimg_c', '$vemp', '$vstand','$vform','$vtes','$vact','$vgal','$vimg_m','$vconc','$puser')");
$id=mysql_insert_id();
}

//Info del usuario
$info=mysql_query("select idusuario,nombres, apellidopaterno from usuarios where idusuario='$puser'");
$vinfo=mysql_fetch_array($info);
$nom_usuario=$vinfo['nombres']." ".$vinfo['apellidopaterno'];

$idusuariocon=$vinfo['idusuario'];

//Info en bitácora
$fechab=date("Y-m-d");
$horab=date("g:i a"); //Formato de 12 horas
$tabla="EXUA" ;
$accion="ACTIVACION PERMISOS EN LA(S) SIGUIENTE(S) AREA(S): ". $t1." ".$t2." ".$t3." ".$t4." ".$t5." ".$t6. " ". $t7. " ".$t8." ".$t9." ".$t10." AL USUARIO ".$nom_usuario;
$insertb=mysql_query("insert into bitacora values (0,'$fechab','$horab','$id','$tabla','$accion','$usuario ')");


echo '<script language=Javascript> window.close();</script>';

}//Termina el post




?>


</head>



<body topmargin="0px" style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:12px">

<table width="553" border="0" align="center">

<form id="form1" name="form1" method="post" action="actividades_usuarioi.php">

  <tr>
    
    <td>	</td>
    
  </tr>

  <tr>
    <td align="center"><img src="../images/expoferia_logo.png" /></td>
  </tr>
  <tr>
    
    <td >
    <br><center>
      
      <span style="font-size:12px; font-weight:bold">Usuario: <span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"> <?php echo strtoupper($nom_usu) ?></span></span><br><br>
      <center><img src="../images/separador.gif" width="430"></center><br>
     <span style="font-size:12px"> Permisos de acceso al panel de administraci&oacute;n</span>
      </center>
      <br>
  <table width="555">
  <tr>
  <td width="126" align="center"><label for="logo"><span style="font-size:12px">Logo</span></label><br><input type="checkbox" name="casilla[]" id="logo" value="1" <?php echo $x1 ?>>
    </td>
  <td width="115" align="center"><label for="logo2"><span style="font-size:12px">Galerías</span></label>
    <br>
    <input type="checkbox" name="casilla[]" id="galerias" value="2" <?php echo $x2 ?>></td>
    <td width="106" align="center"><label for="logo3"><span style="font-size:12px">Empresas</span></label>
      <br>
      <input type="checkbox" name="casilla[]" id="empresas" value="3" <?php echo $x3 ?>></td>
    <td width="113" align="center"><label for="logo4"><span style="font-size:12px">Imágenes menú</span></label>
      <br>
      <input type="checkbox" name="casilla[]" id="img_menu" value="4" <?php echo $x4 ?>></td>
    <td width="71" align="center"><label for="logo5"><span style="font-size:12px">Stands</span></label>
      <br>
      <input type="checkbox" name="casilla[]" id="stands" value="5" <?php echo $x5 ?>></td>
    
  </tr>
  <tr>
    <td align="center"><label for="logo10"><span style="font-size:12px">Conferencias</span></label>
      <br>
      <input type="checkbox" name="casilla[]" id="img_colorear" value="6" <?php echo $x6 ?>></td>
    <td align="center"><label for="logo9"><span style="font-size:12px">Actividades</span></label>
      <br>
      <input type="checkbox" name="casilla[]" id="actividades" value="7" <?php echo $x7 ?>></td>
    <td width="106" align="center"><label for="logo8"><span style="font-size:12px">Testimonios</span></label>
      <br>
      <input type="checkbox" name="casilla[]" id="testimonios" value="8" <?php echo $x8 ?>></td>
    <td width="113" align="center"><label for="logo7"><span style="font-size:12px">Formatos</span></label>
      <br>
      <input type="checkbox" name="casilla[]" id="formatos" value="9" <?php echo $x9 ?>></td>
    <td width="71" align="center"><label for="logo6"><span style="font-size:12px">Concursos</span></label>
      <br>
      <input type="checkbox" name="casilla[]" id="concursos" value="10" <?php echo $x10 ?>></td>
  </tr>
  </table>
      
      
      
      
      
      
      </td>
    
  </tr>

  <tr>

    <td>

     

      <div align="center">

        <input name="idusu"  id="idusu" type="hidden" value="<?php echo $id_usuario?>" />
        
        <input name="idregistro"  id="idregistro" type="hidden" value="<?php echo $idregistro?>" />
        <input name="si" type="submit" id="si" value="Aceptar"  class="colorfondo" />&nbsp;&nbsp;
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

