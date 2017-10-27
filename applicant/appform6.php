             <?php
                // Start the session
                session_start();
    $_SESSION['property_owned1_description']=$_POST['property_owned1_description'];
    $_SESSION['property_owned1_location']=$_POST['property_owned1_location'];
    $_SESSION['property_owned1_size']=$_POST['property_owned1_size'];
    $_SESSION['property_owned1_acq_date']=$_POST['property_owned1_acq_date'];
    $_SESSION['property_owned1_acq_value']=$_POST['property_owned1_acq_value'];
    $_SESSION['property_owned1_presmarketval']=$_POST['property_owned1_presmarketval'];
    $_SESSION['property_owned1_yearlynetincome']=$_POST['property_owned1_yearlynetincome'];

    $_SESSION['property_owned2_description']=$_POST['property_owned2_description'];
    $_SESSION['property_owned2_location']=$_POST['property_owned2_location'];
    $_SESSION['property_owned2_size']=$_POST['property_owned2_size'];
    $_SESSION['property_owned2_acq_date']=$_POST['property_owned2_acq_date'];
    $_SESSION['property_owned2_acq_value']=$_POST['property_owned2_acq_value'];
    $_SESSION['property_owned2_presmarketval']=$_POST['property_owned2_presmarketval'];
    $_SESSION['property_owned2_yearlynetincome']=$_POST['property_owned2_yearlynetincome'];

    $_SESSION['property_owned3_description']=$_POST['property_owned3_description'];
    $_SESSION['property_owned3_location']=$_POST['property_owned3_location'];
    $_SESSION['property_owned3_size']=$_POST['property_owned3_size'];
    $_SESSION['property_owned3_acq_date']=$_POST['property_owned3_acq_date'];
    $_SESSION['property_owned3_acq_value']=$_POST['property_owned3_acq_value'];
    $_SESSION['property_owned3_presmarketval']=$_POST['property_owned3_presmarketval'];
    $_SESSION['property_owned3_yearlynetincome']=$_POST['property_owned3_yearlynetincome'];

    

    $_SESSION['telset_acq_date']=$_POST['telset_acq_date'];
    $_SESSION['telset_acq_cost']=$_POST['telset_acq_cost'];
    $_SESSION['telset_bal']=$_POST['telset_bal'];
    $_SESSION['telset_monthly_payment']=$_POST['telset_monthly_payment'];

    $_SESSION['vcd_comp_acq_date']=$_POST['vcd_comp_acq_date'];
    $_SESSION['vcd_comp_acq_cost']=$_POST['vcd_comp_acq_cost'];
    $_SESSION['vcd_comp_bal']=$_POST['vcd_comp_bal'];
    $_SESSION['vcd_comp_monthly_payment']=$_POST['vcd_comp_monthly_payment'];

    $_SESSION['vcd_play_acq_date']=$_POST['vcd_play_acq_date'];
    $_SESSION['vcd_play_acq_cost']=$_POST['vcd_play_acq_cost'];
    $_SESSION['vcd_play_bal']=$_POST['vcd_play_bal'];
    $_SESSION['vcd_play_monthly_payment']=$_POST['vcd_play_monthly_payment'];

    $_SESSION['pc_acq_date']=$_POST['pc_acq_date'];
    $_SESSION['pc_acq_cost']=$_POST['pc_acq_cost'];
    $_SESSION['pc_bal']=$_POST['pc_bal'];
    $_SESSION['pc_monthly_payment']=$_POST['pc_monthly_payment'];

    $_SESSION['ref_acq_date']=$_POST['ref_acq_date'];
    $_SESSION['ref_acq_cost']=$_POST['ref_acq_cost'];
    $_SESSION['ref_bal']=$_POST['ref_bal'];
    $_SESSION['ref_monthly_payment']=$_POST['ref_monthly_payment'];

    $_SESSION['ac_acq_date']=$_POST['ac_acq_date'];
    $_SESSION['ac_acq_cost']=$_POST['ac_acq_cost'];
    $_SESSION['ac_bal']=$_POST['ac_bal'];
    $_SESSION['ac_monthly_payment']=$_POST['ac_monthly_payment'];

    $_SESSION['piano_acq_date']=$_POST['piano_acq_date'];
    $_SESSION['piano_acq_cost']=$_POST['piano_acq_cost'];
    $_SESSION['piano_bal']=$_POST['piano_bal'];
    $_SESSION['piano_monthly_payment']=$_POST['piano_monthly_payment'];

    $_SESSION['wm_acq_date']=$_POST['wm_acq_date'];
    $_SESSION['wm_acq_cost']=$_POST['wm_acq_cost'];
    $_SESSION['wm_bal']=$_POST['wm_bal'];
    $_SESSION['wm_monthly_payment']=$_POST['wm_monthly_payment'];

    $_SESSION['vehicle_acq_date']=$_POST['vehicle_acq_date'];
    $_SESSION['vehicle_acq_cost']=$_POST['vehicle_acq_cost'];
    $_SESSION['vehicle_bal']=$_POST['vehicle_bal'];
    $_SESSION['vehicle_monthly_payment']=$_POST['vehicle_monthly_payment'];
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
                                    <form role="form" method="post" action="appform7.php">

                                        <div class="col-lg-6 col-lg-offset-3">
                                           <div class="form-group">
                                            <label>Other Sources of Income:</label><br>
                                           
                                
                                                <input type="checkbox" name="other_source[]" value="Business"> Business<br>
                                                <input type="checkbox" name="other_source[]" value="Home Industry"> Home Industry<br>

                                            <br>
                                            
                                            </div>

                                             <div class="form-group">
                                                        <label>Nature of Business</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="nat_of_business" >
                                                    

                                            </div>

                                            <div class="form-group">
                                                        <label>Capital Invested</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="capital_inv" >
                                            </div>

                                            
                                            <div class="col-sm-4">
                                            <label>No. of Employees</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_employees" ><br>
                                            </div>

                                            <div class="col-sm-4">
                                            <label>Annual Net Profit</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="ann_net_profit" ><br>
                                            </div>

                                            <div class="col-sm-4">
                                            
                                
                                                <input type="checkbox" name="other_property[]" value="Farmlands"> Farmlands<br>
                                                <input type="checkbox" name="other_property[]" value="Fishponds"> Fishponds<br>

                                            <br>
                                            
                                            </div>

                                            <div class="col-sm-4">
                                            <label>No. of Hectares</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_hectares" ><br>
                                            </div>

                                            <div class="col-sm-4">
                                            <label>Types of Crop/Fish</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="crop_fish_type" ><br>
                                            </div>

                                            <div class="col-sm-4">
                                            <label>No. of Workers</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_workers" ><br>
                                            </div>

                                             <div class="form-group">
                                                        <label>Approxiamte net profit hectare per year:</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="app_net_profit_hec_per_year" >
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
