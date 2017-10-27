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
    <link rel="stylesheet" href="../bootstrap/css/style.css">

    <script src="../sweetalert-master/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../sweetalert-master/dist/sweetalert.css">

    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

<body style=" background-color: #e3efef;">

<?php
include('../server.php');

//GET THE SA ID
$dtrId = $_GET['id'];
$query = "SELECT * FROM dtr WHERE DTR_ID='$dtrId'";
$result = mysqli_query($connect, $query);


if(isset($_POST['request'])){

// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$dtrId = sanitizeString($_POST['id']); 

$in = sanitizeString($_POST['timeIn']); 

$out = sanitizeString($_POST['timeOut']); 

$status = 'PENDING';

$query = "SELECT EMPLOYEE_ID, SA_ID from dtr where DTR_ID = '$dtrId'";
$result = mysqli_query($connect, $query);
$row1 = mysqli_fetch_assoc($result);
$empID = $row1['EMPLOYEE_ID'];
$row2 = mysqli_fetch_assoc($result);
$saID = $row1['SA_ID'];

$query5 = "SELECT * FROM student_assistant WHERE SA_ID = '$saID'";
$result5 = mysqli_query($connect, $query5);

while($row5 = mysqli_fetch_array($result5)):; 
    $name = $row5['LAST_NAME'].", ".$row5['FIRST_NAME'].", ".$row5['MIDDLE_INITIAL'].".";
endwhile;
            // CONVERT THE TIME INTO A STRING TO BE CALCULATE IN TOTAL HOURS
            $r_date = date('Y-F-d, D');
            $h =  strtotime($out);
            $h2 = strtotime($in);
            $minute = date("i", $h2);
            $second = date("s", $h2);
            $hour = date("H", $h2);
            // CONVERT TO TIME AGAIN
            $convert = strtotime("-$minute minutes", $h);
            $convert = strtotime("-$second seconds", $convert);
            $convert = strtotime("-$hour hours", $convert);
            $daily_total = date('H:i:s', $convert);

            //$query = "INSERT INTO dtr_request (time_in, time_out, status, dtr_id)VALUES('$in', '$out', '$status','$dtrId')";
$query = mysqli_query($connect, "INSERT INTO dtr_request (request_date,time_in, time_out, name, status, dtr_id, employee_id)VALUES('$r_date','$in', '$out', '$name', '$status','$dtrId','$empID')");



if(mysqli_query($connect, $query)){
    array_push($success, "Updated Successfully!");
       header( "refresh:3;url=DTR-view.php" );
}else{
     array_push($success, "Request Successfully Sent!");
       header( "refresh:3;url=DTR-view.php" );
}
}
?>



    <div id="wrapper">

                <?php include('navigation_sa.php');?>
                
        <div id="page-wrapper" style=" background-color: #e3efef;">

            <div class="container-fluid">

                <!-- Page Heading -->
                   <!--row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <!-- DTR Reports -->
                        </h1>
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
                <!--row -->
                <div class="row" >
                <!-- Form Center -->
                    <div class="col-md-3"></div>
                         <div class="col-md-6">
                        <div class="panel panel-primary" style=" border: 0; ">
                            
                            <div class="panel-heading" style="border-color: #ff9933; border-bottom-width: 2px;">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <i class="fa fa-pencil fa-2x"></i>
                                        <div>
                                        <h4><strong> DTR CHANGE REQUEST</strong></h4>
                                        <h6><i><?php $date = date('F d, Y'); echo $date; ?><i> </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="panel-body"  style=" background-color: #fffcd8;">
                                      
                                        <div class="col-xs-2"></div>
                                          <div class="col-xs-8">
                                            
                                            <form role="form" method="post">
                                            <fieldset>
                                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <input type="hidden" name="id" value="<?php echo $row['DTR_ID']; ?>">
                                                <label> Time In</label>
                                            <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-log-in"></i></span>
                                                <input type="text" name="timeIn" class="form-control text-center" value="<?php echo $row['TIME_IN'];?>">
                                            </div>
                                            <br>
                                            <label> Time Out</label>
                                            <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-log-out"></i></span>
                                                <input type="text" name="timeOut" class="form-control text-center" value="<?php echo $row['TIME_OUT'];?>">
                                            </div>
                                              <br>
                                            <div class="panel-footer" align="center">
                                           <button type="submit" class="btn btn-success" name="request" >Request</button>
                                            <a href="http://localhost/iScholar/sa/DTR-report.php"
                                            " class="btn btn-danger" align="center" role="button">Cancel</a>
                                            </div>
                                            <?php   } ?>
                                           <!--  Handles Form Error -->
                                            <?php include ('../validation.php'); ?> 
                                        
                                            </fieldset>
                                            </form>
                                            </div>
                                             <div class="col-xs-2"></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                
                            </div>
                         </div>
                    </div>
                </div>
    


                     <!-- /.row -->


<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
