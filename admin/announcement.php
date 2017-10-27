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
  
<body style="background-color:#edf2f4;">
            <?php

            include('../server.php');
            include('admin_controller.php');
                        
            // Check if the user is logged In
            if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
               
            } else {
                header('location: ../login.php');;
            }

            ?>

    <div id="wrapper">

                <?php include('navigation_admin.php');?>

        <div id="page-wrapper" style="background-color:#edf2f4;">


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <!--
                        <h1 class="page-header">
                       
                        </h1> -->
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-book"></i> ANNOUNCEMENT
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
        <!--
        <form method="get">
            <div class="btn-group">
                <button class="btn btn-warning" type="submit" formaction="" data-tooltip="tooltip" title="Generate DTR Report" data-placement="left" name="dtrReports">
                    <i class="fa fa-lg fa-file-pdf-o">
                    </i>Generate DTR Report
                </button>
                <button class="btn btn-info" type="submit" formaction="" data-tooltip="tooltip" title="Generate Summary" data-placement="right" name="dtrSummary">
                    <i class="fa fa-lg fa-file-pdf-o">
                    </i>Generate Summary
                </button>
            </div>
        </form>-->

        <br>
               <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                            <div class="panel-heading">
                                <div class="row">
                    
                                    <div class="col-xs-12 text-center">
                                        <i class="fa fa-university fa-2x"></i>
                                        <div>
                                        <h4><strong> COLLEGE ADMISSIONS AND AID OFFICE</strong></h4>
                                        <h4>Ateneo de Naga University</h4>
                                        <h6>ANNOUNCEMENT</h6>
                                        <h6><i><?php $date = date('F d, Y'); echo $date; ?><i> </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                        
                           

                            <div class="panel-body fixed-panel" style=" background-color: #fffcd8;">
                            <div class="col-md-12">

                                       <div class="container-fluid form-horizontal" >
                            <!--<div class="panel panel-primary"> --><br>
                                    
                                      <?php
                                            $sql = "Select * from ANNOUNCEMENT";
                                            $result = mysqli_query($connect, $sql);
                                            $row = mysqli_fetch_assoc($result);

                                            $sql1 = "Select * from ADMISSION_STAFF";
                                            $result1 = mysqli_query($connect, $sql1);
                                            $row1 = mysqli_fetch_assoc($result1);
                                        ?>
                                                                           
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label" style="padding-top: 0px;">Topic :</label>
                                            <div class="col-sm-6 semibold"><?php echo $row['ANNOUNCEMENT_TITLE']; ?></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-6 control-label" style="padding-top: 0px;">About :</label>
                                            <div class="col-sm-6 semibold"><?php echo $row['ANNOUNCEMENT_DESC']; ?></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-6 control-label" style="padding-top: 0px;">When :</label>
                                            <div class="col-sm-6 semibold"><?php echo $row['ANNOUNCEMENT_DATE']; ?></div>
                                        </div>
                                
                                         <div class="form-group">
                                            <label class="col-sm-6 control-label" style="padding-top: 0px;">Regards :</label>
                                            <div class="col-sm-6 semibold"><?php echo $row1['FIRST_NAME'] . " " . $row1['MIDDLE_INITIAL'] . ". " . $row1['LAST_NAME']; ?></div>
                                         </div>

                                    </div>
                                    <div class="panel-footer">
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
                                    </div>
                                    </div>

                                    
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
