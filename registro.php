<?php
error_reporting(0);
include_once("lib/sanitize/sanitize.php");
include_once("lib/template.php");

  

  $link=conectarse();
  $ruta_files='empresas/';
  if($_POST ){

      

      $urlfile=$HTTP_POST_FILES["filefoto"];
      $nombre = $_POST['nombre'];
      $direccion = $_POST['direccion'];
      $telefono = $_POST['telefono'];
      $web = $_POST['web'];
      $email = $_POST['email'];
      $giro = $_POST['giro'];
      $contacto=$_POST['contacto'];

      $target_path = "empresas/";

            $target_path = $target_path . basename( $_FILES['filefoto']['name']);



      if(!empty($_FILES['filefoto']['name'])){



        if(move_uploaded_file($_FILES['filefoto']['tmp_name'], $target_path)) {

          $foto=$_FILES['filefoto']['name'];

          mysql_query("BEGIN");

          $tranx="insert into registro (nombre_empresa,direccion,telefono,web,email,giro,imagen,nombre_contacto,fecha_registro)  values('$nombre','$direccion','$telefono','$web','$email','$giro','$foto','$contacto',NOW())";

            $rtranx=mysql_query($tranx, $link);

            $idreg = mysql_insert_id($link);


          }

          if(!$rtranx) 

          {

            mysql_query("ROLLBACK");

            //deleteFiles($ruta_files.$HTTP_POST_FILES["filefoto"]['name']);

            $estatus="ERROR";

          }

          else{

            mysql_query("COMMIT");

            $estatus="OK";

          }
        }
  }
  cabezal();
?>
<script language="javascript" src="js/datevalid.js" type="text/javascript"></script>



<script language="javascript" src="js/jquery-1.2.6.min.js" type="text/javascript"></script>

  <style type="text/css">

#msgContainer{



  padding-top:10px;



  padding-bottom:10px;



  text-align:center;
font-size:12px;



  width:100%;



}







#msgContainer a{



  text-decoration:none;



  color:#0066FF;



}







div.saved{



  background:#99FF99;



  border-top:1px solid #339900;



  border-bottom:1px solid #339900;



}



div.error{



  background:#FFCCCC;



  border-top:1px solid #FF3366;



  border-bottom:1px solid #FF3366;



}

</style>
<script type="text/javascript">
  function admRegistro(archivo) { 

      expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

   extensiones_permitidas = new Array(".jpg",".png",".gif");

   mierror = "";



  var msgError = "";



  if($("#nombre").val() == ''){



    msgError = msgError + "- Nombre de la empresa .\n";



  }
  if($("#email").val() == ''){

    msgError = msgError + "- Email .\n";
  } 
  if ( $("#email").val() != '' && !expr.test($("#email").val()) ){
         msgError = msgError + "Error: La dirección de correo es incorrecta .\n";;
      }





  
    if($("#filefoto").val() == ''){



      msgError = msgError + "- Archivo .\n";



    }

  



  /*if($("#piefoto").val() == ''){



    msgError = msgError + "- Pie de Foto.\n";



  }*/



  // para validar la fecha mm/dd/yyyy



  /*var dt=$("#cbmes").val()+"/"+$("#cbdia").val()+"/"+$("#cbanio").val();



  if (isDate(dt)==false){



    msgError = msgError + "- Fecha no válida.\n";



  }*/



  if(msgError != ""){



    alert("Por favor, escriba información en los siguientes campos:\n"+msgError);



    return false;



  }

  if (!archivo) { 

      //Si no tengo archivo, es que no se ha seleccionado un archivo en el formulario 

        mierror = "No has seleccionado ningún archivo"; 

   }else{ 

      //recupero la extensión de este nombre de archivo 

      extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase(); 

      //alert (extension); 

      //compruebo si la extensión está entre las permitidas 

      permitida = false; 

      for (var i = 0; i < extensiones_permitidas.length; i++) { 

         if (extensiones_permitidas[i] == extension) { 

         permitida = true; 

         break; 

         } 

      } 

      if (!permitida) { 

         mierror = "Comprueba la extension de los archivos a subir. \nSolo se pueden subir archivos con extensiones: " + extensiones_permitidas.join(); 

        }else{ 

           //submito! 

         alert ("Todo correcto...guardando  la informacion"); 

        
      $("#form").submit();

         return 1; 

        } 

   } 

   //si estoy aqui es que no se ha podido submitir 

   alert (mierror); 

   return 0; 



  



}

function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) )
        alert("Error: La dirección de correo es incorrecta.");
}
</script>
<section class="bg-success">
	<article class="container seccion-30">
		<h4 class="text-center text-blanco">Registro Directorio Verde</h4>
	</article>
</section>
<section>
<article class="container " style="background:url(img/jaguar.png) no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;;width: 100%;height: 750px">
		
<div class="form-group" style="    text-align: center;    margin-left: 30%;    width: 600px;">
<form id="form" name="form" action="" method="post" enctype="multipart/form-data" class="niceform" role="form">
   <table class="table table-responsive">
   <tr>
    <td><input class="form-control" name="nombre" type="text" id="nombre" placeholder="Nombre de la empresa" required="required"></td>
  </tr>
    <tr>
    <td><input class="form-control" name="direccion" type="text" id="direccion" placeholder="Dirección de la empresa" required="required"></td>
  </tr>
   <tr>
    <td><input class="form-control" name="telefono" type="text" id="telefono" placeholder="Telefono de la empresa" required="required"></td>
  </tr>
   <tr>
    <td><input class="form-control" name="web" type="text" id="web" placeholder="Pagina web" required="required"></td>
  </tr>
  <tr>
    <td><input class="form-control" name="contacto" type="text" id="contacto" placeholder="Nombre de contacto" required="required"></td>
  </tr>
   <tr>
    <td><input class="form-control" name="email" type="text" id="email" placeholder="Email de contacto" required="required"></td>
  </tr>
   <tr>
    <td><input class="form-control" name="giro" type="text" id="giro" placeholder="Giro de la empresa" required="required"></td>
  </tr>
   <tr>
    <td><input class="form-control" name="filefoto" id="filefoto" type="file" ></td>
  </tr>
   <tr>

    <td><a href="directorio.php"><button type="button" class="btn btn-default" value="regresar" >Regresar</button></a> <button type="button" class="btn btn-info" value="enviar" onclick="admRegistro(this.form.filefoto.value);">Enviar</button></td>
  </tr>
</table>
</form>

<? if(isset($estatus) && $estatus == "OK" && $user!='admin'){ ?>



  <div id="msgContainer" class="saved">Se ha guardado correctamente la 



informaci&oacute;n. <a href="directorio.php" onClick="actualizarLista();">Ver lista 



Actualizada.</a></div>



  <? }

  if(isset($estatus) && $estatus == "OK" && $user=='admin'){ ?>



  <div id="msgContainer" class="saved">Se ha guardado correctamente la 



informaci&oacute;n. <a href="directorio.php" onClick="actualizarLista();">Ver lista 



Actualizada.</a></div>



  <? }



     if(isset($estatus) && $estatus == "ERROR"){  ?>



  <div id="msgContainer" class="error">Ocurrio un error al intentar guardar la 



informacion. Por favor Intenta de Nuevo.</div>



  <? } ?>
  </div>
	</article>
</section>
<?php
footer();
?>