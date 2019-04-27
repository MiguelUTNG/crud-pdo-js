<?php	
class Report
{
private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
    $statement = $pdo->prepare('SELECT * FROM alumnos');
    $resultado = $statement->fetchAll();
}

?>

<?php
include_once('fpdf/fpdf.php'); 
class PDF extends FPDF 
{ 
function header() 
{ 
$this->Image('img/utng.png',16,8,33); 
$this->Image('img/utng.png',245,8,33); 		
$this->SetFont('Arial','',14); 
$this->SetTextColor(0,0,0);
$this->Cell(50); 
$this->Cell(160,5,'Informe de Alumnos',0,0,'C'); 
$this->Ln(); 
$this->Ln(15); 

} 
function Footer() 
{ 
$this->SetY(-15); 

$this->SetTextColor(0,0,0);
$this->SetFont('Arial','',10); 
$this->Cell(283,6,'Page '.$this->PageNo().'/{nb}',0,0,'C'); 
$this->Ln(); 
$this->Cell(0,6,date('d/m/Y'),0,1,'C'); 
} 
} 
$pdf=new PDF('L'); 
$pdf->SetFont('Arial','',10); 
$pdf->AliasNbPages(); 
$pdf->AddPage(); 
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(28,8,'Nombre',1,0,'C'); 
$pdf->Cell(31,8,'Apellido',1,0,'C'); 
$pdf->Cell(26,8,'Sexo',1,0,'C'); 
$pdf->Cell(26,8,'Fecha de Nacimiento',1,0,'C'); 
$pdf->Cell(26,8,'Estatus',1,0,'C'); 
$pdf->Ln(); 
$pdf->Output(); 

?>

 

<?php

    }else {
        $error =" Hubo un error en la Consulta";
    }


require 'views/index.view.php';


?>
