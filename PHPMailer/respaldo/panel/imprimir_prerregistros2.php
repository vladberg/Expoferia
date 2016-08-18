<?php
//http://www.solvetic.com/tutorials/article/178-crear-reportes-pdf-desde-php-y-la-libreria-fpdf/
@include("../includes/cn.php");
include_once('../fpdf/fpdf.php'); 



$pdf = new FPDF();
$pdf->AddPage('L','Letter');//(L- Horizontal)  (P-Vertical), Carta
$pdf->SetFont('Arial', 'B', 16);
#Establecemos los márgenes izquierda, arriba y derecha: en mm 
$pdf->SetMargins(25, 25 , 25); 

#Establecemos el margen inferior: 
$pdf->SetAutoPageBreak(true,25);  

class PDF extends FPDF
{
function cabecera($cabecera)
    {
        /* Se configura la primera celda
         * , en este caso, la celda que contiene "Nombre",
         * a la posición indicada (y de ahí para abajo
         * seguirán las demás celdas), no olvidar que el origen es la 
         * esquina superior izquierda.
         * Así mismo la fuente, estilo y tamaño que tendrá cada celda
         * */
        $this->SetXY(10,115);
        $this->SetFont('Arial','B',12);
         
        /* Se recibirá un array y se generará
         * una celda por cada elemento del mismo
         * con Cell(). El texto que contendrá la celda
         * será cada elemento del array.
         * 
         * Cell(40, 7, $columna, 1, 2, 'L') 
         * 40 - ancho de la fila
         * 7 - altura de la celda
         * $columna - texto a imprimir, es decir, elementos de array 
         * 1 - la celda tendrá activo el borde completo
         * 2 - Cada nueva celda irá una debajo de la anterior (valor 0, indica una siguiente de la anterior)
         * 'L' - Texto alineado a la izquierda
         * */
		 
        foreach($cabecera as $columna)
        {
            $this->Cell(40,7,$columna,1, 0 , 'L' ) ;
			
        }	
				
		
    }
	 /* Este método realiza lo mismo que cabecera,
     * la diferencia radica en el parámetro de los bordes 
     * Arriba (T)
     * Derecha (R)
     * Abajo (B)
     * los bordes que estarán activos.
     * y el ancho de la celda (90)
     * */
    function datos($datos)  
    {
        $this->SetXY(90,115);
        $this->SetFont('Arial','',12);   
            foreach ($datos as $columna)
            {
                $this->Cell(65,7,$columna,'TRB',0,'L' );
            }
         
    }
	
	   
    /* El método tabla integra a los métodos cabecera y datos
     * */
    function tabla($cabecera,$datos)
    {
        $this->cabecera ($cabecera) ;
        $this->datos($datos);
    }
 
 function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'PUEBA',0,0,'C');
}

//Función para resolver problemas de acentos
function acentos($cadena) {
 $buscar = explode(",","á,é,í,ó,ú,ñ,Á,É,Í,Ó,Ú,Ñ,Ã¡,Ã©,Ã¬,Ã&sup3;,Ãº,Ã±,ÃÃ¡,ÃÃ©,ÃÃ-,ÃÃ&sup3;,ÃÃº,ÃÃ±");
 $cambiar = explode(",","á,é,í,ó,ú,ñ,Á,É,Í,Ó,Ú,Ñ,á,é,í,ó,ú,ñ,Á,É,Í,Ó,Ú,Ñ");
 $textocorregido= str_replace($buscar, $cambiar, $cadena); 
  return  $textocorregido;
	} 

 }



//inserto la cabecera poniendo una imagen dentro de una celda

$pdf->Cell(700,85,$pdf->Image('../images/expoferia_logo.png',10,10,40),0,0,'C');

$mcriterio=$_GET['idempresa']; //criterio de consulta

//Consulta para obtencion de datos
$sconsulta=mysql_query("select * from prerregistro $mcriterio");

//Resultados consulta
 $cabecera = array("Nombre(s)","Apellido(s)","Colonia", "Ciudad", "Estadio","País", "email","celular","Fecha de Nacimiento","Recibir promociones");


while($fila=mysql_fetch_assoc($sconsulta)){
$datos = array($vlista['nombres'], $vlista['apellidopaterno'], $vlista['colonia'],$vlista['ciudad'],$vlista['estado'],$vlista['pais'],$vlista['email'],$vlista['celular'],$vlista['fechanac'],$vlista['recibirpromo']);
			}
			
			
			
			
			
			
			
       ///////////////////////////////////////////      
           $pdf->tabla($cabecera,$datos);
			            
			//TEXTO CONDICIONES Y COMENTARIOS
			$pdf->Ln(80);


$pdf->Ln(98);//Salto de línea
//Añadimos también un Multicell, que cumple la función de varias celdas en una sirve para grandes bloques de texto como una nota al pie de pagina
$pdf->SetFont('Arial','',14);
$vc=utf8_decode("VISÍTANOS");
$pdf->Multicell(230,-4, ".:: ".$vc." EN ".$salon_empresa." STAND ".$stand_empresa." ::.",0,'R');

//Finalmente le damos un nombre a nuestro fichero, al que podemos ponerle un id que los vaya enumerando según una base de datos y le definimos la opción descargar.
$fichero='presupuesto-00.pdf';
//$pdfdoc = $pdf->Output($fichero, "D"); //Descarga automática de archivo

$pdfdoc = $pdf->Output();//Visualizar el archivo pdf sin descarga automática
?> 
