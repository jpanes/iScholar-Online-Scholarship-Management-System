              <?php
                // Start the session
                session_start();
                
    $_SESSION['child1_name']=$_POST['child1_name'];
    $_SESSION['child1_age']=$_POST['child1_age'];
    $_SESSION['child1_status']=$_POST['child1_status'];
    $_SESSION['child1_year']=$_POST['child1_year'];
    $_SESSION['child1_school']=$_POST['child1_school'];
    $_SESSION['child1_tuition']=$_POST['child1_tuition'];
    $_SESSION['child1_paid']=$_POST['child1_paid'];

    $_SESSION['child2_name']=$_POST['child2_name'];
    $_SESSION['child2_age']=$_POST['child2_age'];
    $_SESSION['child2_status']=$_POST['child2_status'];
    $_SESSION['child2_year']=$_POST['child2_year'];
    $_SESSION['child2_school']=$_POST['child2_school'];
    $_SESSION['child2_tuition']=$_POST['child2_tuition'];
    $_SESSION['child2_paid']=$_POST['child2_paid'];

    $_SESSION['child3_name']=$_POST['child3_name'];
    $_SESSION['child3_age']=$_POST['child3_age'];
    $_SESSION['child3_status']=$_POST['child3_status'];
    $_SESSION['child3_year']=$_POST['child3_year'];
    $_SESSION['child3_school']=$_POST['child3_school'];
    $_SESSION['child3_tuition']=$_POST['child3_tuition'];
    $_SESSION['child3_paid']=$_POST['child3_paid'];

    $_SESSION['child4_name']=$_POST['child4_name'];
    $_SESSION['child4_age']=$_POST['child4_age'];
    $_SESSION['child4_status']=$_POST['child4_status'];
    $_SESSION['child4_year']=$_POST['child4_year'];
    $_SESSION['child4_school']=$_POST['child4_school'];
    $_SESSION['child4_tuition']=$_POST['child4_tuition'];
    $_SESSION['child4_paid']=$_POST['child4_paid'];

    $_SESSION['child5_name']=$_POST['child5_name'];
    $_SESSION['child5_age']=$_POST['child5_age'];
    $_SESSION['child5_status']=$_POST['child5_status'];
    $_SESSION['child5_year']=$_POST['child5_year'];
    $_SESSION['child5_school']=$_POST['child5_school'];
    $_SESSION['child5_tuition']=$_POST['child5_tuition'];
    $_SESSION['child5_paid']=$_POST['child5_paid'];

    $_SESSION['child6_name']=$_POST['child6_name'];
    $_SESSION['child6_age']=$_POST['child6_age'];
    $_SESSION['child6_status']=$_POST['child6_status'];
    $_SESSION['child6_year']=$_POST['child6_year'];
    $_SESSION['child6_school']=$_POST['child6_school'];
    $_SESSION['child6_tuition']=$_POST['child6_tuition'];
    $_SESSION['child6_paid']=$_POST['child6_paid'];

    $_SESSION['child7_name']=$_POST['child7_name'];
    $_SESSION['child7_age']=$_POST['child7_age'];
    $_SESSION['child7_status']=$_POST['child7_status'];
    $_SESSION['child7_year']=$_POST['child7_year'];
    $_SESSION['child7_school']=$_POST['child7_school'];
    $_SESSION['child7_tuition']=$_POST['child7_tuition'];
    $_SESSION['child7_paid']=$_POST['child7_paid'];

    $_SESSION['person1_name']=$_POST['person1_name'];
    $_SESSION['person1_support']=$_POST['person1_support'];
    $_SESSION['person1_ben']=$_POST['person1_ben'];
    $_SESSION['person1_amt']=$_POST['person1_amt'];

    $_SESSION['person2_name']=$_POST['person2_name'];
    $_SESSION['person2_support']=$_POST['person2_support'];
    $_SESSION['person2_ben']=$_POST['person2_ben'];
    $_SESSION['person2_amt']=$_POST['person2_amt'];

    $_SESSION['person3_name']=$_POST['person3_name'];
    $_SESSION['person3_support']=$_POST['person3_support'];
    $_SESSION['person3_ben']=$_POST['person3_ben'];
    $_SESSION['person3_amt']=$_POST['person3_amt'];


    $_SESSION['scholar1_name']=$_POST['scholar1_name'];
    $_SESSION['scholar1_type']=$_POST['scholar1_type'];
    $_SESSION['scholar1_sponsor']=$_POST['scholar1_sponsor'];
    $_SESSION['scholar1_ben']=$_POST['scholar1_ben'];

    $_SESSION['scholar2_name']=$_POST['scholar2_name'];
    $_SESSION['scholar2_type']=$_POST['scholar2_type'];
    $_SESSION['scholar2_sponsor']=$_POST['scholar2_sponsor'];
    $_SESSION['scholar2_ben']=$_POST['scholar2_ben'];

    $_SESSION['scholar3_name']=$_POST['scholar3_name'];
    $_SESSION['scholar3_type']=$_POST['scholar3_type'];
    $_SESSION['scholar3_sponsor']=$_POST['scholar3_sponsor'];
    $_SESSION['scholar3_ben']=$_POST['scholar3_ben'];

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
                                    <form role="form" method="post" action="appform_action.php" enctype="multipart/form-data" >

                                        <div class="col-lg-6 col-lg-offset-3">
                                        <div class="form-group">
                                            <label>SKETCH OF YOUR COMPLETE ADDRESS(Please Mark on the Google Map your Exact address)</label><br>
                                            </div>


                                            <label>Permanent Address Picture<span style="color:red">*</span></label>
                                           
                                            <style>
                                              #map {
                                                height: 400px;
                                                width: 100%;
                                               }
                                            </style>

                                           <!--  Google Maps -->
                                            <div id="map"></div>
                                                <script>

                                                var markers = [];

                                                function initMap() {
                                                  var map = new google.maps.Map(document.getElementById('map'), {
                                                    zoom: 10,
                                                    center: {lat: 13.6218, lng: 123.1948 }
                                                    
                                                  });

                                                  map.addListener('click', function(e) {

                                                    placeMarkerAndPanTo(e.latLng, map);
                                                  });
                                                }


                                                function placeMarkerAndPanTo(latLng, map) {

                                                 deleteMarkers();
                                                  var marker = new google.maps.Marker({
                                                    position: latLng,
                                                    map: map
                                                  });
                                                  map.panTo(latLng);
                                                  markers.push(marker);
                                                  var locate = latLng;
                                                  document.getElementById("Perm_address_location").value = locate;

                                                
                                                }

                                                function setMapOnAll(map) {
                                                        for (var i = 0; i < markers.length; i++) {
                                                          markers[i].setMap(map);
                                                        }
                                                      }

                                                function clearMarkers() {
                                                    setMapOnAll(null);
                                                  }

                                                function deleteMarkers() {
                                                    clearMarkers();
                                                    markers = [];
                                                  }
                                                </script>
                                                <script async defer
                                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOJI6Vat8laOxV7vlbv0Zfoy9GBSEZ5qs&callback=initMap">
                                                </script>

                                                <input type="hidden" name="Perm_address_location" id="Perm_address_location"> 

                                            </form>
                                            <br>
                                             <div class="form-group">
                                            
                                            <label>Profile Picture<span style="color:red">*</span></label>
                                            <br>
                                            Select image to upload:
                                                    <input type="file" name="image" required><br>

                                            <label>Personal statement about the family's financial situation and the reason for request<span style="color:red">*</span></label>
                                             <br>          
                                            Select file to upload:
                                                    <input type="file" name="request" ><br>

                                            <label>Latest Income Tax Return or BIR Certification for Tax Exemptions<span style="color:red">*</span></label>
                                             <br>          
                                            Select file to upload:
                                                    <input type="file" name="Cert" ><br>

                                            <label>Latest Scholastic Report Card<span style="color:red">*</span></label>
                                             <br>          
                                            Select file to upload:
                                                    <input type="file" name="rep_card" ><br>

                                            <label>Interior & Exterior of House<span style="color:red">*</span></label>
                                             <br>          
                                            Select file to upload:
                                                    <input type="file" name="IE_house" ><br>
                                                
                                            </form>
                                            </div>
 
                                         

                                        <div class="col-lg-6 col-lg-offset-3">
                                        <div class="w3-center">
                                        <div class="w3-bar" align="center">
                              
                                                <input type="submit" value="Submit Application Form" name="submit"class="btn btn-success">
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
