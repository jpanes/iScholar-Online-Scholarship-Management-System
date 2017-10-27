<?php

//**********************************************
//  CREATE STUDENT ASSISTANT PROFILE
//**********************************************

// if the register button is clicked
if(isset($_POST['create_sa'])){

		// Assign Values to a variables to be store in the database
		$idnumber = sanitizeString($_POST['ID_NUMBER']);
		$firstname = sanitizeString($_POST['FIRST_NAME']);
		$middleInitial = sanitizeString($_POST['MIDDLE_INITIAL']);
		$lastName = sanitizeString($_POST['LAST_NAME']);
		$course = sanitizeString($_POST['COURSE']);
		$suffixName = sanitizeString($_POST['SUFFIX_NAME']);
		$address = sanitizeString($_POST['ADDRESS']);
		$email_address = sanitizeString($_POST['EMAIL_ADDRESS']);
		$contact = sanitizeString($_POST['CONTACT_NUMBER']);
		$syGranted = sanitizeString($_POST['SYEAR_GRANTED']);
		$semGranted = sanitizeString($_POST['SEMESTER_GRANTED']);
		$office = sanitizeString($_POST['DESIGNATED_OFFICE']);
		$timeFrom = sanitizeString($_POST['TIME_FROM']);
		$timeTo = sanitizeString($_POST['TIME_TO']);
		$totalHours = sanitizeString($_POST['TOTAL_WORKING_HOURS']);
		$sched = sanitizeString($_POST['DAY_SCHED']);
		$rate = sanitizeString($_POST['RATE']);
		$scholarshipType = sanitizeString($_POST['SCHOLARSHIP_TYPE']);

	// Gets the ID of the staff
	$query1 = "SELECT STAFF_ID FROM user WHERE USERNAME = '{$_SESSION['username']}'";
	// Gets the student ID of the student assistant

	// !!!!!!!!!! AND scholar type = student Assistant !!!!!!!//
	$query2 = "SELECT STUDENT_ID FROM applicant WHERE LOWER(FIRST_NAME) = '{$firstname}' AND LOWER(LAST_NAME) = '{$lastName}'";
	// Gets the employee ID

	// VALIDATES IF THE STUDENT ARE LISTED AS A SCHOLAR
 	// Get the  employee id base on the designated office
	$query3 = "SELECT EMPLOYEE_ID FROM office WHERE OFFICE_NAME = '{$office}'";

	 // Get the  rate_id 
	$query4 = "SELECT RATE_ID FROM rate WHERE DEFICIENCY_AMOUNT = '$rate' AND SYEAR = '$syGranted'";
 	

	// Get the Scholarship Id
	$query5 = "SELECT SCHOLARSHIP_ID FROM Scholarship WHERE SPECIFIC_TYPE = '$scholarshipType'";

	//fetch result in query1
	$result1 = mysqli_query($connect, $query1);
	$row1 = mysqli_fetch_assoc($result1);
	//fetch result in query2
	$result2 = mysqli_query($connect, $query2);
	$row2 = mysqli_fetch_assoc($result2);
	//fetch result in query3
	$result3 = mysqli_query($connect, $query3);
	$row3 = mysqli_fetch_assoc($result3);

	$result4 = mysqli_query($connect, $query4);
	$row4 = mysqli_fetch_assoc($result4);

	$result5 = mysqli_query($connect, $query5);
	$row5 = mysqli_fetch_assoc($result5);

	// Foreign key values to be inserted in the database
	$staffId = $row1['STAFF_ID'];
	$studentId = $row2['STUDENT_ID'];
	$employeeId = $row3['EMPLOYEE_ID'];
	$rateId = $row4['RATE_ID'];
	$scholarshipId = $row5['SCHOLARSHIP_ID'];

	//Free Result

	mysqli_free_result($result1);
	mysqli_free_result($result2);
	mysqli_free_result($result3);
	mysqli_free_result($result4);
	mysqli_free_result($result5);

    // If Result is greater than 0 or true
	if($studentId >= 0 && $studentId >= 1){
        // Insert Data in the Database

$query1 = "INSERT INTO student_assistant(ID_NUMBER, FIRST_NAME, MIDDLE_INITIAL, LAST_NAME,COURSE, SUFFIX_NAME, ADDRESS, EMAIL_ADDRESS, CONTACT_NUMBER, SYEAR_GRANTED,          SEMESTER_GRANTED, DAY_SCHED, TIME_FROM, TIME_TO, DESIGNATED_OFFICE,TOTAL_WORKING_HOURS, SCHOLARSHIP_TYPE, STAFF_ID, STUDENT_ID,EMPLOYEE_ID, SCHOLARSHIP_ID, RATE_ID) 
					VALUES ('$idnumber','$firstname','$middleInitial','$lastName','$course','$suffixName','$address','$email_address','$contact','$syGranted','$semGranted','$sched','$timeFrom','$timeTo','$office','$totalHours','$scholarshipType','$staffId', '$studentId', '$employeeId','$scholarshipId','$rateId')";

if (mysqli_query($connect, $query1)){
	array_push($success, "Created Successfully! ");
	header( "refresh:5;url=create-user.php" );
}else{
    array_push($errors, "Error: ". $query1);
}



	// close connection
	//mysqli_close($connect);


	}
}
		//header( "refresh:5;url=create-user.php" );


