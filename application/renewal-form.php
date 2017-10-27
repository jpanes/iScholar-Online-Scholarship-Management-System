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

<body style="background-color:white;">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
        <header id="header" class="navbar navbar-fixed-top" style='background:#369;'>
            
                <!-- START navbar header -->
                <div class="navbar-header" style='background:#369; '>
                    <!-- Brand -->
                    <a class="navbar-brand" href="javascript:void(0);" style="width:100%;" >
                        <!--span class="logo-figure" style="margin-left:-4px;"></span-->
                        <img src="../images/logo2.png" alt="ischolar_logo"  style="width:135px;height:35px">
                    </a>
                    <!--/ Brand -->
                </div>
                <!--/ END navbar header -->
          
        </header>   
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Application <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Requirements</a>
                            </li>
                            <li>
                                <a href="#">Application Form</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="grantee.html"><i class="fa fa-fw fa-user"></i> Grantees</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Scholarship Program</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Contact Us</a>
                    </li>
                    <li>
                     <div class="wthree-footer">
                        <p>&copy; Copyright 2017 <p>Ateneo de Naga University</p> <p> Developed by the iScholar Team. </p></p>
                    </div>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <h1 class="page-header">
                            Forms
                        </h1> -->
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
        <div class="content">
        <div class="panel-body">
        <div class="row">
        <form action="#" medthod="POST">
        <h4>COLLEGE ADMISSIONS AND AID OFFICE</h4>
        <h4>Ateneo de Naga University</h4>
        <h3>SCHOLARSHIP RENEWAL FORM</h3>
            <div id="examples">
                <div class="w3l-left-grid">
                    <label>Date</label>
                    <script>
                    n =  new Date();
                    y = n.getFullYear();
                    m = n.getMonth() + 1;
                    d = n.getDate();
                    document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
                    </script>
                    <label>ID NO.</label>
                    <input type="text"  required=""/>
                    <label>Name</label>
                    <input type="text"  required=""/>
                    <label>Course and Year</label>
                    <input type="text" required=""/>
                    <label>Complete Home Address</label>
                    <input type="text"  required=""/>
                    <label>Tel./Cel. No.</label>
                    <input type="text" class="sp_celphones" required=""/>
                    <label>Email Address</label>
                    <input type="text"  required=""/>
                    
                </div>
                <div class="w3l-left-grid">
                <label>Semester</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="">1st <br>
                                        <input type="radio" value="">2nd
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="">Summer
                                    </label>
                                </div><br>
                     <div class="radio">
                                    <label>
                                        <input type="radio" value="">New Grantee 
                                    </label>
                                </div>
                    <div class="radio">
                                    <label>
                                        <input type="radio" value="">Old Grantee
                                    </label>
                                </div><br>
                    <label>Type of Scholarship</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">School Budget 
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Annual Donation
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Founded
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Government Sources
                                    </label>
                                </div>
                    <label>Specify your scholarship grant:</label>
                    <input type="text" required="" />
                     <label>Remarks:</label>
                    <input type="text" required="" />
                </div>
                    <div class="clear"> </div>
            </div>
            <div class="w3ls-submit">
                <input type="submit" value="Submit">
            </div>
        </form>
   </div>
   </div>
   </div>
    <!-- /#wrapper -->

<script type="text/javascript" src="js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
