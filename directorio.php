<?php
error_reporting(0);
include_once("lib/template.php");
cabezal();
?>
<section class="bg-success">
  <article class="container seccion-30">
    <h4 class="text-center text-blanco">Directorio Verde</h4>
  </article>
</section>
    <div class="container">

<div class="direc"><br/>

<div class="table-responsive">

      <table summary="Tabla con los datos de los resultados de la búsqueda" class="table table-responsive">

  <tr>

    <th  abbr="Imagen del producto" scope="col">
    <form action="busqueda.php" method="post">

                  <input name="buscar" maxlength="50" type="text" size="20"  placeholder="¿Qué estás buscando?" style="width: 400px !important">

                  <button type="submit" title="Buscar" class="fa fa-search">

                  </button>

                </form>
                <div style="color: #999;text-aling:rigth;">

          <form name="form" method="post" action="">

                    Ordenar por: <select name="ordenar" onchange="this.form.submit()">

      <option value="0">-- Seleccionar --</option>

        <option value="1">Nombre ascendente</option>

    <option value="2">Nombre descendente</option>

    <option value="3">Giro</option>

    <option value="4">Mas nuevo</option>

  </select>

          </form></div> </th><th><h3><a href="registro.php">Registrate</a></h3></th>

  </tr>

  </table>
<table summary="Tabla con los datos de los resultados de la búsqueda" class="table table-bordered table-responsive">

   <?php
   include_once("lib/conexion.php");
   $link=conectarse();
   $ordenar=$_POST['ordenar'];
 $query="select * from registro order by nombre_empresa asc";
   if($ordenar == '1'){

            $query="select * from registro order by nombre_empresa asc;";

          }

          if ($ordenar == '2') {

             $query="select * from registro order by nombre_empresa desc;";

          }

                        if ($ordenar == '3') {

             $query="select * from registro order by giro;";

          }

                    if ($ordenar == '4') {

               $query="select * from registro order by idregistro desc;";

          }
  
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

                  if ($direccion =='' || $direccion ==' ') {
                    $direccion='No disponible';
                  }
                  if ($web =='' || $web ==' ') {
                    $web='No disponible';
                  }
                  if ($giro =='' || $giro ==' ') {
                    $giro='No disponible';
                  }

   ?>
<tr>
          <td style="    width: 270px;"><img src="empresas/<?php echo $image;?>" alt="..." class="img-responsive" style="width: 200px;margin-left: 122px"></td>
          <td style="    width: 270px;">

               <table style="text-align: justify;" class="table-responsive">
               <tr>
                  <td></td>
              </tr>
               <tr >
                  <td ><h3 style="margin-left: 150px"><a href="http://<?php echo $web;?>" title="Ver más información sobre la empresa" target="_blank"><?php echo $nombre_empresa;?> </a></h3></td>
              </tr>
              <tr>
                  <td ><span class="fa fa-map-marker" aria-hidden="true"></span> <?php echo $direccion;?></td>
              </tr>
              <tr>
                  <td ><span class="fa fa-phone" aria-hidden="true"></span> <?php echo $telefono;?></td>
              </tr>
                  <tr>
                  <td ><span class="fa fa-envelope-o" aria-hidden="true"></span> <?php echo $email;?></td>
              </tr>
                               <tr>
                  <td ><span class="fa fa-gears" aria-hidden="true"></span> <?php echo $giro;?></td>
              </tr>
              <tr>
                <td ><span class="fa fa-globe" aria-hidden="true"></span> <a href="http://<?php echo $web;?>" target="_blank"> <?php echo $web;?></a></td>
              </tr>
              </table>
          </td>
        </tr>
        
        <?php
      }
    }
    ?>
</table>

</div>
<?php
footer();
?>