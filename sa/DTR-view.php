<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iScholar</title>

    <script type="text/javascript" src="../js/time.js"></script>

     <!-- suser CSS -->
    <link href="../css/user.css" rel="stylesheet"> 
    <link rel="stylesheet" href="../assets/css/create_sa.css">
    <link rel="stylesheet" href="../assets/css/user.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style=" background-color: #e3efef;">

<?php

    include('view-dtr.php');

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
        $date = date('d m y');
        //$_SESSION['month'] = date('F', strtotime($date));
        // GET THE STUDENT ASSISTANT DAILY TIME RECORD MONTHLY VIEW
        $query ="SELECT dtr.DTR_ID,dtr.DTR_DATE,dtr.TIME_IN, dtr.TIME_OUT, dtr.TIME_IN_LOCATION, dtr.TIME_OUT_LOCATION, dtr.ACCOMPLISHED_HOURS, dtr.REMAINING_HOURS, dtr.STATUS FROM dtr INNER JOIN user ON dtr.SA_ID = user.SA_ID AND user.USERNAME ='{$_SESSION['username']}' AND dtr.DTR_DATE LIKE '%{$_SESSION['month']}%' AND dtr.DTR_DATE LIKE '%{$_SESSION['year']}%'";

        $result = mysqli_query($connect, $query);

if(isset($_POST['create_pdf']))
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

 // Get the student Assistant details
        $query2 = "SELECT * FROM student_assistant where ID_NUMBER = '{$_SESSION['username']}'";
        $result2 = mysqli_query($connect, $query2);

        $this->SetFont('Arial','B',15);        
        //dummy cell to put logo
        //$this->Cell(12,0,'',0,0);
        //is equivalent to:
        $this->Cell(12);
        //put logo
        $this->Image('../images/adnu-seal.png',10,10,10);
      
        $this->Cell(118  ,5,'College Admissions and Aid Office',0,0);

while($data2=mysqli_fetch_array($result2)){

//set font to arial, regular, 12pt
$this->SetFont('Arial','',12);
$this->Cell(34  ,5,'Date: '.date('F, d, Y'),0,1);

$this->Cell(230  ,5,'           Ateneo de Naga University',0,0);
$this->Cell(59   ,5,'',0,1);//end of line
$this->Cell(130  ,5,'           Naga City',0,1);
$this->Ln(2); // line break space
$this->Cell(130  ,5,'           Office/Department: ' .$data2['DESIGNATED_OFFICE'].', ',0,1);
$this->Ln(4); // line break space
$this->Cell(130  ,5,'           Name: '.$data2['LAST_NAME'].', '.$data2['FIRST_NAME'],0,0);
$this->Cell(34   ,5,'Month of '.'[ '.$_SESSION['month'].' ]',0,1);//end of line
$this->Cell(130  ,5,'           Course/Year: '.$data2['COURSE'].' / '.$data2['YEAR'],0,0);
}
$this->Cell(20   ,5,'Year of '.' [ '.$_SESSION['year'].' ]',0,1);
$this->Cell(130  ,5,'',0,0);
$this->Cell(20   ,5,'Total Hours  '.' [ '.$_SESSION['totalTime'].' ]',0,1);
$this->Cell(130  ,5,'',0,0);
$this->Cell(20   ,5,'Payable Amount  '.' [ '. "P".' '.$_SESSION['difficiency_amount'].' ]',0,1);
$this->Ln(2); // line break space
$this->Cell(190,0,'','T',1,'',true);
$this->Ln(3); // line break space
$this->Cell(0  ,5,'Student Assistant',0,1,'C');//end of line
$this->Cell(0   ,5,'Daily Time Record',0,1,'C');//end of line
   
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
$this->Cell(50,5,'Date',1,0,'C',true);
$this->Cell(35,5,'Time IN',1,0,'C',true);
$this->Cell(35,5,'Time Out',1,0,'C',true);
$this->Cell(35,5,'Duration',1,0,'C',true);
$this->Cell(35,5,'Status',1,1,'C',true);
        
    }

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

$pdf = new PDF('P','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');
$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();
$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(85, 135, 236);

