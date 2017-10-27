             <?php
                // Start the session
                session_start();
    if(!empty($_POST['other_source'])){
    $_SESSION['other_source']=implode(',',$_POST['other_source']);
    }

    else{

    $_SESSION['other_source']= " ";

    }
    

    $_SESSION['nat_of_business']=$_POST['nat_of_business'];
    $_SESSION['capital_inv']=$_POST['capital_inv'];
    $_SESSION['no_employees']=$_POST['no_employees'];
    $_SESSION['ann_net_profit']=$_POST['ann_net_profit'];
    $_SESSION['nat_of_business']=$_POST['nat_of_business'];
    $_SESSION['capital_inv']=$_POST['capital_inv'];
    $_SESSION['no_employees']=$_POST['no_employees'];
    $_SESSION['ann_net_profit']=$_POST['ann_net_profit'];

    if(!empty($_POST['other_property'])){
    $_SESSION['other_property']=implode(',',$_POST['other_property']);
    }

    else{

    $_SESSION['other_property']= " ";

    }
    
    

    $_SESSION['no_hectares']=$_POST['no_hectares'];
    $_SESSION['crop_fish_type']=$_POST['crop_fish_type'];
    $_SESSION['no_workers']=$_POST['no_workers'];
    $_SESSION['app_net_profit_hec_per_year']=$_POST['app_net_profit_hec_per_year'];

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
                                    <form role="form" method="post" action="appform8.php">

                                        <div class="col-lg-6 col-lg-offset-3">
                                           <div class="form-group">
                                            <label>Family Insurance Policies</label><br>
                                             </div>

                                             <table style="width:100%">
                                            <tr>
                                                <th>Nature Of Policy</th>
                                                <th> Company</th> 
                                                <th> Amount of Insurance</th>
                                                <th> Yearly Premium</th>
                                                <th> Monthly Payment</th> 
                                              
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="fip1_nature" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="fip1_company" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="fip1_insurance" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="fip1_premium" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="fip1_monthly" ><br></td>
                                               
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="2.)" name="fip2_nature" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="fip2_company" ><br></td>
                                                <td><input type="text" maxlength="5" class="form-control" placeholder="" name="fip2_insurance" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="fip2_premium" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="fip2_monthly" ><br></td>
                                               
                                            </tr>
                                           
                                            </table>

                                            <div class="form-group">
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
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="liability1_payee" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability1_purp_loan" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability1_amt" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability1_mat" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability1_payable" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability1_mon" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="2.)" name="liability2_payee" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability2_purp_loan" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability2_amt" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability2_mat" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability2_payable" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability2_mon" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="3.)" name="liability3_payee" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability3_purp_loan" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability3_amt" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability3_mat" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability3_payable" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability3_mon" ><br></td>
                                                
                                            </tr>

                                             <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="4.)" name="liability4_payee" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability4_purp_loan" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability4_amt" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability4_mat" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability4_payable" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability4_mon" ><br></td>
                                                
                                            </tr>

                                             <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="5.)" name="liability5_payee" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability5_purp_loan" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability5_amt" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability5_mat" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability5_payable" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability5_mon" ><br></td>
                                                
                                            </tr>

                                             <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="6.)" name="liability6_payee" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability6_purp_loan" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability6_amt" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability6_mat" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability6_payable" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability6_mon" ><br></td>
                                                
                                            </tr>

                                             <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="7.)" name="liability7_payee" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability7_purp_loan" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability7_amt" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability7_mat" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability7_payable" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="liability7_mon" ><br></td>
                                                
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
