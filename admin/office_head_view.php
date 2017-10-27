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

<?php   include('../server.php');
        include('admin_controller.php');
        
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
                        <br>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Office Heads
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

<!---------------------------------------------
                Database Query
---------------------------------------------->

        <?php
      
         $query ="SELECT * FROM office_head";

         $result = mysqli_query($connect, $query);
         ?>



              <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                                <div class="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51);'>
                                <div class="row">
                                 
                                    <div class="text-center">

                                        <i class="fa fa-calendar fa-university fa-3x"></i>
                                        <div><i><strong><h4>Ateneo De Naga University</h4></strong></i></div>
                                        <div><i><strong><h4>Office Head</h4></strong></i></div>
                                    </div>
                                     <a href="create_office_head.php" class="btn btn-info btn-warning" style="margin-left: 10px;"><i class="fa fa-fw fa-plus"></i> Add Office Head</a><br>
                                </div>

                            </div>
                            <div class="panel-body" style=" background-color: #fffcd8;">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                  
                                        <thead>
                                            <tr>    
                                                <th>Employee ID</th>
                                                <th>Name</th>
                                                <th>Email Address</th>                                                
                                            </tr>
                                        </thead>
                                    <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)){ 
                                                ?>
                                                <tr>
                                                <td><?php echo $row['ID_NUMBER']?></td>
                                                <td><?php echo $row['NAME']?></td>
                                                <td><?php echo $row['EMAIL_ADDRESS']?></td>                                               
                                              <td><a href="office_head_edit.php?id=<?php echo $row['EMPLOYEE_ID']; ?> " class="btn btn-success" role="button" > Edit </a></td> 
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


