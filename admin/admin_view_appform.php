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
<?php 
error_reporting(0);
include('../server.php');
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

        <div id="page-wrapper" style="background-color:#edf2f4;">

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
                                <i class="fa fa-paper-plane"></i> Application Form
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <div class="col-lg-12">
                       <div class="panel panel-primary" style=" position: absolute; border: 0; ">
                        
                            <div class="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51); border-radius;'>
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="text-center">
                                        <i class="fa fa-calendar fa-university fa-3x"></i>
                                        <div><i><strong><h4>Ateneo De Naga University</h4></strong></i></div>
                                        <div><i><strong><h5>Scholarship Applicants</h5></strong></i></div>
                                        </div>

                                    </div>
                                    <div class="col-md-4" style="padding-top: 20px;">
                                     <ul class="pager">
                                        <?php while ($row = mysqli_fetch_assoc($result)){  ?>
                                                <!-- <li class="previous"><a href="admin_applicant_view.php"> ← Back to Lists</a></li> -->
                                                <li class="next"><a href="admin_view_appform2.php?id=<?php echo $row['STUDENT_ID']; ?> ">Next → </a></li>
                                    </ul>
                                    </div>
                                 
                                    
                                </div>
                            </div>
               
                            <div class="panel-body" style=" background-color: #fffcd8; padding-right: 100px; padding-left: 100px;">
                                <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive" src="../images/adnu-seal.png" alt="ischolar_adnu-seal" style="width:120px;height:120px;margin-left: 20px;">
                                </div>
                                <div class="col-md-4">
                                     <strong><center><h5><p>College Admissions and Aid Office</p>
                                             <p>Ateneo de Naga University</p>
                                             <p>Ateneo Avenue, Naga City, 4400</p></center></strong></h5><p>
                                </div>
                                <div class="col-md-4">
                                    <?php $result = "ProfilePic".$row['ID_NUMBER'].".jpg";?>
                                    <img class="img-responsive" src="../applicant/images/<?php echo $row['']?>" style="width:150px;height:150px;" align="right">

                                </div>
                                </div>
                                  <br>
                            

                                        <div class="row" style="margin-left: 20px; margin-right: 20px; text-align: justify;">
                                            <ol>
                                                  <li>This application form should be accomplished by the parents of the applicant who is seeking financial assistance. It must be answered carefully and completely. Incomplete forms will be returned to the applicant.</li>
                                                  <li>Scholarship grants and other financial aid at the Ateneo de Naga University are given on the basis of financial need and academic performance of the applicant. The Ateneo seeks to help families carry costs that normally would be beyond their financial resources. In other words, the financial aid is sharing a burden. Thus, Ateneo expects that families will help carry that part of the burden of their children's education that lies within their means </li>
                                                  <li>All information will be kept strictly confidential. Misrepresentation of information requested in this questionnaire will be considered reason both for disapproval or cancellation of request.</li>
                                                  <li>Applicants may be called for interview</li>
                                                  <li>Submit the following with this application form: (PDF Scanned)</li>
                                                  <ol type="i">
                                                      <li>On a separate sheet write out a detailed personal statement about the family's financial situation and the reason for request.</li>
                                                      <li>Photocopy of your latest Income Tax Return or BIR Certification for Tax Exemptions.</li>
                                                      <li>Photocopy of latest Scholastic Report Card of your son/daughter.</li>
                                                      <li>Photos of the interior and exterior of the house.</li>
                                                   </ol>
                                            </ol> <br>
                                        </div>
                       
                            <div class="row">

                                <!--<div class="col-lg-12">-->
                                    <form role="form" method="post" action="admin_view_appform.php">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Student Number</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="id_number" value="<?php echo $row['ID_NUMBER'] ?>" id="disabledInput" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Student Name</label><br />
                                            <div class='col-sm-4'>
                                                <input type="text" maxlength="25" class="form-control" placeholder="Surname" name="sur_name" value="<?php echo $row['LAST_NAME'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                                <input type="text" maxlength="25" class="form-control" placeholder="Firstname" name="first_name" value="<?php echo $row['FIRST_NAME'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                                <input type="text" maxlength="25" class="form-control" placeholder="Middlename" name="middle_name" value="<?php echo $row['MIDDLE_NAME'] ?>" id="disabledInput" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            
                                            <div class='col-sm-4'>
                                            <label>Nickname</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="nick_name" value="<?php echo $row['NICK_NAME'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Gender</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="gender" value="<?php echo $row['GENDER'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Age</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="age" value="<?php echo $row['AGE'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Birthdate</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="MM/DD/YY" name="birth_date" value="<?php echo $row['BIRTH_DATE'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Birthplace</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="birth_place" value="<?php echo $row['BIRTH_PLACE'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Civil Status</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="civil_status" value="<?php echo $row['CIVIL_STATUS'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Religion</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="religion" value="<?php echo $row['RELIGION'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Tel. No.</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="telephone_no" value="<?php echo $row['TELEPHONE_NUMBER'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Cellphone No.</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="cellphone_no" value="<?php echo $row['CELLPHONE_NUMBER'] ?>" id="disabledInput" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                     <div class="col-lg-12">
                                        <br><div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="email" value="<?php echo $row['EMAIL'] ?>" id="disabledInput" disabled>
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Permanent Address (Street No. and  Name, Subdivision/Barangay)</label><br>
                                       
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="perm_address" value="<?php echo $row['PERMANENT_ADDRESS'] ?>" id="disabledInput" disabled>
                                            <br><label>City/Municipality</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="city" value="<?php echo $row['CITY'] ?>" id="disabledInput" disabled>
                                           <div class='col-sm-4'>
                                            <br><label>Province</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="province" value="<?php echo $row['PROVINCE'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <br><label>Country</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="country" value="<?php echo $row['COUNTRY'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <br><label>Zip Code</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="zip_code" value="<?php echo $row['ZIP_CODE'] ?>" id="disabledInput" disabled>
                                            </div>

                                            <div class="form-group">
                                            <label>Highschool Attended</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="hs_attended" value="<?php echo $row['HIGHSCHOOL_ATTENDED'] ?>" id="disabledInput" disabled>
                                      
                                            <br><label>Preferred Course</label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="pref_course" value="<?php echo $row['PREFFERED_COURSE'] ?>" id="disabledInput" disabled>
                    
                                            <div class='col-sm-4'>
                                           <br> <label>College Department</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="department" value="<?php echo $row['DEPARTMENT'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                           <br><label>Course</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="course" value="<?php echo $row['COURSE'] ?>" id="disabledInput" disabled>
                                            </div>
                                            <div class='col-sm-4'>
                                            <br><label>Year Level</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="year_level" value="<?php echo $row['YEAR_LEVEL'] ?>" id="disabledInput" disabled><br>
                                            </div>
                                        </form>    

                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                                        <ul class="pager">
                                                <!-- <li class="previous"><a href="admin_applicant_view.php">← Back to Lists</a></li> -->
                                                <li class="next"><a href="admin_view_appform2.php?id=<?php echo $row['STUDENT_ID']; ?> ">Next →</a></li>
                                        </ul>
                                        <?php 
                                                }
                                               
                                        ?> 
                                </div>
                            </div>
                            <div class="panel-footer">
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
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
