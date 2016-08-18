<?php
include_once("lib/template.php");
cabezal();
?>
    <style type="text/css">
.table1 {
    background-color: transparent;
    margin-top: -21px !important;
}
    </style>
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

      <?php
footer();
?>