<?php
include_once("lib/template.php");


error_reporting(0);

$id_categoria=$_GET['id'];







if($_POST){



$nombre = $_POST['nombre'];



$asunto = $_POST['asunto'];



$email = $_POST['email'];



$telefono = $_POST['telefono'];

$empresa = $_POST['empre'];



$text = $_POST['mensaje'];







//Librerías para el envío de mail



include_once('PHPMailer/class.phpmailer.php');



include_once('PHPMailer/class.smtp.php');



 



//Recibir todos los parámetros del formulario



//$para = 'ventas@sartory.mx';



$para = 'itzimna@hotmail.com';



$asunto = 'Contacto Expoforoambiental';



$mensaje = '<h2>'.$nombre.'</h2><h3>'.$empresa.'<h3>'.$email.'</h3><h3>'.$telefono.'</h3><h3>'.$text.'</h3>';



$archivo = $imagen;



 



//Este bloque es importante



$mail = new PHPMailer();



$mail->IsSMTP();



//$mail->SMTPAuth = true;



$mail->SMTPSecure = "tsl";



$mail->Host = "localhost";



$mail->Port = 25;



 



//Nuestra cuenta



//$mail->Username ='bergman.pereira.novelo@gmail.com';



//$mail->Password = 'vladberg01'; //Su password



 



//Agregar destinatario



$mail->AddAddress($para);



$mail->Subject = $asunto;



$mail->Body = $mensaje;



//Para adjuntar archivo



$mail->AddAttachment($archivo, $archivo);



$mail->MsgHTML($mensaje);



  



//Avisar si fue enviado o no y dirigir al index



if($mail->Send())



{



    echo'<script type="text/javascript">



            alert("Enviado Correctamente");            



         </script>';



}



else{



    echo'<script type="text/javascript">



            alert("NO ENVIADO, intentar de nuevo");



         </script>';



}



 }

cabezal();

?>



  <div class="container">



      <div class="inner cover"><br/>

    

            <h1 class="cover-heading"><img class="dx" src="img/logoEXPOFORO.png"></h1><br/>



  <h3>Contáctanos con gusto te atenderemos</h3><br/>



  <form role="form" method="post" action="">

    <div class="form-group">

     

    <div class="col-lg-10">

      <input class="form-control" name="nombre" type="text" id="nombre" placeholder="Nombre" required="required" >

    </div><br/>

  </div><br/>

    <div class="form-group">

      

    <div class="col-lg-10">

      <input type="text" class="form-control" id="empre" name="empre" placeholder="Empresa" required="required"  >

  </div>

  </div><br/><br/>

  <div class="form-group">

      

    <div class="col-lg-10">

      <input class="form-control" name="email" type="email" id="email" placeholder="Email" required="required" >

  </div>

  </div><br/><br/>

  <div class="form-group">

    <div class="col-lg-10">

      <input class="form-control" name="telefono" type="text" id="telefono" placeholder="Teléfono" required="required"  >

  </div>

  </div><br/><br/>

  <div class="form-group">

    <div class="col-lg-10">

      <textarea class="form-control" rows="3" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea><br/>

  </div>

  <div class="col-lg-10" aling="center">

    <button type="submit" class="btn btn-info" value="enviar">Enviar</button>

  </div>

  </div>

  

  

</form><br/>



<div>

  <p></p><br/>

          </div><br/><br/>

        <br/><br/><H3>INFORMES: 428850 EXT 125,126 Y 127<br/>

        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> desarrollocomercial@canacomerida.com</H3> 

      </div>



      </div>

   <?php
   footer();
   ?>