             <?php
                // Start the session
                session_start();
    $_SESSION['father_last_name']=$_POST['father_last_name'];
    $_SESSION['father_first_name']=$_POST['father_first_name'];
    $_SESSION['father_middle_name']=$_POST['father_middle_name'];
    $_SESSION['father_status']=$_POST['father_status'];
    $_SESSION['father_occupation']=$_POST['father_occ'];
    $_SESSION['father_salary']=$_POST['father_salary'];
    $_SESSION['father_employer_name']=$_POST['father_emp_name'];
    $_SESSION['father_employer_address']=$_POST['father_emp_add'];
    $_SESSION['father_office_tel_no']=$_POST['father_office_tel_no'];
    $_SESSION['mother_last_name']=$_POST['mother_last_name'];
    $_SESSION['mother_first_name']=$_POST['mother_first_name'];
    $_SESSION['mother_middle_name']=$_POST['mother_middle_name'];
    $_SESSION['mother_status']=$_POST['mother_status'];
    $_SESSION['mother_occupation']=$_POST['mother_occ'];
    $_SESSION['mother_salary']=$_POST['mother_salary'];
    $_SESSION['mother_employer_name']=$_POST['mother_emp_name'];
    $_SESSION['mother_employer_address']=$_POST['mother_emp_add'];
    $_SESSION['mother_office_tel_no']=$_POST['mother_office_tel_no'];
    $_SESSION['guardian_last_name']=$_POST['guardian_last_name'];
    $_SESSION['guardian_first_name']=$_POST['guardian_first_name'];
    $_SESSION['guardian_middle_name']=$_POST['guardian_middle_name'];
    $_SESSION['guardian_relation']=$_POST['guardian_relation'];
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
                                    <form role="form" method="post" action="appform4.php">

                                            <div class="col-lg-6 col-lg-offset-3">
                                            <div class="form-group">
                                            <br><label>Family Financial Status</label><br>
                                             </div>
                                           <div class="form-group">

                                           <label>Annual Income(Father,Mother,Guardian and others contributing): <span style="color:red">*</span></label>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="family_income" required>
                                            </div>


                                            <div class="form-group">
                                            <label>Other Annual Resources:</label><br>
                                             </div>
                                            <div class='col-sm-4'>
                                            
                                            <label>Profit on Business</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_business" >
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>On Lands</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_land" >
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Rental Lands</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_rentallands" ><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>interests</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_interests" ><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>dividends</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_dividends" ><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>others</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_others" ><br>
                                            </div>
                                           <div class="form-group">
                                            <label>Subtotal</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_subtotal" >
                                            </div>

                                            <div class='col-sm-4'>
                                            
                                            <label>Bank Deposits</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_bankdeposits" ><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Saving Accounts</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_savingsaccount" ><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Checking Accounts</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_checkingaccounts" ><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Time Deposits</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_timedeposits" ><br>
                                            </div>
                                            <br>

                                      

                                             <div class="form-group">
                                            
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                           
                                            <label>Total (Less: Deductions)</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_total" >
                                            </div>

                                             <div class="form-group">
                                            <label>Net Payable Income</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_net" >
                                            </div>

                                             <div class="form-group">
                                            <label>Tax Paid</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_tax" >
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
