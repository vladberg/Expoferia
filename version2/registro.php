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

          echo $tranx="insert into registro (nombre_empresa,direccion,telefono,web,email,giro,imagen,nombre_contacto,fecha_registro)  values('$nombre','$direccion','$telefono','$web','$email','giro','$foto','$contacto',NOW())";

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
  .btn {
    display: inline-block;
    padding: 6px 60px;
    margin-bottom: 0;
    font-size: 21px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
table {
    background-color: transparent;
    margin-top: 76px !important;
}
#msgContainer{



  padding-top:10px;



  padding-bottom:10px;



  text-align:center;



  font-family:Verdana, Arial, Helvetica, sans-serif;



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

  <body>

          <div class="masthead clearfix">

            <div class="inner">

              <nav>

                <ul class="nav masthead-nav">

                  <li><img class="ico" src="img/logoEXPOFORO.png"></li>

                  <li><a href="index.html">INICIO</a></li>

                  <li><a href="expoforo.html">EXPO</a></li>

                  <li><a href="stand.html">STANDS</a></li>

                  <li><a href="costos.html">COSTOS</a></li>

                  <li class="active"><a href="#">DIRECTORIO</a></li>

                  <li><a href="patrocinador.html">PATROCINADORES</a></li>

                  <li><a href="contacto.php">CONTACTO</a></li>

                  <li><a href="https://www.facebook.com/expoforoambiental/" target="_blank"><img class="social" src="img/facebook.png"></a></li>

                  <li><img class="icox" src="img/SEDUMACANACO.png" alt="Imagen" /></li>

                </ul>

              </nav>

            </div>

            </div>

    <div class="container">

<div class="direc"><br/>

<div class="table-responsive">

 
  <form id="form" name="form" action="" method="post" enctype="multipart/form-data" class="niceform" role="form">
   <table class="table">
   <tr>

    <th abbr="Imagen del producto" scope="col"><h2>Directorio verde Registro</h2></th>

  </tr>
  


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
    <td><button type="button" class="btn btn-info" value="enviar" onclick="admRegistro(this.form.filefoto.value);">Enviar</button></td>
  </tr>
</table>
</form>
</div>
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

     <?php
     footer();
     ?>