?>

<?php
//**********************************************
//  CREATE SCHOLAR PROFILE
//**********************************************

// if the register button is clicked
if(isset($_POST['create_scholar'])){

		// Assign Values to a variables to be store in the database
		$idnumber = sanitizeString($_POST['ID_NUMBER']);
		$firstname = sanitizeString($_POST['FIRST_NAME']);
		$middleInitial = sanitizeString($_POST['MIDDLE_NAME']);
		$lastName = sanitizeString($_POST['LAST_NAME']);
		$suffixName = sanitizeString($_POST['SUFFIX_NAME']);
		$address = sanitizeString($_POST['ADDRESS']);
		$contact = sanitizeString($_POST['CONTACT_NUMBER']);
		$syGranted = sanitizeString($_POST['SYEAR_GRANTED']);
		$semGranted = sanitizeString($_POST['SEMESTER_GRANTED']);
		$type = sanitizeString($_POST['TYPE']);
		$email = sanitizeString($_POST['EMAIL_ADDRESS']);
	

    $query5 = "SELECT SCHOLARSHIP_ID from scholarship where SPECIFIC_TYPE = '$type'";
	$result5 = mysqli_query($connect, $query5);
	$row5 = mysqli_fetch_assoc($result5);
	$s_id = $row5['SCHOLARSHIP_ID'];

$query = "INSERT INTO scholar(ID_NUMBER, FIRST_NAME, MIDDLE_NAME, LAST_NAME, SUFFIX_NAME, ADDRESS, CONTACT_NUMBER, EMAIL_ADDRESS, SYEAR_GRANTED, SEMESTER_GRANTED, SCHOLARSHIP_ID) 
					VALUES ('$idnumber','$firstname','$middleInitial','$lastName','$suffixName','$address','$contact','$email','$syGranted','$semGranted','$s_id')";
if ($connect->query($query) === TRUE) {
    	array_push($success, "Created Successfully!");
	header( "refresh:3;url=create-user.php" );
} else {
	array_push($errors, "Process, Fails!".$query."s");
    echo "Error: " . $query . "<br>" . $connect->error;
}

	}

?>





<?php
//**********************************************
//  CREATE OFFICE HEAD PROFILE
//**********************************************

// if the register button is clicked
if(isset($_POST['create_head'])){

		// Assign Values to a variables to be store in the database
		$idnumber = sanitizeString($_POST['ID_NUMBER']);
		$name = sanitizeString($_POST['NAME']);
		$email = sanitizeString($_POST['EMAIL']);
	

$query = "INSERT INTO office_head(ID_NUMBER, NAME, EMAIL_ADDRESS) 
					VALUES ('$idnumber','$name','$email')";

$result = mysqli_query($connect, $query);

if($result = 1){
	array_push($success, "Created Successfully!");
	header( "refresh:3;url=create-user.php" );
}else{
		array_push($errors, "Process, Fails!");
}

	}

?>



<?php
//**********************************************
//  CREATE ADMISSION STAFF PROFILE
//**********************************************

