<?php include('server.php'); ?>
<!DOCTYPE html>
<html class="frontend js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths responsejs ">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>iScholar</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/applicant.css" rel="stylesheet">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="adnu_layout-master/assets/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="adnu_layout-master/assets/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="adnu_layout-master/assets/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="adnu_layout-master/assets/image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="ueers/assets/image/AdNU-Seal-LATEST-PROTOTYPE.png">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="adnu_layout-master/adnu_layout-master/assets/plugins/datatables/css/jquery.datatables.min.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/plugins/jqueryui/css/jquery-ui.min.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/plugins/gritter/css/jquery.gritter.min.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/plugins/selectize/css/selectize.min.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/plugins/jqueryui/css/jquery-ui-timepicker.min.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/plugins/steps/css/jquery-steps.min.css">
        <link rel="stylesheet" href="assets/stylesheet/uielement.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/plugins/time-picker/picker/css/bootstrap-timepicker.min.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/plugins/time-picker/picker/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/plugins/summernote/css/summernote.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/library/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/stylesheet/layout.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/stylesheet/custom.css">
        <link rel="stylesheet" href="adnu_layout-master/assets/stylesheet/uielement.css">

        <!--/ Application stylesheet -->
        <!-- END STYLESHEETS -->

        <!-- START JAVASCRIPT SECTION - Load only modernizr script here -->
        <script src="adnu_layout-master/assets/library/modernizr/js/modernizr.min.js"></script>
        <script type="text/javascript" src="adnu_layout-master/assets/library/jquery/js/jquery.min.js"></script>
        <script type="text/javascript" src="adnu_layout-master/assets/library/jquery/js/jquery-migrate.min.js"></script>
        <!--/ END JAVASCRIPT SECTION -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>




    <header id="header" class="navbar navbar-fixed-top" style="background:#369; border-bottom: 2px solid rgb(255, 153, 51);">
        <div class="container" style="margin-left: 0;">
            <!-- START navbar header -->
            <div class="navbar-header" style="background:#369; ">
                <!-- Brand -->
                <a class="navbar-brand" href="javascript:void(0);" style="width:100%; border-bottom: 2px solid rgb(255, 153, 51);">
                    <!--span class="logo-figure" style="margin-left:-4px;"></span-->
                    <h4 style="color:#fff; margin-left: 0; font-size: 28px; font-family: 'Times New Roman', Times, serif;" class="font-alt">iScholar</h4>
                </a>
                <!--/ Brand -->
            </div>
            <!--/ END navbar header -->
        </div>
    </header>
    <!--/ END Template Header -->
<!-- START Template Main -->
<section id="main" role="main" style="background: white">

    <!-- START Register Content -->
    
        <section class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <!-- Header -->
                    <div class="text-center" style="margin-bottom:10px; ">
                        <span class="adnu-logo-figure inverse"></span>
                        <h4 class="text-muted mt-0 font-alt">iScholar</h4>
                    </div>
                    <!--/ Header -->
                </div>
                <div class="col-lg-4 col-lg-offset-4">
                    <hr><!-- horizontal line -->

                    <!-- Login form -->
                    <form name="form-login" action ="login.php" method = "POST">
                        <div class="panel-body text-center">
                            <!-- Alert message -->
                            <div class="alert alert-warning">
                                <span class="semibold" align = "center">Beta Version</span>
                            </div>
                            <div class="form-group">
                                <div class="form-stack has-icon pull-left">
                                    <input name="username" type="text" class="form-control input-lg" placeholder="Username" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your username / email" data-parsley-required>
                                    <i class="ico-user2 form-control-icon"></i>
                                </div>
                                <div class="form-stack has-icon pull-left">
                                    <input name="password" type="password" class="form-control input-lg" placeholder="Password" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your password" data-parsley-required>
                                    <i class="ico-lock2 form-control-icon"></i>
                                </div>
                            </div>
                            <!-- Error container -->
                            <div id="error-container"class="mb15"></div>
                            <!--/ Error container -->

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="remember" id="remember" value="1">  
                                            <label for="remember">&nbsp;&nbsp;Remember me</label>   
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div id="dangerAlert">
                                                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-primary" value = "Sign in" name="login">
                            </div>
                             <div class="form-group">
                              <?php include ('validation.php'); ?>
                            </div>
                            
                            <hr>
                        </div>
                    </form>
                    <!-- Login form -->
                    <!-- horizontal line -->
                </div>
            </div>
        </section>
   
    <!--/ END Register Content -->

    <!-- START To Top Scroller -->
    <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
    <!--/ END To Top Scroller -->
</section>
<!--/ END Template Main -->

<!-- START Template Footer -->

<footer id="footer" class="footer_design footer" role="contentinfo">
    <!-- container -->
    <!--/ container -->
    <!-- bottom footer -->
    <div class="footer-bottom footer_bottom" >
        <!-- container -->
        <div class="container">
            <div class="row innerFooter">
                <div class="col-sm-6">
                    <!-- copyright -->
                    <p class="nm text-white">© Copyright 2017 Ateneo de Naga University</p>
                    <p class="nm text-white"> Developed by: iScholar Team</p>
                    <p><a href="https://services.adnu.edu.ph/#contact"> Contact Us</a> | 
                    <a href="https://services.adnu.edu.ph/CodeOfConduct.pdf"> Code of Conduct</a> | 
                    <a href="https://www.adnu.edu.ph"> Main Site</a>  | 
                    <a href="https://my.adnu.edu.ph"> My Adnu</a> </p>
                    <!--/ copyright -->
                </div>
            </div>
        </div>
        <!--/ container -->
    </div>
    <!--/ bottom footer -->
</footer>
<!--/ END Template Footer -->       <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Library script : mandatory -->
        <script type="text/javascript" src="http://localhost/ueers/assets/library/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/assets/library/core/js/core.min.js"></script>
        <!--/ Library script -->

        <!-- App and page level script -->
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/sparkline/js/jquery.sparkline.min.js"></script><!-- will be use globaly as a summary on sidebar menu -->
        <script type="text/javascript" src="http://localhost/ueers/assets/javascript/app.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/selectize/js/selectize.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/jqueryui/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/jqueryui/js/jquery-ui-timepicker.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/jqueryui/js/jquery-ui-touch.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/assets/javascript/forms/element.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/datatables/js/jquery.datatables-custom.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/assets/javascript/tables/datatable.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/assets/javascript/components/notification.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/steps/js/jquery.steps.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/parsley/js/parsley.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/inputmask/js/inputmask.min.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/adnu_layout-master/assets/plugins/time-picker/picker/js/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="http://localhost/ueers/assets/javascript/scheduleJavascript.js"></script>
                <!--/ App and page level scrip -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>