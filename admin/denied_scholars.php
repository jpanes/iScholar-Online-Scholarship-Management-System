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


    <title>DTR Report</title>

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

<body style="background-color:#edf2f4;">
<!-- INCLUDED PHP FILES  -->
<?php include('../server.php');

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
                                <i class="fa fa-close"></i> Denied Scholars
                            </li>
                        </ol>
                    </div>
                </div>

              <!---------------------------------------------
                                 Database Query
                ---------------------------------------------->

         <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post' name='form_filter' >

                        <div class ="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-search" ></i></span>  
                            <input type="text" name="search" id="search" placeholder="Search" class="form-control" style="width: 250px;" />
                        <span style="padding-left: 10px;">Search in Column: </span> 
                        <select name="value">
                            <option selected value="filter_All"> Show All</option>
                            <option value="filter_student_id">Student Id</option>
                            <option value="filter_name">Name</option>
                            <option value="filter_course">Course</option>
                            <option value="filter_year_level">Year Level</option>
                            <option value="filter_family_income">Family Income</option>
                        </select>
                        <input type='submit' class="btn btn-success btn-xs" value = 'Filter'>
                        </form>
                        </div> 
                        <hr>
                       
        <?php
        
        if(empty($_POST['search']))
            { $search = "";}
        else
         {$search = $_POST['search'];}

         if((!empty($search)) && (isset($_POST['value']))){
                            if($_POST['value']=="filter_name"){
                            $query = "SELECT * FROM applicant WHERE FIRST_NAME = '".$search."' OR LAST_NAME = '".$search."' OR MIDDLE_NAME = '".$search."' AND school_year ='".$_SESSION['SY']."' AND semester_granted ='".$_SESSION['SEM']."' AND DENIED = 'TRUE'";
                            }

                            elseif($_POST['value']=="filter_course"){
                            $query = "SELECT * FROM applicant Where COURSE = '".$search."' AND semester_granted ='".$_SESSION['SEM']."'  AND DENIED = 'TRUE'";
                            }
                        
                            elseif($_POST['value']=="filter_student_id"){
                            $query = "SELECT * FROM applicant where ID_NUMBER = '".$search."' AND school_year ='".$_SESSION['SY']."' AND semester_granted ='".$_SESSION['SEM']."'  AND DENIED = 'TRUE'";
                            }

                            elseif($_POST['value']=="filter_family_income"){
                            $query = "SELECT * FROM applicant where FAMILY_INCOME = '".$search."' AND school_year ='".$_SESSION['SY']."' AND semester_granted ='".$_SESSION['SEM']."'  AND DENIED = 'TRUE'";
                            }

                            elseif($_POST['value']=="filter_year_level"){
                            $query = "SELECT * FROM applicant where YEAR_LEVEL = '".$search."' AND school_year ='".$_SESSION['SY']."' AND semester_granted ='".$_SESSION['SEM']."'  AND DENIED = 'TRUE'";
                            }

                            elseif($_POST['value']=="filter_All"){
                            $query = "SELECT * FROM applicant AND school_year ='".$_SESSION['SY']."' AND semester_granted ='".$_SESSION['SEM']."'  AND DENIED = 'TRUE'";
                            }
                        

                        else{
                            $query = "SELECT * FROM applicant where LAST_NAME ='".$search."' AND school_year ='".$_SESSION['SY']."' AND semester_granted ='".$_SESSION['SEM']."'  AND DENIED = 'TRUE'";
                        }
        }

        else {$query = "SELECT * FROM applicant WHERE school_year ='".$_SESSION['SY']."' AND semester_granted ='".$_SESSION['SEM']."'  AND DENIED = 'TRUE'";}

         $result = mysqli_query($connect, $query);
         ?>

                <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                              <div class="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51);'>
                                <div class="row">
                                 
                                    <div class="text-center">

                                        <i class="fa fa-calendar fa-university fa-3x"></i>
                                        <div><i><strong><h4>Ateneo De Naga University</h4></strong></i></div>
                                        <div><i><strong><h4>Scholarship Pending Applicants</h4></strong></i></div>
                                          <h6> <?php echo " ".$_SESSION['SEM']." - SY (".$_SESSION['SY'].")"; ?></h6>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-body" style=" background-color: #fffcd8;">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                  
                                        <thead>
                                            <tr>    
                                                <th>STUDENT ID NUMBER</th>
                                                <th>COURSE & YEAR</th>
                                                <th>RECORDS</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                                <?php
                                                while($row = $result->fetch_assoc()) {
                                                ?>
                                            <tr>
                                                 <td><?php echo $row['ID_NUMBER'].' - '.$row['LAST_NAME'].', '.$row['FIRST_NAME'].' '.$row['MIDDLE_NAME']?></td> 
                                                <td><?php echo $row['COURSE'].' - '.$row['YEAR_LEVEL']?></td>
                                                 <td><a href="admin_view_appform.php?id=<?php echo $row['STUDENT_ID']; ?> " class="btn btn-success" role="button" >Application Form</a></td>
                                            </tr>
                                                <?php 
                                                }
                                                mysqli_free_result($result);
                                                mysqli_close($connect);
                                                ?>                          
                                    </tbody>
                                </table>
                            </div>
                            </div>  
                            </div>

                            <a href="#">
                                <div class="panel-footer">
                                     
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                <!-- /.row -->

            
                                  
                                </div>
                            </div>
                        </div>
                    </div>
    
    <!-- /#wrapper -->
<!-- <div class="wthree-footer">
        <p>© 2017 All Rights Reserved | Design by iScholar.</p>
    </div>
</div> -->

<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

