<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <link href="img/icon.png" type="image/x-icon" rel="shortcut icon" />



    <title>Expoforo ambiental</title>

    

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->

    <link href="css/fondo.css" rel="stylesheet">

    <link href="css/cover.css" rel="stylesheet">

    <link href="css/blog.css" rel="stylesheet">

  <link href="css/extras.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    



    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->

    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <script src="js/ie-emulation-modes-warning.js"></script>
    <style type="text/css">
.table1 {
    background-color: transparent;
    margin-top: -21px !important;
}
    </style>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

  </head>

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

      <table summary="Tabla con los datos de los resultados de la búsqueda" class="table table-bordered">

  <tr>

    <th abbr="Imagen del producto" scope="col"><h2>Directorio de empresas verdes</h2><br/><h3><a href="registro.php">Registrate</a></h3></th>

  </tr>

  </table>
<table summary="Tabla con los datos de los resultados de la búsqueda" class="table1 table table-bordered">

   <?php
   include_once("lib/conexion.php");
   $link=conectarse();
   $query="select * from registro";
$resultado=mysql_query($query, $link);

              //echo $resultado;



              $icont=0;

              $class='success';
              if(mysql_num_rows($resultado)>0){



                while($row = mysql_fetch_array($resultado)){ 
                  $nombre_empresa=$row['nombre_empresa'];
                  $direccion=$row['direccion'];
                  $telefono=$row['telefono'];
                  $web=$row['web'];
                  $email=$row['email'];
                  $image=$row['imagen'];
                  $giro=$row['giro'];

   ?>
<tr>

    <td style="text-align:center">

  <h3><a href="<?php echo $web;?>" title="Ver más información sobre la empresa" target="_blank"><?php echo $nombre_empresa;?> </a></h3>

      <img class="canaco" src="empresas/<?php echo $image;?>" alt="<?php echo $nombre_empresa;?>" />

    

      <p aling="center"><strong>Dirección:</strong> <?php echo $direccion;?></a></p>

      <p><strong>Telefono:</strong><?php echo $telefono;?></p>

      <p><strong>Web:</strong><a href="http://<?php echo $web;?>" title="<?php echo $nombre_empresa;?>" target="_blank"> <?php echo $web;?></a></p>

      

      <p><strong>Email:</strong> <?php echo $email;?></p>

    </td>

   

  </tr>
 
<?php }
}
?>
</table>

</div>

      <footer class="blog-footer">

      <a href="#" target="_blank"><img class="icono" src="img/SOLARSOL LOGO.png" style="width: 300px !important;padding-rigth:25px"></a>

      <a href="#" target="_blank"><img class="icono" src="img/roche.png"></a>

    </footer>

</div>

</div>

  </body>

</html>