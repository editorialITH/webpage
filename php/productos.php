<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:../index.php");
}
else{
if(strlen($_GET['desde'])>0 and strlen($_GET['hasta'])>0){
	$desde = $_GET['desde'];
	$hasta = $_GET['hasta'];

	$verDesde = date('d/m/Y', strtotime($desde));
	$verHasta = date('d/m/Y', strtotime($hasta));
}else{
	$desde = '1111-01-01';
	$hasta = '9999-12-30';

	$verDesde = '__/__/____';
	$verHasta = '__/__/____';
}
require('../fpdf/fpdf.php');
require('connect_db.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../images/ithlogo.png' , 10 ,8, 16 , 16,'PNG');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Editorial ITH', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, ''.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'Reporte de Servicios', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
$pdf->Cell(100, 8, 'Desde: '.$verDesde.' hasta: '.$verHasta, 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(16, 8, 'ID Servicio', 0);
$pdf->Cell(60, 8, 'Departamento', 0);
$pdf->Cell(60, 8, 'Maestro', 0);
$pdf->Cell(20, 8, 'No. de Copias', 0);
$pdf->Cell(20, 8, 'Clave', 0);
$pdf->Cell(30, 8, 'Fecha', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysql_query("SELECT * FROM reg_serv_copiado WHERE fecha BETWEEN '$desde' AND '$hasta' ");

while($productos2 = mysql_fetch_array($productos)){

	$pdf->Cell(16, 8,$productos2['id_reg_serv_copiado'], 0);
	$pdf->Cell(60, 8,$productos2['departamento'], 0);
	$pdf->Cell(60, 8, $productos2['maestro'], 0);
	$pdf->Cell(20, 8, $productos2['num_copias'], 0);
	$pdf->Cell(20, 8, $productos2['clave'], 0);
	$pdf->Cell(30, 8, date('d/m/Y', strtotime($productos2['fecha'])), 0);
	$pdf->Ln(8);
}

$pdf->Output('reporte.pdf','I');
}
?>