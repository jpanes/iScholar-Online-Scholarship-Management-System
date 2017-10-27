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

<?php

include('../server.php');

// Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}
//GET THE SCHOLARSHIP ID
$scholarship_id = $_GET['id'];
$query = "SELECT * FROM scholarship WHERE  SCHOLARSHIP_ID='$scholarship_id'";
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
                                <i class="fa fa-edit"></i> DTR Reports
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

        <?php
      
         //$query ="SELECT SCHOLARSHIP_ID, GENERAL_TYPE, SPECIFIC_TYPE, MAINTAINING_QPI FROM scholarship";

        // $result = mysqli_query($connect, $query);
         ?>
                   <div class="row">
                     
                         <div class="col-lg-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">

                                    </div>
                                    <div class="panel-body">
                                        <div class="page-header">
                                            <h2 class="text-info"><i class="fa fa-graduation-cap fa-1x"></i> Scholarship <small>Management </small></h2></div>
                                             <!--  Student Assistant Form -->
                                        <form method="post" action="scholarship_action.php">


                                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                                            <input type="hidden" name="id" value="<?php echo $row['SCHOLARSHIP_ID']; ?>">
                                        
                                            <div class="row">
                                                 <div class="col-md-4">
                                                    <label>General Type</label>
                                                    <select class="form-control" type="text" name="gen_type" value="<?php echo $row['GENERAL_TYPE'];?>">
                                                        <option value="ATENEO SOURCES">Ateneo Sources</option>
                                                        <option value="OUTSIDE SOURCES">Outside Sources</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label><strong>Specific Type</strong></label>
                                                    <input class="form-control" type="text" name="spe_type" value="<?php echo $row['SPECIFIC_TYPE'];?>">
                                                </div>
                                                <div class="col-md-4">
                                                    <label><strong>Maintaining QPI</strong></label>
                                                    <input class="form-control" type="text" name="qpi" value="<?php echo $row['MAINTAINING_QPI'];?>">
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <hr>
                                                    <button type="submit" class="btn btn-success" >Done</button>
                                                         <a href="http://localhost/iScholar/admin/scholarship_view.php
                                                          " class="btn btn-danger text-center" role="button">Cancel</a>
                                                     </div>
                                                    <br>
                                                    <br>
                                                        <div class="clearfix"></div>
                                                 </div>
                                            </div>
                                              <?php   } ?>
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
                                        </form>    
                                    </div>
                                    <div class="panel-footer">
                                          
                                    </div>
                            </div>
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
