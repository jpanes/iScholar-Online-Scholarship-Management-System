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


    <title>DTR Report</title>

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

<?php

include('../server.php');
//Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}

//GET THE SA ID
$dtrId = $_GET['id'];
$query = "SELECT * FROM dtr WHERE DTR_ID='$dtrId'";
$result = mysqli_query($connect, $query);
?>

    <div id="wrapper">

    <?php include('navigation_employee.php');?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                   <!--row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <!-- DTR Reports -->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> DTR Reports
                            </li>
                        </ol>
                    </div>
                </div>
                <!--row -->
                <div class="row" >
                <!-- Form Center -->
                    <div class="col-md-4 col-md-offset-4 col-xs-12">

                        <div class="panel panel-primary" style=" position: absolute; ">
                            <div class="panel-heading"></div>
                                <div class="panel-body">
                                        <h1 class="text-info"><i class="fa fa-pencil"></i> <small>Edit Daily Time Record  </small></h1>
                                        <hr>
    
                                            <form role="form" action="time_edit.php" method="post">
                                            <fieldset>

                                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                                            <input type="hidden" name="id" value="<?php echo $row['DTR_ID']; ?>">
                                                <label> Time In</label>
                                            <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-log-in"></i></span>
                                                <input type="text" name="timeIn" class="form-control text-center" value="<?php echo $row['TIME_IN'];?>">
                                            </div>
                                            <br>
                                            <label> Time Out</label>
                                            <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-log-out"></i></span>
                                                <input type="text" name="timeOut" class="form-control text-center" value="<?php echo $row['TIME_OUT'];?>">
                                            </div>
                                              <br>
                                            <div class="panel-footer pull-center">
                                           <button type="submit" class="btn btn-success" >Done</button>
                                            <a href="http://localhost/iScholar/employee/sa_view.php?id=<?php echo $_SESSION['sa_id'];?>
                                            " class="btn btn-danger pull-right" role="button">Cancel</a>
                                            </div>
                                            <?php   } ?>
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
                                            </div>
                                            </fieldset>
                                            </form>

                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>


                     <!-- /.row -->


<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
