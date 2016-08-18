<?php
error_reporting(0);
include_once("lib/template.php");
cabezal();
?>
<section class="bg-success">
  <article class="container seccion-30">
    <h4 class="text-center text-blanco">Eventos Tarimas</h4>
  </article>
</section>
    <div class="container">

<div class="direc"><br/>

<div class="table-responsive">

    
<table class="table table-bordered table-responsive" style="background:#007828">
<thead>
<tr>
<th class="text-center text-blanco">Viernes 10 de Junio</th>
</tr>
</thead>
</table>
<table class="table table-bordered table-responsive">
<thead>
<tr>
  <th>EMPRESA/INSTITUCIÓN</th>
  <th>Tema</th>
  <th>Responsable</th>
  <th>Lugar</th>
  <th style="width:150px">Fecha</th>
  <th>Hora</th>
</tr>
</thead>

   <?php
   include_once("lib/conexion.php");
   $link=conectarse();
   $ordenar=$_POST['ordenar'];
 $query="select * from conferencias where fecha='2016-06-10' order by hora asc";
   
$resultado=mysql_query($query, $link);

              //echo $resultado;



              $icont=0;

              $class='success';
              if(mysql_num_rows($resultado)>0){



                while($row = mysql_fetch_array($resultado)){ 
                  $nombre_conferencia=$row['conferencia'];
                  $clase = $row['clase'];
                  $responsable = $row['responsable'];
                  $fecha=$row['fecha'];
                  $hora=$row['hora'];
                  $sede=$row['sede'];

   ?>
<tr>
          <td><?php echo $clase;?></td>
          <td ><?php echo $nombre_conferencia;?></td>
          <td><?php echo $responsable;?></td>
          <td><?php echo $sede;?></td>
          <td ><?php echo $fecha;?></td>
          <td><?php echo $hora;?></td>
        </tr>
        
        <?php
      }
    }
    ?>
</table>

<table class="table table-bordered table-responsive" style="background:#007828">
<thead>
<tr>
<th class="text-center text-blanco">Sabado 11 de Junio</th>
</tr>
</thead>
</table>
<table class="table table-bordered table-responsive">
<thead>
<tr>
  <th>EMPRESA/INSTITUCIÓN</th>
  <th>Tema</th>
  <th>Responsable</th>
  <th>Lugar</th>
  <th style="width:150px">Fecha</th>
  <th>Hora</th>
</tr>
</thead>

   <?php
   include_once("lib/conexion.php");
   $link=conectarse();
   $ordenar=$_POST['ordenar'];
 $query="select * from conferencias where fecha='2016-06-11' order by hora asc";
   
$resultado=mysql_query($query, $link);

              //echo $resultado;



              $icont=0;

              $class='success';
              if(mysql_num_rows($resultado)>0){



                while($row = mysql_fetch_array($resultado)){ 
                  $nombre_conferencia=$row['conferencia'];
                  $clase = $row['clase'];
                  $responsable = $row['responsable'];
                  $fecha=$row['fecha'];
                  $hora=$row['hora'];
                  $sede=$row['sede'];

   ?>
<tr>
          <td><?php echo $clase;?></td>
          <td ><?php echo $nombre_conferencia;?></td>
          <td><?php echo $responsable;?></td>
          <td><?php echo $sede;?></td>
          <td ><?php echo $fecha;?></td>
          <td><?php echo $hora;?></td>          
        </tr>
        
        <?php
      }
    }
    ?>
</table>
<table class="table table-bordered table-responsive" style="background:#007828">
<thead>
<tr>
<th class="text-center text-blanco">Domingo 12 de Junio</th>
</tr>
</thead>
</table>
<table class="table table-bordered table-responsive">
<thead>
<tr>
  <th>EMPRESA/INSTITUCIÓN</th>
  <th>Tema</th>
  <th>Responsable</th>
  <th>Lugar</th>
  <th style="width:150px">Fecha</th>
  <th>Hora</th>
</tr>
</thead>

   <?php
   include_once("lib/conexion.php");
   $link=conectarse();
   $ordenar=$_POST['ordenar'];
 $query="select * from conferencias where fecha='2016-06-12' order by hora asc";
   
$resultado=mysql_query($query, $link);

              //echo $resultado;



              $icont=0;

              $class='success';
              if(mysql_num_rows($resultado)>0){



                while($row = mysql_fetch_array($resultado)){ 
                  $nombre_conferencia=$row['conferencia'];
                  $clase = $row['clase'];
                  $responsable = $row['responsable'];
                  $fecha=$row['fecha'];
                  $hora=$row['hora'];
                  $sede=$row['sede'];

   ?>
<tr>
          <td><?php echo $clase;?></td>
          <td ><?php echo $nombre_conferencia;?></td>
          <td><?php echo $responsable;?></td>
          <td><?php echo $sede;?></td>
          <td ><?php echo $fecha;?></td>
          <td><?php echo $hora;?></td>
        </tr>
        
        <?php
      }
    }
    ?>
</table>
</div>
</div>
</div>
<?php
footer();
?>