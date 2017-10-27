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


    <title>Announcement</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/create_user.css">
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

<!-- INCLUDED PHP FILES  -->
<?php include('../server.php');
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
                        <h1 class="page-header">
                            ADNU <small>COLLEGE ADMISSIONS AND AID OFFICE</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class=""></i> Create Annoucement
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
                    <!-- Form row/column-->
                                        <div class="row register-form">

                                            <div class="col-md-8 col-md-offset-2">

                                                <form class="form-horizontal custom-form" action="create_announce.php" method="post">
                                                      
                                                    <h1 class="fa fa-list-alt" >  Create Announcement <i class="fa fa-bullhorn"></i></h1>
                                                                                                       

                                                     <div class="form-group">
                                                        <div class="col-sm-4 label-column">
                                                            <label class="control-label" "> Title </label>
                                                        </div>
                                                        <div class="col-sm-6 input-column">
                                                            <input class="form-control" type="text" name="ANNOUNCEMENT_TITLE" placeholder="" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-4 label-column">
                                                            <label class="control-label" > Description </label>
                                                        </div>
                                                        <div class="col-sm-6 input-column">
                                                            <textarea class="form-control" type="text" name="ANNOUNCEMENT_DESC" required> </textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="col-sm-4 label-column">
                                                            <label class="control-label" >Date </label>
                                                        </div>
                                                        <div class="col-sm-6 input-column">
                                                            <input class="form-control" type="date" name="ANNOUNCEMENT_DATE" required>
                                                        </div>
                                                    </div> 
                                                    <button class="btn btn-default submit-button" type="submit" name="create_announce">Create </button>
                                                        <?php include ('../validation.php'); ?> 
                                                
                                                    
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                    </div>                               
                </div>
                <!-- /.row -->
            </div>
            <!-- Page-wrapper end -->

<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
