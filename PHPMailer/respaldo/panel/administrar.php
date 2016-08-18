<?php

session_start();
$ids = $_SESSION['idusuario'];
$usuario = $_SESSION['usuario'];

/*yo verifico de la siguiente forma sin problemas pero

puedes verificar de la forma que quieras, por ejemplo

con isset*/

if($ids<>"" && $usuario<>"")

{

require_once('procesos/Frpalabras.php');

require_once("conecta.php");

$link=Conectarse();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>.:: El makech - Administrar blogs ::.</title>
 <link rel="stylesheet" href="css/style_admin.css" type="text/css" media="all">
<!--Para apertura de páginas -->

<script language="JavaScript"> 

function  WEtitulo (pagina) {

var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=si, width=500, height=400, top=200, left=250";

Elcmnd=window.open(pagina,"",opciones);

}





function  elimblog (pagina) {

var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=si, width=500, height=370, top=200, left=250";

Elcmnd=window.open(pagina,"",opciones);

}



</script> 

</head>



<body topmargin="40px" style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:12px">

<div id="encabezado"><center><img src="images/makech_logo_admin.png" /></center></div>

<div id="columna_izquierda">
     <table align="center">

        <tr>

          <td>&nbsp;</td>

          <td colspan="2"><hr /></td>

          <td>&nbsp;</td>

        </tr>

        <tr>

          <td>&nbsp;</td>

          <td width="442"> <b>Bienvenido(a)</b> &nbsp;<span style="font-size:16px; color:#00F; font-weight:bold; letter-spacing:1px"><?php echo strtoupper($usuario) ?></span></td>
          <td width="275" align="right"><span style="text-align:right"><a href="crearblog.php" class="ligas">Crear Blog</a><!--&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="menu_administracion.php" class="ligas">Menu principal</a>-->&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="finaliza.php" class="ligas">Cerrar Sesi&oacute;n</a> </span></td>

          <td>&nbsp;</td>

        </tr>

        <tr>

          <td width="1">&nbsp;</td>

          <td colspan="2"><h2>Administrar blogs</h2>

            <br />

            <?php 

		  //Consulta para obtener datos de los blogs que le pertenecen al usuario que ha iniciado sesión

		  $misblogs=mysql_query("select * from blog order by dfecha desc,iidblog desc");

		  $cmisblog=mysql_num_rows($misblogs);

		  

		  

		  

		  if ($cmisblog<>0){

		   while($vmisblog=mysql_fetch_array($misblogs)){

		   $titulo=$vmisblog['vtitulo'];

		   $fechablog=$vmisblog['dfecha'];

		   $iidblogE=$vmisblog['iidblog'];

		   $Url1=$vmisblog['vurl'];

		   //Dando formato día, fecha y año//

 			$dia=substr($fechablog,8,2);

 			$mes=substr($fechablog,5,2);

 			$anio=substr($fechablog,0,4);

 			$formfecha= $dia."-".$mes."-".$anio;

		   ?>

            <table width="721" border="0" align="center">

              <tr>

                <td colspan="4"><span style="color:#000000; font-weight:bold"><?php echo strtoupper(utf8_decode($titulo)); ?></span></td>

              </tr>

              <tr>

                <td height="28" colspan="4"><?php $rutita="blogs/".$Url1 ?>

                  <span style="color:#666666">&Uacute;ltimo tema publicado el d&iacute;a <?php echo $formfecha ?> &nbsp; <a href="<?php echo $rutita ?>" target="_blank"> Ver Blog</a></span></td>

              </tr>

              <tr>

                <td bgcolor="#056839"><div align="center"><span style="color:#FFFFFF"> Temas </span></div></td>

                <td colspan="3" bgcolor="#056839"><div align="center"><span style="color:#FFFFFF"> Blog </span></div></td>

              </tr>

              <tr>

                <td><div align="center"><a href="temasblog.php?Ident=<?php echo $iidblogE  ?>">Administrar</a></div></td>

                <td width="178"><div align="center"><a href="#" onclick="javascript:WEtitulo('MimagenBlog.php?Ident=<?php echo $iidblogE ?>')" class="Lkpfl">Cambiar imagen |</a></div></td>

                <td width="142"><div align="center"><a href="#" onclick="javascript:WEtitulo('edtitblog.php?Ident=<?php echo $iidblogE ?>')" class="Lkpfl"> Editar </a> |</div></td>

                <td width="121"><div align="center"><a href="#" onclick="javascript:elimblog('delBblog.php?Ident=<?php echo $iidblogE ?>')"class="Lkpfl"> Borrar </a></div></td>

              </tr>

              <tr>

                <td colspan="4"><hr /><br /></td>

              </tr>

            </table>

            <?

		   }//Cierra el while

		  

		  

		  }else{

		  ?>

            <table align="center">

              <tr>

                <td><center>

                  <img src="images/no results.png" /><br />

                  No hay blogs registrados

                </center></td>

              </tr>

            </table>

            <br />

            <br />

            <div id="lineinf"></div>

            <?

		  }//Cierra el if

		  

		 

		  

		  

		  ?>

            <!--Cuerpo listado de blogs -->

            <!--Termina cuerpo listado de blogs--></td>

          <td width="1">&nbsp;</td>

        </tr>

        <tr>

          <td height="47">&nbsp;</td>

          <td colspan="2"><br />

            <br />

            <div id="div"></div></td>

          <td>&nbsp;</td>

        </tr>

      </table>

</div>

</body>

</html>

<?php 

}

else 

{
@include("finaliza.php");
header("Location:acceso.php");

/*

En este caso mostramos otra pagina

con un mensaje. 

puedes añadir un link a la pagina de inicio de sesion

o mandar directamente a la pagina loguear.php

sin mostrar nada eso depende de ti

*/

}

?>