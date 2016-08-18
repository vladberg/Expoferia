<?php
include_once("lib/template.php");
cabezal();
function contador()
    {
        $archivo = "contador_convocatoria.txt"; //el archivo que contiene en numero
        $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
        if($f)
        {
            $contador = fread($f, filesize($archivo)); //leemos el archivo
            $contador = $contador + 1; //sumamos +1 al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contador);
            fclose($f);
        }
        return $contador;
    }
    $cont=contador();
?>

<section class="bg-success">
	<article class="container seccion-30">
		<h4 class="text-center text-blanco">Convocatorias</h4>
	</article>
</section>
<section class="bg-blanco">
  <article class="container seccion-30">
       

            <p class="text-center">Si reciclas, reúsas, ahorras agua, utilizas tecnologías verdes, reforestas o reduces tus consumos de energía…<br/>¡Eres parte del cambio!</p><br/>
            <p class="text-center">La Secretaría de Desarrollo Urbano y Medio Ambiente del Gobierno de Estado de Yucatán y la Camara Nacional de Comercio, Servicios y Turismo de Mérida, impulsamos el desarrollo sustentable en los diferentes sectores productivos y en la sociedad. Por ello, invitamos a los ciudadanos, organizaciones civiles y empresarios a postularse en la siguiente:<br/><strong>CONVOCATORIA AL</strong><br/>
<strong style="color: #009933">Mérito a la iniciativa ambiental “Yucatán Sustentable”</strong><br/>
EN 2 CATEGORIAS
<ul class="text-left" style="margin-left: 445px;">
      <li>Mérito a las empresas.</li>
<li>Mérito a los ciudadanos y/u organizaciones civiles.</li>
</ul></p>
<p class="text-center">Podrán postularse aquellas que contribuyan al desarrollo sustentable mediante acciones de impacto a la sociedad del Estado de Yucatán. Los postulantes deberán de cubrir los requisitos disponibles en:<br/>
<a href="http://www.expoforoambiental.mx/convocatorias">www.expoforoambiental.mx/convocatorias</a><br/>
Fecha límite de envió de fichas: 5 de junio de 2016
Enviar propuestas al siguiente correo</p><p class="text-center">
<a href="desarrollocomercia@canacomerida.com">desarrollocomercia@canacomerida.com</a><br/> 
Resultados: se realizara la premiación el viernes 10 de junio a las 19:00 hrs en la tarima de la Expo-Foro Ambiental 2016.<br/>
<strong>¡Participa!</strong>


            </p>
	</article>
</section>
<section class="bg-blanco">
  <article class="container seccion-30">
       

            <h3 class="text-center">Las áreas temáticas  pueden ser: </h3>
    
      <ul class="text-left" style="margin-left: 445px;">
      <li>Ciencia , tecnología  e innovación</li>
<li>Energía</li>
<li>Residuos sólidos</li>
<li>Infraestructura</li>
<li>Desarrollo social y humano</li>
<li>Educación ambiental</li>
<li>Conservación</li>
<li>Biodiversidad</li>
<li>Turismo</li>
</ul>
<br/>
        <h4 class="text-center">Requisitos para la postulación</h4>
        <h3 class="text-center">Los proyectos deberán contener:</h3>
        <ul class="text-left" style="margin-left: 168px;">
        <li>Título del proyecto</li>

<li>Nombre del ciudadano o empresa</li>

<li>Responsable del proyecto</li>

<li>Datos del postulante: teléfonos, dirección completa, correo electrónico</li>

<li>Categoría: Empresa o ciudadano</li>

<li>Carta de postulación donde exponga sus motivos y razones por las que está llevando a cabo el proyecto o iniciativa y el tiempo que lleva realizándolo</li>

<li>Descripción del proyecto o iniciativa: ¿Qué es?, ¿Dónde se desarrolla?, ¿Cómo es?, ¿Cuál es el objetivo?, diagnóstico de la problemática afrentada en términos de su importancia ambiental, social y económica, hechos y acciones sobresalientes relacionados con los objetivos, los procesos o metodologías aplicadas, resultados obtenidos y los beneficiarios, comprobables, del proyecto</li>

<li>El documento no deberá ser mayor a 15 cuartillas</li>

<li>Material de apoyo: Videos, folletos, graficas, mapas, fotografías, testimonios, cartas de reconocimiento</li>

<li>El documento deberá entregarse en digital vía correo electrónico a desarrollocomercial@canacomerida.com acompañado de una carta en la que se exponga que no existen problemas de derechos de propiedad o autoritaria de la misma. </li>

<li>Los proyectos y acciones postulados deberán ser comprobables mediante documentos y posibles visitas a campo.</li></ul>
<br/>
    <h3 class="text-center">Criterios para la evaluación</h3>
    <p class="text-justify"><ul class="text-left" style="margin-left: 168px;">
    	<li>La problemática que se esta enfrentando mediante la iniciativa</li>

<li>El impacto, la trascendencia y su contribución al desarrollo sustentable de Yucatán</li>
<li>Originalidad y creatividad</li>

<li>Los alcances y beneficios dirigidos al fortalecimiento de la cultura ambiental y la participación social</li>

<li>La trayectoria de la o el candidato</li>

<li>Las contribuciones significativas en la investigación ambiental.</li>

<li>Presentación de la propuesta</li>

    </ul></p>
    <hr>
     <h4 class="text-center">Premios</h4>
     <table class="table table.responsive">
     	<tr>
     		<td> <h3 class="text-center">Ciudadano</h3></td>
     		<td><h3 class="text-center">Empresas</h3></td>
     	</tr>
     	<tr>
     		<td><p class="text-justify">
    <ul class="text-left" style="margin-left: 168px;">
    	<li>$10,000.00</li>
    	<li>Reportaje Especial en la revista Alianza Empresarial</li>
    	<li>Reconocimiento</li>
    	<li>Difusión en Redes Sociales y en <a href="http://www.expoforoambiental.mx" target="_blank">www.expoforoambiental.mx</a></li>
    </ul> 
    </p></td>
     		<td><p class="text-justify">
    <ul class="text-left" style="margin-left: 168px;">
    	<li>Stand en Expoforo 2017</li>
    	<li>Reportaje Especial en la revista Alianza Empresarial</li>
    	<li>Reconocimiento</li>
    	<li>Afiliación por un año a la CANACO SERVYTUR Mérida.</li>
    	<li>Difusión en Redes Sociales y en <a href="http://www.expoforoambiental.mx" target="_blank">www.expoforoambiental.mx</a></li>
    	<li>Entrevistas de Radio (2)</li>
    </ul> 
    </p></td>
     	</tr>
     </table>
  </article>
</section>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77709089-1', 'auto');
  ga('send', 'pageview');

</script>
<?php
footer();
?>