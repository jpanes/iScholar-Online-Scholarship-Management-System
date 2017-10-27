<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iScholar</title>

    <script type="text/javascript" src="../js/time.js"></script>

     <!-- suser CSS -->
    <link href="../css/user.css" rel="stylesheet"> 
    <link rel="stylesheet" href="../assets/css/create_sa.css">
    <link rel="stylesheet" href="../assets/css/user.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

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
            <?php

            include('../server.php');
                        //Check if the user is logged In
            if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
               
            } else {
                header('location: ../login.php');;
            }


            $request_id = $_GET['id'];
            $query = "SELECT * FROM dtr_request WHERE request_id='$request_id' ORDER BY request_id DESC LIMIT 1";
            $result = mysqli_query($connect, $query);

            
            if(isset($_POST['done'])){

            // Pushes notification to the employee if change of dtr was requested
            $query_1 = "SELECT * FROM dtr_request WHERE status='PENDING'";
            $result_1 = mysqli_query($connect, $query_1);
            $_SESSION['notif_num'] = mysqli_num_rows($result_1);
             

            $dtrId = sanitizeString($_POST['id']);

            $requestId = sanitizeString($_POST['rid']); 

            $in = sanitizeString($_POST['timeIn']); 

            $out = sanitizeString($_POST['timeOut']); 


                // CONVERT THE TIME INTO A STRING TO BE CALCULATE IN TOTAL HOURS
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




            $query_2 = "UPDATE dtr SET TIME_IN='$in', TIME_OUT='$out', DAILY_HOURS='$daily_total' WHERE dtr_id = '$dtrId'; UPDATE dtr_request SET status='DONE' WHERE request_id = '$requestId'"; 
            
            if ($connect->multi_query($query_2) === TRUE) {
                        array_push($success,"DTR Change Successfully!");
                        header( "location: approved_request.php" );
                    } else {
                        array_push($errors, "Error: " . $query_2 . "<br>" . $connect->error);
                    }




            //if(mysqli_query($connect, $query2)){
              //  array_push($success, "Change Successfully!".$in." ".$out." ".$dtrId);
               // header( "refresh:3;url=approved_request.php" );
            //}else{
              //  array_push($errors, "Update Fails");
            //}

        }   

            if(isset($_POST['deny'])){

            // Pushes notification to the employee if change of dtr was requested
            $query_1 = "SELECT * FROM dtr_request WHERE status='PENDING'";
            $result_1 = mysqli_query($connect, $query_1);
            $_SESSION['notif_num'] = mysqli_num_rows($result_1);

            $requestId = sanitizeString($_POST['rid']); 

            $query_2 = "UPDATE dtr_request SET status='DONE' WHERE request_id = '$requestId'";


            if(mysqli_query($connect, $query_2)){
                array_push($success, "Change request denied!");
                header( "refresh:3;url=approved_request.php" );
            }else{
                array_push($errors, "Update Fails");
            }

        }


            ?>

    <div id="wrapper">

                <?php include('navigation_employee.php');?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <!--
                        <h1 class="page-header">
                       
                        </h1> -->
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-history"></i> DTR Change Request
                            </li>
                        </ol>
                    </div>
                </div>

        <br>
               <div class="row">
                     <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                        <div class="panel panel-primary" style="border: 0;">
                            <div class="panel-heading" style="border-color: #ff9933; border-bottom-width: 2px;">
                                <div class="row">
                    
                                    <div class="col-xs-12 text-center">
                                        <i class="fa fa-university fa-2x"></i>
                                        <div>
                                        <h4><strong> <?php echo $_SESSION['office']; ?></strong></h4>
                                        <h4>Ateneo de Naga University</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-body fixed-panel" style=" background-color: #fffcd8;">
                            <div class="row">
                                    <div class="col-lg-2"></div>
                                     <div class="col-lg-8">

                                         <?php while ($row = mysqli_fetch_assoc($result)){ ?>

                                        <form role="form" method="post">
                                            <br>
                                            <input type="hidden" name="rid" value="<?php echo $row['request_id']; ?>">   
                                            <input type="hidden" name="timeIn" value="<?php echo $row['time_in']; ?>">
                                            <input type="hidden" name="timeOut" value="<?php echo $row['time_out']; ?>">
                                             <input type="hidden" name="id" value="<?php echo $row['dtr_id']; ?>">
                                                            
                                             
                                                <strong>Student Name</strong> <?php echo ":   ".$row['name']; ?> <br><br>
                                                <strong>Date Requested</strong>  <?php echo ":   ".$row['request_date']; ?> <br>  <br>
                                                <strong>Time IN Requested</strong>  <?php echo ":   ".date('h:i:s A', strtotime($row['time_in']))?><br><br>
                                                <strong>Time OUT Requested</strong>  <?php echo ":   ".date('h:i:s A', strtotime($row['time_out']))?><br><br>
                                                <strong>Status</strong>  <?php echo ":   ".$row['status']; ?> <br><br><br>
                                 
                                        <div class="panel-footer" align="center">
                                           <button type="submit" class="btn btn-success" name="done" >Change</button>
                                           <button type="submit" class="btn btn-danger" name="deny" >Deny</button>
                                           <br>
                                           <br>
                                           <?php include('../validation.php');?>
                                            
                                    </form>

                                       <?php }
                                            
                                        ?> 


                                    </div>

                                    </div>
                                     <div class="col-lg-3"> </div>                                  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>


<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