$query ="SELECT dtr.DTR_ID,dtr.DTR_DATE,dtr.TIME_IN, dtr.TIME_OUT, dtr.TIME_IN_LOCATION, dtr.TIME_OUT_LOCATION, dtr.DAILY_HOURS, dtr.ACCOMPLISHED_HOURS, dtr.REMAINING_HOURS, dtr.STATUS FROM dtr INNER JOIN user ON dtr.SA_ID = user.SA_ID AND user.USERNAME ='{$_SESSION['username']}' AND dtr.DTR_DATE LIKE '%{$_SESSION['month']}%' AND dtr.DTR_DATE LIKE '%{$_SESSION['year']}%'";

$result = mysqli_query($connect, $query);

while($data=mysqli_fetch_array($result)){
    $pdf->Cell(50,5,$data['DTR_DATE'],1,0,'C');
    $pdf->Cell(35,5,date('h:i:s A', strtotime($data['TIME_IN'])),1,0,'C');
    
   /* if($pdf->GetStringWidth($data['email']) > 65){
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(65,5,$data['email'],'LR','R',0);
        $pdf->SetFont('Arial','',9);
    }else{
        $pdf->Cell(65,5,$data['email'],'LR','R',0);
    }*/
        if($data['TIME_OUT'] === '0000-00-00 00:00:00'){
            $pdf->Cell(35,5,'Pending...','LR',0,'C');
        }else{
            $pdf->Cell(35,5,date('h:i:s A', strtotime($data['TIME_OUT'])),1,0,'C');
        }

    //$pdf->Cell(35,5,date('h:i:s A', strtotime($data['TIME_OUT'])),'LR',0,'C');
    $pdf->Cell(35,5,$data['DAILY_HOURS'],1,0,'C');
    $pdf->Cell(35,5,$data['STATUS'],1,1,'C');
    }

    $pdf->Output();
    ob_end_flush();

    }

    if(isset($_POST['trad_pdf']))
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

 // Get the student Assistant details
        $query2 = "SELECT * FROM student_assistant where ID_NUMBER = '{$_SESSION['username']}'";
        $result2 = mysqli_query($connect, $query2);

        $this->SetFont('Arial','B',15);        
        //dummy cell to put logo
        //$this->Cell(12,0,'',0,0);
        //is equivalent to:
        $this->Cell(12);
        //put logo
        $this->Image('../images/adnu-seal.png',10,10,10);
      
        $this->Cell(118  ,5,'College Admissions and Aid Office',0,0);

while($data2=mysqli_fetch_array($result2)){

//set font to arial, regular, 12pt
$this->SetFont('Arial','',12);
$this->Cell(34  ,5,'Date: '.date('F, d, Y'),0,1);

$this->Cell(230  ,5,'           Ateneo de Naga University',0,0);
$this->Cell(59   ,5,'',0,1);//end of line
$this->Cell(130  ,5,'           Naga City',0,1);
$this->Ln(2); // line break space
$this->Cell(130  ,5,'           Office/Department: ' .$data2['DESIGNATED_OFFICE'].', ',0,1);
$this->Ln(4); // line break space
$this->Cell(130  ,5,'           Name: '.$data2['LAST_NAME'].', '.$data2['FIRST_NAME'],0,0);
$this->Cell(34   ,5,'Month of '.'[ '.$_SESSION['month'].' ]',0,1);//end of line
$this->Cell(130  ,5,'           Course/Year: '.$data2['COURSE'].' / '.$data2['YEAR'],0,0);
}
$this->Cell(20   ,5,'Year of '.' [ '.$_SESSION['year'].' ]',0,1);
$this->Cell(130  ,5,'',0,0);
$this->Cell(20   ,5,'Total Hours  '.' [ '.$_SESSION['totalTime'].' ]',0,1);
$this->Cell(130  ,5,'',0,0);
$this->Cell(20   ,5,'Payable Amount  '.' [ '. "P".' '.$_SESSION['difficiency_amount'].' ]',0,1);
$this->Ln(2); // line break space
$this->Cell(190,0,'','T',1,'',true);
$this->Ln(3); // line break space
$this->Cell(0  ,5,'Student Assistant',0,1,'C');//end of line
$this->Cell(0   ,5,'Daily Time Record',0,1,'C');//end of line
   
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
$this->Cell(50,5,'Date',1,0,'C',true);
$this->Cell(35,5,'Time IN',1,0,'C',true);
$this->Cell(35,5,'Time Out',1,0,'C',true);
$this->Cell(35,5,'Duration',1,0,'C',true);
$this->Cell(35,5,'Signature',1,1,'C',true);
        
    }

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

$pdf = new PDF('P','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');
$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();
$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(85, 135, 236);