// if the register button is clicked
if(isset($_POST['create_staff'])){

		// Assign Values to a variables to be store in the database
		$idnumber = sanitizeString($_POST['ID_NUMBER']);
		$firstname = sanitizeString($_POST['FIRST_NAME']);
		$middleInitial = sanitizeString($_POST['MIDDLE']);
		$lastName = sanitizeString($_POST['LAST_NAME']);
		$suffixName = sanitizeString($_POST['SUFFIX_NAME']);
		$address = sanitizeString($_POST['ADDRESS']);
		$email = sanitizeString($_POST['EMAIL']);
	

$query = "INSERT admission_staff (ID_NUMBER, FIRST_NAME, MIDDLE_INITIAL, LAST_NAME, SUFFIX_NAME, ADDRESS, EMAIL_ADDRESS) 
					VALUES ('$idnumber','$firstname','$middleInitial','$lastName','$suffixName','$address','$email')";

$result = mysqli_query($connect, $query);

if($result = 1){
	array_push($success, "Created Successfully!");
	header( "refresh:3;url=create-user.php" );
}else{
		array_push($errors, "Process, Fails!");
}

	}

?>



<?php

//**********************************************
//            CREATE USER ACCOUNT
//**********************************************

// if the Create user button is clickeD
if(isset($_POST['create_user'])){

	$idnumber = sanitizeString($_POST['USERNAME']);
	$password = sanitizeString($_POST['PASSWORD']);
	$passwordRepeat = sanitizeString($_POST['passwordRepeat']);
	$userType = sanitizeString($_POST['USER_TYPE']);

	switch ($userType) {
			    case 'A':

			   	    $query1 = "SELECT STAFF_ID FROM admission_staff WHERE ID_NUMBER = '{$idnumber}'";
					$result1 = mysqli_query($connect, $query1);
					$row1 = mysqli_fetch_assoc($result1);
					$sid = $row1['STAFF_ID'];

                    if(empty($sid)){

                    	array_push($errors, "Not Found!");

                    }else{
					$query3 = mysqli_query($connect, "INSERT INTO user (USER_TYPE, USERNAME, PASSWORD, SCHOLAR_ID, SA_ID, EMPLOYEE_ID, STAFF_ID ) VALUES ('$userType', '$idnumber', '$password', NULL,NULL, NULL, $sid)");
				    
				    array_push($success, "Created Successfully!");
				}
			     
			        break;
			    case 'SA':

				    $query1 = "SELECT SA_ID FROM student_assistant WHERE ID_NUMBER = '{$idnumber}'";
					$result1 = mysqli_query($connect, $query1);
					$row1 = mysqli_fetch_assoc($result1);
					$saId = $row1['SA_ID'];


				    $query2 = "SELECT SA_ID FROM student_assistant WHERE ID_NUMBER = '{$idnumber}'";
					$result2 = mysqli_query($connect, $query2);
					$row2 = mysqli_fetch_assoc($result2);
					$saId = $row2['SA_ID'];

					 if(empty($saId)){

					 	array_push($errors, "Not Found!");

                    }else{

                    $query = "INSERT INTO user (USER_TYPE, USERNAME, PASSWORD, SCHOLAR_ID, SA_ID, EMPLOYEE_ID, STAFF_ID ) VALUES ('$userType', '$idnumber', '$password', NULL,'$saId', NULL, NULL); INSERT INTO app_user (username, password, sa_id) VALUES ('$idnumber', '$password','$saId')";	

                    			

					if ($connect->multi_query($query) === TRUE) {
					    array_push($success,"New records created successfully");
					} else {
					    array_push($errors, "Error: " . $query . "<br>" . $connect->error);
					}
						}

			        break;

			    case "E":

				    $query1 = "SELECT EMPLOYEE_ID FROM office_head WHERE ID_NUMBER = '{$idnumber}'";
					$result1 = mysqli_query($connect, $query1);
					$row1 = mysqli_fetch_assoc($result1);
					$empID = $row1['EMPLOYEE_ID'];

					 if(empty($empID)){

					 	array_push($errors, "Not Found!");

                    }else{

					$query3 = mysqli_query($connect, "INSERT INTO user (USER_TYPE, USERNAME, PASSWORD, SCHOLAR_ID, SA_ID, EMPLOYEE_ID, STAFF_ID ) VALUES ('$userType', '$idnumber', '$password', NULL,NULL, '$empID', NULL)");
	    
	    			array_push($success, "Created Successfully!");
	    		}

			       break;

				case "S":

				$query1 = "SELECT SCHOLAR_ID FROM scholar WHERE ID_NUMBER = '{$idnumber}'";
					$result1 = mysqli_query($connect, $query1);
					$row1 = mysqli_fetch_assoc($result1);
					$scholarID = $row1['SCHOLAR_ID'];

					if(empty($scholarID)){

					 	array_push($errors, "Not Found!");

                    }else{

					$query3 = mysqli_query($connect, "INSERT INTO user (USER_TYPE, USERNAME, PASSWORD, SCHOLAR_ID, SA_ID, EMPLOYEE_ID, STAFF_ID ) VALUES ('$userType', '$idnumber', '$password', '$scholarID',NULL, NULL, NULL)");
	    
	    			array_push($success, "Created Successfully!");
	    		}
				       
			        break;
			    default:
			        array_push($errors, "Can't Create USER!");
			}
}
	

