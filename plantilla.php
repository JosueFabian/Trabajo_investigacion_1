<?php 

require 'fpdf/fpdf.php';

class PDF extends FPDF{


	function Header()
	{
		$this->Image('images/shoes1.png',10,5,20);
		$this->SetFont('Arial','B',15);
		$this->Cell(30);
		$this->Cell(120,10, 'Clientes Ingresados - Zapateria Don Pablo',0,0,'C');

		$this->Ln(20);


	}

	function Footer()
	{
		$this->setY(-15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C');

	}
}
 ?>