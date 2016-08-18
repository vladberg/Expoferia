<?php
include('includes/cn.php');
require('fpdf/fpdf.php');


class PDF extends FPDF
{
    function Footer() // Pie de página
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8); 
        $this->Cell(0,10,'C. 52 No. 353-F por Av. Pérez Ponce, Col. Itzimná CP. 97100, Mérida, Yucatán, México  Teléfono: 01 (999) 926-10-06  E-mail: itzimna@hotmail.com','T',0,'C');
    }
     
    function Header() //Encabezado
    {
        $this->SetFont('Arial','B',14);
         
        $this->Line(10,10,206,10);
        $this->Line(10,35.5,206,35.5);
       
        $this->Cell(180,25,'COTIZACION',0,0,'C', $this->Image('images/expoferia_logo.png',20,12,30));
    
         
        $this->Ln(25);
    }
     
   // function ImprimirTexto($file)
//    {
//        $txt = file_get_contents($file);
//        $this->SetFont('Arial','',12);
//        $this->MultiCell(0,5,$txt);
//    
//    }
//	
//	
//	function ImprimirTexto2($file)
//    {
//        $txt = file_get_contents($file);
//        $this->SetFont('Arial','',10);
//        $this->MultiCell(0,5,$txt);
//    
//    }
     
     
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
 
}//fin clase PDF

//Obteniendo el folio de la cotización enviada por url
$mat=$_GET['ide']; 

 //Consulta datos cotización
	  $sconsulta1=mysql_query("select * from empresas where status=1");
	  $fila1=mysql_fetch_array($sconsulta1);
			
//$fecha="Mérida, Yucatán a ".$_POST['dia']." de ". $_POST['mes']. " de ".$_POST['anio'];
$fecha="Mérida, Yucatán a ";
     
            $pdf = new PDF();             //Crea objeto PDF
            $pdf->AddPage('P', 'Letter'); //Vertical, Carta
     
            $pdf->SetFont('Arial','B',12); //Arial, negrita, 12 puntos
            $pdf->Cell(0,10,$fecha,0,1,'R'); //Agrega la cadena $fecha
			$pdf->Ln();
	
	
	//Folio cotizacion
	  $E="Folio: ";
	  $pdf->Cell(0,0,$E.$fila1['idempresa'],0,0,'L');
	 $pdf->Ln(15);
	 //Cliente
	 $personalizar="Estimado(a): ";
	 $pdf->Cell(0,0,$personalizar.$fila1['empresa'],0,0,'L');
	 $pdf->Ln(15);
	 //Breve texto inicial
	// $pdf->ImprimirTexto('textoFijo_descripcion.txt'); 
             
            //**********************************************************************************************
     	  //Consulta para obtener los datos de la cotización
			//$sconsulta=mysql_query("select * from productos_cotizacion where folio_cotizacion='$mat'");
//			
//			
//             
//            $cabecera = array("Cantidad","Producto","Imagen", "Precio Unitario", "Importe");
//			while($fila=mysql_fetch_assoc($sconsulta)){
//			$datos = array($fila['cantidad'], $fila['nombre_producto'], $fila['rutaimg'],$fila['precio_unitario'],$fila['importe']);
//			}
			
			
			
			
			
			
			
       ///////////////////////////////////////////      
           $pdf->tabla($cabecera,$datos);
			            
			//TEXTO CONDICIONES Y COMENTARIOS
			$pdf->Ln(80);
			 
           // $pdf->ImprimirTexto2('textoFijo_comentarios.txt'); 	//**********************************************************************************************
         
            $pdf->Output();               //Salida al navegador 
?>