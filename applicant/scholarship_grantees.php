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

<body style="background-color:white;">
<!-- INCLUDED PHP FILES  -->
<?php include('../server.php');
 ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include('../applicant/applicant-navigation.php');
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                 <?php
      
                            $sql = "SELECT * FROM APPLICANT WHERE APPROVED = 'TRUE'";
                            $result = $connect->query($sql);

         ?>

                <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0;">
                            <div class="panel-heading">
                                <div class="row">
                                 
                                    <div class="text-center">

                                        <i class="fa fa-calendar fa-university fa-3x"></i>
                                        <div><i><strong><h4>Ateneo De Naga University</h4></strong></i></div>
                                        <div><i><strong><h4>Scholarship New Grantees</h4></strong></i></div>
                                         <h6><?php $date = date('F d, Y'); echo $date; ?></h6>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-body" style=" background-color: #fffcd8;">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                  
                                        <thead>
                                            <tr>    
                                                <th>STUDENT ID NUMBER</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                                <?php
                                                while($row = $result->fetch_assoc()) {
                                                ?>
                                            <tr>
                                                <td><?php echo $row['ID_NUMBER']?></td>
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

<script type="text/javascript" src="js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
