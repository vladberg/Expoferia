<?php
//http://www.solvetic.com/tutorials/article/178-crear-reportes-pdf-desde-php-y-la-libreria-fpdf/
@include("includes/cn.php");
include_once('fpdf/fpdf.php'); 
$id_empresa=$_GET['ref']; //Obteniendo el id de la empresa

//Consulta para obtencion de datos
$ruta_imagen="images/empresas/";
$lista=mysql_query("SELECT salon,idstand_emp, empresa, stand, stands_empresas.status, fecha, hora, imagen
FROM  `stands_empresas` 
INNER JOIN empresas ON stands_empresas.idempresa = empresas.idempresa
INNER JOIN stands ON stands_empresas.idstand = stands.idstand INNER JOIN salones ON salones.idsalon = stands.idsalon where stands_empresas.idempresa='$id_empresa'");

$vlista=mysql_fetch_array($lista);
$imagen_empresa=$vlista['imagen'];
$salon_empresa=$vlista['salon'];
$stand_empresa=$vlista['stand'];



$pdf = new FPDF();
$pdf->AddPage('L','Letter');//(L- Horizontal)  (P-Vertical), Carta
$pdf->SetFont('Arial', 'B', 16);
#Establecemos los márgenes izquierda, arriba y derecha: en mm 
$pdf->SetMargins(25, 25 , 25); 

#Establecemos el margen inferior: 
$pdf->SetAutoPageBreak(true,25);  

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

//inserto la cabecera poniendo una imagen dentro de una celda
$pdf->Cell(700,85,$pdf->Image('images/expoferia_logo.png',10,10,40),0,0,'C');

$pdf->Cell(700,85,$pdf->Image($ruta_imagen.$imagen_empresa,118,10,50),1,1,'C');

$pdf->Cell(700,85,$pdf->Image('images/mascota_color/mascota-ESPACIAL9.jpg',230,10,36),0,0,'C');


$pdf->Cell(700,50,$pdf->Image('images/mascota_color/mascota_formato.jpg',10,45,165),0,0,'C');


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
