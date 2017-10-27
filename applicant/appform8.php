             <?php
                // Start the session
                session_start();
                
    $_SESSION['fip1_nature']=$_POST['fip1_nature'];
    $_SESSION['fip1_company']=$_POST['fip1_company'];
    $_SESSION['fip1_insurance']=$_POST['fip1_insurance'];
    $_SESSION['fip1_premium']=$_POST['fip1_premium'];
    $_SESSION['fip1_monthly']=$_POST['fip1_monthly'];

    $_SESSION['fip2_nature']=$_POST['fip2_nature'];
    $_SESSION['fip2_company']=$_POST['fip2_company'];
    $_SESSION['fip2_insurance']=$_POST['fip2_insurance'];
    $_SESSION['fip2_premium']=$_POST['fip2_premium'];
    $_SESSION['fip2_monthly']=$_POST['fip2_monthly'];


    $_SESSION['liability1_payee']=$_POST['liability1_payee'];
    $_SESSION['liability1_purp_loan']=$_POST['liability1_purp_loan'];
    $_SESSION['liability1_amt']=$_POST['liability1_amt'];
    $_SESSION['liability1_mat']=$_POST['liability1_mat'];
    $_SESSION['liability1_payable']=$_POST['liability1_payable'];
    $_SESSION['liability1_mon']=$_POST['liability1_mon'];

    $_SESSION['liability2_payee']=$_POST['liability2_payee'];
    $_SESSION['liability2_purp_loan']=$_POST['liability2_purp_loan'];
    $_SESSION['liability2_amt']=$_POST['liability2_amt'];
    $_SESSION['liability2_mat']=$_POST['liability2_mat'];
    $_SESSION['liability2_payable']=$_POST['liability2_payable'];
    $_SESSION['liability2_mon']=$_POST['liability2_mon'];


    $_SESSION['liability3_payee']=$_POST['liability3_payee'];
    $_SESSION['liability3_purp_loan']=$_POST['liability3_purp_loan'];
    $_SESSION['liability3_amt']=$_POST['liability3_amt'];
    $_SESSION['liability3_mat']=$_POST['liability3_mat'];
    $_SESSION['liability3_payable']=$_POST['liability3_payable'];
    $_SESSION['liability3_mon']=$_POST['liability3_mon'];


    $_SESSION['liability4_payee']=$_POST['liability4_payee'];
    $_SESSION['liability4_purp_loan']=$_POST['liability4_purp_loan'];
    $_SESSION['liability4_amt']=$_POST['liability4_amt'];
    $_SESSION['liability4_mat']=$_POST['liability4_mat'];
    $_SESSION['liability4_payable']=$_POST['liability4_payable'];
    $_SESSION['liability4_mon']=$_POST['liability4_mon'];


    $_SESSION['liability5_payee']=$_POST['liability5_payee'];
    $_SESSION['liability5_purp_loan']=$_POST['liability5_purp_loan'];
    $_SESSION['liability5_amt']=$_POST['liability5_amt'];
    $_SESSION['liability5_mat']=$_POST['liability5_mat'];
    $_SESSION['liability5_payable']=$_POST['liability5_payable'];
    $_SESSION['liability5_mon']=$_POST['liability5_mon'];


    $_SESSION['liability6_payee']=$_POST['liability6_payee'];
    $_SESSION['liability6_purp_loan']=$_POST['liability6_purp_loan'];
    $_SESSION['liability6_amt']=$_POST['liability6_amt'];
    $_SESSION['liability6_mat']=$_POST['liability6_mat'];
    $_SESSION['liability6_payable']=$_POST['liability6_payable'];
    $_SESSION['liability6_mon']=$_POST['liability6_mon'];


    $_SESSION['liability7_payee']=$_POST['liability7_payee'];
    $_SESSION['liability7_purp_loan']=$_POST['liability7_purp_loan'];
    $_SESSION['liability7_amt']=$_POST['liability7_amt'];
    $_SESSION['liability7_mat']=$_POST['liability7_mat'];
    $_SESSION['liability7_payable']=$_POST['liability7_payable'];
    $_SESSION['liability7_mon']=$_POST['liability7_mon'];

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
                                    <form role="form" method="post" action="appform9.php">

                                        <div class="col-lg-6 col-lg-offset-3">
                                           <div class="form-group">
                                            <label>CHILDREN IN SCHOOL AND NOT STUDYING(ELDEST TO YOUNGEST)</label><br>
                                             </div>

                                             <table style="width:100%">
                                            <tr>
                                                <th>Name</th>
                                                <th> Age</th> 
                                                <th> Civil Status</th>
                                                <th> Year/Grade</th>
                                                <th>School Attended</th> 
                                                <th> Yearly Tuition</th>
                                                <th> Paid by Whom?</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="child1_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_age" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_status" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_year" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_school" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_tuition" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child1_paid" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="2.)" name="child2_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_age" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_status" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_year" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_school" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_tuition" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child2_paid" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="3.)" name="child3_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_age" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_status" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_year" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_school" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_tuition" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child3_paid" ><br></td>
                                            </tr>

                                             <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="4.)" name="child4_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_age" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_status" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_year" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_school" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_tuition" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child4_paid" ><br></td>
                                            </tr>
                                                
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="5.)" name="child5_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_age" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_status" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_year" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_school" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_tuition" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child5_paid" ><br></td>
                                            </tr>

                                             <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="6.)" name="child6_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_age" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_status" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_year" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_school" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_tuition" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child6_paid" ><br></td>
                                            </tr>

                                             <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="7.)" name="child7_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_age" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_status" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_year" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_school" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_tuition" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="child7_paid" ><br></td>
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
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="person1_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person1_support" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person1_ben" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person1_amt" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="2.)" name="person2_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person2_support" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person2_ben" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person2_amt" ><br></td>
                                               
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="3.)" name="person3_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person3_support" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person3_ben" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="person3_amt" ><br></td>
                                                
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
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="scholar1_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar1_type" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar1_sponsor" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar1_ben" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="2.)" name="scholar2_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar2_type" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar2_sponsor" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar2_ben" ><br></td>
                                               
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="3.)" name="scholar3_name" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar3_type" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar3_sponsor" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="scholar3_ben" ><br></td>
                                                
                                            </tr>
                                            </table>
                                    
                                          

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
