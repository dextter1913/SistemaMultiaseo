<?php
session_start();
if (isset($_SESSION['usuario'])) {
require_once '../../../fpdf/fpdf.php';
require_once '../../../clases/ConsultaFacturas.php';
require_once '../../../clases/Conexion.php';

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../../../fpdf/img/icono.PNG', 10, 8, 33);
        // Salto de línea
        $this->Ln(20);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 10);//Modificar tipo de letra y tamaño del encabezado
        // Movernos a la derecha
        $this->Cell(12);
        // Título
        $this->Cell(15, 10, utf8_decode('MultiAseo Factura N '.$_GET['criterio']), 0, 0, 'C');
        // Salto de línea
        $this->Ln(20);
        //$this->Cell(47, 10, utf8_decode('id'), 1, 0, 'C', 0);
        $this->Cell(1, 5, utf8_decode('Producto'), 0, 0, 'C', 0);
        $this->Cell(35, 5, utf8_decode('Cantidad'), 0, 0, 'C', 0);
        $this->Cell(1, 5, utf8_decode('Valor'), 0, 1, 'C', 0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Pagina ') . $this->PageNo() . '  Atlaz', 0, 0, 'C');
    }
}


$pdf = new PDF("P","mm",array(58,150));//
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);//Modificar tipo de letra y tamaño del cuerpo


$conexion = new Conexion();
$ConsultarFacturas = new ConsultaFacturas($_GET['criterio']);
$resultados = mysqli_query($conexion->EstablecerConexion(),$ConsultarFacturas->consulta());

while ($row = mysqli_fetch_array($resultados)) {
    //$pdf->Cell(47, 10, utf8_decode($row['idventa']), 1, 0, 'C', 0);
    $pdf->Cell(1, 5, utf8_decode($row['nomProd']), 0, 0, 'C', 0);
    $pdf->Cell(35, 5, utf8_decode($row['cantidad']), 0, 0, 'C', 0);
    $pdf->Cell(1, 5, utf8_decode($row['totalV']), 0, 1, 'C', 0);
}
$resultados2 = mysqli_query($conexion->EstablecerConexion(),$ConsultarFacturas->consulta());
while ($row = mysqli_fetch_array($resultados2)) {
    $total = $total + $row['totalV'];
}
$iva = $total * 0.19;
$pdf->Cell(1, 30, utf8_decode('IVA  ').number_format($iva), 0, 0, 'C', 0);
$pdf->Cell(70, 30, utf8_decode('Total ').number_format($total), 0, 1, 'C', 0);
$pdf->Output();
}else {
    header('Location:../');
}