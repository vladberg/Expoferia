<?php
include('../includes/cn.php');
require('../fpdf/fpdf.php');


class PDF extends FPDF
{
    function Footer() // Pie de p�gina
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8); 
        $this->Cell(0,10,'
� 2014 Canaco Servytur M�rida,  Tel�fono: Ventas de Stands +52(999) 942-88-50, Ext. 126 y 127  E-mail: desarrollocomercial@canacomerida.com','T',0,'C');
    }
     
    function Header() //Encabezado
    {
        $this->SetFont('Arial','B',12);
         //Traza l�neas en la posici�n dada
       // $this->Line(10,10,206,10);
//        $this->Line(10,35.5,206,35.5);
       
        $this->Cell(180,25,'LISTA DE PRE REGISTROS',0,0,'C', $this->Image('../images/expoferia_logo.png',20,12,30));
    
         
        $this->Ln(25);
    }
     
    function ImprimirTexto($file)
    {
        $txt = file_get_contents($file);
        $this->SetFont('Arial','',12);
        $this->MultiCell(0,5,$txt);
    
    }
	
	
	    
     
    function cabecera($cabecera)
    {
        /* Se configura la primera celda
         * , en este caso, la celda que contiene "Nombre",
         * a la posici�n indicada (y de ah� para abajo
         * seguir�n las dem�s celdas), no olvidar que el origen es la 
         * esquina superior izquierda.
         * As� mismo la fuente, estilo y tama�o que tendr� cada celda
         * */
        $this->SetXY(5,50);
        $this->SetFont('Arial','B',9);
         
        /* Se recibir� un array y se generar�
         * una celda por cada elemento del mismo
         * con Cell(). El texto que contendr� la celda
         * ser� cada elemento del array.
         * 
         * Cell(40, 7, $columna, 1, 2, 'L') 
         * 40 - ancho de la fila
         * 7 - altura de la celda
         * $columna - texto a imprimir, es decir, elementos de array 
         * 1 - la celda tendr� activo el borde completo
         * 2 - Cada nueva celda ir� una debajo de la anterior (valor 0, indica una siguiente de la anterior)
         * 'L' - Texto alineado a la izquierda
         * */
		 
        foreach($cabecera as $columna)
        {
            $this->Cell(45,7,$columna,1, 0 , 'L' ) ;
			
        }
		
				
		
    }
     
    /* Este m�todo realiza lo mismo que cabecera,
     * la diferencia radica en el par�metro de los bordes 
     * Arriba (T)
     * Derecha (R)
     * Abajo (B)
     * los bordes que estar�n activos.
     * y el ancho de la celda (90)
     * */
    function datos($datos)  
    {
        $this->SetXY(5,57);
        $this->SetFont('Arial','',8);   
            foreach ($datos as $columna)
            {
                $this->Cell(45,7,$columna,'T',0,'L' );
            }
         
    }
	
	
	
     
    /* El m�todo tabla integra a los m�todos cabecera y datos
     * */
    function tabla($cabecera,$datos)
	    //function tabla($datos)
    {
       $this->cabecera ($cabecera);
       $this->datos($datos);
    }
	
	
 function fecha(){ $mes = date("n"); $mesArray = array( 1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre" ); $semana = date("D"); $semanaArray = array( "Mon" => "Lunes", "Tue" => "Martes", "Wed" => "Miercoles", "Thu" => "Jueves", "Fri" => "Viernes", "Sat" => "S�bado", "Sun" => "Domingo", ); $mesReturn = $mesArray[$mes]; $semanaReturn = $semanaArray[$semana];$dia = date("d"); $a�o = date ("Y"); return "<span style='color:#398de7'>".$semanaReturn."</span> <span style='color:#fff'>".$dia." de ".$mesReturn." de </span><span style='color:#398de7'>".$a�o."</span>"; }
}//fin clase PDF


//ENCABEZADO FORMATO			
//$fecha="M�rida, Yucat�n a ".$_POST['dia']." de ". $_POST['mes']. " de ".$_POST['anio'];
$fecha="M�rida, Yucat�n a ".date('d/m/Y');
     
            $pdf = new PDF();             //Crea objeto PDF
            $pdf->AddPage('L', 'Legal'); //(P)Vertical (L) Horizontal, (Letter) Carta (Legal) Oficio
     
            $pdf->SetFont('Arial','B',12); //Arial, negrita, 12 puntos
			
            $pdf->Cell(0,10,$fecha,0,1,'R'); //Agrega la cadena $fecha
			$pdf->Ln();
	
	
	 //Breve texto inicial
	 //$pdf->ImprimirTexto('textoFijo_descripcion.txt'); 
             
            //**********************************************************************************************
//CONSULTA PARA OBTENER LOS DATOS

$mcriterio=$_GET['ref']; //criterio de consulta

//Consulta para obtencion de datos
$sconsulta=mysql_query("SELECT nombre, empresa, puesto,telefono, email, conferencia FROM `registro_conferencias` inner join regconf_tipos on registro_conferencias.idreg=regconf_tipos.idreg");

//Resultados consulta
 $cabecera = array("Nombre","Empresa","Puesto", "Telefono", "Email","Conferencia");




while($vlista=mysql_fetch_assoc($sconsulta)){
$datos = array($vlista['nombre'],$vlista['empresa'], $vlista['puesto'],$vlista['telefono'],$vlista['email'],$vlista['conferencia']);

			}
			
			
			
			
			
			
			
       ///////////////////////////////////////////      
           $pdf->tabla($cabecera,$datos);
						//TEXTO CONDICIONES Y COMENTARIOS
			$pdf->Ln(80);
			 
            //$pdf->ImprimirTexto2('textoFijo_comentarios.txt'); 	//**********************************************************************************************
         
            $pdf->Output();               //Salida al navegador 
?>