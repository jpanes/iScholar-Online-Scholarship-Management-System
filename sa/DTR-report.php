<?php
//*************include PHP***************//
include('view-dtr.php');



    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
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

    <title>DTR Report</title>

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

<body  style=" background-color: #e3efef;">

    <div id="wrapper">

        <?php include('navigation_sa.php');?>
           <?php
                            //Get the latest post using the ID
                            $sql = "SELECT * FROM ANNOUNCEMENT ORDER BY ANNOUNCEMENT_ID DESC LIMIT 1";
                            $result = $connect->query($sql);

                ?>

        <div id="page-wrapper"  style=" background-color: #e3efef;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>
                           Daily Time Record  <small> <?php echo " ".$_SESSION['SEM']." - SY (".$_SESSION['SY'].")"; ?></small>
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> DTR Reports
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
        

        <br>

               <div class="row">
                <div class="col-lg-9">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>June</div>
                                    </div>
                                </div>
                            </div>
                          
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="june" >View</button>
                                                </form>
                                        </span>   
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>July</div>
                                    </div>
                                </div>
                            </div>
                                <div class="panel-footer">
                                            <span class="pull-left">  
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="july" >View</button>
                                                </form>
                                            </span>  
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>August</div>
                                    </div>
                                </div>
                            </div>
                          
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="august" >View</button>
                                                </form>
                                        </span>      
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>September</div>
                                    </div>
                                </div>
                            </div>
                          
                                <div class="panel-footer">
                                      <span class="pull-left">
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="september" >View</button>
                                                </form>
                                     </span>
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>October</div>
                                    </div>
                                </div>
                            </div>
                          
                                <div class="panel-footer">
                                      <span class="pull-left">
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="october" >View</button>
                                                </form>
                                      </span>
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>November</div>
                                    </div>
                                </div>
                            </div>
                          
                                <div class="panel-footer">
                                    <span class="pull-left">
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="november" >View</button>
                                                </form>
                                      </span>
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>December</div>
                                    </div>
                                </div>
                            </div>
                          
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="december" >View</button>
                                                </form>
                                        </span>
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>January</div>
                                    </div>
                                </div>
                            </div>
        
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="january" >View</button>
                                                </form>
                                        </span>
                                    <div class="clearfix"></div>
                                </div>
                        
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>February</div>
                                    </div>
                                </div>
                            </div>
                          
                                <div class="panel-footer">
                                        <span class="pull-left">
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="february" >View</button>
                                                </form>
                                        </span>
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>March</div>
                                    </div>
                                </div>
                            </div>
                          
                                <div class="panel-footer">
                                        <span class="pull-left">
                                              <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="march" >View</button>
                                                </form>
                                        </span>
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>April</div>
                                    </div>
                                </div>
                            </div>
                          
                                <div class="panel-footer">
                                      <span class="pull-left">
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="april" >View</button>
                                                </form>
                                      </span>
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>May</div>
                                    </div>
                                </div>
                            </div>
                          
                                <div class="panel-footer">
                                        <span class="pull-left">     
                                                <form method="post" action="view-dtr.php">
                                                     <button type="submit" class="btn btn-info btn-xs" name="may" >View</button>
                                                </form>
                                        </span>     
                                    <div class="clearfix"></div>
                                </div>
                           
                        </div>
                    </div> 

                </div>

                <div class="col-lg-3">

                                <div class="col-lg-12">
                                    <div class ="panel panel-primary" style="border: 0; text-align: ;">
                                            <div class ="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51);'><strong> ANNOUNCENMENT</strong></div>
                                            <div class ="panel-body" style="background-color: ;">
                                         <!--   <div class ="panel-body" style="min-height: 297px; max-height: 297px; background-color: #fff8af;"> -->


                                            <div class="row">
                                                <div class="col-md-12">
                                                <?php
                                                while($row = $result->fetch_assoc()) {
                                                ?>
                                            <tr>                                                 
                                                 <b><?php echo $row['ANNOUNCEMENT_TITLE']?></b>
                                                 <hr>
                                                 <p><b>When: </b><?php echo $row['ANNOUNCEMENT_DATE']?></p>
                                                 <p><?php echo $row['ANNOUNCEMENT_DESC']?></p>
                                            </tr>
                                                <?php 
                                                }
                                                mysqli_free_result($result);
                                                mysqli_close($connect);
                                                ?>  

                                                <br>
                                                </div> 
                                                
                                            <br>
                                            </div>
                                    </div>
                                    <div class="panel-footer" style="min-height: 5px; max-height: 5px;">
                                         
                                    </div>
                                </div>  
                    </div>           

                                <div class="col-lg-12">
                                    
                                    <div class ="panel" style="border: 0; text-align: center; background-color: #ffd154;">
                                            <div class ="panel-heading" style="color: white;"><strong> ABOUT</strong></div>
                                            <div class ="panel-body" style="background-color: #ffface ;">
                                                 <p>&copy; Copyright 2017 <p>Ateneo de Naga University</p> <p> Developed by the iScholar Team. </p></p>
                                         

                                    </div>
                                    
                                    </div>
                                    
                            
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


