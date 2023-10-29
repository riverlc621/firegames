<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('imagenes/logo.png',10,8,33);
    $this->Ln(20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    $this->SETTextColor	(255, 128, 0);     
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(45,10,'LISTA DE USUARIOS',0,0,'C');
    //SALTO DE LINEA
    $this->Ln(20);
    $this->Cell(45,10,'ID_USUARIO',1,0,'C');
    $this->Cell(45,10,'USUARIO',1,0,'C');
    $this->Cell(45,10,'PASS',1,0,'C');
    $this->Cell(45,10,'TIPO',1,0,'C');
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'PAGINA'.$this->PageNo().'/{nb}',0,0,'C');
}
}

require "conexion.php";
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios") or die ("problemas de conexion".mysqli_error($conexion));

$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Ln(10);
while ($fila = $resultado->fetch_assoc()){
    $pdf->cell(45,10,$fila['id_usuario'],1,0,'C',0);
    $pdf->cell(45,10,$fila['usuario'],1,0,'C',0);
    $pdf->cell(45,10,$fila['pass'],1,0,'C',0);
    $pdf->cell(45,10,$fila['tipo'],1,0,'C',0);
$pdf->Ln(10);
}

// $pdf->Cell(70);
// $pdf->Cell(60,10,utf8_decode('LISTA DE USUARIOS'),1,0,'C');
//$pdf->AddPage();
// $pdf->Write(5,'esta es otra pagina');
$pdf->Output();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="cut icon" href="IMAGENES/LOGO.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
