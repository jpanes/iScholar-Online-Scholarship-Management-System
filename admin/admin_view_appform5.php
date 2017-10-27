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

?> 
<?php
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

               <div class="col-lg-12"  >
                        <div class="panel panel-primary" style=" position: absolute; border: 0; ">
                            <ul class="pager" style="padding-right: 10px; padding-left: 10px; max-height: 15px;"><?php
                                                while ($row = mysqli_fetch_assoc($result)){ 
                                        ?>
                                                <li class="previous"><a href="admin_view_appform4.php?id=<?php echo $row['STUDENT_ID']; ?> ">← Previous</a></li>
                                                <!-- <li class="next"><a href="admin_applicant_view.php">Back to Lists →</a></li> -->
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
                            <div class="panel-body" style=" background-color: #fffcd8; ">                                         
                            <div class="row">
                            
                                <!--<div class="col-lg-6 col-lg-offset-3">-->
                                    <form role="form" method="post" action="admin_view_appform.php" style="width: 1057px">

                                     <div class="col-lg-6 col-lg-offset-3"><br>

                                            <div class="form-group">
                                            <label>COMPLETE ADDRESS</label><br>
                                            </div>

                                            <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" maxlength="25" class="form-control" placeholder="" name="NAME" value="<?php echo $row['LAST_NAME'] ?>" id="disabledInput" disabled>
                                            </div>

                                            <div class="form-group">
                                                        <label>Permanent Address</label>
                                                        <input type="text" maxlength="50" class="form-control" placeholder="" name="PERMANENT_ADDRESS" value="<?php echo $row['PERMANENT_ADDRESS'] ?>" id="disabledInput" disabled>
                                            </div>


                                            <label>Permanent Address Picture</label>
                                           
                                           <?php 
                                            $loc = $row['Perm_Address_Location'];
                                            ?>
                        
                                            <img src = "https://maps.googleapis.com/maps/api/staticmap?center= <?php echo $loc ?>&zoom=16&size=600x300&maptype=roadmap&markers= <?php echo $loc ?>&key=AIzaSyBOJI6Vat8laOxV7vlbv0Zfoy9GBSEZ5qs&";>
                                            <br>
                                            </form>

                                            <?php $result = "Request_".$row['ID_NUMBER'].".jpg";
                                            ?>
                                            <br>
                                            <div class="form-group">
                                                        <label>Scholarship Request</label>
                                                       <img class="img-responsive" src="../applicant/images/<?php echo $result ?>" style="width:600px;height:300px;">
                                            </div>
                                            <br>

                                            <?php $result = "Certificate_".$row['ID_NUMBER'].".jpg";
                                            ?>
                                            <br>
                                            <div class="form-group">
                                                        <label> Latest Income Tax Return or BIR Certification for Tax Exemptions.</label>
                                                       <img class="img-responsive" src="../applicant/images/<?php echo $result ?>" style="width:600px;height:300px;">
                                            </div>
                                            <br>

                                            <?php $result = "Report Card_".$row['ID_NUMBER'].".jpg";
                                            ?>
                                            <br>
                                            <div class="form-group">
                                                        <label>Scholastic Report Card</label>
                                                       <img class="img-responsive" src="../applicant/images/<?php echo $result ?>" style="width:600px;height:300px;">
                                            </div>
                                            <br>

                                            <?php $result = "IE House_".$row['ID_NUMBER'].".jpg";
                                            ?>
                                            <br>
                                            <div class="form-group">
                                                        <label>Interior & Exterior of House</label>
                                                       <img class="img-responsive" src="../applicant/images/<?php echo $result ?>" style="width:600px;height:300px;">
                                            </div>
                                            <br>
                                            <?php

                                            if(($row['APPROVED'] == "" )|| ($row['DENIED'] == "")){
                                            echo '<center> <form action="approval.php" method ="post">'.'<input type="hidden" name="student_id" value='.$STUDENT_ID.'>'.
                                            '<input type="submit" class=button1  value="Approve for Scholarship" name="approve">'. '<br>'.
                                            '</form>'.
  
                                            '<form action="denial.php" method="post">'.
                                            '<input type="hidden" name="student_id" value='.$row['STUDENT_ID'].'>'.
                                            '<input type="submit" class=button2 value="Deny for Scholarship" name="deny">'.'<br>'.

                                            '</form>';
                                            }

                                            else{ echo '';}
                                           echo'<form action ="email.php" method ="post">'.
                                           '<input type="submit" class=button3 value="Give Remarks" name="send_remarks">'.'<br>'.
                                           '<input type="hidden" name="email" value='.$row['EMAIL'].'>'. 
                                           '<textarea type="text" maxlength="80" placeholder="Remarks" name="remarks" size="40"></textarea>'.
                                
                                            '</form>'.'<br>'

                                           // '<form method= "post">'.
                                           //  '<input type="submit" class=button3  value="Generate PDF" name="generate">'. '<br>'.
                                           //  '<input type="hidden" name="student_id" value='.$row['ID_NUMBER'].'>'.
                                           //  '</form>'.
                                           //  '</center>'

                                            ?>
                                    </div>

                                   
                                    </div>
                                    </form>
                                     <ul class="pager" >
                                                <li class="previous"><a href="admin_view_appform4.php?id=<?php echo $row['STUDENT_ID'];?>">← Previous</a></li>
                                                <!-- <li class="next"><a href="admin_applicant_view.php">Back to Lists →</a></li> -->
                                    </ul>
                                            <?php 
                                                }
                                                // mysqli_free_result($result);
                                                mysqli_close($connect);

                                                ?> 
                                </div>
                            </div>
                                    <div class="panel-footer" >
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
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