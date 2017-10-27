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
                <div class="panel panel-primary" style=" position: absolute; border: 0; ">
                 <ul class="pager" style="padding-right: 10px; padding-left: 10px; max-height: 15px;"><?php
                                                while ($row = mysqli_fetch_assoc($result)){ 
                                                ?>
                                                <li class="previous"><a href="admin_view_appform3.php?id=<?php echo $row['STUDENT_ID'];?>">← Previous</a></li>
                                                <li class="next"><a href="admin_view_appform5.php?id=<?php echo $row['STUDENT_ID']; ?> ">Next →</a></li>
                                                
  
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

                                   <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class='col-sm-4'>
                                            <form>
                                            <label>LIABILITIES</label><br>
                                             </div>

                                             <table style="width:100%">
                                            <tr>
                                                <th>Payee</th>
                                                <th> Purpose of Loan</th> 
                                                <th> Amount of Liability</th>
                                                <th> Date of Maturity</th>
                                                <th> Amount Still Payable</th> 
                                                <th> Monthly Payment</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="LIABILITY1_PAYEE" value="<?php echo $row['liability1_payee'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY1_PURP_LOAN" value="<?php echo $row['liability1_purp_loan'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY1_AMT" value="<?php echo $row['liability1_amt'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY1_MAT" value="<?php echo $row['liability1_mat'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY1_PAYABLE" value="<?php echo $row['liability1_payable'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY1_MON" value="<?php echo $row['liability1_mon'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                 <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="LIABILITY2_PAYEE" value="<?php echo $row['liability2_payee'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY2_PURP_LOAN" value="<?php echo $row['liability2_purp_loan'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY2_AMT" value="<?php echo $row['liability2_amt'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY2_MAT" value="<?php echo $row['liability2_mat'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY2_PAYABLE" value="<?php echo $row['liability2_payable'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY2_MON" value="<?php echo $row['liability2_mon'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                 <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="LIABILITY3_PAYEE" value="<?php echo $row['liability3_payee'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY3_PURP_LOAN" value="<?php echo $row['liability3_purp_loan'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY3_AMT" value="<?php echo $row['liability3_amt'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY3_MAT" value="<?php echo $row['liability3_mat'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY3_PAYABLE" value="<?php echo $row['liability3_payable'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY3_MON" value="<?php echo $row['liability3_mon'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>

                                             <tr>
                                                 <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="LIABILITY4_PAYEE" value="<?php echo $row['liability4_payee'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY4_PURP_LOAN" value="<?php echo $row['liability4_purp_loan'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY4_AMT" value="<?php echo $row['liability4_amt'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY4_MAT" value="<?php echo $row['liability4_mat'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY4_PAYABLE" value="<?php echo $row['liability4_payable'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY4_MON" value="<?php echo $row['liability4_mon'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>

                                             <tr>
                                                 <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="LIABILITY5_PAYEE" value="<?php echo $row['liability5_payee'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY5_PURP_LOAN" value="<?php echo $row['liability5_purp_loan'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY5_AMT" value="<?php echo $row['liability5_amt'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY5_MAT" value="<?php echo $row['liability5_mat'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY5_PAYABLE" value="<?php echo $row['liability5_payable'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY5_MON" value="<?php echo $row['liability5_mon'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>

                                             <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="LIABILITY6_PAYEE" value="<?php echo $row['liability6_payee'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY6_PURP_LOAN" value="<?php echo $row['liability6_purp_loan'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY6_AMT" value="<?php echo $row['liability6_amt'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY6_MAT" value="<?php echo $row['liability6_mat'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY6_PAYABLE" value="<?php echo $row['liability6_payable'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY6_MON" value="<?php echo $row['liability6_mon'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>

                                             <tr>
                                                 <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="LIABILITY7_PAYEE" value="<?php echo $row['liability7_payee'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY7_PURP_LOAN" value="<?php echo $row['liability7_purp_loan'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY7_AMT" value="<?php echo $row['liability7_amt'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY7_MAT" value="<?php echo $row['liability7_mat'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY7_PAYABLE" value="<?php echo $row['liability7_payable'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="LIABILITY7_MON" value="<?php echo $row['liability7_mon'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            </table>

                                            <div class="form-group">
                                            <label>CHILDREN IN SCHOOL AND NOT STUDYING(ELDEST TO YOUNGEST)</label><br>
                                             </div>

                                             <table style="width:100%">
                                            <tr>
                                                <th>Name</th>
                                                <th> Age</th> 
                                                <th> Civil Status</th>
                                                <th> Year/Grade</th>
                                                <th>Achool Attended</th> 
                                                <th> Yearly Tuition</th>
                                                <th> Paid by Whom?</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="child1_name" value="<?php echo $row['child1_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_age" value="<?php echo $row['child1_age'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_status" value="<?php echo $row['child1_status'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_year" value="<?php echo $row['child1_year'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_school" value="<?php echo $row['child1_school'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_tuition" value="<?php echo $row['child1_tuition'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_paid" value="<?php echo $row['child1_paid'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                 <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="child2_name" value="<?php echo $row['child2_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_age" value="<?php echo $row['child2_age'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_status" value="<?php echo $row['child2_status'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_year" value="<?php echo $row['child2_year'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_school" value="<?php echo $row['child2_school'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_tuition" value="<?php echo $row['child2_tuition'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_paid" value="<?php echo $row['child2_paid'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                 <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="child3_name" value="<?php echo $row['child3_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_age" value="<?php echo $row['child3_age'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_status" value="<?php echo $row['child3_status'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_year" value="<?php echo $row['child3_year'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_school" value="<?php echo $row['child3_school'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_tuition" value="<?php echo $row['child3_tuition'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_paid" value="<?php echo $row['child3_paid'] ?>" id="disabledInput" disabled><br></td>
                                            </tr>

                                             <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="child4_name" value="<?php echo $row['child4_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_age" value="<?php echo $row['child4_age'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_status" value="<?php echo $row['child4_status'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_year" value="<?php echo $row['child4_year'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_school" value="<?php echo $row['child4_school'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_tuition" value="<?php echo $row['child4_tuition'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_paid" value="<?php echo $row['child4_paid'] ?>" id="disabledInput" disabled><br></td>

                                            </tr>

                                             <tr>
                                                 <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="child5_name" value="<?php echo $row['child5_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_age" value="<?php echo $row['child5_age'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_status" value="<?php echo $row['child5_status'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_year" value="<?php echo $row['child5_year'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_school" value="<?php echo $row['child5_school'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_tuition" value="<?php echo $row['child5_tuition'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_paid" value="<?php echo $row['child5_paid'] ?>" id="disabledInput" disabled><br></td>
                                            </tr>

                                             <tr>
                                                 <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="child6_name" value="<?php echo $row['child6_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_age" value="<?php echo $row['child6_age'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_status" value="<?php echo $row['child6_status'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_year" value="<?php echo $row['child6_year'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_school" value="<?php echo $row['child6_school'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_tuition" value="<?php echo $row['child6_tuition'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_paid" value="<?php echo $row['child6_paid'] ?>" id="disabledInput" disabled><br></td>
                                            </tr>

                                             <tr>
                                                 <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="child7_name" value="<?php echo $row['child7_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_age" value="<?php echo $row['child7_age'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_status" value="<?php echo $row['child7_status'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_year" value="<?php echo $row['child7_year'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_school" value="<?php echo $row['child7_school'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_tuition" value="<?php echo $row['child7_tuition'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_paid" value="<?php echo $row['child7_paid'] ?>" id="disabledInput" disabled><br></td>
                                            </tr>
                                            </table>


                                             <div class="form-group">
                                            <label>OTHER DEPENDENTS LIVING IN THE HOUSE:</label><br>
                                             </div>

                                             <div class="form-group">
                                            <label>Name the persons (relatives, friends, etc.) other than yourself, who help with the household and educational expenses and indicate extent of financial support (for whom, how much?)</label><br>
                                             </div>

                                             <table style="width:100%">
                                            <tr>
                                                <th>Name</th>
                                                <th> Kind of Support</th> 
                                                <th> Name of Beneficiary</th>
                                                <th> Amount of Support</th>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="person1_name" value="<?php echo $row['person1_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person1_support" value="<?php echo $row['person1_support'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person1_ben" value="<?php echo $row['person1_ben'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person1_amt" value="<?php echo $row['person1_amt'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="person2_name" value="<?php echo $row['person2_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person2_support" value="<?php echo $row['person2_support'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person2_ben" value="<?php echo $row['person2_ben'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person2_amt" value="<?php echo $row['person2_amt'] ?>" id="disabledInput" disabled><br></td>
                                               
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="person3_name" value="<?php echo $row['person3_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person3_support" value="<?php echo $row['person3_support'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person3_ben" value="<?php echo $row['person3_ben'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person3_amt" value="<?php echo $row['person3_amt'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            </table>

                                            <div class="form-group">
                                            <label>CHILDREN WHO ARE PRESENTLY ON SCHOLARSHIP AT ATENEO</label><br>
                                             </div>

                                             <table style="width:100%">
                                            <tr>
                                                <th>Name</th>
                                                <th> Type of Scholarship</th> 
                                                <th> Name of Sponsor</th>
                                                <th> Scholarship Benefit</th>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="scholar1_name" value="<?php echo $row['scholar1_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar1_type" value="<?php echo $row['scholar1_type'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar1_sponsor" value="<?php echo $row['scholar1_sponsor'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar1_ben" value="<?php echo $row['scholar1_ben'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="scholar2_name" value="<?php echo $row['scholar2_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar2_type" value="<?php echo $row['scholar2_type'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar2_sponsor" value="<?php echo $row['scholar2_sponsor'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar2_ben" value="<?php echo $row['scholar2_ben'] ?>" id="disabledInput" disabled><br></td>
                                               
                                            </tr>
                                            <tr>
                                               <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="scholar3_name" value="<?php echo $row['scholar3_name'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar3_type" value="<?php echo $row['scholar3_type'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar3_sponsor" value="<?php echo $row['scholar3_sponsor'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar3_ben" value="<?php echo $row['scholar3_ben'] ?>" id="disabledInput" disabled><br></td>

                                            </tr>
                                            </table>
                                        </form>   
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                                        <ul class="pager">
                                                <li class="previous"><a href="admin_view_appform3.php?id=<?php echo $row['STUDENT_ID']; ?> ">← Previous</a></li>
                                                <li class="next"><a href="admin_view_appform5.php?id=<?php echo $row['STUDENT_ID']; ?> ">Next →</a></li>
                                        </ul>
                                        <?php 
                                        }
                                                mysqli_free_result($result);
                                                mysqli_close($connect);
                                        ?> 

                                </div>
                            </div>
                                    
                        </div>
                    </div>
                    </div>
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
