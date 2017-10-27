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
  
<body style="background-color:white;">
            <?php

            include('../server.php');
          //  include('sa_controller.php');

            ?>

    <div id="wrapper">

                <?php include('applicant-navigation.php');?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <!--
                        <h1 class="page-header">
                       
                        </h1> -->
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-notes"></i> Scholarship Program
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
                                        <h6><?php $date = date('F d, Y'); echo $date; ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                        
                           

                            <div class="panel-body fixed-panel" style=" background-color: #fffcd8;">
                            <div class="col-md-12">

                                       <div class="container-fluid form-horizontal" >
                            <!--<div class="panel panel-primary"> --><br>
                                    
                                      <div class="form-group">
                                            <br>
                                          

<li align="justify"> The Ateneo de Naga University Scholarship Program offers various types of financial assistance to deserving students depending on available slots and the scholarship applicants’ course and need. These range from tuition assistance of P5,000 to a full scholarship which covers students’ total assessment, board and lodging, and book expenses.
</li>
<br>

<ol> <b> For old students, eligibility is determined through: </b>

<li> Their most recent Scholastic Report Card or their Summary of Grades (Applicants must present either document in order to procure a Scholarship Application Form) </li>

<li> Eligible applicants are issued a Scholarship Application Form and interviewed on a later date. </li>

<li> Scholarship grantees are selected on the basis of need and scholastic ability/academic potential. </li>
 
</ol>
<br>

<li  align="justify">The Ateneo de Naga University also accepts scholars of various government units such as grantees of the City Government of Naga; the Province and Congressional Districts of Camarines Sur; CHED Grant-in-Aid Tulong Dunong Program, SAFE Scholarship Program, CHED Full-Merit Scholarship Program, CHED Half-Merit Scholarship Program and Study Now Pay Later Program (SNPLP); Overseas Workers Welfare Administrator (OWWA-CMWSP); Department of Science and Technology (DOST), and Government Service Insurance System (GSIS). </li>
<br>
<li  align="justify"> Those whose schooling is funded by non-government institutions as well as through some educational plans may also come to the University on such arrangement. </li>
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