?>


<?php

//**********************************************
//            CREATE SCHOLARSHIP
//**********************************************

if(isset($_POST['create'])){

	$gen_type = sanitizeString($_POST['gen_type']);
	$specific = sanitizeString($_POST['spe_type']);
	$qpi = sanitizeString($_POST['qpi']);

		$query3 = mysqli_query($connect, "INSERT INTO scholarship (GENERAL_TYPE, SPECIFIC_TYPE, MAINTAINING_QPI) VALUES ('$gen_type', '$specific', '$qpi')");
				  array_push($success, "Created Successfully!");
			
}
?>


<?php

//**********************************************
//            CREATE OFFICE
//**********************************************

if(isset($_POST['create_office'])){
    
    $id = sanitizeString($_POST['office_id']);
	$office_name = sanitizeString($_POST['office_name']);
	$head = sanitizeString($_POST['head']);
	$designation = sanitizeString($_POST['designation']);
	$category = sanitizeString($_POST['category']);


		$query3 = mysqli_query($connect, "INSERT INTO office (OFFICE_ID, OFFICE_NAME, EMPLOYEE_ID, OFFICE_DESC, OFFICE_CATEGORY) VALUES ('$id','$office_name', '$head', '$designation', '$category')");

				  array_push($success, "Created Successfully!");
			
}
?>

<?php

//**********************************************
//           RENEW SCHOLARSHIP OF PENDING RENEWAL APPLICATIONS
//**********************************************

if(isset($_POST['renew'])){
    
 $id = sanitizeString($_POST['renewal_id']);
 $date = date('Y-m-d'); 


// create query
$query = "UPDATE renewal SET RENEWAL_DATE='$date',GRANTEE_STATUS='RENEWED' WHERE RENEWAL_ID = '$id'";

if(mysqli_query($connect, $query)){
    array_push($success, "Renewed Successfully Successfully!");
    header('location: renewal_pending.php');
}else{
    array_push($errors, "Renewed Fails");
}
//header( "refresh:5;url=create-user.php" );
			
}
?>



<?php
//**********************************************
//        CREATE ANNOUCEMENT
//**********************************************

if(isset($_POST['create_announce'])){
 

 $atitle = sanitizeString($_POST['ANNOUNCEMENT_TITLE']);
 $adesc= sanitizeString($_POST['ANNOUNCEMENT_DESC']); 
 $adate = sanitizeString($_POST['ANNOUNCEMENT_DATE']);

 $query = "INSERT INTO announcement( ANNOUNCEMENT_TITLE, ANNOUNCEMENT_DESC, ANNOUNCEMENT_DATE) VALUES ( '$atitle', '$adesc', '$adate')";

 if(mysqli_query($connect, $query)){
    array_push($success, "Created Successfully!");
}else{
    array_push($errors, "Process Fails". $query);
}			
}
?>

<?php

//**********************************************
//        CREATE RATE
//**********************************************

if(isset($_POST['create_rate'])){
    
 $syear = sanitizeString($_POST['syear']);
 $amount = sanitizeString($_POST['amount']);

 $query = "INSERT INTO rate(SYEAR, DEFICIENCY_AMOUNT) VALUES ('$syear', '$amount')";

 if(mysqli_query($connect, $query)){
    array_push($success, "Created Successfully Successfully!");
}else{
    array_push($errors, "Process Fails");
}			
}
//**********************************************
//        GET THE URL OF THE CURRENT PAGE     //
//**********************************************
 function url(){
                    if(isset($_SERVER['HTTPS'])){
                        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
                    }
                    else{
                        $protocol = 'http';
                    }
                    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                    }
?>