$query ="SELECT dtr.DTR_ID,dtr.DTR_DATE,dtr.TIME_IN, dtr.TIME_OUT, dtr.TIME_IN_LOCATION, dtr.TIME_OUT_LOCATION, dtr.DAILY_HOURS, dtr.ACCOMPLISHED_HOURS, dtr.REMAINING_HOURS, dtr.STATUS FROM dtr INNER JOIN user ON dtr.SA_ID = user.SA_ID AND user.USERNAME ='{$_SESSION['username']}' AND dtr.DTR_DATE LIKE '%{$_SESSION['month']}%' AND dtr.DTR_DATE LIKE '%{$_SESSION['year']}%'";

$result = mysqli_query($connect, $query);

while($data=mysqli_fetch_array($result)){
    $pdf->Cell(50,5,$data['DTR_DATE'],1,0,'C');
    $pdf->Cell(35,5,date('h:i:s A', strtotime($data['TIME_IN'])),1,0,'C');
    
   /* if($pdf->GetStringWidth($data['email']) > 65){
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(65,5,$data['email'],'LR','R',0);
        $pdf->SetFont('Arial','',9);
    }else{
        $pdf->Cell(65,5,$data['email'],'LR','R',0);
    }*/
        if($data['TIME_OUT'] === '0000-00-00 00:00:00'){
            $pdf->Cell(35,5,'Pending...','LR',0,'C');
        }else{
            $pdf->Cell(35,5,date('h:i:s A', strtotime($data['TIME_OUT'])),1,0,'C');
        }

    //$pdf->Cell(35,5,date('h:i:s A', strtotime($data['TIME_OUT'])),'LR',0,'C');
    $pdf->Cell(35,5,$data['DAILY_HOURS'],1,0,'C');
    $pdf->Cell(35,5," ",1,1,'C');
    }

    $pdf->Output();
    ob_end_flush();

    }

?>


    <div id="wrapper">

                <?php include('navigation_sa.php');?>
                
        <div id="page-wrapper" style=" background-color: #e3efef;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-eye"></i> View Daily Time Record
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-2x"> <?php echo " " . $_SESSION['tmonth'];?></i>
                                    </div>
                                     <form method="post">
                                        <div class="btn-group pull-right" style="text-align: right;  padding-right: 10px;">
                                            <button class="btn btn-danger" type="submit" name="create_pdf">
                                                <i class="fa fa-lg fa-file-pdf-o">
                                                </i> Generate PDF
                                            </button>
                                        </div>
                                         <div class="btn-group pull-right" style="text-align: right;">
                                            <button class="btn btn-warning" type="submit" name="trad_pdf">
                                                <i class="fa fa-lg fa-file-pdf-o">
                                                </i> Traditional Form
                                            </button>
                                        </div>
                                    </form>
                                    <div class="col-xs-9 text-right">
                                        <div><strong> </strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body fixed-panel" style=" background-color: #fffcd8;">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                        <thead>
                                            <tr>    
                                                <th>DATE</th>
                                                <th>TIME IN</th>
                                                <th>TIME OUT</th>
                                                <th>LOCATION (IN) </th>
                                                <th>LOCATION (OUT)</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)){ 
                                                ?>
                                                <tr>
                                                <td><?php echo $row['DTR_DATE']?></td>
                                                <td><?php echo date('h:i:s A', strtotime($row['TIME_IN']))?></td>
                                                <td><?php 
                                                        if($row['TIME_OUT'] === '0000-00-00 00:00:00'){
                                                            echo "Pending...";
                                                        }else{
                                                            echo date('h:i:s A', strtotime($row['TIME_OUT']));
                                                        }
                                                    ?>         
                                                </td>
                                                <td><?php echo $row['TIME_IN_LOCATION']?></td>
                                                <td><?php echo $row['TIME_OUT_LOCATION']?></td>
                                                <td><?php echo $row['STATUS']?></td>
                                                <td><a href="sa_dtr_edit.php?id=<?php echo $row['DTR_ID']; ?> " class="btn btn-success" role="button" > Edit </a></td>
                                                </tr>
                                                <?php 
                                                }
                                               // mysqli_free_result($result);
                                                //mysqli_close($connect);
                                                ?> 
                                    </tbody>
                                </table>
                            </div>
                            </div>  
                            </div>
                                <div class="panel-footer">
                                    
                                    <div class="clearfix"></div>
                                </div>
                        </div>
                    </div>
                </div>

<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
