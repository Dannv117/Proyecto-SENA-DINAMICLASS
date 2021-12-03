<?php

require('fpdf.php');

class PDF extends FPDF

{
// Cabecera de página
function Header()
{
    // Logo
  
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de usuarios DINAMICLASS ',0,0,'C');
    // Salto de línea
    $this->Ln(40);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Page').$this->PageNo().'/{nb}',0,0,'C');
}
}

require('./metodos.php');
$Modelo=new metodos();

$Usuario=$Modelo-> getCita();


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
if ($Usuario !=null) {
    foreach ($Usuario as $usuario) {
        $pdf->cell(50,10,$usuario['idusuario'],1,1,'LR',0);
        $pdf->cell(50,10,$usuario['Nombre'],1,1,'LR',0);
        $pdf->cell(50,10,$usuario['correo'],1,1,'LR',0);
        $pdf->cell(50,10,$usuario['telefono'],1,1,'LR',0);
        $pdf->cell(50,10,$usuario['cargo'],1,1,'LR',0);
        
    }
}
$pdf->Output();

?>