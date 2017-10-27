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

if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}


 $query = " SELECT * FROM office_head";

 $result = mysqli_query($connect, $query);



 ?>


    <div id="wrapper">

         <?php include('navigation_admin.php');?>
       
        <div id="page-wrapper" style="background-color:#edf2f4;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.php"> Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-building"></i> Create Office
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                     
                         <div class="col-lg-12">
                                <div class="panel panel-primary" style="border: 0">
                                    <div class="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51);'>
                                         <h2 class="text-info" style="color: white;"><i class="fa fa-university fa-1x"></i> Ateneo De Naga University <small style="color: white;">Offices </small></h2></div>
                                    </div>
                                    <div class="panel-body" style=" background-color: #fffcd8;">
                                             <!--  Student Assistant Form -->
                                        <form method="post" action="office_add.php">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                                 <div class="col-md-6">
                                                    <label>Office Name</label>
                                                        <input class="form-control" type="text" name="office_name" required>
                                                    </select>
                                                </div>
                                                 <div class="col-md-6">
                                                    <label>Office Head</label>
                                                    <!-- Fetch the data into the database through dropdown -->
                                                     <select class="form-control" type="text" name="head">
                                                        <?php while($row = mysqli_fetch_array($result)):;?>
                                                        <option value="<?php echo $row[0];?>"><?php echo $row[2];?></option>
                                                        <?php endwhile;?> 
                                                    </select>
                                                </div>  
                                                <div class="col-md-3">
                                                    <label><strong>Office ID</strong></label>
                                                    <input class="form-control" type="text" name="office_id" required>
                                                </div>  

                                                <div class="col-md-3">
                                                    <label><strong>Office Desc</strong></label>
                                                    <input class="form-control" type="text" name="designation" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><strong>Office Category</strong></label>
                                                    <input class="form-control" type="text" name="category" required>
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <hr>
                                                    <button class="btn btn-info btn-md" name="create_office" type="submit">Create </button>
                                                    <button class="btn btn-danger btn-md" type="reset" value="Reset">Reset</button>
                                                    <br>
                                                    <br>
                                                        <div class="clearfix"></div>
                                                 </div>
                                            </div>
                                            </div>
                                        </form>    
                                    </div>
                                    <div class="panel-footer">
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
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


