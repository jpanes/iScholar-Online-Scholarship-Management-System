             <?php
                // Start the session
                session_start();


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


    <title>Applications</title>
     
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


    <link href="../admin/data_form.css" rel="stylesheet" type="text/css">

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
                         <p><img class="img-responsive" src="../images/adnu-seal.png" alt="ischolar_adnu-seal" style="width:150px;height:150px;" align="left">
                                             
                                             <strong><center><p>College Admissions and Aid Office</p>
                                             <p>Ateneo de Naga University</p>
                                             <p>Ateneo Avenue, Naga City, 4400</p></center></strong><p>

                                            <br><br><br>
                                            <ol>
                                                  <li>This application form should be accomplished by the parents of the applicant who is seeking financial assistance. It must be answered carefully and completely. Incomplete forms will be returned to the applicant.</li>
                                                  <li>Scholarship grants and other financial aid at the Ateneo de Naga University are given on the basis of financial need and academic performance of the applicant. The Ateneo seeks to help families carry costs that normally would be beyond their financial resources. In other words, the financial aid is sharing a burden. Thus, Ateneo expects that families will help carry that part of the burden of their children's education that lies within their means </li>
                                                  <li>All information will be kept strictly confidential. Misrepresentation of information requested in this questionnaire will be considered reason both for disapproval or cancellation of request.</li>
                                                  <li>Applicants may be called for interview</li>
                                                  <li>Prepare the following files along with this application form: (PDF Scanned)</li>
                                                  <ol type="i">
                                                      <li>A detailed personal statement about the family's financial situation and the reason for request.</li>
                                                      <li>Photocopy of your latest Income Tax Return or BIR Certification for Tax Exemptions.</li>
                                                      <li>Photocopy of latest Scholastic Report Card of your son/daughter.</li>
                                                      <li>Photos of the interior and exterior of the house.</li>
                                                   </ol>
                                            </ol> <br>
                       
                            <div class="row">
                                <!--<div class="col-lg-6 col-lg-offset-3">-->
                                    <form role="form" method="post" action="appform2.php">

                                    <div class="col-lg-6 col-lg-offset-3">
                                        <div class="form-group">
                                            <label >Student Number <span style="color:red">*</span></label>
                                            <input type="text" maxlength="9" class="form-control" placeholder="" name="student_id" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <div class="form-group">
                                           
                                            <label>Student Name<span style="color:red">*</span></label><br />
                                            <div class='col-sm-4'>
                                                <input type="text" maxlength="25" class="form-control" placeholder="Surname" name="last_name" required><br>
                                            </div>
                                            <div class='col-sm-4'>
                                                <input type="text" maxlength="25" class="form-control" placeholder="Firstname" name="first_name" required>
                                            </div>
                                            <div class='col-sm-4'>
                                                <input type="text" maxlength="25" class="form-control" placeholder="Middlename" name="middle_name" required>
                                            </div>

                                        </div>
                                    </div><br>
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <div class="form-group">
                                            
                                            <div class='col-sm-4'>
                                            <label>Nickname</label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="nick_name" >
                                            </div>
                                            

                                           <div class='col-sm-4'>
                                             <label>Gender<span style="color:red">*</span></label><br>
                                            
                                
                                
                                                <input type="radio" name="gender" value="Male"> Male 
                                                <input type="radio" name="gender" value="Female"> Female
                                               
                                  

                                            
                                            </div>
                                            
                                            <div class='col-sm-4'>

                                            <label>Age<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="age" required>
                                            </div>
                                            <br>
                                            <div class='col-sm-4'>
                                            <label>Birthdate<span style="color:red">*</span></label>
                                                <input type="date"  class="form-control" name="birth_date" required>
                                            </div>

                                            <div class='col-sm-4'>
                                            <label>Birthplace<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="birth_place" required>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Civil Status<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="civil_status" required>
                                            </div>
                                          
                                            <div class='col-sm-4'>
                                            <label>Religion<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="religion" required>
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Tel. No.<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="telephone_no" >
                                            </div>
                                            <div class='col-sm-4'>
                                            <label>Cellphone No.<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="cellphone_no" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                     <div class="col-lg-6 col-lg-offset-3">
                                        <br><div class="form-group">
                                            <label>Email Address<span style="color:red">*</span></label>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="email" required>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-lg-offset-3">
                                        <div class="form-group">
                                            <label>Permanent Address (Street No. and  Name, Subdivision/Barangay)<span style="color:red">*</span></label><br>
                                       
                                            <input type="text" maxlength="50" class="form-control" placeholder="" name="perm_address" required>
                                            <br><label>City/Municipality<span style="color:red">*</span></label>
                                            <input type="text" maxlength="25" class="form-control" placeholder="" name="city" required>
                                           <div class='col-sm-4'>
                                            <br><label>Province<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="province" required><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <br><label>Country<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="country" required><br>
                                            </div>
                                            <div class='col-sm-4'>
                                            <br><label>Zip Code<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="zip_code" required><br>
                                            </div>
                                            <br>
                                            <div class="form-group">

                                            <label>Highschool Attended<span style="color:red">*</span></label>
                                            <input type="text" maxlength="50" class="form-control" placeholder="" name="hs_attended" required>
                                    
                                        
                                            <div class='col-sm-4'>
                                            <br>
                                          <label>College Department<span style="color:red">*</span></label>
                                                 <input type="text" maxlength="25" class="form-control" placeholder="" name="department" required>
                                            </div>
                                            <div class='col-sm-4'>
                                           <br><label>Course<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="course" required>
                                            </div>
                                            <div class='col-sm-4'>
                                           <br> <label>Year Level<span style="color:red">*</span></label>
                                                <input type="text" maxlength="25" class="form-control" placeholder="" name="year_level" required><br>
                                            </div>
                                        
                                           

                                        <div class="col-lg-6 col-lg-offset-3">
                                        <div class="w3-center">
                                        <div class="w3-bar" align="center">
                              
                                                <input type="submit" value="Next Page" name="submit" class="btn btn-success">
                                            
                                        </div>
                                        </div>
                                        </div> 



                                             <!-- <center><input type="submit" value="Submit" name="submit"></center> -->
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
