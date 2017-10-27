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

<body  style="background-color:#edf2f4;">
<?php include('../server.php');
      include('admin_controller.php');


// Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}

$STUDENT_ID = $_GET['id'];
$query = "SELECT * FROM applicant WHERE  STUDENT_ID='$STUDENT_ID'";
$result = mysqli_query($connect, $query);

 ?> 

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('navigation_admin.php'); ?>

        <div id="page-wrapper"  style="background-color:#edf2f4;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       <br>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i>Application Form
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <div class="col-lg-12">
                    <div class="panel panel-primary" style=" position: absolute; border: 0; ">
                <ul class="pager" style="padding-right: 10px; padding-left: 10px; max-height: 15px;"><?php
                                                while ($row = mysqli_fetch_assoc($result)){ 
                                                ?>
                                                <li class="previous"><a href="admin_view_appform.php?id=<?php echo $row['STUDENT_ID'];?>">← Previous</a></li>
                                                <li class="next"><a href="admin_view_appform3.php?id=<?php echo $row['STUDENT_ID']; ?> ">Next →</a></li>
                </ul>
                <div class="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51); border-radius;'>
                                <div class="row">
                                 
                                    <div class="text-center">

                                        <i class="fa fa-calendar fa-university fa-3x"></i>
                                        <div><i><strong><h4>Ateneo De Naga University</h4></strong></i></div>
                                        <div><i><strong><h4>Scholarship Applicants</h4></strong></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-body" style=" background-color: #fffcd8; padding-right: 100px; padding-left: 100px;">
       
                            <div class="row">

                                <!--<div class="col-lg-6 col-lg-offset-3">-->
                                    <form role="form" method="post" action="admin_view_appform.php">

                                   <div class="col-lg-12"><br>
                                                
                                            <div class="reveal-if-active">
                                            <label>Father's Name</label>
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>Last Name</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="father_lastname" value="<?php echo $row['FATHER_LAST_NAME'] ?>" id="disabledInput" disabled>
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>First Name</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="father_firstname" value="<?php echo $row['FATHER_FIRST_NAME'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Middle Nmae</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="father_MI" value="<?php echo $row['FATHER_MIDDLE_NAME'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                            <div class='col-sm-4'>
                                             <label>Status</label><br>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="father_status" value="<?php echo $row['FATHER_STATUS'] ?>" id="disabledInput" disabled>
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>Occupation</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="father_occ" value="<?php echo $row['FATHER_OCCUPATION'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>Monthly Salary</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="father_salary" value="<?php echo $row['FATHER_SALARY'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                          
                                           <div class="form-group">

                                           <label>Employer's Name</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="father_emp_name" value="<?php echo $row['FATHER_EMPLOYER_NAME'] ?>" id="disabledInput" disabled >

                                            <br><label>Employer's Address</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="father_emp_add" value="<?php echo $row['FATHER_EMPLOYER_ADDRESS'] ?>" id="disabledInput" disabled >

                                            <br><label>Office Telephone No.</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="father_office_tel_no" value="<?php echo $row['FATHER_OFFICE_TEL_NO'] ?>" id="disabledInput" disabled>
                                            <hr>

                                            <div class="form-group">
                                            <label>Mother's Name</label><br>
                                             </div>
                                            <div class='col-sm-4'>
                                            
                                            <label>Last Name</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_lastname" value="<?php echo $row['MOTHER_LAST_NAME'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>First Name</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_firstname" value="<?php echo $row['MOTHER_FIRST_NAME'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>M.I</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_MI" value="<?php echo $row['MOTHER_MIDDLE_NAME'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                            <div class='col-sm-4'>
                                             <label>Status</label><br>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="father_status" value="<?php echo $row['MOTHER_STATUS'] ?>" id="disabledInput" disabled>
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>Occupation</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_occ" value="<?php echo $row['MOTHER_OCCUPATION'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>Monthly Salary</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_salary" value="<?php echo $row['MOTHER_SALARY'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                          
                                           <div class="form-group">

                                           <label>Employer's Name</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="mother_emp_name" value="<?php echo $row['MOTHER_EMPLOYER_NAME'] ?>" id="disabledInput" disabled>

                                            <br><label>Employer's Address</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="mother_emp_add" value="<?php echo $row['MOTHER_EMPLOYER_ADDRESS'] ?>" id="disabledInput" disabled>

                                            <br><label>Office Telephone No.</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="mother_office_tel_no" value="<?php echo $row['MOTHER_OFFICE_TEL_NO'] ?>" id="disabledInput" disabled>

                                            </div>
                                             <div class="form-group">
                                            <label>Guardian's Name</label><br>
                                             </div>
                                            <div class='col-sm-4'>
                                            
                                            <label>Last Name</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="guardian_lastname" value="<?php echo $row['GUARDIAN_LAST_NAME'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>First Name</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="guardian_firstname" value="<?php echo $row['GUARDIAN_FIRST_NAME'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>M.I</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="guardian_MI" value="<?php echo $row['GUARDIAN_MIDDLE_NAME'] ?>" id="disabledInput" disabled><br>
                                            </div>
                                           <div class="form-group">
                                            <label>Relation</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="guardian_relation" value="<?php echo $row['GUARDIAN_RELATION'] ?>" id="disabledInput" disabled>
                                            </div>
            
                                    
                                           <div class="form-group">
                                            <br><label>Family Financial Status</label><br>
                                             </div>
                                           <div class="form-group">

                                           <label>Annual Income(Father,Mother,Guardian and others contributing): </label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="family_income" value="<?php echo $row['FAMILY_INCOME'] ?>" id="disabledInput" disabled>
                                            </div>


                                            <div class="form-group">
                                            <label>Other Annual Resources:</label><br>
                                             </div>
                                            <div class='col-sm-4'>
                                            
                                            <label>Profit on Business</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_business" value="<?php echo $row['PROFIT_BUSINESS'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>On Lands</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_land" value="<?php echo $row['PROFIT_LAND'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Rental Lands</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_rentallands" value="<?php echo $row['PROFIT_RENTALLANDS'] ?>" id="disabledInput" disabled><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>interests</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_interests" value="<?php echo $row['PROFIT_INTERESTS'] ?>" id="disabledInput" disabled><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>dividends</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_dividends" value="<?php echo $row['PROFIT_DIVIDENDS'] ?>" id="disabledInput" disabled><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>others</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_others" value="<?php echo $row['PROFIT_OTHERS'] ?>" id="disabledInput" disabled><br>
                                            </div>
                                           <div class="form-group">
                                            <label>Subtotal</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_subtotal" value="<?php echo $row['PROFIT_SUBTOTAL'] ?>" id="disabledInput" disabled>
                                            </div>

                                            <div class='col-sm-4'>
                                            
                                            <label>Bank Deposits</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_bankdeposits" value="<?php echo $row['PROFIT_BANKDEPOSITS'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Saving Accounts</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_savingaccounts" value="<?php echo $row['PROFIT_SAVINGSACCOUNT'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Checking Accounts</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_checkingaccounts" value="<?php echo $row['PROFIT_CHECKINGACCOUNTS'] ?>" id="disabledInput" disabled><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Time Deposits</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_timedeposits" value="<?php echo $row['PROFIT_TIMEDEPOSITS'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                             <div class='col-sm-4'>
                                            <label>Total (Less: Deductions)</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_total" value="<?php echo $row['PROFIT_TOTAL'] ?>" id="disabledInput" disabled>
                                            </div>

                                             <div class='col-sm-4'>
                                            <label>Net Payable Income</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_net" value="<?php echo $row['PROFIT_NET'] ?>" id="disabledInput" disabled><br>
                                            </div>
                                            
                                            <div class="form-group">
                                            <label>Tax Paid</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="profit_tax" value="<?php echo $row['PROFIT_TAX'] ?>" id="disabledInput" disabled>
                                            </div>

                                             <div class="form-group">
                                            <label>Permanent Residence</label><br>
                                             </div>

                                            <div class="form-group">
                                            <label>Location</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="res_location" value="<?php echo $row['RES_LOCATION'] ?>" id="disabledInput" disabled>
                                            </div>

                                            <div class='col-sm-4'>
                                             <label>Residence Type</label>
                                            
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="res_type" value="<?php echo $row['RES_TYPE'] ?>" id="disabledInput" disabled>  
                                            </div>

                                            <div class='col-sm-4'>
                                             <label>Ownership Type</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="res_type" value="<?php echo $row['OWN_TYPE'] ?>" id="disabledInput" disabled>
                                            </div>

                                                    <div class='col-sm-4'>
                                                        <label>how long in this place?</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="rent_long" value="<?php echo $row['RENTED_DURATION'] ?>" id="disabledInput" disabled>
                                                    </div>

                                                    <div class='col-sm-4'>
                                                        <label>Monthly Rent</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="mon_rent" value="<?php echo $row['RENTED_MONTHLY'] ?>" id="disabledInput" disabled> 
                                                    </div>
                                                
                                               
                                                    <div class='col-sm-4'>
                                                        <label>Owned by whom?</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="owner_name" value="<?php echo $row['OWNED_NAME'] ?>" id="disabledInput" disabled>
                                                    </div>

                                                    <div class='col-sm-4'>
                                                        <label>When Acquired</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="acq_date" value="<?php echo $row['OWNED_ACQ_DATE'] ?>" id="disabledInput" disabled>
                                                    </div>

                                                    <div class='col-sm-4'>
                                                        <label>Cost When Acquired</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="cost_acq" value="<?php echo $row['OWNED_COST_ACQ'] ?>" id="disabledInput" disabled>
                                                    </div>
                                                     <div class='col-sm-4'>
                                                       
                                                    </div>

                                                   <div class='col-sm-4'>
                                                        <label>Present Market Value</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="market_val" value="<?php echo $row['OWNED_MARKET_VAL'] ?>" id="disabledInput" disabled>
                                                    </div>
                                                    </div>
                                        </form>    
                                    </div>
                                    </div>
                                    </form>
                                        <ul class="pager">
                                                <li class="previous"><a href="admin_view_appform.php?id=<?php echo $row['STUDENT_ID']; ?> ">← Previous</a></li>
                                                <li class="next"><a href="admin_view_appform3.php?id=<?php echo $row['STUDENT_ID']; ?> ">Next →</a></li>
                                        </ul>
                                        <?php 
                                                }
                                                mysqli_free_result($result);
                                                mysqli_close($connect);
                                        ?> 
                    </div>
                    </div>
                                    <div class="panel-footer">
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
                                    </div>
    
    <!-- /#wrapper -->


<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
