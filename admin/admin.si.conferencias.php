
<?php
error_reporting(0);

	require_once 'lib/login.action.php';

	$membership = new loginActions();

	$membership->confirm_Member2(); 

	include_once("lib/template.php");
	include_once("lib/files.admin.php");

  //include_once("lib/util.php");

	//include_once("lib/sql.injection.php");

	include_once("lib/sanitize/sanitize.php");
	
	$link=conectarse();
	$ruta_files='../expositores/';

	

	if($_POST && !empty($_POST["opc"])){

		$opcion=$_POST["opc"];

	}

	else{

		$opcion=$_GET["opc"];

	}

	
$user=$_SESSION['admin_user'];


	$publicar='';
 
	
	$idreg=0;


	if($opcion=='UPD'){

		$idreg=intval($_GET["id"]);

		echo $query="SELECT responsable,conferencia,fecha,hora,estatus,clase FROM conferencias where idconferencias=$idreg limit 1;";

		$resultado=mysql_query($query, $link);

		if(mysql_num_rows($resultado)>0){

			$row = mysql_fetch_row($resultado);

			$expositor = $row[0];

			$conferencia = $row[1];

			$fecha = $row[2];

			$hora = $row[3];
			
			$publicar = $row[4] ;	

			$empresa = $row[5];		

		}

	}

	else{

		if($opcion=='SAVE'){

			$idreg=intval($_POST["id"]);

			
	$conferencia=$_POST['tema'];
	$empresa=$_POST['empresa'];
	$expositor=$_POST['expositor'];

	$fecha = $_POST['fecha'];

	$hora = $_POST['hora'];

	$sede = $_POST['sede'];
			

			$publicar=0;

			if ($_POST["publicar"]=='on'){

				$publicar=1;

			}
			
			$urlfile=$HTTP_POST_FILES["filefoto"];
			$target_path = "../expositores/";
            $target_path = $target_path . basename( $_FILES['filefoto']['name']);

			if(!empty($_FILES['filefoto']['name'])){

				if(move_uploaded_file($_FILES['filefoto']['tmp_name'], $target_path)) {
				

					$foto=$_FILES['filefoto']['name'];

					mysql_query("BEGIN");

					if($idreg!=0){
						//echo $foto;

						 $tranx="update expositores set nombre='$titulo',imagen='$foto',estatus='$publicar'where id_expositor=$idreg";

						$ca = 'MODIFICAR NOTIFICACIÓN';

						$rtranx=mysql_query($tranx, $link);

					}

					else{

						$tranx="insert into expositores (nombre,imagen,estatus)  values('$titulo', '$foto',$publicar)";

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

				else{

						$estatus="ERROR";

				}

			}

			else{

				mysql_query("BEGIN");

				if($idreg!=0){
					//echo $foto=$_POST["hiurl"];

					echo $tranx="update conferencias set responsable='$expositor',clase='$empresa',conferencia='$conferencia',fecha='$fecha',hora='$hora',estatus='$publicar',sede='$sede' where idconferencias=$idreg";

								

					$ca = 'MODIFICAR NOTIFiCACIÓN';

					$rtranx=mysql_query($tranx, $link);

					$foto=Formatear($_POST["hiurl"]);

					$error1 = mysql_error(); //Bitácora

					$query1 = $tranx; //Bitácora

				}else{

					echo $tranx="insert into conferencias (responsable,clase,conferencia,fecha,hora,estatus,sede)  values('$expositor','$empresa','$conferencia','$fecha','$hora',$publicar,'$sede')";

						  

					$ca = 'ALTA DE NOTIFICACIÓN';	  

					$rtranx=mysql_query($tranx, $link);

					$idreg = mysql_insert_id($link);

				}

				

				if(!$rtranx) 

				{

					mysql_query("ROLLBACK");

					$estatus="ERROR";

				}

				else{

					mysql_query("COMMIT");

					$estatus="OK";

				}

			}

		}

	}

cabezal(); ?>
<script language="javascript" src="js/datevalid.js" type="text/javascript"></script>

<script language="javascript" src="js/jquery-1.2.6.min.js" type="text/javascript"></script>

<script language="javascript">

function confirmar ( mensaje ) { 
return confirm( mensaje ); 
} 

function admRegistroupd() { 
   extensiones_permitidas = new Array(".jpg",".png"); 
   mierror = "";

	var msgError = "";

	if($("#titulo").val() == ''){

		msgError = msgError + "- Titulo .\n";

	}


	/*if($("#hiurl").val() == ''){

		if($("#filefoto").val() == ''){

			msgError = msgError + "- Archivo de la Notificación.\n";

		}
		

	}
	
	

	if($("#piefoto").val() == ''){

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

	$("#opc").val("SAVE");

	$("#form").submit();

}

function admRegistro(archivo) { 
   extensiones_permitidas = new Array(".jpg",".png");
   mierror = "";

	var msgError = "";

	if($("#titulo").val() == ''){

		msgError = msgError + "- Titulo .\n";

	}


	if($("#hiurl").val() == ''){

		if($("#filefoto").val() == ''){

			msgError = msgError + "- Archivo .\n";

		}
		

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
        $("#opc").val("SAVE");

	    $("#form").submit();
         return 1; 
      	} 
   } 
   //si estoy aqui es que no se ha podido submitir 
   alert (mierror); 
   return 0; 

	

}


function actualizarLista(){

	var array_data = new Array();

	array_data[0] = $("#idRow").val();

	array_data[1] = $("#id").val();

	array_data[2] = '<? echo $titulo; ?>';
	
	array_data[3] = '<? echo $departamento; ?>';

	array_data[4] = '<? if ($publicar=='S'){echo 'publicado.gif';} else{echo 'no_publicado.gif';} ?>';
	array_data[5] = 'delete.gif';

	parent.parent.refreshNoticia(array_data);

}

function ocultaMensaje(){

	try{

		//$('#msgContainer').css('display','none');

		$('#msgContainer').html('&nbsp;');

		$('#msgContainer').attr('className','');

	}

	catch(error){

	}

}

$(document).ready(function(){

	$('input[type="text"]').change(ocultaMensaje);

	$('select').change(ocultaMensaje);

	$('input[type="checkbox"]').click(ocultaMensaje);

});

</script>

<!--[if !IE]>-->  


<!--<![endif]-->

<!--[if IE]>

<link href="script/niceforms/niceforms-default-ie.css" type="text/css" rel="stylesheet" />

<![endif]-->
<style>

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
<?php body(); ?>

 <div id="page-wrapper" >

        <div class="row">
          <div class="col-lg-8">
            <h1>Panel de Control <small>Administrador</small></h1>
           <br/>
          </div>
        </div>
        
            <div class="row" >
             <div class="col-lg-8">
            <div class="row">
  	          <div class="col-md-6"><h2>Nueva Conferencia</h2></div>
              </div>
              <form id="form" name="form" action="" method="post" enctype="multipart/form-data" class="niceform">

	<fieldset>

	<? if(isset($estatus) && $estatus == "OK" && $user!='admin'){ ?>

	<div id="msgContainer" class="saved">Se ha guardado correctamente la 

informaci&oacute;n. <a href="filtro_conferencias.php" onClick="actualizarLista();">Ver lista 

Actualizada.</a></div>

	<? }
	if(isset($estatus) && $estatus == "OK" && $user=='admin'){ ?>

	<div id="msgContainer" class="saved">Se ha guardado correctamente la 

informaci&oacute;n. <a href="filtro_conferencias.php" onClick="actualizarLista();">Ver lista 

Actualizada.</a></div>

	<? }

	   if(isset($estatus) && $estatus == "ERROR"){	?>

	<div id="msgContainer" class="error">Ocurrio un error al intentar guardar la 

informacion. Por favor Intenta de Nuevo.</div>

	<? } ?>

	<? if(!isset($estatus)){ ?><div>&nbsp;</div><? } ?>

	<input type="hidden" id="id" name="id" value="<? echo $idreg; ?>" />

	<input type="hidden" id="idRow" name="idRow" value="<? echo $_GET["rowId"]; ?>" />

	<input type="hidden" id="opc" name="opc" value="" />
    
    </br>


    <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter" align="center">
    	
        	
        <tr>
        	<td><label>TEMA</label></td>
            <td><input class="form-control" placeholder="Nombre de la Conferencia" type="text" id="titulo" name="tema" value="<?php echo $conferencia; ?>"></td>
        </tr>
        <tr>
        	<td><label>EMPRESA/INSTITUCIÓN</label></td>
            <td><input class="form-control" placeholder="Nombre de la Empresa/Institución" type="text" id="titulo" name="empresa" value="<?php echo $empresa; ?>"></td>
        </tr>
        <tr>
        	<td><label>EXPOSITOR Y/O RESPONSABLE</label></td>
            <td><input class="form-control" placeholder="Nombre del Expositor y/o Responsable" type="text" id="titulo" name="expositor" value="<?php echo $expositor; ?>"></td>
        </tr>
         <tr>
        	<td><label>SEDE</label></td>
            <td><input class="form-control" placeholder="Nombre de la Sede" type="text" id="titulo" name="sede" value="<?php echo $sede; ?>"></td>
        </tr>
        
       <tr>
       	<td><label>Fecha de la confencia</label></td>
       	<td><input type="date" class="form-control" name="fecha" step="1" min="01-01-2013" max="12-31-2013" value="<?php echo date("Y-m-d");?>"></td>
       </tr>
         <tr>
         	<td><label>Hora de la Conferencia</label> </td>
         	<?php 
         	ini_set('date.timezone','America/Mexico_City'); 
            $hora=date("g:i:s A"); 
            ?>
         	<td><input type="time" class="form-control" name="hora" value="11:45:00" max="22:30:00" min="10:00:00" step="1"></td>
         </tr>
         <tr>
         <td><label>Publicar:</label></td>
            <td><input class="checkbox" name="publicar" id="publicar" type="checkbox" <? if ($publicar==1) { echo 'checked="checked"'; } ?>/></td>
        </tr>
    </table>
    </div>
   </fieldset>
   <?php if($opcion=="UPD"){?>
   
    <div class="modal-footer">
                    <a href="filtro_conferencias.php" onclick="return confirmar('¿Est&aacute; seguro que desea salir,no se guardara el registro?')"><button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button></a>
                    <button type="button" class="btn btn-primary" name="guardar" id="guardar" value="Guardar" onclick="admRegistroupd(this.form.value);">Guardar</button>
                </div>
                <?php } ?>
                <?php if($opcion!="UPD" && $user=='admin'){?>
    <div class="modal-footer">
                    <a href="filtro_conferencias.php" onclick="return confirmar('¿Est&aacute; seguro que desea salir,no se guardara el registro?')"><button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button></a>
                    <button type="button" class="btn btn-primary" name="guardar" id="guardar" value="Guardar" onclick="admRegistroupd(this.form.value);">Guardar</button>
                </div>
                <?php } ?>
                <?php if($opcion!="UPD" && $user!='admin'){?>
    <div class="modal-footer">
                    <a href="filtro_conferencias.php" onclick="return confirmar('¿Est&aacute; seguro que desea salir,no se guardara el registro?')"><button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button></a>
                    <button type="button" class="btn btn-primary" name="guardar" id="guardar" value="Guardar" onclick="admRegistroupd(this.form.value);">Guardar</button>
                </div>
                <?php } ?>
    </form>
    

               
        </div>
        </div>
        </div>
              
    
<?php footer(); ?>
    