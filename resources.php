<?php
$result = $conn->query("SELECT name from users");
if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()){
		echo $row['name'];
	}
}else{

	//some code
}



?>


<?php

INSERT INTO `SCHOLARSHIP` (`GENERAL_TYPE`, `SPECIFIC_TYPE`, `MAINTAINING_QPI`) VALUES
( 'Ateneo Sources','Academic Scholarship', 2.5),
( 'Ateneo Sources','AFP Educational Benefits', 2.5),
( 'Ateneo Sources','Band Scholarship Program', 2.5),
( 'Ateneo Sources','Business Management Program', 2.5),
( 'Ateneo Sources','Civil Engineering Scholarship', 2.5),
( 'Ateneo Sources','Dependent of Injured Military', 2.5),
( 'Ateneo Sources','Education Honors Program', 2.5),
( 'Ateneo Sources','Faculty and Personnel Benefits', 2.5),

?>


<?php   include('../server.php');
        include('admin_controller.php');

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(isset($_POST['print_office']))
{
// For Session header and includes
while (ob_get_level())
ob_end_clean();
header("Content-Encoding: None", true);

  ob_start();

require('../fpdf17/fpdf.php');

//$connect = new mysqli('localhost', 'root', '', 'prototype');

class PDF extends FPDF {
    function Header(){

$connect = new mysqli('localhost', 'root', '', 'prototype');

         // Get office details

        $this->SetFont('Arial','B',15);        
        //dummy cell to put logo
        //$this->Cell(12,0,'',0,0);
        //is equivalent to:
        $this->Cell(12);
        //put logo
        $this->Image('../images/adnu-seal.png',10,10,10);
      
        $this->Cell(118  ,5,'College Admissions and Aid Office',0,0);

//set font to arial, regular, 12pt
$this->SetFont('Arial','',12);
$this->Cell(34  ,5,'Date: '.date('F, d, Y'),0,1);

$this->Cell(230  ,5,'           Ateneo de Naga University',0,0);
$this->Cell(59   ,5,'',0,1);//end of line
$this->Cell(130  ,5,'           Naga City',0,1);
$this->Ln(2); // line break space
   
//dummy cell to give line spacing
//$this->Cell(0,5,'',0,1);
//is equivalent to:
$this->Ln(8);
        
$this->SetFont('Arial','',12);
$this->SetTextColor(244, 246, 249);

// Data
$fill = false;
        
$this->SetFillColor(116, 162, 253);
$this->SetDrawColor(116, 162, 253);
$this->Cell(50,5,'Office Name',1,0,'C',true);
$this->Cell(35,5,'Category',1,0,'C',true);
$this->Cell(35,5,'Location',1,0,'C',true);
$this->Cell(35,5,'Office Head',1,0,'C',true);

    function Footer(){
        //add table's bottom line
        $this->Cell(190,0,'','T',1,'',true);
        
        //Go to 1.5 cm from bottom
        $this->SetY(-15);
                
        $this->SetFont('Arial','',10);
        
        //width = 0 means the cell is extended up to the right margin
        $this->Cell(0,8,'Note: This is a system generated report. No signatures required.',0,1,'');
        $this->Cell(0,0,'Date generated: '.date( 'F d,Y h:i A').'. (Page '.$this->PageNo()." / {pages})",0,0,'');
        //$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,1,'C');
    }
}

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
$pdf = new PDF('L','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');
$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();
$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(85, 135, 236);

$query1 ="SELECT * FROM office off, office_head oh where off.employee_id = oh.employee_id";

$result1 = mysqli_query($connect, $query1);

while($data=mysqli_fetch_array($result1)){
    $pdf->Cell(50,5,$data['OFFICE_NAME'],'LR',0,'C');
    $pdf->Cell(35,5,$data['OFFICE_CATEGORY']),'LR',0,'C');
    $pdf->Cell(35,5,$data['OFFICE_DESC'],'LR',0,'C');
    $pdf->Cell(35,5,$data['NAME'],'LR',1,'C');
    }

    $pdf->Output();
    ob_end_flush();

    }

?>