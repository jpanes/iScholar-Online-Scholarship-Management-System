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

<!-- INCLUDED PHP FILES  -->
<?php

include('../server.php');


// Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}
//GET THE RATE ID
$employee_id = $_GET['id'];
$query = "SELECT * FROM office_head WHERE employee_id='$employee_id'";
$result = mysqli_query($connect, $query);

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
                                <i class=""></i> Create User
                            </li>
                            <li class="active">
                                <i class=""></i> Office Head
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
                    <!-- Form row/column-->
                    <div class="row">
                     
                         <div class="col-lg-12">
                                <div class="panel panel-primary" style="border: 0;">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body" style=" background-color: #fffcd8;">
                                        <div class="page-header">
                                            <h1 class="text-info">Office Head <small>account </small></h1></div>
                                             <!--  Student Assistant Form -->
                                        <form action="office_head_action.php"  method="post">
                                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                         <input type="hidden" name="id" value="<?php echo $row['EMPLOYEE_ID']; ?>">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label><strong>ID Number</strong></label>
                                                    <input class="form-control" type="text" name="ID_NUMBER" value="<?php echo $row['ID_NUMBER'];?>">
                                                </div> 
                                                <div class="col-md-4">
                                                    <label><strong>Full Name</strong></label>
                                                    <input class="form-control" type="text" name="NAME" placeholder="Surname, First Name MI" value="<?php echo $row['NAME'];?>">
                                                </div>
                                            
                                                <div class="col-md-4">
                                                    <label>Email Address</label>
                                                    <input class="form-control" type="text" name="EMAIL" value="<?php echo $row['EMAIL_ADDRESS'];?>">
                                                </div>
                                                

                                                <div class="col-md-12 text-center">
                                                    <hr>
                                                    <button class="btn btn-info btn-md" name="create_head" type="submit">Update </button>
                                                    <a href="http://localhost/iScholar/admin/office_head_view.php
                                                          " class="btn btn-danger text-center" role="button">Cancel</a>
                                                        <div class="clearfix"></div>
                                                 </div>
                                            </div>
                                        </form>    
                                    </div>
                                    <div class="panel-footer">
                                     <?php   } ?>
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
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
