             <?php
                // Start the session
                session_start();
    $_SESSION['family_income']=$_POST['family_income'];
    $_SESSION['profit_business']=$_POST['profit_business'];
    $_SESSION['profit_land']=$_POST['profit_land'];
    $_SESSION['profit_rentallands']=$_POST['profit_rentallands'];
    $_SESSION['profit_interests']=$_POST['profit_interests'];
    $_SESSION['profit_dividends']=$_POST['profit_dividends'];
    $_SESSION['profit_others']=$_POST['profit_others'];
    $_SESSION['profit_subtotal']=$_POST['profit_subtotal'];
    $_SESSION['profit_bankdeposits']=$_POST['profit_bankdeposits'];
    $_SESSION['profit_savingsaccount']=$_POST['profit_savingsaccount'];
    $_SESSION['profit_checkingaccounts']=$_POST['profit_checkingaccounts'];
    $_SESSION['profit_timedeposits']=$_POST['profit_timedeposits'];
    $_SESSION['profit_total']=$_POST['profit_total'];
    $_SESSION['profit_net']=$_POST['profit_net'];
    $_SESSION['profit_tax']=$_POST['profit_tax'];
              ?>
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


    <title>ApplicationForm</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>


    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="data_form.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('applicant-navigation.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Scholarship Application Form
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                 <a href="Application Form.pdf" download> <p> Download Application Form </p> </a>

               <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body" style=" background-color: #fffcd8;">
                       
                            <div class="row">
                                <!--<div class="col-lg-6 col-lg-offset-3">-->
                                    <form role="form" method="post" action="appform5.php">

                                        <div class="col-lg-6 col-lg-offset-3">
                                            <div class="form-group">
                                            <label>Location(Current Address)<span style="color:red">*</span></label>
                                                <input type="text" maxlength="50" class="form-control" placeholder="" name="res_location" required>
                                            </div>

                                            <div class='form-group'>
                                             <label>Residence Type<span style="color:red">*</span></label><br>
                                            
                                
                                
                                                <input type="radio" name="res_type" value="home"> Home <br>
                                                <input type="radio" name="res_type" value="apartment"> Apartment<br>
                                                
                                  
                                         
                                            
                                            </div>

                                            <div class='form-group'>
                                             <label>Ownership Type<span style="color:red">*</span></label>
                                           
                                            </div>
                                                <form>
                                
                                                <input type="radio" name="own_type" value="rented" id="rented"> Rented <br>

                                                <input type="radio" name="own_type" value="owned" id="owned"> Owned <br>
                                               

                                            <br>
                                            </form>
                                            

                                             <div class="col-sm-4">
                                            <label>Size of Lot<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="lot_size" required><br>
                                            </div>
                                              <div class='col-sm-4'>
                                            <label>Number of Bedrooms<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_bedrooms" required>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Baths/Toilets<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_baths" required>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>No. of helpers<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_helpers" required> <br>
                                            </div>
            
                                    
                                          

                                        <div class="col-lg-6 col-lg-offset-3">
                                        <div class="w3-center">
                                        <div class="w3-bar" align="center">
                              
                                            <input type="submit" value="Next Page" name="submit"class="btn btn-success">

                                        </div>
                                        </div>
                                        </div> 



                                             
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    
                                    
                                  
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
    
    <!-- /#wrapper -->
<div class="wthree-footer">
        <p>© 2017 All Rights Reserved | Design by iScholar.</p>
    </div>
</div>

<script type="text/javascript" src="js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
