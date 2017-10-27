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

<body style="background-color: #edf2f4;">


<?php include('../server.php');
//Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}


// Ensures that theres no direct URL access in the page

 ?>

    <div id="wrapper">

         <?php include('navigation_employee.php');?>
         
        <div id="page-wrapper" style="background-color: #edf2f4;">

            <div class="container-fluid">

                <!-- Page Heading -->
                   <!--row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <!-- DTR Reports -->
                            ADNU <small><?php echo $_SESSION['office'] ?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Student Assistants
                            </li>
                        </ol>
                    </div>
                </div>
                <!--row -->
                <div class="row">
                <?php 
                
                //  Get the Employee id of the current employee user
                $query1 = "SELECT EMPLOYEE_ID FROM office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                $result1 = mysqli_query($connect, $query1);
                $row1 = mysqli_fetch_assoc($result1);
                $val = $row1['EMPLOYEE_ID']; // stores employee id

                // Displays  the record 
                $query = "SELECT FIRST_NAME, SA_ID, ID_NUMBER FROM student_assistant WHERE EMPLOYEE_ID = '$val'";
                $result = mysqli_query($connect, $query); 
                ?>

             <?php
                while ($row = mysqli_fetch_assoc($result)){ 
                                                ?>
                                               <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h4><i><?php echo $row['FIRST_NAME'];?></i></h4></div>
                                        <!-- CREATE A SESSION VARIABLE TO BE USE TO VIEW SA STUDENT RECORDV-->
                                        <div> <?php echo $row['ID_NUMBER'];?></div>                                
                                    </div>
                                </div>
                            </div>
        
                                <div class="panel-footer text-center">
                                        <span>
                                            <td><a href="sa_record.php?id=<?php echo $row['SA_ID']; ?> " class="btn btn-info btn-sm" role="button" > View </a>
                                            </td>
                                        </span>
                                    <div class="clearfix"></div>
                                </div>
                        
                        </div>
                    </div>
                    <?php
                        }
                        
                        mysqli_free_result($result);
                        mysqli_close($connect);
                    ?> 

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
