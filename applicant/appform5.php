             <?php
                // Start the session
                session_start();
                $_SESSION['res_location']=$_POST['res_location'];
                $_SESSION['res_type']=$_POST['res_type'];
    $_SESSION['own_type']=$_POST['own_type'];
    // $_SESSION['rented_duration']=$_POST[''];
    // $_SESSION['rented_monthly']=$_POST[''];
    // $_SESSION['owned_name']=$_POST[''];
    // $_SESSION['owned_acq_date']=$_POST[''];
    // $_SESSION['owned_cost_acq']=$_POST[''];
    // $_SESSION['owned_market_val']=$_POST[''];
    // $_SESSION['owned_unpaid_mortgage']=$_POST[''];
    // $_SESSION['owned_monthly_mortgage']=$_POST[''];
    $_SESSION['lot_size']=$_POST['lot_size'];
    $_SESSION['no_bedrooms']=$_POST['no_bedrooms'];
    $_SESSION['no_baths']=$_POST['no_baths'];
    $_SESSION['no_helpers']=$_POST['no_helpers'];
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
                                    <form role="form" method="post" action="appform6.php">

                                        <div class="col-lg-6 col-lg-offset-3">
                                            <div class="form-group">
                                            <label>Other Properties Owned (Residential, Commercial, etc):</label><br>
                                             </div>

                                             <table style="width:100%">
                                            <tr>
                                                <th>Description</th>
                                                <th> Location</th> 
                                                <th> Size</th>
                                                <th> When Acquired</th>
                                                <th> Value at Acquisition</th> 
                                                <th> Present Market Value</th>
                                                <th> Yearly Net income</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="property_owned1_description"><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_location" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_size" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_acq_value" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_presmarketval"><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_yearlynetincome" ><br></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="2.)" name="property_owned2_description" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_location"><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_size" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_acq_value" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_presmarketval"><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_yearlynetincome" ><br></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="3.)" name="property_owned3_description" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned3_location" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned3_size" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned3_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned3_acq_value"><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned3_presmarketval"><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned3_yearlynetincome" ><br></td>
                                            </tr>
                                            </table>

                                            <div class="form-group">
                                            <label>Household Possessions</label><br>
                                             </div>

                                             <table style="width:100%">
                                            <tr>
                                                <th> </th>
                                                <th> When Acquired</th> 
                                                <th> Acquisition Cost</th>
                                                <th> Balance to be Paid</th>
                                                <th> Monthly Payment</th> 
                                                
                                            </tr>
                                            <tr>
                                                <td>Televison Set</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="telset_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="telset_acq_cost"><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="telset_bal" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="telset_monthly_payment" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>VCD/DVD component</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_comp_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_comp_acq_cost"><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_comp_bal"><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_comp_monthly_payment" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>VCD/DVD player</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_play_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_play_acq_cost" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_play_bal" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_play_monthly_payment" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Personal Computer/Laptop</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="pc_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="pc_acq_cost" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="pc_bal" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="pc_monthly_payment" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Refrigerator/Freezer</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="ref_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="ref_acq_cost" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="ref_bal" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="ref_monthly_payment" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Air Conditioner</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="ac_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="ac_acq_cost" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="ac_bal" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="ac_monthly_payment" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Piano/Organ</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="piano_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="piano_acq_cost" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="piano_bal" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="piano_monthly_payment" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Washing Machine</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="wm_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="wm_acq_cost" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="wm_bal" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="wm_monthly_payment" ><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Car/Motorcycle</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vehicle_acq_date" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vehicle_acq_cost" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vehicle_bal" ><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vehicle_monthly_payment" ><br></td>
                                                
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
