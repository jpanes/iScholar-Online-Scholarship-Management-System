<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iScholar</title>

    <script type="text/javascript" src="../js/time.js"></script>

     <!-- suser CSS -->
    <link href="../css/user.css" rel="stylesheet"> 
    <link rel="stylesheet" href="../assets/css/create_sa.css">
    <link rel="stylesheet" href="../assets/css/user.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">

      
    <script src="../sweetalert-master/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../sweetalert-master/dist/sweetalert.css">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body style=" background-color: #e3efef;">
            <?php

            include('../server.php');
            include('sa_controller.php');

            $query = "Select * from STUDENT_ASSISTANT where id_number = '" . $_SESSION['username'] . "';";
            $result1 = mysqli_query($connect, $query);
            ?>

    <div id="wrapper">

         <?php include('navigation_sa.php'); ?>

        <div id="page-wrapper" style=" background-color: #e3efef;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <!--
                        <h1 class="page-header">
                       
                        </h1> -->
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Renewal
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
      

        <br>

               <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                            <div class="panel-heading">
                                <div class="row">
                     <?php while ($row = mysqli_fetch_assoc($result1)) { ?>
                                    <div class="col-xs-12 text-center">
                                        <i class="fa fa-university fa-2x"></i>
                                        <div>
                                        <h4><strong> COLLEGE ADMISSIONS AND AID OFFICE</strong></h4>
                                        <h4>Ateneo de Naga University</h4>
                                        <h6>SCHOLARSHIP RENEWAL FORM </h6>
                                        <h6><i><?php $date = date('F d, Y'); echo $date; ?><i> </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body fixed-panel" style=" background-color: #fffcd8;">
                            <div class="col-md-12">

                            <form method="post" action="renew_sa.php">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label  for="disabledInput" ><strong>Student ID</strong></label>
                                                    <input class="form-control" value="<?php echo $row['ID_NUMBER'] ?>" type="text" name="student_id">
                                                </div> 
                                                
                                                <div class="col-md-3">
                                                    <label  for="disabledInput" ><strong>Name</strong></label>
                                                    <input class="form-control" value="<?php echo $row['FIRST_NAME'].' '. $row['MIDDLE_INITIAL'].' '.$row['LAST_NAME'] ?>" type="text" name="name">
                                                </div> 
                                        
                                                <div class="col-md-3">
                                                    <label>Course and Year</label>
                                                    <input class="form-control" type="text" name="course_year" value="<?php echo $row['COURSE'] ?>" required>
                                                </div>

                                                <div class="col-md-3">
                                                    <label  for="disabledInput" ><strong>Contact Number</strong></label>
                                                    <input class="form-control" value="<?php echo $row['CONTACT_NUMBER'] ?>" type="text" name="contact_number">
                                                    <br>
                                                </div> 


                                               <div class="col-md-3">
                                                    <label  for="disabledInput" ><strong>Address</strong></label>
                                                    <input class="form-control" value="<?php echo $row['ADDRESS'] ?>" type="text" name="address">
                                                </div> 

                                                <div class="col-md-2">
                                                    <label>Semester</label>
                                                    <select class="form-control" type="text" name="semester" required>
                                                        <option value="1st Semester"> 1st Semester </option>
                                                        <option value="2nd Semester"> 2nd Semester </option>
                                                        <option value="Summer"> Summer </option>
                                                    </select>
                                                   
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Email Address</label>
                                                    <input class="form-control" type="text" name="email" value="<?php echo $row['EMAIL_ADDRESS'] ?>" required>
                                                </div>
                                                 
                                                 <div class="col-md-3">
                                                    <label>Previous Semester   <small>( Year-Semester )</small></label>
                                                    <input class="form-control" placeholder="e.g ( 2017-1, 2017-2, 2017-3 )" type="text" name="previous" required>
                                                       <br>
                                                </div>    

                                                <div class="col-md-3">
                                                    <label>Scholarship Type</label>
                                                    <input class="form-control" type="text" name="general" value="Ateneo Sources">
                                                </div>

                                                <div class="col-md-3">
                                                    <label>Specify your Scholarship Grant</label>
                                                    <input class="form-control" type="text" name="specific" value="Student Assistant Program">
                                                    <br>
                                                </div>        
                                            
                                                <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>Remarks: Please indicate Course Code and Teachers' Gbox for INC/NG.</label>
                                                    <textarea class="form-control" type="text" name="remarks" placeholder="INC / NG">  </textarea>
                                                    <div class="clearfix"></div>
                                                </div>
                                               
                                                <div class="col-md-12 text-center">
                                                    <hr>
                                                    <button class="btn btn-success btn-md" name="renew" type="submit">Submit </button>
                                                    <button class="btn btn-danger btn-md" type="reset" value="Reset">Reset</button>
                                                    <br>
                                                    <br>
                                                        <div class="clearfix"></div>
                                                 </div>
                                                  <?php } ?>

                                            </div>
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


<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
