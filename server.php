<?php
	session_start();
	$username ="";
	$errors = array();
	$success = array();
	$warning = array();
	$sweetAlert = array();
	$warnAlert = array();

//************ Database Connection ************//
	//$connect = mysqli_connect('localhost', 'root', '', 'prototype');
	$connect = new mysqli('localhost', 'root', '', 'prototype');

	if (!$connect) {
	 die("Connection failed: " . mysqli_connect_error());
	}
//************ Sanitize String ************//
	function sanitizeString($var){
		global $connect;
	    $var = strip_tags($var);
	    $var = htmlentities($var);
	    $var = stripslashes($var);
	    return $connect->real_escape_string($var);
  }
//********************* USER LOGIN *********************/


             

if(isset($_POST['login'])){

	$username = sanitizeString($_POST['username']);
	$password = sanitizeString($_POST['password']);
    // Search for the login match in the query
	$query = "SELECT * FROM  user WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($connect, $query);

	if(mysqli_num_rows($result) == 1){
	 	//$password = md5($password); // encrypt before compare
		$query3 = "SELECT USER_TYPE FROM user WHERE USERNAME = '{$username}'";
		$result1 = mysqli_query($connect, $query3);
		$row1 = mysqli_fetch_assoc($result1);
		$userType = $row1['USER_TYPE'];

                $query = "SELECT * FROM school_year ORDER BY sy_id LIMIT 1";
                $result = mysqli_query($connect,$query );

                    for ($x = 0; $x < 1; $x++) {
                    $row = mysqli_fetch_array($result);
                    $ys = $row[1]." ".$row[2];
                }

                    $year_sem = (explode(" ",$ys));

                    $_SESSION['SY'] = $year_sem[0];

                    if($year_sem[1] == 'Summer'){
                        $_SESSION['SEM'] = $year_sem[1];
                    }else{
                        $_SESSION['SEM'] = $year_sem[1]." ".$year_sem[2];
                    }

// SWITCH STATEMENT THAT REDIRECTS USER TO THEIR HOME PAGE BASE ON THE USER ROLE
		switch ($userType) {
			    case 'A':
			      $_SESSION['isloggedin'] = true;
				  $_SESSION['username'] = $username;

				  	$query6 = "SELECT * FROM admission_staff WHERE ID_NUMBER = '{$_SESSION['username']}'";
            		$result6 = mysqli_query($connect, $query6);

            		while($row6 = mysqli_fetch_array($result6)):;
                    
                    $_SESSION['admin_full_name'] = $row6['FIRST_NAME']." ".$row6['MIDDLE_INITIAL'].". ".$row6['LAST_NAME'];  
                   
                    endwhile;
				
			      		header('location: admin/index.php');
			        break;
			    case 'SA':
			        $_SESSION['isloggedin'] = true;
					$_SESSION['username'] = $username;

					$query = "SELECT SA_ID FROM student_assistant WHERE ID_NUMBER = '$username'";
					$result = mysqli_query($connect, $query);
					$row = mysqli_fetch_assoc($result);
					$_SESSION['saID'] = $row['SA_ID'];

					$query8 = "SELECT DESIGNATED_OFFICE FROM student_assistant WHERE ID_NUMBER = '$username'";
					$result8 = mysqli_query($connect, $query8);
					$row8 = mysqli_fetch_assoc($result8);
					$_SESSION['sa_office'] = $row8['DESIGNATED_OFFICE'];


					$query10 = "SELECT school_yr, semester FROM school_year ORDER BY sy_id DESC LIMIT 1";
					$result10 = mysqli_query($connect, $query10);
					$row10 = mysqli_fetch_assoc($result10);
					$_SESSION['sa_sem'] = $row10['semester'];
					$_SESSION['sa_yr'] = $row10['school_yr'];

					$query2 = "SELECT TIME_OUT FROM dtr WHERE SA_ID = '{$_SESSION['saID']}' ORDER BY DTR_ID DESC LIMIT 1";
					$result2 = mysqli_query($connect, $query2);
					$row2 = mysqli_fetch_assoc($result2);
					$outVal = $row2['TIME_OUT'];
                    //Check the user DTR state
					if($outVal === '0000-00-00 00:00:00' ){
						header('location: sa/time_out.php');
					}else{
						header('location: sa/time_in.php');
					}

			        break;
			    case "E":
			        $_SESSION['isloggedin'] = true;
					$_SESSION['username'] = $username;

					// Pushes notification to the employee if change of dtr was requested
					 $query_1 = "SELECT * FROM dtr_request WHERE status='PENDING'";
					 $result_1 = mysqli_query($connect, $query_1);
					 $_SESSION['notif_num'] = mysqli_num_rows($result_1);

					$query10 = "SELECT school_yr, semester FROM school_year ORDER BY sy_id DESC LIMIT 1";
					$result10 = mysqli_query($connect, $query10);
					$row10 = mysqli_fetch_assoc($result10);
					$_SESSION['SEM'] = $row10['semester'];
					$_SESSION['SY'] = $row10['school_yr'];

					$query2 = "SELECT OFFICE_NAME FROM office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
					$result2 = mysqli_query($connect, $query2);
					$name = mysqli_fetch_assoc($result2);
					$officeName = $name['OFFICE_NAME'];
					$_SESSION['office'] = $officeName;

					header('location: employee/index.php');
					break;

				case "S":
			        $_SESSION['isloggedin'] = true;
					$_SESSION['username'] = $username;

					header('location: scholar/index.php');
			        break;
			    default:
			        array_push($errors, "Invalid Username and password!");
			}

	
}else{
	 array_push($errors, "Invalid Username and password!");
}
}

//****************** USER LOGOUT ********************//
if (isset($_GET['logout'])){
	// UNSETS GLOBAL VARIABLES 
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['isloggedin']);
	unset($_SESSION['last_id']);
	unset($_SESSION['last_id_value']);
	unset($_SESSION['difficiency_amount']);
	unset($_SESSION['month']);
	unset($_SESSION['tmonth']);
	unset($_SESSION['year']);
	unset($_SESSION['sa_id']);
	unset($_SESSION['URL']);
	unset($_SESSION['saID']);

	header('location: ../login.php');
}

//***************************************************//




?>