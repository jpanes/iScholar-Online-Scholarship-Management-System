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

$renewal_id = $_GET['id'];
$query = "SELECT * FROM renewal WHERE  RENEWAL_ID='$renewal_id'";
$result = mysqli_query($connect, $query);

 ?>

    <div id="wrapper">

        
        <?php include('navigation_admin.php'); ?>


        <div id="page-wrapper" style="background-color:#edf2f4;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <!-- DTR Reports -->
                        <?php echo " ".$_SESSION['SEM']; ?>
                        <small><?php echo "  - SY (".$_SESSION['SY'].")"; ?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-exchange"></i> Renewal View
                            </li>
                        </ol>
                    </div>
                </div>


               <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                              <div class="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51);'>
                                <div class="row">
                    
                       <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                                    <div class="col-xs-12 text-center">
                                        <i class="fa fa-university fa-2x"></i>
                                        <div>
                                        <h4><strong> COLLEGE ADMISSIONS AND AID OFFICE</strong></h4>
                                        <h4>Ateneo de Naga University</h4>
                                        <h6>SCHOLARSHIP RENEWAL FORM </h6>
                                        <h6><i><?php echo $row['RENEWAL_DATE'];?><i> </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body fixed-panel" style=" background-color: #fffcd8;">
                            <div class="col-md-12">

                            <form method="post" action="renewal_view.php">

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label  for="disabledInput" ><strong>Student ID</strong></label>
                                                    <input class="form-control" value="<?php echo $row['STUDENT_ID'] ?>" id="disabledInput" type="text" name="student_id" disabled>
                                                </div> 
                                                <div class="col-md-4">
                                                    <label for="disabledInput"><strong>Name</strong></label>
                                                    <input class="form-control" value="<?php echo $row['NAME'] ?>" id="disabledInput" type="text" name="name" disabled>
                                                </div>
                                        
                                                <div class="col-md-3">
                                                    <label for="disabledInput">Course and Year</label>
                                                    <input class="form-control" value="<?php echo $row['COURSE_YEAR'] ?>" id="disabledInput" type="text" name="course_year" disabled>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="disabledInput">Contact Number </label>
                                                    <input class="form-control" value="<?php echo $row['CONTACT_NUMBER'] ?>" id="disabledInput" type="text" name="contact_number" disabled>
                                                    <br>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="disabledInput">Address </label>
                                                    <input class="form-control" value="<?php echo $row['EMAIL_ADDRESS'] ?>" id="disabledInput" type="text" name="address" disabled>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="disabledInput">Semester</label>
                                                    <select class="form-control" value="<?php echo $row['SEMESTER'] ?>" id="disabledInput" type="text" name="semester" disabled>
                                                        <option value="1st Semester"> 1st Semester </option>
                                                        <option value="2nd Semester"> 2nd Semester </option>
                                                        <option value="Summer"> Summer </option>
                                                    </select>
                                                   
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="disabledInput">Email Address</label>
                                                    <input class="form-control" value="<?php echo $row['EMAIL_ADDRESS'] ?>" id="disabledInput" type="text" name="email" disabled>
                                                </div>
                                                 
                                                 <div class="col-md-3">
                                                    <label for="disabledInput">Previous Semester   <small>( Year-Semester )</small></label>
                                                    <input class="form-control" value="<?php echo $row['PREVIOUS_SEM'] ?>" id="disabledInput" type="text" name="previous" disabled>
                                                       <br>
                                                </div>    

                                                <div class="col-md-3">
                                                    <label for="disabledInput">Scholarship Type</label>
                                                     <input class="form-control" value="<?php echo $row['SCHOLARSHIP_TYPE'] ?>" id="disabledInput" type="text" name="previous" disabled>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="disabledInput">Specify your Scholarship Grant</label>
                                                     <input class="form-control" value="<?php echo $row['SPECIFIC_TYPE'] ?>" id="disabledInput" type="text" name="previous" disabled>
                                                   
                                                </div>        

                                                  <!-- POST VALUE FOR RENEWAL ID-->
                                                 <input type="hidden" value="<?php echo $row['RENEWAL_ID']?>" name="renewal_id">
                                                
                                                <div class="form-group">
                                                <div class="col-md-4">
                                                    <label for="disabledInput">Remarks</label>
                                                    <textarea class="form-control" value="<?php echo $row['REMARKS'] ?>" id="disabledInput" type="text" name="remarks" disabled>  </textarea>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                <div class="col-md-2">
                                                     <label for="disabledInput">QPI</label>
                                                     <input class="form-control" value="<?php echo $row['qpi'] ?>" id="disabledInput" type="text" name="previous" disabled>
                                                      
                                                        <br>
                                                    </div>
                                                </div>
                                                   
                                                <div class="col-md-12 text-center">
                                                    <hr>
                                                    <button class="btn btn-success btn-md" name="renew" type="submit">Renew Scholarship </button>
                                                    <br>
                                                    <br>
                                                        <div class="clearfix"></div>
                                                 </div>

                                            </div>
                                            <?php } ?>

                                        </form>    
                                    </div>

                                    <div class="panel-footer">
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
                                    </div>
                            </div>
                        </div>
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

