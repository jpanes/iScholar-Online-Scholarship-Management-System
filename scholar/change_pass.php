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


    <title>User</title>

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

<body style=" background-color: #e3efef;">

<!-- INCLUDED PHP FILES  -->
<?php include('../server.php');
      include('scholar_controller.php');
 ?>

    <div id="wrapper">

          <?php include('navigation_scholar.php');

    if(isset($_POST['change_password'])){

    $password = sanitizeString($_POST['pass']);
    $new = sanitizeString($_POST['new']);
    $rnew = sanitizeString($_POST['repeat_new']);

    $sql = "SELECT PASSWORD FROM user WHERE USERNAME = '{$_SESSION['username']}'";
    $r_sql = mysqli_query($connect, $sql);
    $row_s = mysqli_fetch_assoc($r_sql);
    $ori_password = $row_s['PASSWORD'];
    
    if($ori_password == $password && $new == $rnew){

        mysqli_query($connect,"UPDATE user SET PASSWORD = '$new' WHERE USERNAME = '{$_SESSION['username']}'");

    array_push($success, "Change Successfully!");
    }else{
    array_push($errors, "Password Does not Match!!");
    }

    }

?>
  

        <div id="page-wrapper" style=" background-color: #e3efef;">

            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="fa fa-lock"></i> Password
                            </li>
                            <li class="active">
                                <i class="fa fa-unlock"></i> Change Password
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
                    <!-- Form row/column-->
                                        <div class="row register-form">

                                            <div class="col-md-8 col-md-offset-2">

                                                <form class="form-horizontal custom-form" method="post">
                                                      <hr>
                                                    <h1 class="text-justify">Change Password</h1>   <i class="fa fa-calendar fa-unlock fa-3x"></i>
                                                    <div class="form-group">
                                                        <div class="col-sm-4 label-column">
                                                            <label class="control-label" for="pawssword-input-field">Old Password </label>
                                                        </div>
                                                        <div class="col-sm-6 input-column">
                                                            <input class="form-control" type="password" name="pass" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-4 label-column">
                                                            <label class="control-label" for="repeat-pawssword-input-field">New Password</label>
                                                        </div>
                                                        <div class="col-sm-6 input-column">
                                                            <input class="form-control" type="password" name="new" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-4 label-column">
                                                            <label class="control-label" for="repeat-pawssword-input-field">Repeat Password</label>
                                                        </div>
                                                        <div class="col-sm-6 input-column">
                                                            <input class="form-control" type="password" name="repeat_new" required>
                                                        </div>
                                                    </div>
                                                   
                                                    <button class="btn btn-default submit-button" type="submit" name="change_password">Confirm</button>
                                                        <?php include ('../validation.php'); ?> 
                                                </div>
                                                    
                                                </form>

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
