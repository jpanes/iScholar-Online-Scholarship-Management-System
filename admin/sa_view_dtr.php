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

<body style="background-color:#edf2f4;">
    <?php
        // PHP INCLUDES
        include('sa_monthly_view.php');

        
// Check if the user is logged In
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
   
} else {
    header('location: ../login.php');;
}

        $date = date('d m y');
        // GET THE SA DTR RECORD 
         $query ="SELECT dtr.DTR_ID,dtr.DTR_DATE,dtr.TIME_IN, dtr.TIME_OUT, dtr.TIME_IN_LOCATION, dtr.TIME_OUT_LOCATION, dtr.ACCOMPLISHED_HOURS, dtr.REMAINING_HOURS, dtr.STATUS, dtr.SY FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND dtr.DTR_DATE LIKE '%{$_SESSION['month']}%' AND dtr.DTR_DATE LIKE '%{$_SESSION['year']}%' AND dtr.SY = '".$_SESSION['SY']."'";

         $result = mysqli_query($connect, $query);
         ?>

    <div id="wrapper">

        
        <?php include('navigation_admin.php'); ?>


        <div id="page-wrapper" style="background-color:#edf2f4;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <?php echo " ".$_SESSION['SEM']; ?>
                        <small><?php echo "  - SY (".$_SESSION['SY'].")"; ?></small>
                        </h1>
                           <!-- DTR Reports -->
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> DTR Reports
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary" style="border: 0">
                             <div class="panel-heading" style='border-bottom: 2px solid rgb(255, 153, 51);'>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-2x"> <?php echo " " . $_SESSION['tmonth']?></i>
                                          <small><?php echo "  - SY (".$_SESSION['SY'].")"; ?></small>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><strong> </strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body" style=" background-color: #fffcd8;">
                            <div class="col-lg-12">
                                <table class="table table-hover" style="font-size: 14px;">
                                        <thead>
                                            <tr>    
                                                <th>DATE</th>
                                                <th>IN</th>
                                                <th>OUT</th>
                                                <th>LOCATION(IN)</th>
                                                <th>LOCATION(OUT)</th>
                                                <th>TOTAL HOURS</th>
                                                <th>REMAINING</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)){ 
                                                ?>
                                                <tr>
                                                <td><?php echo $row['DTR_DATE']?></td>
                                                <td><?php echo date('h:i:s A', strtotime($row['TIME_IN']))?></td>
                                                <td><?php                   
                                                    if($row['TIME_OUT'] === '0000-00-00 00:00:00'){
                                                        echo "Pending";
                                                    }else{
                                                        echo date('h:i:s A', strtotime($row['TIME_OUT']));
                                                    }
                                                    ?>        
                                                </td>
                                                <td><?php echo $row['TIME_IN_LOCATION']?></td>
                                                <td><?php echo $row['TIME_OUT_LOCATION']?></td>
                                                <td><?php echo $row['ACCOMPLISHED_HOURS']?></td>
                                                <td><?php echo $row['REMAINING_HOURS']?></td>
                                                <td><strong><?php echo $row['STATUS']?></strong></td>
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
                </div>

<script type="text/javascript" src="../js/jquery.mask.js"></script>
    <!-- jQuery  -->

    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript  -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
