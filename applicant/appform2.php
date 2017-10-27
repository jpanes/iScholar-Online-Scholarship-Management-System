             <?php
                // Start the session
                session_start();
    $_SESSION['student_id']=$_POST['student_id']; 
    $_SESSION['first_name']=$_POST['first_name']; 
    $_SESSION['middle_name']=$_POST['middle_name'];
    $_SESSION['last_name']=$_POST['last_name'];
    $_SESSION['nick_name']=$_POST['nick_name'];
    $_SESSION['gender']=$_POST['gender'];
    $_SESSION['age']=$_POST['age'];
    $_SESSION['birth_date']=$_POST['birth_date'];
    $_SESSION['birth_place']=$_POST['birth_place'];
    $_SESSION['civil_status']=$_POST['civil_status'];
    $_SESSION['religion']=$_POST['religion'];
    $_SESSION['telephone_number']=$_POST['telephone_no'];
    $_SESSION['cellphone_number']=$_POST['cellphone_no'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['permanent_address']=$_POST['perm_address'];
    $_SESSION['city']=$_POST['city'];
    $_SESSION['province']=$_POST['province'];
    $_SESSION['country']=$_POST['country'];
    $_SESSION['zip_code']=$_POST['zip_code'];
    $_SESSION['highschool_attended']=$_POST['hs_attended'];
    $_SESSION['preffered_course']=$_POST['pref_course'];
    $_SESSION['department']=$_POST['department'];
    $_SESSION['course']=$_POST['course'];
    $_SESSION['year_level']=$_POST['year_level'];
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
                                    <form role="form" method="post" action="appform3.php">

                                            <div class="col-lg-6 col-lg-offset-3">
                                            <div class="form-group">
                                            <label>Father's Name<span style="color:red">*</span></label><br>
                                             </div>
                                            <div class='col-sm-4'>
                                            
                                            <label>Last Name<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="father_last_name" required>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>First Name<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="father_first_name" required>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Middle Name<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="father_middle_name" required><br>
                                            </div>

                                            <div class='col-sm-4'>
                                             <label>Status<span style="color:red">*</span></label><br>
                                           
                                
                                                <input type="radio" name="father_status" value="Living"> Living <br>
                                                <input type="radio" name="father_status" value="Deceased"> Deceased<br>
                                                <input type="radio" name="father_status" value="OCW"> OCW <br>
                                  
                                            <br>
                                            
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>Occupation<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="father_occ" required><br>
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>Monthly Salary<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="father_salary" required><br>
                                            </div>

                                          
                                           <div class="form-group">

                                           <label>Employer's Name</label>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="father_emp_name" >

                                            <br><label>Employer's Address</label>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="father_emp_add" >

                                            <br><label>Office Telephone No.</label>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="father_office_tel_no">
                                            <br>
                                            <div class="form-group">
                                            <label>Mother's Name<span style="color:red">*</span></label><br>
                                             </div>
                                            <div class='col-sm-4'>
                                            
                                            <label>Last Name<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_last_name" required>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>First Name<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_first_name" required>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Middle Name<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_middle_name" required><br>
                                            </div>

                                            <div class='col-sm-4'>
                                             <label>Status<span style="color:red">*</span></label><br>
                                           
                                
                                
                                                <input type="radio" name="mother_status" value="living"> Living <br>
                                                <input type="radio" name="mother_status" value="deceased"> Deceased<br>
                                                <input type="radio" name="mother_status" value="OCW"> OCW <br>
                                  
                                            <br>
                                            
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>Occupation<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_occ" required><br>
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>Monthly Salary<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_salary" required><br>
                                            </div>

                                          
                                           <div class="form-group">

                                           <label>Employer's Name</label>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_emp_name" >

                                            <br><label>Employer's Address</label>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_emp_add" >

                                            <br><label>Office Telephone No.</label>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="mother_office_tel_no" >

                                            </div>
                                             <div class="form-group">
                                            <label>Guardian's Name</label><br>
                                             </div>
                                            <div class='col-sm-4'>
                                            
                                            <label>Last Name</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="guardian_last_name" >
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>First Name</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="guardian_first_name" >
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Middle Name</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="guardian_middle_name" ><br>
                                            </div>
                                           <div class="form-group">
                                            <label>Relation</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="guardian_relation" >
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
