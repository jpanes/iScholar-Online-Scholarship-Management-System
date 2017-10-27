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

<body style="background-color:#edf2f4;">
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
                                                <li class="previous"><a href="admin_view_appform2.php?id=<?php echo $row['STUDENT_ID'];?>">← Previous</a></li>
                                                <li class="next"><a href="admin_view_appform4.php?id=<?php echo $row['STUDENT_ID']; ?> ">Next →</a></li>
                                                
  
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
                                                    <div class="col-sm-4">
                                                        <label>Amount of Mortgage Unpaid</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="unpaid_mortgage" value="<?php echo $row['OWNED_UNPAID_MORTGAGE'] ?>" id="disabledInput" disabled>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <label>Amount of Mortgage Unpaid</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="unpaid_mortgage" value="<?php echo $row['OWNED_MONTHLY_MORTGAGE'] ?>" id="disabledInput" disabled>
                                                    </div>
                                           
                                             <div class="col-sm-4">
                                            <label>Size of Lot</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="lot_size" value="<?php echo $row['LOT_SIZE'] ?>" id="disabledInput" disabled><br>
                                            </div>
                                              <div class='col-sm-4'>
                                            <label>Number of Bedrooms</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_bedrooms" value="<?php echo $row['NO_BEDROOMS'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Baths/Toilets</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_baths" value="<?php echo $row['NO_BATHS'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>No. of helpers</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_helpers" value="<?php echo $row['NO_HELPERS'] ?>" id="disabledInput" disabled>
                                                  <br><br>
                                            </div>
                                          
                                            <div class="form-group">
                                            <h4>Other Properties Owned (Residential, Commercial, etc):</h4>
                                             <hr>
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
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="property_owned1_description" value="<?php echo $row['PROPERTY_OWNED1_DESCRIPTION'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_location" value="<?php echo $row['PROPERTY_OWNED1_LOCATION'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_size" value="<?php echo $row['PROPERTY_OWNED1_SIZE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_acq_date" value="<?php echo $row['PROPERTY_OWNED1_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_acq_value" value="<?php echo $row['PROPERTY_OWNED1_ACQ_VALUE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_presmarketval" value="<?php echo $row['PROPERTY_OWNED1_PRESMARKETVAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned1_yearlynetincome" value="<?php echo $row['PROPERTY_OWNED1_YEARLYNETINCOME'] ?>" id="disabledInput" disabled><br></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="2.)" name="property_owned2_description" value="<?php echo $row['PROPERTY_OWNED2_DESCRIPTION'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_location" value="<?php echo $row['PROPERTY_OWNED2_LOCATION'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_size" value="<?php echo $row['PROPERTY_OWNED2_SIZE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_acq_date" value="<?php echo $row['PROPERTY_OWNED2_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_acq_value" value="<?php echo $row['PROPERTY_OWNED2_ACQ_VALUE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_presmarketval" value="<?php echo $row['PROPERTY_OWNED2_PRESMARKETVAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_yearlynetincome" value="<?php echo $row['PROPERTY_OWNED2_YEARLYNETINCOME'] ?>" id="disabledInput" disabled><br></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="2.)" name="property_owned2_description" value="<?php echo $row['PROPERTY_OWNED3_DESCRIPTION'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_location" value="<?php echo $row['PROPERTY_OWNED3_LOCATION'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_size" value="<?php echo $row['PROPERTY_OWNED3_SIZE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_acq_date" value="<?php echo $row['PROPERTY_OWNED3_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_acq_value" value="<?php echo $row['PROPERTY_OWNED3_ACQ_VALUE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_presmarketval" value="<?php echo $row['PROPERTY_OWNED3_PRESMARKETVAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="property_owned2_yearlynetincome" value="<?php echo $row['PROPERTY_OWNED3_YEARLYNETINCOME'] ?>" id="disabledInput" disabled><br></td>
                                            </tr>
                                            </table>
                                           
                                            <div class="form-group">
                                                <h4>Household Possessions</h4>
                                            <hr>
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
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="telset_acq_date" value="<?php echo $row['TELSET_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="telset_acq_cost" value="<?php echo $row['TELSET_ACQ_COST'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="telset_bal" value="<?php echo $row['TELSET_BAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="telset_monthly_payment" value="<?php echo $row['TELSET_MONTHLY_PAYMENT'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>VCD/DVD component</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_comp_acq_date" value="<?php echo $row['VCD_COMP_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_comp_acq_cost" value="<?php echo $row['VCD_COMP_ACQ_COST'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_comp_bal" value="<?php echo $row['VCD_COMP_BAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_comp_monthly_payment" value="<?php echo $row['VCD_COMP_MONTHLY_PAYMENT'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>VCD/DVD player</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_play_acq_date" value="<?php echo $row['VCD_PLAY_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_play_acq_cost" value="<?php echo $row['VCD_PLAY_ACQ_COST'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_play_bal" value="<?php echo $row['VCD_PLAY_BAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="vcd_play_monthly_payment" value="<?php echo $row['VCD_PLAY_MONTHLY_PAYMENT'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Personal Computer/Laptop</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="PC_ACQ_DATE" value="<?php echo $row['PC_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="PC_ACQ_COST" value="<?php echo $row['PC_ACQ_COST'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="PC_BAL" value="<?php echo $row['PC_BAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="PC_MONTHLY_PAYMENT" value="<?php echo $row['PC_MONTHLY_PAYMENT'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Refrigerator/Freezer</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="REF_ACQ_DATE" value="<?php echo $row['REF_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="REF_ACQ_COST" value="<?php echo $row['REF_ACQ_COST'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="REF_BAL" value="<?php echo $row['REF_BAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="REF_MONTHLY_PAYMENT" value="<?php echo $row['REF_MONTHLY_PAYMENT'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Air Conditioner</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="AC_ACQ_DATE" value="<?php echo $row['AC_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="AC_ACQ_COST" value="<?php echo $row['AC_ACQ_COST'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="AC_BAL" value="<?php echo $row['AC_BAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="AC_MONTHLY_PAYMENT" value="<?php echo $row['AC_MONTHLY_PAYMENT'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Piano/Organ</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="PIANO_ACQ_DATE" value="<?php echo $row['PIANO_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="PIANO_ACQ_COST" value="<?php echo $row['PIANO_ACQ_COST'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="PIANO_BAL" value="<?php echo $row['PIANO_BAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="PIANO_MONTHLY_PAYMENT" value="<?php echo $row['PIANO_MONTHLY_PAYMENT'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Washing Machine</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="WM_ACQ_DATE" value="<?php echo $row['WM_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="WM_ACQ_COST" value="<?php echo $row['WM_ACQ_COST'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="WM_BAL" value="<?php echo $row['WM_BAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="WM_MONTHLY_PAYMENT" value="<?php echo $row['WM_MONTHLY_PAYMENT'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Car/Motorcycle</td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="VEHICLE_ACQ_DATE" value="<?php echo $row['VEHICLE_ACQ_DATE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="VEHICLE_ACQ_COST" value="<?php echo $row['VEHICLE_ACQ_COST'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="VEHICLE_BAL" value="<?php echo $row['VEHICLE_BAL'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="VEHICLE_MONTHLY_PAYMENT" value="<?php echo $row['VEHICLE_MONTHLY_PAYMENT'] ?>" id="disabledInput" disabled><br></td>
                                                
                                            </tr>
                                            </table>


                                            <div class="form-group">
                                            <label>Other Sources:</label><br>
                                            <form>
                                
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="OTHER_SOURCE" value="<?php echo $row['OTHER_SOURCE'] ?>" id="disabledInput" disabled>

                                            <br>
                                            </form>
                                            </div>

                                             <div class="form-group">
                                                        <label>Nature of Business</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="Nat_of_business" value="<?php echo $row['NAT_OF_BUSINESS'] ?>" id="disabledInput" disabled>
                                                    </div>

                                            

                                            <div class="form-group">
                                                        <label>Capital Invested</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="Nat_of_business" value="<?php echo $row['CAPITAL_INV'] ?>" id="disabledInput" disabled>
                                                    </div>

                                            </div>

                                            <div class="col-sm-4">
                                            <label>No. of Employees</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_employees" value="<?php echo $row['NO_EMPLOYEES'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                            <div class="col-sm-4">
                                            <label>Annual Net Profit</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="ann_net_profit" value="<?php echo $row['ANN_NET_PROFIT'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                            <div class="col-sm-4">
                                            <form>
                                            <label>Other Property</label>
                                 <input type="text" maxlength="25" class="form-control" placeholder="" name="OTHER_PROPERTY" value="<?php echo $row['OTHER_PROPERTY'] ?>" id="disabledInput" disabled><br>

                                            <br>
                                            </form>
                                            </div>

                                            <div class="col-sm-4">
                                            <label>No. of Hectares</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_hectares" value="<?php echo $row['NO_HECTARES'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                            <div class="col-sm-4">
                                            <label>Types of Crop/Fish</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="crop_fish_type" value="<?php echo $row['CROP_FISH_TYPE'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                            <div class="col-sm-4">
                                            <label>No. of Workers</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="no_workers" value="<?php echo $row['NO_WORKERS'] ?>" id="disabledInput" disabled><br>
                                            </div>

                                            <div class="col-sm-4">
                                                  <label>Approxiamte net profit hectare per year:</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="Nat_of_business" value="<?php echo $row['APP_NET_PROFIT_HEC_PER_YEAR'] ?>" id="disabledInput" disabled>
                                                <br>
                                            </div>
                                          
                                            <div class="col-sm-12">
                                                <label>Family Insurance Policies</label>
                                                <br>         
                                            </div>
                                             
                                             <div class="col-sm-12">
                                             <table style="width:100%">
                                            <tr>
                                                <th>Nature Of Policy</th>
                                                <th> Company</th> 
                                                <th> Amount of Insurance</th>
                                                <th> Yearly Premium</th>
                                                <th> Monthly Payment</th> 
                                              
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="FIP1_NATURE" value="<?php echo $row['FIP1_NATURE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="FIP1_COMPANY" value="<?php echo $row['FIP1_COMPANY'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="FIP1_INSURANCE" value="<?php echo $row['FIP1_INSURANCE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="FIP1_PREMIUM" value="<?php echo $row['FIP1_PREMIUM'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="FIP1_MONTHLY" value="<?php echo $row['FIP1_MONTHLY'] ?>" id="disabledInput" disabled><br></td>
                                               
                                            </tr>
                                            <tr>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="1.)" name="FIP2_NATURE" value="<?php echo $row['FIP2_NATURE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="FIP2_COMPANY" value="<?php echo $row['FIP2_COMPANY'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="FIP2_INSURANCE" value="<?php echo $row['FIP2_INSURANCE'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="FIP2_PREMIUM" value="<?php echo $row['FIP2_PREMIUM'] ?>" id="disabledInput" disabled><br></td>
                                                <td><input type="text" maxlength="25" class="form-control" placeholder="" name="FIP2_MONTHLY" value="<?php echo $row['FIP2_MONTHLY'] ?>" id="disabledInput" disabled><br></td>
                                               
                                            </tr>
                                            </table>
                                            </table>
                                              <ul class="pager">
                                                <li class="previous"><a href="admin_view_appform2.php?id=<?php echo $row['STUDENT_ID'];?>">← Previous</a></li>
                                                <li class="next"><a href="admin_view_appform4.php?id=<?php echo $row['STUDENT_ID']; ?> ">Next →</a></li>
                                            </ul>
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                   
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
