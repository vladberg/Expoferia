<?php
error_reporting(0);
include_once("lib/template.php");
cabezal();
?>
<style type="text/css">
ul, ol {
    margin-top: 0;
    margin-bottom: 10px;
    margin-left: 100px;
}
</style>
<section class="bg-success">
	<article class="container seccion-30">
		<h4 class="text-center text-blanco">Galerias</h4>
	</article>
</section>

<section class="bg-blanco">
<article class="container seccion-30">
          <div class="row">
           <?php 
         include_once("lib/conexion.php");
       $link=conectarse();
       $id=$_GET['id'];
                      $query="select * from galerias where estatus=1 ";
            $resultado=mysql_query($query, $link);
            if($resultado !=0){
            while($row=mysql_fetch_array($resultado)){ 
      
      ?> 
            <div class="col-sm-6">
              <p class="text-blanco text-center"><span class="fa fa-image ico-lg bg-primary" aria-hidden="true"></span></p>
              <a href="ver_galeria.php?id=<?php echo $row['id_galeria'];?>"><h4 class="text-primary text-center"><?php echo $row['nombre'];?></h4></a>
            </div>
            <?php
          }
          }
          ?>
 

   
	</article>
</section>
<?php
footer();
?>