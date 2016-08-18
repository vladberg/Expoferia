<?php
include_once("lib/template.php");
cabezal();
?>

<section class="bg-success">
	<article class="container seccion-30">
		<h4 class="text-center text-blanco">Patrocinadores</h4>
	</article>
</section>
<section>
	<article class="container1 seccion-30" style="background:url(img/jaguar.png) no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;;width: 100%;height: 600px"><br/><br/>
		
			<table class="container1" width="626">
			<?php
$link=conectarse();
   $query="select * from categorias where estatus=1 order by orden asc";
$resultado=mysql_query($query, $link);

              //echo $resultado;



              $icont=0;

              $class='success';
              if(mysql_num_rows($resultado)>0){



                while($row = mysql_fetch_array($resultado)){
                $nombre=$row['categoria'];
                $imagen=$row['imagen'];
                 ?>
				<tr>
					<td><img src="patrocinadores/<?php echo $imagen;?>" alt="..." class="img-responsive"></td>
					<td>

					     <table width="191">
					     <tr>
					        <td></td>
					    </tr>
					    <tr>
					        <td><span class="fa fa-map-marker" aria-hidden="true"></span></td>
					    </tr>
					    <tr>
					        <td><span class="fa fa-phone" aria-hidden="true"></span> adsada</td>
					    </tr>
      				    <tr>
					        <td><span class="fa fa-envelope-o" aria-hidden="true"></span></td>
					    </tr>
					    <tr>
					    	<td><span class="fa fa-globe" aria-hidden="true"></span></td>
					    </tr>
					    </table>
					</td>
				</tr>
				
				<?php
			}
		}
		?>
		    </table>
				
	</article>
</section><br/>
<?php
footer();
?>