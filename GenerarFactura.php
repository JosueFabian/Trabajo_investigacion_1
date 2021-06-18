<?php 

require 'Database/Db.php';
include 'PlantillaFactura.php';


$conn = $conn = mysqli_connect('localhost','root','','base_zapateria');
$query = "SELECT
		    Nombres,
		    Apellidos,
		    DUI,
		    Telefono,
		    Tipo_Zapato,
		    Cantidad,
		    Fecha_entrega,
		    Precio,
		    Detalle
		FROM
		    cliente
		INNER JOIN reparacion ON reparacion.idCliente = cliente.idCliente
		ORDER BY
		    reparacion.idCliente
		DESC
		LIMIT 1";

$resultado=mysqli_query($conn,$query);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

while ($row = $resultado->fetch_assoc()) 
{
$pdf->SetFillColor(255,255,255);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,6,'',0,1,'L',1);
$pdf->Cell(50,6,'Cliente',0,1,'L',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,6,$row['Nombres'].' '.$row['Apellidos'],0,1,'L',1);

$pdf->Cell(50,6,'',0,1,'L',1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,6,'DUI',0,1,'L',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,6,$row['DUI'],0,1,'L',1);

$pdf->Cell(50,6,'',0,1,'L',1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,6,'Telefono',0,1,'L',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,6,$row['Telefono'],0,1,'L',1);

$pdf->Cell(50,6,'',0,1,'L',1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(45,6,'Detalle',0,1,'L',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(45,6,$row['Detalle'],0,1,'L',1);

$pdf->Cell(50,6,'',0,1,'L',1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(45,6,'Fecha de Entrega',0,1,'L',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(45,6,$row['Fecha_entrega'],0,1,'L',1);

$pdf->Cell(50,6,'',0,1,'L',1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'Precio',0,1,'L',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(20,6,'$ '.$row['Precio'],0,1,'L',1);

}


$pdf->Output();

 ?>