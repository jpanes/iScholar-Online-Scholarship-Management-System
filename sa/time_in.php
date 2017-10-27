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

<body  style=" background-color: #e3efef;">

    <?php include('../server.php');
          include('sa_controller.php');
          //include('time_total.php');
          //include('time_remains.php');
          //include('function.php');

        if(isset($_POST['print_payable']))
        {
        // For Session header and includes
        while (ob_get_level())
        ob_end_clean();
        header("Content-Encoding: None", true);

          ob_start();

        require('../fpdf17/fpdf.php');

        class PDF extends FPDF {
            function Header(){

        $connect = new mysqli('localhost', 'root', '', 'prototype');

         // Get the student Assistant details
                $query2 = "SELECT * FROM student_assistant where ID_NUMBER = '{$_SESSION['username']}'";
                $result2 = mysqli_query($connect, $query2);

                $this->SetFont('Arial','B',14);        

                $this->Cell(0,5,'College Admissions and Aid Office',0,1,'C');

        while($data2=mysqli_fetch_array($result2)){

        //set font to arial, regular, 12pt
        $this->SetFont('Arial','',12);
        $this->Cell(0,5,'Ateneo de Naga University',0,1,'C');
        $this->Cell(0,5,'Naga City',0,1,'C');
        $this->Ln(10); // line break space
        $this->Cell(0,5,'*************************************************',0,1,'C');//end of line
        $this->Cell(0,5,'Student Assistant',0,1,'C');//end of line
        $this->Cell(0,5,'Deficiency Account',0,1,'C');//end of line
        $this->Ln(2); // line break space
        $this->Cell(0,5,'*************************************************',0,1,'C');//end of line
        $this->Ln(1); // line break space
        if($this->GetStringWidth($data2['DESIGNATED_OFFICE']) > 35){
        $this->SetFont('Arial','',9);
        $this->Cell(0,5,'Office/Department: ' .$data2['DESIGNATED_OFFICE'],0,1,'C');
        $this->SetFont('Arial','',12);
        }else{
        $this->Cell(0,5,'Office/Department: ' .$data2['DESIGNATED_OFFICE'].', ',0,1,'C');
        }
        $this->Ln(10); // line break space
        $this->Cell(0,5,'Student ID: '.$data2['ID_NUMBER'],0,1);
        $this->Cell(0,5,'Name: '.$data2['LAST_NAME'].', '.$data2['FIRST_NAME'],0,1);
        $this->Cell(0,5,'Course: '.$data2['COURSE'],0,1);
        $this->Ln(3); // line break space
        $this->Cell(0,5,'Total Hours: ....................................'.' [ '.$_SESSION['totalTime'].' ]',0,1);
        $this->Cell(0,5,'Deficiency:  .....................................'.' [ '.$_SESSION['remainTime'].' ]',0,1);
        $this->Ln(2); // line break space
        $this->Cell(100,0,'','T',1,'',true);
        $this->Ln(2); // line break space
        $this->Cell(0,5,'Payable Amount:                             '.' [ '. "P".' '.$_SESSION['difficiency_amount'].' ]',0,1);
        $this->Ln(1); // line break space
        $this->Cell(100,0,'','T',1,'',true);
        }
           
        //dummy cell to give line spacing
        //$this->Cell(0,5,'',0,1);
        //is equivalent to:
        $this->Ln(8);
                
        $this->SetFont('Arial','',12);
        $this->SetTextColor(244, 246, 249);
                
            }

            function Footer(){
                
                //Go to 1.5 cm from bottom
                $this->SetY(-15);
                        
                $this->SetFont('Arial','',9);
                
                //width = 0 means the cell is extended up to the right margin
                $this->Cell(0,5,'Note: This is a system generated report. No signatures required.',0,1,'C');
                $this->Cell(0,5,'Date generated: '.date( 'F d,Y h:i A'),0,0,'C');
                //$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,1,'C');
            }
        }

        //A4 width : 219mm
        //default margin : 10mm each side
        //writable horizontal : 219-(10*2)=189mm

        $pdf = new PDF('P','mm',array(150,120)); //use new class

        //define new alias for total page numbers
        $pdf->AliasNbPages('{pages}');
        $pdf->SetAutoPageBreak(true,15);
        $pdf->AddPage();
        $pdf->SetFont('Arial','',9);
        $pdf->SetDrawColor(85, 135, 236);

            $pdf->Output();
            ob_end_flush();

            }

    ?>

    <div id="wrapper">

            <?php include('navigation_sa.php');?>

        <div id="page-wrapper"  style=" background-color: #e3efef;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1>
                            ADNU <small><?php echo $_SESSION['sa_office'] ?> </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i> Home
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->

                <?php $datetime = date("l F jS, Y");?>

                   <div class="row">
                        <div class="col-lg-9">
                            <div class="panel panel-primary" style="border: 0;">
                                    <div class="panel-heading"><p><img class="img-responsive" src="../images/logo.png"></p></div>
                                        <div id="MyClockDisplay" class="clock">
                                            <script>
                                                showTime();
                                            </script>
                                       </div>
                                    <div  class="panel-body">
                                        <form method="post" action="time_in.php">
                                            <div  class="date"> <p> <?php echo $datetime ?> </p></div>
                                            <p><button class="btn btn-success btn-lg" type="submit" name="timein">Time IN</button>
                                            </p>
                                        </form>
                                    </div>
                                <div class="panel-footer">
                                        <?php include ('../validation.php'); ?> 
                                </div>
                            </div>
                        </div>

                                <div class="col-lg-3">
                                    <div class ="panel panel-primary" style="border: 0;">
                                             <div class="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51);'><i class="fa fa-calculator"></i>   -    DTR Summary Report</div>
                                            <div class ="panel-body" style="min-height: 297px; max-height: 297px; background-color: #fff8af;">


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Total Hours</label>
                                                    <strong><input class="form-control" type="text" value="<?php echo $_SESSION['totalTime'];?>" disabled></strong>
                                                <br>
                                                </div> 
                                                <div class="col-md-12">
                                                    <label><strong>Hours Remaining</strong></label>
                                                    <strong><input class="form-control" type="text" value="<?php echo $_SESSION['remainTime'];?>" disabled></strong>
                                                    <br>
                                                </div>
                                            
                                                <div class="col-md-12">
                                                    <label>Amount to Pay </label>
                                                    <strong><input class="form-control" type="text" value="<?php echo "₱ ". $_SESSION['difficiency_amount'];?>" disabled></strong>
                                                    <br>
                                                </div>

                                                <div class="col-md-12">
                                                <form method="post">
                                                    <div class="btn-group pull-right">
                                                        <button class="btn btn-danger btn-xs" type="submit" name="print_payable">
                                                            <i class="fa fa-">
                                                            </i> Print Payable
                                                        </button>
                                                    </div>
                                                </form>
                                                </div>    
                                            <br>
                                            </div>
                                    </div>
                                </div>  
                    </div>    

                <!-- /.row -->

                
                </div>
                <!-- /.row -->

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript
    <script src="js/plugins/morris/raphael.min.js"></script> 
    <script src="js/plugins/morris/morris.min.js"></script> 
    <script src="js/plugins/morris/morris-data.js"></script>  -->

</body>

</html>
