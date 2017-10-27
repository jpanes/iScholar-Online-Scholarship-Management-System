<?php
//************************************************************************************************************************
 
    // GETS THE CURRENT DTR ACCOMPLISHED HOURS ID TO BE USED TO DISPLAY IN THE STUDENT ASSISTANT PAGE
    // LAST VALUE IN ROW BASED ON USERS ID
	$query1 = "SELECT dtr.DTR_ID FROM dtr INNER JOIN user WHERE dtr.SA_ID = user.SA_ID AND user.USERNAME ='{$_SESSION['username']}' ORDER BY dtr.DTR_ID DESC LIMIT 1";

	$result1 = mysqli_query($connect, $query1);
	$row1 = mysqli_fetch_assoc($result1);
	// STORE THE LAST ID 
	$_SESSION['dtr_last_value'] = $row1['DTR_ID'];

	// WHEN THE USER CLICK THE TIME I BUTTON
	if (isset($_POST['timein'])){

            $curr_date = date('Y-F-d, D'); // GET THE CURRENT DATE (e.g Year, Month, date, day)
			$time_in = date('Y-m-d H:i:s'); //GET THE TIME OF IN
			$dtr_total = '00:00:00'; // initialize 0 hours for total
			$state = 1; // DTR STATE
            // GET THE CLIENT IP ADDRESS
			$in_user_ip = getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');

			// Check if the user ip is equal to ::1 or in localhost
			if($in_user_ip == '::1'){
            $in_user_ip = 'UNAVAILABLE';
			}
			

			//$in_user_ip = get_client_ip(); // Get the client IP address when time in

            // GETS THE STAFF ID IN THE USER TABLE
			$query1 = "SELECT STAFF_ID FROM student_assistant WHERE ID_NUMBER = '{$_SESSION['username']}'";

			// GETS THE SA_ID IN THE SA TABLE
			$query2 = "SELECT SA_ID FROM student_assistant WHERE ID_NUMBER = '{$_SESSION['username']}'";
			
			// GET THE EMPLOYEE ID IN THE STUDENT ASSISTANT
			$query3 = "SELECT EMPLOYEE_ID FROM student_assistant WHERE ID_NUMBER = '{$_SESSION['username']}'";

			//fetch result in query1
			$result1 = mysqli_query($connect, $query1);
			$row1 = mysqli_fetch_assoc($result1);
			//fetch result in query2
			$result2 = mysqli_query($connect, $query2);
			$row2 = mysqli_fetch_assoc($result2);
			//fetch result in query3
			$result3 = mysqli_query($connect, $query3);
			$row3 = mysqli_fetch_assoc($result3);

			// Foreign key values to be inserted in the database
			$staffId = $row1['STAFF_ID'];
			$saId = $row2['SA_ID'];
			$employeeId = $row3['EMPLOYEE_ID'];
		
			//FREE RESULT 
			mysqli_free_result($result1);
			mysqli_free_result($result2);
			mysqli_free_result($result3);

			$year = $_SESSION['sa_yr'];
			$semester = $_SESSION['sa_sem'];

		    // Insert Data in dtr table
            mysqli_query($connect,"INSERT INTO dtr (DTR_DATE, TIME_IN, TIME_OUT, TIME_IN_LOCATION, TIME_OUT_LOCATION, DAILY_HOURS,ACCOMPLISHED_HOURS, REMAINING_HOURS,  SY, SEM,  STATUS, STAFF_ID, SA_ID, EMPLOYEE_ID) VALUES ('$curr_date','$time_in', '0000-00-00 00:00:00
','$in_user_ip', 'Pending...', '00:00:00:', '00:00:00', '00:00:00', '$year', '$semester','PENDING','$staffId','$saId','$employeeId')");
   
            if(mysqli_affected_rows($connect)){
            // CREATE A SESSION VARIABLE CONTAINING THE LAST DTR ID
            	$_SESSION['last_id'] = $connect->insert_id;

                array_push($success, "Time In Successful!");
                // REDIRECT USER TO TIME OUT PAGE IN 2 SECONDS
                header( "refresh:1;url=time_out.php" );
            }else{
            	array_push($errors, "Time In Failed!");
            }
}



//************************************************************************************************************************
//wHEN USER CLICKED TIMEOUT

if (isset($_POST['timeout'])){

             // GET THE LAST ID ISERTED IN THE DATABASE
			$query2 = "SELECT DTR_ID FROM dtr WHERE SA_ID = '{$_SESSION['saID']}' ORDER BY DTR_ID DESC LIMIT 1";

			$result2 = mysqli_query($connect, $query2);
			$row2 = mysqli_fetch_assoc($result2);
			$last_id = $row2['DTR_ID'];

			 // GET THE LAST TIME INSERTED
            $query1 = "SELECT TIME_IN from dtr where DTR_ID ='$last_id'";

            $result1 = mysqli_query($connect, $query1);
			$row1 = mysqli_fetch_assoc($result1);
			$last_time = $row1['TIME_IN'];
             // ASSIGNS THE TIME IN A VARIABLE TO BE PROCESS
            $time_in = $last_time;  
            // GET THE TIME OF OUT
			$time_out = date('Y-m-d H:i:s');

            // Get the client IP Address
			$out_user_ip = getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');

			// Check if the user ip is equal to ::1 or in localhost
			if($out_user_ip == '::1'){
            $out_user_ip = 'UNAVAILABLE';
			}
			
			
			// CONVERT THE TIME INTO A STRING TO BE CALCULATE IN TOTAL HOURS
			$h =  strtotime($time_out);
			$h2 = strtotime($time_in);
			$minute = date("i", $h2);
			$second = date("s", $h2);
			$hour = date("H", $h2);
            // CONVERT TO TIME AGAIN
			$convert = strtotime("-$minute minutes", $h);
			$convert = strtotime("-$second seconds", $convert);
			$convert = strtotime("-$hour hours", $convert);
			$daily_total = date('H:i:s', $convert);

            //PERFORMS MULTI QUERY TO UPDATE DATA RECORD IN THE TABLE
			$query = "UPDATE dtr SET TIME_OUT = '$time_out', DAILY_HOURS = '$daily_total', TIME_OUT_LOCATION = '$out_user_ip' WHERE DTR_ID ='$last_id'";

            mysqli_multi_query($connect,$query);

			if ($connect->query($query) === true) {
			$_SESSION['checker'] = 0;

			 array_push($success, "Time Out Successful!");

			 //Reset the last ID session variable
			 $last_id = null;

             // REDIRECT USER TO TIME OUT PAGE IN 2 SECONDS
                header( "refresh:1;url=time_in.php" );
 
				}
			}

//************************************************************************************************************************

			//GET ALL THE DAILY HOURS OF THE STUDENT ASSISTANT
			$query ="SELECT dtr.DAILY_HOURS FROM dtr INNER JOIN user ON dtr.SA_ID = user.SA_ID AND user.USERNAME ='" . $_SESSION['username'] . "';";

			$result = mysqli_query($connect, $query);

			//INITIALI VARIABLE X TO 1 TO BE USED IN LOOFP
			$x = 1;
			// VARIABLE WHERE TOTAL SUM OF ROW WILL BE STORED
			$newtime = "00:00:00";
			//GETS EVERY VALUE IN A ROW, 
			while ($row = mysqli_fetch_assoc($result)){

				if($x = 1){
					$newtime = explode(":", $newtime);
					$newtime = $newtime[0] * (60*60) + $newtime[1] * (60)  + $newtime[2];   
					$row['DAILY_HOURS'] = explode(":", $row['DAILY_HOURS']);
					$row['DAILY_HOURS'] = $row['DAILY_HOURS'][0] * (60*60) + $row['DAILY_HOURS'][1] * (60) + $row['DAILY_HOURS'][2];     
					$total_time = $newtime + $row['DAILY_HOURS'];
					$newtime =  floor($total_time / (60 * 60)) . ":" . date('i', $total_time) .  ":" . date('s', $total_time);
					$x++;

				}else{
					$newtime = explode(":", $newtime);
					$newtime = $newtime[0] * (60*60) + $newtime[1] * (60)  + $newtime[2];   
					$row['DAILY_HOURS'] = explode(":", $row['DAILY_HOURS']);
					$row['DAILY_HOURS'] = $row['DAILY_HOURS'][0] * (60*60) + $row['DAILY_HOURS'][1] * (60) + $row['DAILY_HOURS'][2];     
					$total_time = $newtime + $row['DAILY_HOURS'];
			        //Hours
			        $newtime =  floor($total_time / (60 * 60)) . ":" . date('i', $total_time) .  ":" . date('s', $total_time);
			    }
			}
			// TOTAL TIME SESSION VARIABLE
			$_SESSION['totalTime'] = $newtime;
			//GET THE SA ID
			$query1 = "SELECT SA_ID FROM user WHERE USERNAME = '{$_SESSION['username']}'";
			$result1 = mysqli_query($connect, $query1);
			$row1 = mysqli_fetch_assoc($result1);
			$saId = $row1['SA_ID'];
			// UPDATE DTR TABLE INCLUDES STUDENT ASSISTANTS ACCOMPLISHED HOURS
			mysqli_query($connect, "UPDATE dtr SET ACCOMPLISHED_HOURS = '$newtime' WHERE SA_ID = $saId AND DTR_ID = '{$_SESSION['dtr_last_value']}'");
			//mysqli_query($connect, "UPDATE rate SET DEFICIENCY_AMOUNT = '{$_SESSION['difficiency_amount']}' WHERE SA_ID = $saId"); 
 

//************************************************************************************************************************
            //CALCULATES THE REMAINING HOURS OF THE STUDENT ASSISTANT
            //SUBTRACT THE TOTAL WORKING HOURS OF SA TO THE TOTAL HOURS OF THE SA CAME FROM THE DTR
			$query = "SELECT TOTAL_WORKING_HOURS FROM student_assistant WHERE ID_NUMBER ='".$_SESSION['username']."' ";

			$result = $connect->query($query); // stores the query in the result variable
			$row = $result->fetch_object(); // fetch the value in the  database

			$total_working_hours = $row->TOTAL_WORKING_HOURS; // stores the last time in a variable

			$remainTime = $_SESSION['totalTime'];
			$total_working_hours = explode(":", $total_working_hours);
			$total_working_hours = $total_working_hours[0] * (60*60) + $total_working_hours[1] * (60) + $total_working_hours[2];        
			$remainTime = explode(":", $remainTime);
			$remainTime = $remainTime[0] * (60*60) + $remainTime[1] * (60) + $remainTime[2];       
			$total_time = $total_working_hours - $remainTime;
			// STORE THE PROCESS TIME IN NEW TIME VARIABLE
			$newtime = floor($total_time / (60 * 60)) . ":" . date('i', $total_time) . ":" . date('s', $total_time);

			// SET SESSION VARIABLE TO DISPLAY REMAINING HOURS ACCROSS THE PAGE
			$_SESSION['remainTime'] = $newtime;

			mysqli_query($connect, "UPDATE dtr SET REMAINING_HOURS = '$newtime' WHERE SA_ID = $saId AND DTR_ID = '{$_SESSION['dtr_last_value']}'"); 

//************************************************************************************************************************
// GET THE THE DIFFICIENCY AMOUNT OF THE SA

            // GET THE STUDENT ASSISTANT RATE ID

            $iniquery = "SELECT rate_id from student_assistant where ID_NUMBER = '{$_SESSION['username']}'";
            $iniresult = mysqli_query($connect, $iniquery);
            $iniRow = mysqli_fetch_assoc($iniresult);
            $rateId = $iniRow['rate_id'];

			// GET THE DIFFICIENCY AMOUNT IN THE STUDENT ASSISTANT RATE

			$query = "SELECT DEFICIENCY_AMOUNT FROM rate WHERE RATE_ID = '$rateId'";
			$result = mysqli_query($connect, $query);
			$row = mysqli_fetch_assoc($result);
			$rate = $row['DEFICIENCY_AMOUNT'];

            // SA DIFFICIENCY VARIABLE
			    $difficiency = $_SESSION['remainTime'];

			    $diffHours = $difficiency;
			    $time = explode(":", $diffHours);
			    $time2 = $time[0];
		
			    $difficiency_amount = ($time2 / 15) * $rate;

			    // Converts to number format
			    $_SESSION['difficiency_amount'] = number_format(floor($difficiency_amount));


//**********************************************
//            RENEW SCHOLARSHIP
//**********************************************

if(isset($_POST['renew'])){
    
    $student_id = sanitizeString($_POST['student_id']);
	$name = sanitizeString($_POST['name']);
	$course_year = sanitizeString($_POST['course_year']);
	$contact = sanitizeString($_POST['contact_number']);
	$address = sanitizeString($_POST['address']);
	$semester = sanitizeString($_POST['semester']);
	$email = sanitizeString($_POST['email']);
	$previous = sanitizeString($_POST['previous']);
	$specific = sanitizeString($_POST['specific']);
	$general = sanitizeString($_POST['general']);
    $remarks = sanitizeString($_POST['remarks']);
   


    $query = "SELECT USER_TYPE FROM user WHERE USERNAME = '{$_SESSION['username']}'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $type = $row['USER_TYPE'];

    	switch ($type) {
		
			    case 'SA':
                    
                    // Get the Staff ID of the student assistant
			    	$query1 = "SELECT STAFF_ID FROM student_assistant WHERE ID_NUMBER = '{$_SESSION['username']}'";
			    	$result1 = mysqli_query($connect, $query1);
			    	$row1 = mysqli_fetch_assoc($result1);
			    	$staff = $row1['STAFF_ID'];
                    
                    // Get the SA Id of the Student Assistant
			    	$query2 = "SELECT SA_ID FROM student_assistant WHERE ID_NUMBER = '{$_SESSION['username']}'";
			    	$result2 = mysqli_query($connect, $query2);
			    	$row2 = mysqli_fetch_assoc($result2);
			    	$sa = $row2['SA_ID'];

  					// Get the Avearage QPI of the Student Assistant
			    	$query3 = "SELECT MAINTAINING_QPI FROM scholarship WHERE SPECIFIC_TYPE = '$specific'";
				    $result3 = mysqli_query($connect, $query3);
				    $row3 = mysqli_fetch_assoc($result3);
				    $maintaining_QPI = $row3['MAINTAINING_QPI'];

				    //variable for semester numerical number

				    if($semester == '1st Semester'){
				    	$numerical_sem = '-1'; 
				    }elseif ($semester =='2nd Semester'){
				    	$numerical_sem = '-2'; 
				    }elseif($semester =='Summer'){
				    	$numerical_sem = '-3'; 
				    }
                     
	/*********************************************************************/
	//                MIS QPI API
	/*********************************************************************/
	     
			    	$devUsername = 'spDev';
					// API PASSWORD
					$password = 'sPd3v4dNu2k17-';
					// API BASE URL
					$baseURL =  'https://services.adnu.edu.ph/api/v2-dev/';
					// API SECRET KEY ACCESS
					$secretKey = '0efdd1a8944e54314e6c0473768174ab';
					// STUDENT ID NUMBER 
					
					//$student_id = '201410565';
					//TERM EXCLUDED 

					// Get the Current Year and the current year to be excluded
                    $exTerm =  date('Y').$numerical_sem;
					
					// THE TARGET TERM WHERE THE QPI EXTRACTED
					$targetTerm = $previous;

					// CREATE AN INSTANCE OF CURL
					$curl = curl_init();
					// SET OPTION THAT TAKES 3 PARAMETERS THE cURL RESOURCE,  THE SETTING AND THE URL VALUE
					curl_setopt($curl, CURLOPT_URL, $baseURL."col_student/average_qpi/student_id/".$student_id."/excluded_term/".$exTerm."/target_term/".$targetTerm."/X-API-KEY/".$secretKey);
					// RETURNS THE RESPONSE AS A STRING
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					// BYPASS THE MANUAL INPUT OF USERNAME AND PASSWORD
					// DIRECT ACCESS TO THE API WITH DEFINE USERNAME AND PASSWORD
					curl_setopt($curl, CURLOPT_USERPWD, "$devUsername:$password");
					// AUTHENTICATION BASIC
					curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
					//EXECUTE THE API REQUEST AND STORE THE RESULT IN A VARIABLE
					$output = curl_exec($curl);
					//PROVIDES EXECUTION INFORMATION
					$info = curl_getinfo($curl);
					//DECODE JSON STRING FORMAT
					$aveQPI = json_decode($output, true);

					//DECODE JSON STRING FORMAT
					$result = json_decode($output, true);
					//STORE THE GRADE FROM THE JSON ARRAY TO A VARIABLE

					$qpi = $aveQPI['grades'][0]['AVERAGE_QPI'];
					// CHECKER , 1 === TRUE
					$check = $result['result'];

                    // sample not meet qpi
				    

				    $_SESSION['qpi'] = $qpi;
					
					
	/********************************************************************/

                   if($qpi >= $maintaining_QPI){

                   $date =  date('Y-m-d');

                   		$query = mysqli_query($connect, "INSERT INTO renewal (RENEWAL_DATE, STUDENT_ID, NAME, COURSE_YEAR, ADDRESS, CONTACT_NUMBER, EMAIL_ADDRESS, SEMESTER, GRANTEE_STATUS, SCHOLARSHIP_TYPE, SPECIFIC_TYPE, REMARKS, PREVIOUS_SEM, SCHOLAR_ID, STAFF_ID, SA_ID, school_year, qpi) VALUES ('$date','$student_id','$name', '$course_year', '$address', '$contact','$email', '$semester','RENEWED', '$general','$specific', '$remarks','$previous', NULL, '$staff', '$sa', '{$_SESSION['SY']}', '$qpi')");


					array_push($sweetAlert, "");

                    
                    // CLOSE curl API
                    curl_close($curl);

                   }else{

                   	$date =  date('Y-m-d');

                   	$query = mysqli_query($connect, "INSERT INTO renewal (RENEWAL_DATE, STUDENT_ID, NAME, COURSE_YEAR, ADDRESS, CONTACT_NUMBER, EMAIL_ADDRESS, SEMESTER, GRANTEE_STATUS, SCHOLARSHIP_TYPE, SPECIFIC_TYPE, REMARKS, PREVIOUS_SEM, SCHOLAR_ID, STAFF_ID, SA_ID, school_year, qpi) VALUES ('$date','$student_id','$name', '$course_year', '$address', '$contact','$email', '$semester','PENDING', '$general','$specific', '$remarks', '$previous', NULL, $staff, '$sa', '{$_SESSION['SY']}', '$qpi')");

                   	array_push($warnAlert, "Submit Successfully, Please Go to the Admission Office\n for required QPI concern.");
                  
                   }

			        break;

			    default:
			        array_push($errors, "Invalid Username and password!");
			}

}

//************************************************************************************************************************

?>
