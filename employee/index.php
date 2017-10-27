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
     <!-- FullCalendar --> 
    <link href='../fullcalendar-3.6.1/fullcalendar.min.css' rel='stylesheet' />
    <link href='../fullcalendar-3.6.1/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='../fullcalendar-3.6.1/lib/moment.min.js'></script>
    <script src='../fullcalendar-3.6.1/lib/jquery.min.js'></script>
    <script src='../fullcalendar-3.6.1/fullcalendar.min.js'></script>

    <style>

    body {
        margin: 40px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 900px;
        margin: 0 auto;
        background-color: white;
    }

</style>



</head>

<body style="background-color:#edf2f4;">

<?php
   error_reporting(0);
    include('../server.php');
    //Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}

?>
  <?php
         //Get the latest post using the ID
        $sql = "SELECT * FROM ANNOUNCEMENT ORDER BY ANNOUNCEMENT_ID DESC LIMIT 1";
        $result = $connect->query($sql);

                ?>

    <div id="wrapper" style="background-color: #edf2f4;">

    <?php include('navigation_employee.php');?>
        <div id="page-wrapper"  style="background-color: #edf2f4;">

            <div class="container-fluid">

                <!-- Page Heading -->
                   <!--row -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                       <!--
                             <h1 class="page-header">
                         
                             ADNU <small><?php// echo $_SESSION['office'] ?></small> 
                        </h1>
                    -->
                      
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.html">Home</a>
                            </li>
                          
                        </ol>
                    </div>
                </div>
                 <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-9">
                             <div class="panel-body" style=" background-color: #e3efef;">

                                        
                                               <div id='calendar'></div>
                                                <script>

                                                $(document).ready(function() {

                                                    $('#calendar').fullCalendar({
                                                        editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2017-10-19',
                    end: '2017-10-21'
                    
                },
                {
                    title: 'Sembreak',
                    start: '2017-10-11',
                    end: '2017-10-11'
                   
                },
                
               
                {
            
                    title: 'Examination Week',
                    start: '2017-10-11',
                    end: '2017-10-13'
                    
                },
                {
                    title: 'Enrollment',
                    start: '2017-10-11',
                    end: '2017-10-13'
                },
                {
                    title: 'Meeting',
                    start: '2017-10-21',
                    end: '2017-10-13'
                   
                },
            
               
            ]
                                                       
              });
                                                    
            });

            </script>      
                                    
    
                                    </div>
                                <div class="panel-footer">
                                        <?php include ('../validation.php'); ?> 
                                </div>
                        </div>

                                <div class="col-lg-3">
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
                                                 <b><p><?php echo $row['ANNOUNCEMENT_TITLE']?></p></b>
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
                                    
                            
                                </div>  
                    </div>
                     <div class="col-lg-3">
                                    <br>
                                   <br>
                                    <div class ="panel" style="border: 0; text-align: center; background-color: #ffd154;"">
                                            <div class ="panel-heading" ><strong style="color: white;"> ABOUT</strong></div>
                                            <div class ="panel-body" style="background-color: #ffface ;">
                                                 <p>&copy; Copyright 2017 <p>Ateneo de Naga University</p> <p> Developed by the iScholar Team. </p></p>
                                         

                                    </div>
                                    
                                    </div>
                                    
                            
                                </div>             
                <!-- /.row -->                
                </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->


    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

