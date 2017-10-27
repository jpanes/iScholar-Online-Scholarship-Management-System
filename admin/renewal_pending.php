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

<?php include('../server.php');

// Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}


 ?>

    <div id="wrapper">

        
        <?php include('navigation_admin.php'); ?>


        <div id="page-wrapper" style="background-color:#edf2f4;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <!-- DTR Reports -->
                        <?php echo " ".$_SESSION['SEM']; ?>
                        <small><?php echo "  - SY (".$_SESSION['SY'].")"; ?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-exchange"></i> Pending Renewal
                            </li>
                        </ol>
                    </div>
                </div>


        <?php

            $sy = $_SESSION['SY'];
            $sem =$_SESSION['SEM'];
      
      
         $query ="SELECT * FROM renewal WHERE GRANTEE_STATUS = 'PENDING' AND school_year = '$sy' AND SEMESTER = '$sem'";


         $result = mysqli_query($connect, $query);
         ?>

              <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                              <div class="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51);'>
                                <div class="row">
                                 
                                    <div class="text-center">

                                        <i class="fa  fa-mortar-board fa-3x"></i>
                                        <div><i><strong><h4>Ateneo De Naga University Offices</h4></strong></i></div>
                                        <h5>List of Pending Renewal of Scholarship</h5>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-body" style=" background-color: #fffcd8;">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                  
                                        <thead>
                                            <tr>    
                                                <th>RENEWAL DATE</th>
                                                <th>STUDENT ID</th>
                                                <th>NAME</th>
                                                <th>CONTACT NUMBER</th>
                                                <th>SEMESTER</th>
                                                <th>SEMESTRAL QPI</
                                                
                                            </tr>
                                        </thead>
                                    <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)){ 
                                                ?>
                                                <tr>
                                                <td><?php echo $row['RENEWAL_DATE']?></td>
                                                <td><?php echo $row['STUDENT_ID']?></td>
                                                <td><?php echo $row['NAME']?></td>
                                                <td><?php echo $row['CONTACT_NUMBER']?></td>
                                                <td><?php echo $row['SEMESTER']?></td>
                                                <td><?php echo $row['qpi']?></td>

                                                 <td><a href="renewal_view.php?id=<?php echo $row['RENEWAL_ID']; ?> " class="btn btn-success" role="button" > View </a></td>
                                                
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
                                      
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                <!-- /.row -->
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
