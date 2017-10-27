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
    <link rel="stylesheet" href="../assets/css/create_sa.css">
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
</head>

<body style="background-color:#edf2f4;">

<!-- INCLUDED PHP FILES  -->
<?php 
       error_reporting(0);
      include('../server.php');
      include('admin_controller.php');

      
// Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}

       $query = "SELECT * FROM office";
       $result = mysqli_query($connect, $query);
       $query1 = "SELECT * FROM rate";
       $result1 = mysqli_query($connect, $query1);

            if(isset($_POST['auto_fill'])){
    
            $_SESSION['temp_ID'] = $_POST['ID_NUMBER'];
                  
            }
                                      
 ?>
    <div id="wrapper" style="background-color:#edf2f4;">
       
       <?php include('navigation_admin.php');?>


        <div id="page-wrapper">

            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADNU <small>COLLEGE ADMISSIONS AND AID OFFICE</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class=""></i> Create User
                            </li>
                            <li class="active">
                                <i class=""></i> Student Assistant
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
                    <!-- Form row/column-->

                    <div class="row">
                     
                         <div class="col-lg-12">
                                <div class="panel panel-primary" style="border: 0;">
                                    <div class="panel-heading">

                                        <div class="row">
                                                <div class="col-md-8">
                                                      <h1 class="text-info" style="color: white;"><i class="fa fa-user fa-2x"></i> Student Assistant <small style="color: white;">account </small>  </h1>
                                                </div> 
                                                <div class="col-md-4">

                                                <form method="post">
                                                    <div class="col-sm-2.5 input-column pull-right" style="padding-top: 40px;">
                                                      <input class="form-control" type="text" name="ID_NUMBER" placeholder="Enter Student ID" required>
                                                    </div>                              
                                                    <button class="btn btn-success btn-sm pull-right" type="submit" name="auto_fill" style="margin-top: 40px; margin-right: 5px;">Fill</button>       
                                                </form>
                                                </div>
                                                </div> 
                                        </div>
                                          
                                    </div>

                                    <div class="panel-body" style=" background-color: #fffcd8;">

                                        <!-- Automatically fill out the scholarship create user form -->

                                        <?php

                                            $query3 = "SELECT * FROM applicant WHERE ID_NUMBER = {$_SESSION['temp_ID']}";
                                            $result3 = mysqli_query($connect, $query3);

                                            while($row3 = mysqli_fetch_array($result3)):;?> 
                                              
                                             <!--  Student Assistant Form -->
                                        <form method="post" action="create-sa.php">
                                            <div class="row">
                                                
                                                    <input class="form-control"  type="hidden" name="ID_NUMBER" value="<?php echo $row3['ID_NUMBER'] ?>" required>
                                                
                                                <div class="col-md-4">
                                                    <label><strong>Firstname</strong></label>
                                                    <input class="form-control" style="text-align: center;" type="text" name="FIRST_NAME" value="<?php echo $row3['FIRST_NAME'] ?>" required>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Middle Name </label>
                                                    <input class="form-control" style="text-align: center;" type="text" name="MIDDLE_INITIAL" value="<?php echo $row3['MIDDLE_NAME'] ?>" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Lastname </label>
                                                    <input class="form-control" style="text-align: center;" type="text" name="LAST_NAME" value="<?php echo $row3['LAST_NAME'] ?>" required>
                                                    <br>
                                                </div>
                                                 <div class="col-md-2">
                                                    <label>Suffix Name</label>
                                                    <input class="form-control" style="text-align: center;" type="text" name="SUFFIX_NAME">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Address </label>
                                                    <input class="form-control" style="text-align: center;" type="text" value="<?php echo $row3['PERMANENT_ADDRESS'] ?>" name="ADDRESS" required>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Contact Number</label>
                                                    <input class="form-control" style="text-align: center;" type="tel" value="<?php echo $row3['CELLPHONE_NUMBER'] ?>" name="CONTACT_NUMBER" required>
                                                </div>
                                                 <div class="col-md-4">
                                                    <label>Email Address </label>
                                                    <input class="form-control" style="text-align: center;" type="text" value="<?php echo $row3['EMAIL'] ?>  " name="EMAIL_ADDRESS" required>
                                                    <br>
                                                </div>     
                                                
                                                <div class="col-md-2">
                                                    <label>S/Y Granted</label>
                                                    <input class="form-control" style="text-align: center;" type="text" value="<?php echo $row3['school_year']?>" name="SYEAR_GRANTED" placeholder="2000/2001" required>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Course </label>
                                                    <input class="form-control" style="text-align: center;" type="text" value="<?php echo $row3['COURSE'] ?>" name="COURSE" required>
                                                    <br>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Sem. Granted</label>
                                                    <select class="form-control" style="text-align: center;" type="text" name="SEMESTER_GRANTED" required>
                                                        <option value="1st Semester"> 1st Semester </option>
                                                        <option value="2nd Semester"> 2nd Semester </option>
                                                        <option value="Summer"> Summer </option>
                                                    </select>
                                                    <br>
                                                </div>

                                               
                                                <div class="col-md-4">
                                                    <label>Designated Office</label>
                                                    <!-- Fetch the data into the database through dropdown -->
                                                     <select class="form-control" style="text-align: center;" type="text" name="DESIGNATED_OFFICE">
                                                        <?php while($row1 = mysqli_fetch_array($result)):;?>
                                                        <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                                        <?php endwhile;?> 
                                                    </select>
                                                    
                                                </div>
                                                 <div class="col-md-2">
                                                    <label>Days Schedule</label>
                                                    <select class="form-control" style="text-align: center;" type="text" name="DAY_SCHED" required>
                                                        <option value="MWF">MWF</option>
                                                        <option value="MW">MW</option>
                                                        <option value="TTH">TTH</option>
                                                        <option value="SAT">SAT</option>
                                                        <option value="MWF/TTH">MWF/TTH</option>
                                                    </select>
                                                    <br>
                                                </div>                                                      
                                                <div class="form-group">
                                                <div class="col-md-3">
                                                    <label>TIME FROM</label>
                                                    <input class="form-control" style="text-align: center;" type="text" name="TIME_FROM" placeholder="01:00" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>TIME TO</label>
                                                    <input class="form-control" style="text-align: center;" type="text" name="TIME_TO" placeholder="04:30" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Total Hours</label>
                                                    <input class="form-control" style="text-align: center;" type="text" name="TOTAL_WORKING_HOURS" placeholder="300:00:00" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                                
                                                
                                                    <input class="form-control" style="text-align: center;" type="hidden" name="SCHOLARSHIP_TYPE" value="Student Assistant Program">
                                               

                                                 <div class="col-md-3">
                                                    <label>Rate School Year </label>
                                                    <!-- Fetch the data into the database through dropdown -->
                                                     <select class="form-control" style="text-align: center;" type="text" name="RATE">
                                                        <?php while($row4 = mysqli_fetch_array($result1)):;?>
                                                        <option value="<?php echo $row4[2];?>"><?php echo $row4[1];?></option>
                                                        <?php endwhile;?> 
                                                    </select>
                                                </div>      

                                                <div class="col-md-12 text-center">
                                                    <hr>
                                                    <button class="btn btn-info btn-md" name="create_sa" type="submit">Create </button>
                                                    <button class="btn btn-danger btn-md" type="reset" value="Reset">Reset</button>
                                                    <br>
                                                    <br>
                                                        <div class="clearfix"></div>
                                                 </div>
                                            </div>
                                            
                                                  <?php endwhile;?> 
                                                
                                        </form>    
                                    </div>
                                    <div class="panel-footer" style="border-color: #FF9933; border-width: 2px; background-color: rgb(255, 153, 51);">
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
                                    </div>
                            </div>
                         </div>
 
                </div>
                <!-- /.row -->
            </div>
            <!-- Page-wrapper end -->

<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

