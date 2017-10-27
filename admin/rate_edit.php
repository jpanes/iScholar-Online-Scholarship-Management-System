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


    <title>Rate</title>
     
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

<?php

include('../server.php');

// Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}
//GET THE RATE ID
$rate_id = $_GET['id'];
$query = "SELECT * FROM rate WHERE RATE_ID='$rate_id'";
$result = mysqli_query($connect, $query);
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
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Rate
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

<!---------------------------------------------
                Database Query
---------------------------------------------->

        <?php
      
       //  $query ="SELECT * FROM rate";

       //  $result = mysqli_query($connect, $query);
         ?>



              <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                            <div class="panel-heading">
                                <div class="row">
                                 
                                    <div class="text-center">

                                        <i class="fa fa-calendar fa-university fa-3x"></i>
                                        <div><i><strong><h4>Ateneo De Naga University Rate</h4></strong></i></div>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-body" style=" background-color: #fffcd8;">
                            <div class="col-md-12">
                               <div class="row register-form">

                                            <div class="col-md-8 col-md-offset-2">

                                                <form class="form-horizontal custom-form" action="rate_action.php" method="post">
                                                      <hr>
                                                       <h1 class="text-justify">Edit Rate</h1><img src="../images/hat.png" width="100">
                                                       <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                                                       <input type="hidden" name="id" value="<?php echo $row['RATE_ID']; ?>">
                                                   
                                                    <div class="form-group">
                                                        <div class="col-sm-4 label-column">
                                                            <label class="control-label" ">School Year</label>
                                                        </div>
                                                        <div class="col-sm-6 input-column">
                                                            <input class="form-control" type="text" name="syear" value="<?php echo $row['SYEAR'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-4 label-column">
                                                            <label class="control-label" >Deficiency Amount </label>
                                                        </div>
                                                        <div class="col-sm-6 input-column">
                                                            <input class="form-control" type="text" name="deficiency_amount" value="<?php echo $row['DEFICIENCY_AMOUNT'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                    <hr>
                                                    <button type="submit" class="btn btn-success" >Done</button>
                                                         <a href="http://localhost/iScholar/admin/rate_view.php
                                                          " class="btn btn-danger text-center" role="button">Cancel</a>
                                                     </div>
                                                    <br>
                                                    <br>
                                                        <div class="clearfix"></div> 
                                                </div>
                                                <?php   } ?>
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
                                                    
                                                </form>

                                            </div>
                                        </div>
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


