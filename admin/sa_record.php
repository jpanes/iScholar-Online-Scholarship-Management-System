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

<?php 

    // PHP INCLUDES
    include('sa_monthly_view.php');
    
// Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}
  

// STORES THE SA ID INTO SESSION VARIABLE USED IN THE EMPLOYEE ADMIN PAGE
    $_SESSION['sa_id'] = $_GET['id'];

    // Get the SA name base on it's ID
    $query1 = "SELECT * FROM student_assistant WHERE SA_ID = '{$_SESSION['sa_id']}'";
                $result1 = mysqli_query($connect, $query1);
                $row1 = mysqli_fetch_assoc($result1);
                $_SESSION['SA'] = $row1['FIRST_NAME']." ".$row1['MIDDLE_INITIAL'].". ".$row1['LAST_NAME'];
                $_SESSION['SA_OFFICE'] = $row1['DESIGNATED_OFFICE'];
?>

    <div id="wrapper">

        
        <?php include('navigation_admin.php'); ?>


        <div id="page-wrapper" style="background-color:#edf2f4;">

            <div class="container-fluid">

                <!-- Page Heading -->
                   <!--row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <!-- DTR Reports -->
                                 <?php echo " ".$_SESSION['SEM']; ?>
                            <small><?php echo "  - SY (".$_SESSION['SY'].")"; ?></small>
                            </h1>
                       
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> DTR Reports
                            </li>
                        </ol>
                    </div>
                </div>
                <!--row -->

                 <div class="panel panel-primary" style="border: 0">
                      <div class="panel-heading" align="center" style='border-bottom: 2px solid rgb(255, 153, 51); border-radius: 20px; font-size: 20px;'>
                        <strong> <?php echo $_SESSION['SA']?></strong> <small><?php echo " (". $_SESSION['SA_OFFICE'].")" ?></small>
                      </div>
                </div>




               <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>June</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="june" >view
                                                </button> 
                                                </form>
                                        </span>
                                      
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>July</div>
                                    </div>
                                </div>
                            </div>
                                <div class="panel-footer">
                                            <span class="pull-left">  
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="july" >view
                                                </button>
                                                </form>
                                            </span>
                                           
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>August</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="august" >view
                                                </button>
                                                </form>
                                        </span>
                                      
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>September</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                      <span class="pull-left">
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="september" >view
                                                </button>
                                                </form>
                                     </span>
                                     
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>October</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                      <span class="pull-left">
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="october" >view
                                                </button> 
                                                </form>
                                      </span>
                                     
                                    <div class="clearfix"></div>
                                </div>
                            </a> 
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>November</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="november" >view
                                                </button>
                                                </form>
                                      </span>
                                     
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>December</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="december" >view
                                                </button>
                                                </form>
                                        </span>
                                     
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>January</div>
                                    </div>
                                </div>
                            </div>
        
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="january" >view</button>
                                                </form>
                                        </span>
                                      
                                    <div class="clearfix"></div>
                                </div>
                        
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>February</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="february" >view
                                                </button>
                                                </form>
                                        </span>
                                       
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>March</div>
                                        <span class="pull-right">
                                                       <!--<i class="fa fa-check-circle fa-3x"> </i>
                                                       </span> -->
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                        <span class="pull-left">
                                              <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="march" >view
                                                </button>                        
                                                </form>
                                        </span>
                                        
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>April</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                      <span class="pull-left">
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="april" >view
                                                </button>
                                                </form>
                                      </span>
                                  
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>May</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                        <span class="pull-left">     
                                                <form method="post" action="sa_monthly_view.php">
                                                     <button type="submit" class="btn btn-warning btn-xs" name="may" >view
                                                </button>
                                                </form>
                                        </span>
                                         
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                     <!-- /.row -->
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
