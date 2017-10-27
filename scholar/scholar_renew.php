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

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">
      
    <script src="../sweetalert-master/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../sweetalert-master/dist/sweetalert.css">


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
            include('scholar_controller.php');

            $query = "SELECT * FROM scholarship";
            $result1 = mysqli_query($connect, $query);
            // Automatically fill up the renewal for of the student assistant
            $query2 = "SELECT * FROM scholar WHERE ID_NUMBER = '{$_SESSION['username']}'";
            $result2 = mysqli_query($connect, $query2);

            ?>

    <div id="wrapper">
         <?php include('navigation_scholar.php'); ?>

        <div id="page-wrapper" style=" background-color: #e3efef;">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <br>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Renewal
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <div class="row">

                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                            <div class="panel-heading">
                                <div class="row">
                    
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

                                        <!-- While Loop-->
                                        <?php while($row2 = mysqli_fetch_array($result2)):;?>
                                        <?php 

                                        $id = $row2['SCHOLARSHIP_ID']; // using specific id
                                        $query3 = "SELECT GENERAL_TYPE, SPECIFIC_TYPE FROM scholarship WHERE SCHOLARSHIP_ID = '$id'";
                                            $result3 = mysqli_query($connect, $query3);
                                            $row3 = mysqli_fetch_assoc($result3);
                                            $specific_type = $row3['SPECIFIC_TYPE'];
                                            $general_type = $row3['GENERAL_TYPE'];
                                         ?>
            

                            <form method="post" action="scholar_renew.php">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label><strong>Student ID</strong></label>
                                                    <input class="form-control" type="text" value="<?php echo $row2['ID_NUMBER'];?>" name="student_id" required>
                                                    <div class="clearfix"></div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <label><strong>Name</strong></label>
                                                    <input class="form-control" type="text" value="<?php echo $row2['FIRST_NAME']." ".$row2['MIDDLE_NAME'].". ".$row2['LAST_NAME'];?>" name="name" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Course and Year</label>
                                                    <input class="form-control" type="text" value="<?php echo $row2['COURSE']." - (Please indicate current year level)" ?>" name="course_year" required>
                                                    <div class="clearfix"></div>
                                                    <br>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <label>Address </label>
                                                    <input class="form-control" type="text" value="<?php echo $row2['ADDRESS'];?>" name="address" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Semester</label>
                                                    <select class="form-control" type="text" name="semester" required>
                                                        <option value="1st Semester"> 1st Semester </option>
                                                        <option value="2nd Semester"> 2nd Semester </option>
                                                        <option value="Summer"> Summer </option>
                                                    </select>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Email Address</label>
                                                    <input class="form-control" type="text" value="<?php echo $row2['EMAIL_ADDRESS'];?>" name="email" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                                 
                                                 <div class="col-md-3">
                                                    <label>Previous Semester   <small>( Year-Semester )</small></label>
                                                    <input class="form-control" placeholder="e.g ( 2017-1, 2017-2, 2017-3 )" type="text" name="previous" required>
                                                    <div class="clearfix"></div>
                                                    <br>
                                                </div>    
                                                 <div class="col-md-3">
                                                    <label>General Scholarship Type</label>
                                                     <input class="form-control" type="text" name="general" value="<?php echo $general_type;?>">
                                                    <div class="clearfix"></div>
                                                   
                                                </div>                                              
                                                <div class="col-md-3">
                                                    <label>Specify your Scholarship Grant</label>
                                                    <input class="form-control" name="specific_type" type="text" value="<?php echo $specific_type;?>">
                                                    </select>
                                                    <div class="clearfix"></div>
                                                    <br>
                                                </div>        
                                            
                                                <div class="form-group">
                                                   <div class="col-md-2">
                                                        <label>Contact Number </label>
                                                        <input class="form-control" type="text" value="<?php echo $row2['CONTACT_NUMBER'];?>" name="contact_number" required>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                <div class="col-md-4">
                                                    <label>Remarks</label>
                                                    <textarea class="form-control" type="text" name="remarks">  </textarea>
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
                                            </div>
                                        </form>
                                        <!-- End of While-->   
                                        <?php endwhile ?> 
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
