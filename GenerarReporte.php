<?php 

require 'Database/Db.php';
include 'plantilla.php';


$conn = $conn = mysqli_connect('localhost','root','','base_zapateria');
$query = "SELECT
		    Nombres,
		    Apellidos,
		    DUI,
		    Telefono,
		    Tipo_Zapato,
		    Cantidad,
		    Fecha_entrega,
		    Precio
		FROM
		    cliente
		INNER JOIN reparacion ON reparacion.idCliente = cliente.idCliente";

$resultado=mysqli_query($conn,$query);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,6,'Cliente',1,0,'C',1);
$pdf->Cell(30,6,'DUI',1,0,'C',1);
$pdf->Cell(30,6,'Telefono',1,0,'C',1);
$pdf->Cell(45,6,'Fecha de Entrega',1,0,'C',1);
$pdf->Cell(20,6,'Precio',1,1,'C',1);

$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc()) 
{
	$pdf->Cell(50,6,$row['Nombres'].' '.$row['Apellidos'],1,0,'C',1);
	$pdf->Cell(30,6,$row['DUI'],1,0,'C',1);
	$pdf->Cell(30,6,$row['Telefono'],1,0,'C',1);
	$pdf->Cell(45,6,$row['Fecha_entrega'],1,0,'C',1);
	$pdf->Cell(20,6,'$ '.$row['Precio'],1,1,'C',1);
}


$pdf->Output();

 ?>