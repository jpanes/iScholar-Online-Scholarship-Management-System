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


    <title>Applicant Lists</title>

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
     <link href="../applicant/data_form.css" rel="stylesheet" type="text/css">
</head>

<body>

<!-- INCLUDED PHP FILES  -->
<?php include('../server.php');
      //include('admin_controller.php');
// Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}
 ?>

    <div id="wrapper">
        <!-- Navigation -->
        <?php
            include('../admin/navigation_admin.php');
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Lists of Scholarship Applicants
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin-home.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Applicants Lists
                            </li>
                        </ol>

                       
                        <?php
                           /* $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "dummy";


                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } */



                            $sql = "SELECT * FROM APPLICANT";
                            $result = $connect->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $id = $row["STUDENT_ID"];
                                    echo    
                                            
                                            '<details>'.
                                            
                                            '<summary>'.'<div class= studentborder>'. "Student Id: " . $row["ID_NUMBER"]. " - " . $row["FIRST_NAME"]. " " . $row["LAST_NAME"]." " . $row["MIDDLE_NAME"].'</div>'. '</summary>'.
                                            "<br>".
                                            "<b>Basic Information</b>".
                                            '<div class= data-group>'.
                                            "<b>Nickname: </b>".$row["NICK_NAME"]. '<br>'.
                                            "<b>Gender: </b>".$row["GENDER"]. '<br>'.
                                            "<b>Age: </b>".$row["NICK_NAME"].'<br>' .
                                            "<b>Birthdate: </b>".$row["BIRTH_DATE"].'<br>'. 
                                            "<b>Birthplace: </b>".$row["BIRTH_PLACE"]. '<br>'. 
                                            "<b>Civil Status: </b>".$row["CIVIL_STATUS"].'<br>' .
                                            "<b>Religion: </b>".$row["RELIGION"].'<br>'.
                                            "<b>Telephone Number: </b>".$row["TELEPHONE_NUMBER"].'<br>' .
                                            "<b>Cellphone Number: </b>".$row["CELLPHONE_NUMBER"].'<br>'.
                                            "<b>Email: </b>".$row["EMAIL"].'<br>' .
                                            "<b>Permanent Address: </b>".$row["PERMANENT_ADDRESS"].'<br>'.
                                            "<b>City: </b>".$row["CITY"].'<br>' .
                                            "<b>Province: </b>".$row["PROVINCE"].'<br>'.
                                            "<b>Country: </b>".$row["COUNTRY"].'<br>' .
                                            "<b>Zip Code: </b>".$row["ZIP_CODE"].'<br>'.
                                            "<b>Highschool Attended: </b>".$row["HIGHSCHOOL_ATTENDED"].'<br>' .
                                            "<b>Preffered Course: </b>".$row["PREFFERED_COURSE"].'<br>'.
                                            "<b>Department: </b>".$row["DEPARTMENT"].'<br>' .
                                            "<b>Course: </b>".$row["COURSE"].'<br>' .
                                            "<b>Year Level: </b>".$row["YEAR_LEVEL"].'<br>'.
                                            "<b>Department: </b>".$row["DEPARTMENT"].'<br>' .
                                            "<b>Course: </b>".$row["COURSE"].'<br>'.
                                            '</div>'.

                                            "<b>Father's Information</b>".
                                            '<div class= data-group>'.
                                            "<b>Father Name: </b>".$row["FATHER_LAST_NAME"].",".$row["FATHER_FIRST_NAME"]." ".$row["FATHER_MIDDLE_NAME"].'<br>'.
                                            "<b>Father Status: </b>".$row["FATHER_STATUS"]. '<br>'.
                                            "<b>Father Occupation: </b>".$row["FATHER_OCCUPATION"]. '<br>'.
                                            "<b>Father Salary: </b>".$row["FATHER_SALARY"].'<br>' .
                                            "<b>Father's Employer's Name: </b>".$row["FATHER_EMPLOYER_NAME"].'<br>'. 
                                            "<b>Father's Employer's Address: </b>".$row["FATHER_EMPLOYER_ADDRESS"]. '<br>'. 
                                            "<b>Father's Employer's Telephone #: </b>".$row["FATHER_OFFICE_TEL_NO"].'<br>' .
                                            '</div>'.

                                            "<b>Mother's Information</b>".
                                           '<div class= data-group>'.
                                            "<b>Mother Name: </b>".$row["MOTHER_LAST_NAME"].",".$row["MOTHER_FIRST_NAME"]." ".$row["MOTHER_MIDDLE_NAME"].'<br>'.
                                            "<b>Mother Status: </b>".$row["MOTHER_STATUS"]. '<br>'.
                                            "<b>Mother Occupation: </b>".$row["MOTHER_OCCUPATION"]. '<br>'.
                                            "<b>Mother Salary: </b>".$row["MOTHER_SALARY"].'<br>' .
                                            "<b>Mother's Employer's Name: </b>".$row["MOTHER_EMPLOYER_NAME"].'<br>'. 
                                            "<b>Mother's Employer's Address: </b>".$row["MOTHER_EMPLOYER_ADDRESS"]. '<br>'. 
                                            "<b>Mother's Employer's Telephone #: </b>".$row["MOTHER_OFFICE_TEL_NO"].'<br>' .
                                            '</div>'.

                                            "<b>Guardian's Information</b>".
                                            '<div class= data-group>'.
                                            "<b>Guardian Name: </b>".$row["GUARDIAN_LAST_NAME"].",".$row["GUARDIAN_FIRST_NAME"]." ".$row["GUARDIAN_MIDDLE_NAME"].'<br>'.
                                            "<b>Guardian Relation: </b>".$row["GUARDIAN_RELATION"]. '<br>'.
                                            '</div>'.

                                            "<b>Family Income</b>".
                                            '<div class= data-group>'.
                                            "<b>Family Income: </b>".$row["FAMILY_INCOME"].'<br>' .
                                            '</div>'.

                                            "<b>Sources of Income</b>".
                                            '<div class= data-group>'.
                                            "<b>Profit on Business: </b>".$row["PROFIT_BUSINESS"].'<br>'.
                                            "<b>Profit on Lands: </b>".$row["PROFIT_LAND"].'<br>' .
                                            "<b>Profit on Rental Lands: </b>".$row["PROFIT_RENTALLANDS"].'<br>'.
                                            "<b>Profit on Interests: </b>".$row["PROFIT_INTERESTS"].'<br>' .
                                            "<b>Profit on Dividends: </b>".$row["PROFIT_DIVIDENDS"].'<br>'.
                                            "<b>Profit from other sources: </b>".$row["PROFIT_OTHERS"].'<br>' .
                                            "<b>Profit Sub-total: </b>".$row["PROFIT_SUBTOTAL"].'<br>'.
                                            "<b>Profit on Bank Deposits: </b>".$row["PROFIT_BANKDEPOSITS"].'<br>' .
                                            "<b>Profit on Savings Accounts: </b>".$row["PROFIT_SAVINGSACCOUNT"].'<br>'.
                                            "<b>Profit on Checking Accounts: </b>".$row["PROFIT_CHECKINGACCOUNTS"].'<br>' .
                                            "<b>Profit on Time Deposits: </b>".$row["PROFIT_TIMEDEPOSITS"].'<br>' .
                                            "<b>Total Profit: </b>".$row["PROFIT_TOTAL"].'<br>'.
                                            "<b>Net Profit: </b>".$row["PROFIT_NET"].'<br>' .
                                            "<b>Profit on Tax: </b>".$row["PROFIT_TAX"].'<br>'.
                                            '</div>'.
                                            
                                           
                                            "<b>Residence</b>".
                                            '<div class= data-group>'.
                                            "<b>Residence Location: </b>".$row["RES_LOCATION"].'<br>'.
                                            "<b>Residence Type: </b>".$row["RES_TYPE"].'<br>' .
                                            "<b>Ownership Type: </b>".$row["OWN_TYPE"].'<br>'.
                                            "<b>Lot Size: </b>".$row["LOT_SIZE"].'<br>' .
                                            "<b>Number of Bedrooms: </b>".$row["NO_BEDROOMS"].'<br>'.
                                            "<b>Number of Baths: </b>".$row["NO_BATHS"].'<br>' .
                                            "<b>Number of Helpers: </b>".$row["NO_HELPERS"].'<br>'.
                        
                                            '</div>'.
                                            
                                            "<b>Properties Owned</b>".
                                            '<div class= data-group>'.
                                            '<table>'.
                                                '<tr>'.
                                                '<td>'."<b>Description</b>".'</td>'.
                                                '<td>'."<b>Location</b>".'</td>'.
                                                '<td>'."<b>Size</b>".'</td>'.
                                                '<td>'."<b>Acquire Date</b>".'</td>'.
                                                '<td>'."<b>Acquired Value </b>".'</td>'.
                                                '<td>'."<b>Present Market Value </b>".'</td>'.
                                                '<td>'."<b>Yearly Net Income</b> ".'</td>'.
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["PROPERTY_OWNED1_DESCRIPTION"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED1_LOCATION"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED1_SIZE"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED1_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED1_ACQ_VALUE"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED1_PRESMARKETVAL"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED1_YEARLYNETINCOME"].'</td>'.
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["PROPERTY_OWNED2_DESCRIPTION"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED2_LOCATION"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED2_SIZE"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED2_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED2_ACQ_VALUE"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED2_PRESMARKETVAL"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED2_YEARLYNETINCOME"].'</td>'.
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["PROPERTY_OWNED3_DESCRIPTION"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED3_LOCATION"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED3_SIZE"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED3_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED3_ACQ_VALUE"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED3_PRESMARKETVAL"].'</td>'.
                                                '<td>'.$row["PROPERTY_OWNED3_YEARLYNETINCOME"].'</td>'.
                                                '</tr>'.

                                            '</table>'.
                                            '</div>'.
                                           
                                           "<b>Household Possesions</b>".
                                            '<div class= data-group>'.
                                            '<table>'.
                                                '<tr>'.
                                                '<td>'." ".'</td>'.
                                                '<td>'."<b>When Acquired</b>".'</td>'.
                                                '<td>'."<b>Acquisition Cost</b>".'</td>'.
                                                '<td>'."<b>Balance to be Paid</b>".'</td>'.
                                                '<td>'."<b>Monthly Payment </b>".'</td>'.
                                               
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'."<b>Television Set</b>".'</td>'.
                                                '<td>'.$row["TELSET_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["TELSET_ACQ_COST"].'</td>'.
                                                '<td>'.$row["TELSET_BAL"].'</td>'.
                                                '<td>'.$row["TELSET_MONTHLY_PAYMENT"].'</td>'.
                                              
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'."<b>VCD/DVD component</b>".'</td>'.
                                                '<td>'.$row["VCD_COMP_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["VCD_COMP_ACQ_COST"].'</td>'.
                                                '<td>'.$row["VCD_COMP_BAL"].'</td>'.
                                                '<td>'.$row["VCD_COMP_MONTHLY_PAYMENT"].'</td>'.
                                           
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'."<b>VCD/DVD Player</b>".'</td>'.
                                                '<td>'.$row["VCD_PLAY_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["VCD_PLAY_ACQ_COST"].'</td>'.
                                                '<td>'.$row["VCD_PLAY_BAL"].'</td>'.
                                                '<td>'.$row["VCD_PLAY_MONTHLY_PAYMENT"].'</td>'.
                                               
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'."<b>Personal Computer/Laptop</b>".'</td>'.
                                                '<td>'.$row["PC_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["PC_ACQ_COST"].'</td>'.
                                                '<td>'.$row["PC_BAL"].'</td>'.
                                                '<td>'.$row["PC_MONTHLY_PAYMENT"].'</td>'.
                                               
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'."<b>Refrigerator/Freezer</b>".'</td>'.
                                                '<td>'.$row["REF_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["REF_ACQ_COST"].'</td>'.
                                                '<td>'.$row["REF_BAL"].'</td>'.
                                                '<td>'.$row["REF_MONTHLY_PAYMENT"].'</td>'.
                                               
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'."<b>Air Conditioner</b>".'</td>'.
                                                '<td>'.$row["AC_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["AC_ACQ_COST"].'</td>'.
                                                '<td>'.$row["AC_BAL"].'</td>'.
                                                '<td>'.$row["AC_MONTHLY_PAYMENT"].'</td>'.
                                               
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'."<b>Piano/Organ</b>".'</td>'.
                                                '<td>'.$row["PIANO_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["PIANO_ACQ_COST"].'</td>'.
                                                '<td>'.$row["PIANO_BAL"].'</td>'.
                                                '<td>'.$row["PIANO_MONTHLY_PAYMENT"].'</td>'.
                                               
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'."<b>Washing Machine</b>".'</td>'.
                                                '<td>'.$row["WM_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["WM_ACQ_COST"].'</td>'.
                                                '<td>'.$row["WM_BAL"].'</td>'.
                                                '<td>'.$row["WM_MONTHLY_PAYMENT"].'</td>'.
                                               
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'."<b>Vehicle</b>".'</td>'.
                                                '<td>'.$row["VEHICLE_ACQ_DATE"].'</td>'.
                                                '<td>'.$row["VEHICLE_ACQ_COST"].'</td>'.
                                                '<td>'.$row["VEHICLE_BAL"].'</td>'.
                                                '<td>'.$row["VEHICLE_MONTHLY_PAYMENT"].'</td>'.
                                               
                                                '</tr>'.

                                            '</table>'.
                                            '</div>'.

                                            "<b>Other Source</b>".
                                            '<div class= data-group>'.
                                            "<b>Other Source: </b>".$row["OTHER_SOURCE"].'<br>'.
                                            '</div>'.

                                            "<b>Business</b>".
                                            '<div class= data-group>'.
                                            "<b>Nature of Business: </b>".$row["NAT_OF_BUSINESS"].'<br>'.
                                            "<b>Capital Invested: </b>".$row["CAPITAL_INV"].'<br>'.
                                            "<b># of Employees: </b>".$row["NO_EMPLOYEES"].'<br>'.
                                            "<b>Annual Net Profit: </b>".$row["ANN_NET_PROFIT"].'<br>'.
                                            '</div>'.

                                            
                                            "<b>Other Property</b>".
                                            '<div class= data-group>'.
                                            "<b>Other Property: </b>".$row["OTHER_PROPERTY"].'<br>'.
                                            "<b># of Hectares: </b>".$row["NO_HECTARES"].'<br>'.
                                            "<b>Crop/Fish Type: </b>".$row["CROP_FISH_TYPE"].'<br>'.
                                            "<b># of Workers: </b>".$row["NO_WORKERS"].'<br>'.
                                            "<b>Approximate Net Profit Hectare per Year: </b>".$row["APP_NET_PROFIT_HEC_PER_YEAR"].'<br>'.
                                            
                                            '</div>'.
                                        

                                            "<b>Family Insurance Policies</b>".
                                            '<div class= data-group>'.
                                            '<table>'.
                                                '<tr>'.
                                                '<td>'."<b>Nature of Policy</b>".'</td>'.
                                                '<td>'."<b>Company</b>".'</td>'.
                                                '<td>'."<b>Amount of Insurance</b>".'</td>'.
                                                '<td>'."<b>Yearly Premium</b>".'</td>'.
                                                '<td>'."<b>Monthly Payment </b>".'</td>'.
                                           
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["FIP1_NATURE"].'</td>'.
                                                '<td>'.$row["FIP1_COMPANY"].'</td>'.
                                                '<td>'.$row["FIP1_INSURANCE"].'</td>'.
                                                '<td>'.$row["FIP1_PREMIUM"].'</td>'.
                                                '<td>'.$row["FIP1_MONTHLY"].'</td>'.
                                              
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["FIP2_NATURE"].'</td>'.
                                                '<td>'.$row["FIP2_COMPANY"].'</td>'.
                                                '<td>'.$row["FIP2_INSURANCE"].'</td>'.
                                                '<td>'.$row["FIP2_PREMIUM"].'</td>'.
                                                '<td>'.$row["FIP2_MONTHLY"].'</td>'.
                                              
                                                '</tr>'.

                                            '</table>'.
                                            '</div>'.
                                           
      
                                            "<b>Liabilities</b>".
                                            '<div class= data-group>'.
                                            '<table>'.
                                                '<tr>'.
                                                '<td>'."<b>Payee</b>".'</td>'.
                                                '<td>'."<b>Purpose of Loan</b>".'</td>'.
                                                '<td>'."<b>Amount of Liability</b>".'</td>'.
                                                '<td>'."<b>Date of Maturity</b>".'</td>'.
                                                '<td>'."<b>Amount Still Payable</b>".'</td>'.
                                                '<td>'."<b>Monthly Payment</b>".'</td>'.
                                           
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["liability1_payee"].'</td>'.
                                                '<td>'.$row["liability1_purp_loan"].'</td>'.
                                                '<td>'.$row["liability1_amt"].'</td>'.
                                                '<td>'.$row["liability1_mat"].'</td>'.
                                                '<td>'.$row["liability1_payable"].'</td>'.
                                                '<td>'.$row["liability1_mon"].'</td>'.
                                              
                                                '</tr>'.

                                                
                                                '<tr>'.
                                                '<td>'.$row["liability2_payee"].'</td>'.
                                                '<td>'.$row["liability2_purp_loan"].'</td>'.
                                                '<td>'.$row["liability2_amt"].'</td>'.
                                                '<td>'.$row["liability2_mat"].'</td>'.
                                                '<td>'.$row["liability2_payable"].'</td>'.
                                                '<td>'.$row["liability2_mon"].'</td>'.
                                              
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'.$row["liability3_payee"].'</td>'.
                                                '<td>'.$row["liability3_purp_loan"].'</td>'.
                                                '<td>'.$row["liability3_amt"].'</td>'.
                                                '<td>'.$row["liability3_mat"].'</td>'.
                                                '<td>'.$row["liability3_payable"].'</td>'.
                                                '<td>'.$row["liability3_mon"].'</td>'.
                                              
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'.$row["liability4_payee"].'</td>'.
                                                '<td>'.$row["liability4_purp_loan"].'</td>'.
                                                '<td>'.$row["liability4_amt"].'</td>'.
                                                '<td>'.$row["liability4_mat"].'</td>'.
                                                '<td>'.$row["liability4_payable"].'</td>'.
                                                '<td>'.$row["liability4_mon"].'</td>'.
                                              
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'.$row["liability5_payee"].'</td>'.
                                                '<td>'.$row["liability5_purp_loan"].'</td>'.
                                                '<td>'.$row["liability5_amt"].'</td>'.
                                                '<td>'.$row["liability5_mat"].'</td>'.
                                                '<td>'.$row["liability5_payable"].'</td>'.
                                                '<td>'.$row["liability5_mon"].'</td>'.
                                              
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'.$row["liability6_payee"].'</td>'.
                                                '<td>'.$row["liability6_purp_loan"].'</td>'.
                                                '<td>'.$row["liability6_amt"].'</td>'.
                                                '<td>'.$row["liability6_mat"].'</td>'.
                                                '<td>'.$row["liability6_payable"].'</td>'.
                                                '<td>'.$row["liability6_mon"].'</td>'.
                                              
                                                '</tr>'.


                                                '<tr>'.
                                                '<td>'.$row["liability7_payee"].'</td>'.
                                                '<td>'.$row["liability7_purp_loan"].'</td>'.
                                                '<td>'.$row["liability7_amt"].'</td>'.
                                                '<td>'.$row["liability7_mat"].'</td>'.
                                                '<td>'.$row["liability7_payable"].'</td>'.
                                                '<td>'.$row["liability7_mon"].'</td>'.
                                              
                                                '</tr>'.

                                            '</table>'.
                                            '</div>'.


                                          "<b>Children</b>".
                                            '<div class= data-group>'.
                                            '<table>'.
                                                '<tr>'.
                                                '<td>'."<b>Name</b>".'</td>'.
                                                '<td>'."<b>Age</b>".'</td>'.
                                                '<td>'."<b>Status</b>".'</td>'.
                                                '<td>'."<b>Year</b>".'</td>'.
                                                '<td>'."<b>School</b>".'</td>'.
                                                '<td>'."<b>Tuition</b>".'</td>'.
                                                '<td>'."<b>Amount Paid</b>".'</td>'.
                                           
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["child1_name"].'</td>'.
                                                '<td>'.$row["child1_age"].'</td>'.
                                                '<td>'.$row["child1_status"].'</td>'.
                                                '<td>'.$row["child1_year"].'</td>'.
                                                '<td>'.$row["child1_school"].'</td>'.
                                                '<td>'.$row["child1_tuition"].'</td>'.
                                                '<td>'.$row["child1_paid"].'</td>'.
                                              
                                                '</tr>'.

                                                
                                               '<tr>'.
                                                '<td>'.$row["child2_name"].'</td>'.
                                                '<td>'.$row["child2_age"].'</td>'.
                                                '<td>'.$row["child2_status"].'</td>'.
                                                '<td>'.$row["child2_year"].'</td>'.
                                                '<td>'.$row["child2_school"].'</td>'.
                                                '<td>'.$row["child2_tuition"].'</td>'.
                                                '<td>'.$row["child2_paid"].'</td>'.
                                              
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["child3_name"].'</td>'.
                                                '<td>'.$row["child3_age"].'</td>'.
                                                '<td>'.$row["child3_status"].'</td>'.
                                                '<td>'.$row["child3_year"].'</td>'.
                                                '<td>'.$row["child3_school"].'</td>'.
                                                '<td>'.$row["child3_tuition"].'</td>'.
                                                '<td>'.$row["child3_paid"].'</td>'.
                                              
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["child4_name"].'</td>'.
                                                '<td>'.$row["child4_age"].'</td>'.
                                                '<td>'.$row["child4_status"].'</td>'.
                                                '<td>'.$row["child4_year"].'</td>'.
                                                '<td>'.$row["child4_school"].'</td>'.
                                                '<td>'.$row["child4_tuition"].'</td>'.
                                                '<td>'.$row["child4_paid"].'</td>'.
                                              
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["child5_name"].'</td>'.
                                                '<td>'.$row["child5_age"].'</td>'.
                                                '<td>'.$row["child5_status"].'</td>'.
                                                '<td>'.$row["child5_year"].'</td>'.
                                                '<td>'.$row["child5_school"].'</td>'.
                                                '<td>'.$row["child5_tuition"].'</td>'.
                                                '<td>'.$row["child5_paid"].'</td>'.
                                              
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["child6_name"].'</td>'.
                                                '<td>'.$row["child6_age"].'</td>'.
                                                '<td>'.$row["child6_status"].'</td>'.
                                                '<td>'.$row["child6_year"].'</td>'.
                                                '<td>'.$row["child6_school"].'</td>'.
                                                '<td>'.$row["child6_tuition"].'</td>'.
                                                '<td>'.$row["child6_paid"].'</td>'.
                                            
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["child7_name"].'</td>'.
                                                '<td>'.$row["child7_age"].'</td>'.
                                                '<td>'.$row["child7_status"].'</td>'.
                                                '<td>'.$row["child7_year"].'</td>'.
                                                '<td>'.$row["child7_school"].'</td>'.
                                                '<td>'.$row["child7_tuition"].'</td>'.
                                                '<td>'.$row["child7_paid"].'</td>'.
                                              
                                                '</tr>'.

                                            '</table>'.
                                            '</div>'.

                                            
                                          "<b>Children</b>".
                                            '<div class= data-group>'.
                                            '<table>'.
                                                '<tr>'.
                                                '<td>'."<b>Name</b>".'</td>'.
                                                '<td>'."<b>Kind of Support</b>".'</td>'.
                                                '<td>'."<b>Name of Beneficiary</b>".'</td>'.
                                                '<td>'."<b>Amount of Support</b>".'</td>'.
                                           
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["person1_name"].'</td>'.
                                                '<td>'.$row["person1_support"].'</td>'.
                                                '<td>'.$row["person1_ben"].'</td>'.
                                                '<td>'.$row["person1_amt"].'</td>'.
                                         
                                              
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["person2_name"].'</td>'.
                                                '<td>'.$row["person2_support"].'</td>'.
                                                '<td>'.$row["person2_ben"].'</td>'.
                                                '<td>'.$row["person2_amt"].'</td>'.
                                         
                                              
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["person3_name"].'</td>'.
                                                '<td>'.$row["person3_support"].'</td>'.
                                                '<td>'.$row["person3_ben"].'</td>'.
                                                '<td>'.$row["person3_amt"].'</td>'.
                                         
                                              
                                                '</tr>'.

                                                
                                               

                                                

                                            '</table>'.
                                            '</div>'.
                                


                                            "<b>Children who are Scholars</b>".
                                            '<div class= data-group>'.
                                            '<table>'.
                                                '<tr>'.
                                                '<td>'."<b>Name</b>".'</td>'.
                                                '<td>'."<b>Scholarship Type</b>".'</td>'.
                                                '<td>'."<b>Sponsor</b>".'</td>'.
                                                '<td>'."<b>Name of Beneficiary</b>".'</td>'.
                                           
                                                '</tr>'.

                                                '<tr>'.
                                                '<td>'.$row["scholar1_name"].'</td>'.
                                                '<td>'.$row["scholar1_type"].'</td>'.
                                                '<td>'.$row["scholar1_sponsor"].'</td>'.
                                                '<td>'.$row["scholar1_ben"].'</td>'.
                                         
                                              
                                                '</tr>'.

                                                 '<tr>'.
                                                '<td>'.$row["scholar2_name"].'</td>'.
                                                '<td>'.$row["scholar2_type"].'</td>'.
                                                '<td>'.$row["scholar2_sponsor"].'</td>'.
                                                '<td>'.$row["scholar2_ben"].'</td>'.
                                         
                                              
                                                '</tr>'.

                                                 '<tr>'.
                                                '<td>'.$row["scholar3_name"].'</td>'.
                                                '<td>'.$row["scholar3_type"].'</td>'.
                                                '<td>'.$row["scholar3_sponsor"].'</td>'.
                                                '<td>'.$row["scholar3_ben"].'</td>'.
                                         
                                              
                                                '</tr>'.

                                                
                                               

                                                

                                            '</table>'.
                                            '</div>';
                                            

                                            if($row["APPROVED"] == "" ){
                                            echo '<form action="../admin/approval.php" method ="post">'.'<input type="hidden" name="student_id" value='.$id.'>'.
                                            '<input type="submit" class=button1  value="Approve for Scholarship" name="approve">'. '<br>'.
                                            '</form>'.
  
                                            '<form action="../admin/denial.php" method="post">'.
                                            '<input type="hidden" name="student_id" value='.$id.'>'.
                                            '<input type="submit" class=button2 value="Deny for Scholarship" name="deny">'.'<br>'.

                                            '</form>';
                                            }
                                           echo'<form action ="../admin/email.php" method ="post">'.
                                           '<input type="submit" class=button3 value="Give Remarks" name="send_remarks">'. 
                                           '<textarea type="text" maxlength="100" placeholder="Remarks" name="remarks" size="25"></textarea>'.
                                
                                            '</form>'.
                                            '<br>'. '<br>'.
                                            

                                            '</details>'
                                            ;
                                }
                            } else {
                                echo "0 results";
                            }
                            $connect->close();

                            ?>

                    </div>
                </div>
                <!-- /.row -->

            
                                  
                                </div>
                            </div>
                        </div>
                    </div>
    
   
<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
