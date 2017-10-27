<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta name="keywords" content="Demonstrations From Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


    <title>iScholar</title>
     
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assets/css/create_sa.css">
    <link rel="stylesheet" href="../assets/css/user.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body style="background-color:#edf2f4;">

<?php   include('../server.php');
        include('admin_controller.php');

        
// Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}

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

        $this->SetFont('Arial','B',15);        
        //dummy cell to put logo
        //$this->Cell(12,0,'',0,0);
        //is equivalent to:
        $this->Cell(10);
        //put logo
        $this->Image('../images/adnu-seal.png',90,8,15);
        $this->Cell(0,5,'College Admissions and Aid Office',0,1,'C');


//set font to arial, regular, 12pt
$this->SetFont('Arial','',12);
$this->Cell(0,5,'Ateneo de Naga University',0,1,'C');
$this->Cell(0,5,'Naga City',0,1,'C');
$this->Ln(7); // line break space
$this->Cell(275,0,'','T',1,'',true);
$this->Ln(3); // line break space
$this->Cell(0  ,5,'ADNU Office List',0,1,'C');//end of line
   
//dummy cell to give line spacing
//$this->Cell(0,5,'',0,1);
//is equivalent to:
$this->Ln(2);
        
$this->SetFont('Arial','',12);
$this->SetTextColor(244, 246, 249);
// Data
$fill = false;
        
$this->SetFillColor(116, 162, 253);
$this->SetDrawColor(116, 162, 253);
$this->Cell(85,5,'OFFICE NAME',1,0,'C',true);
$this->Cell(70,5,'CATEGORY',1,0,'C',true);
$this->Cell(50,5,'DESIGNATION',1,0,'C',true);
$this->Cell(70,5,'OFFICE HEAD',1,1,'C',true);

        
    }

    function Footer(){
        //add table's bottom line
        $this->Cell(275,0,'','T',1,'',true);
        
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

$query ="SELECT * FROM office off, office_head oh where off.employee_id = oh.employee_id";

$result = mysqli_query($connect, $query);

while($data=mysqli_fetch_array($result)){

$pdf->Cell(85,5,$data['OFFICE_NAME'],1,0,'L');
$pdf->Cell(70,5,$data['OFFICE_CATEGORY'],1,0,'L');
$pdf->Cell(50,5,$data['OFFICE_DESC'],1,0,'L');
$pdf->Cell(70,5,$data['NAME'],1,1,'L');
    }

    $pdf->Output();
    ob_end_flush();

    }

?>



    <div id="wrapper">

        
        <?php include('navigation_admin.php'); ?>


        <div id="page-wrapper" style="background-color:#edf2f4;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-building"></i> Office
                            </li>
                        </ol>
                          <!-- Search bar -->
                        <div class ="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-search" ></i></span>  
                            <input type="text" name="search" id="search" placeholder="Search office" class="form-control" style="width: 250px;" />
                                <form method="post">
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger btn-md" type="submit" name="print_office">
                                            <i class="  fa fa-file-pdf-o fa-1.9x">
                                            </i> PDF
                                        </button>
                                    </div>
                                </form>
                                <form method="post" action="excel_export.php">
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-success btn-md" type="submit" name="excel_office">
                                            <i class="fa fa-file-excel-o fa-1.9x">
                                            </i> Excel 
                                        </button>
                                    </div>
                                </form>
                        </div>
                            <br>  
                    </div>
                </div>
                <!-- /.row -->

<!---------------------------------------------
                Database Query
---------------------------------------------->

        <?php
      
         $query ="SELECT * FROM office off, office_head oh where off.employee_id = oh.employee_id";

         $result = mysqli_query($connect, $query);
         ?>



              <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                            <div class="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51);'>
                                <div class="row">
                                 
                                    <div class="text-center">

                                        <i class="fa fa-calendar fa-university fa-3x"></i>
                                        <div><i><strong><h4>Ateneo De Naga University</h4></strong></i></div>
                                        <div><i><strong><h4>Offices</h4></strong></i></div>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-body" style=" background-color: #fffcd8;">
                            <div class="col-md-12">
                                <table class="table table-hover" id="office_table">
                                  
                                        <thead>
                                            <tr>    
                                                <th>Office ID</th>
                                                <th>Office Name</th>                                                
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Office Head</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)){ 
                                                ?>
                                                <tr>
                                                <td><?php echo $row['OFFICE_ID']?></td>
                                                <td><?php echo $row['OFFICE_NAME']?></td>                                                
                                                <td><?php echo $row['OFFICE_DESC']?></td>
                                                <td><?php echo $row['OFFICE_CATEGORY']?></td>
                                                <td><?php echo $row['NAME']?></td>
                                                <td><a href="office_edit.php?id=<?php echo $row['OFFICE_ID']; ?> " class="btn btn-success" role="button" > Edit </a></td>
                                            </tr>
                                                <?php 
                                                }
                                                mysqli_free_result($result);
                                                mysqli_close($connect);
                                                ?> 
                                    </tbody>
                                </table>
                            </div>
                            </div>  
                            </div>

                            <a href="#">
                                <div class="panel-footer">
                                      <span class="pull-left"><button type="submit" class="btn btn-warning btn-xs" name="july" >Print</button></span>
                                      <!-- GO BACK TO THE PREVIOUS PAGE ON SA ID-->
                                      <span class="pull-right"><a href="http://localhost/tester/employee/sa_record.php?id=<?php echo $_SESSION['sa_id'];?>
                    " class="btn btn-info btn-xs pull-right" role="button">Back</a></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                <!-- /.row -->
                </div>
                </div>

<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>



<!-- jquery Code for searching office -->

    <script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#office_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script> 