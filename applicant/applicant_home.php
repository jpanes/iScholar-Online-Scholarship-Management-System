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


    <title>Admin Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>


    
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

<?php include('../server.php'); ?>

    <div id="wrapper">
        
        <?php  include('applicant-navigation.php');?>

        <div id="page-wrapper">

            <div class="container-fluid">
                    <?php
                            //Get the latest post using the ID
                            $sql = "SELECT * FROM ANNOUNCEMENT ORDER BY ANNOUNCEMENT_ID DESC LIMIT 1";
                            $result = $connect->query($sql);

                ?>

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <!-- DTR Reports -->
                             ADNU <small>COLLEGE ADMISSIONS AND AID OFFICE</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-home"></i> HOME
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-9">
                                    <div class="panel-body" style=" background-color: #fffcd8;">

                                             <img class="img-responsive" src="../images/banner.png" alt="ischolar_logo">

                                    </div>
                                <div class="panel-footer">
                                        <!-- /* <?php include ('../validation.php'); ?> */ -->
                                </div>
                        </div>

                                <div class="col-lg-3">
                                    <div class ="panel panel-primary" style="border: 0; text-align: center;">
                                            <div class ="panel-heading"><i class="fa fa-bullhorn"></i><strong> ANNOUNCENMENT</strong></div>
                                            <div class ="panel-body" style="background-color: #fff8af;">
                                         <!--   <div class ="panel-body" style="min-height: 297px; max-height: 297px; background-color: #fff8af;"> -->


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
                                                while($row = $result->fetch_assoc()) {
                                                ?>
                                            <tr>                                                 
                                                 <b><p><?php echo $row['ANNOUNCEMENT_TITLE']?></p></b>
                                                 <p><b>When: </b><?php echo $row['ANNOUNCEMENT_DATE']?></p>
                                                 <p><?php echo $row['ANNOUNCEMENT_DESC']?></p>
                                            </tr>
                                                <?php 
                                                }
                                                mysqli_free_result($result);
                                                mysqli_close($connect);
                                                ?> 
                                                <br>
                                                </div> 
                                                
                                            <br>
                                            </div>
                                    </div>
                                    <div class="panel-footer" style="min-height: 5px; max-height: 5px;"">
                                        
                                </div>
                                </div>  
                    </div>           
                <!-- /.row -->

                
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
