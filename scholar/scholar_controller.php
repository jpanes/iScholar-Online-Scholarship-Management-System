<?php


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
	$specific = sanitizeString($_POST['specific_type']);
	$general = sanitizeString($_POST['general']);
    $remarks = sanitizeString($_POST['remarks']);
   


    $query = "SELECT USER_TYPE FROM user WHERE USERNAME = '{$_SESSION['username']}'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $type = $row['USER_TYPE'];

                    
                    // Get the SA Id of the Student Assistant
			    	$query2 = "SELECT SCHOLAR_ID FROM scholar WHERE ID_NUMBER = '{$_SESSION['username']}'";
			    	$result2 = mysqli_query($connect, $query2);
			    	$row2 = mysqli_fetch_assoc($result2);
			    	$scholar = $row2['SCHOLAR_ID'];

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

					//echo $output;

					//DECODE JSON STRING FORMAT
					$aveQPI = json_decode($output, true);

					//DECODE JSON STRING FORMAT
					$result = json_decode($output, true);
					//STORE THE GRADE FROM THE JSON ARRAY TO A VARIABLE

					$qpi = $aveQPI['grades'][0]['AVERAGE_QPI'];
		
					// CHECKER , 1 === TRUE
					$check = $result['result'];

                    // sample not meet qpi
				    //$qpi = 2.4;

				    // store average qpi to session variable
				    
				    $_SESSION['qpi'] = $qpi;
					
		
/********************************************************************/

                   if($qpi >= $maintaining_QPI){

                   $date =  date('Y-m-d');

                   		$query = mysqli_query($connect, "INSERT INTO renewal (RENEWAL_DATE, STUDENT_ID, NAME, COURSE_YEAR, ADDRESS, CONTACT_NUMBER, EMAIL_ADDRESS, SEMESTER, GRANTEE_STATUS, SCHOLARSHIP_TYPE, SPECIFIC_TYPE, REMARKS, PREVIOUS_SEM, SCHOLAR_ID, STAFF_ID, SA_ID,school_year, qpi) VALUES ('$date','$student_id','$name', '$course_year', '$address', '$contact','$email', '$semester','RENEWED', '$general','$specific', '$remarks', '$previous', $scholar, NULL, NULL, '{$_SESSION['SY']}', '$qpi')");


					array_push($sweetAlert, "Submit Successfully!\n Your Average QPI: ".$qpi);


            
                    
                    // CLOSE curl API
                    curl_close($curl);

                   }else{

                   	$date =  date('Y-m-d');

                   	$query = mysqli_query($connect, "INSERT INTO renewal (RENEWAL_DATE, STUDENT_ID, NAME, COURSE_YEAR, ADDRESS, CONTACT_NUMBER, EMAIL_ADDRESS, SEMESTER, GRANTEE_STATUS, SCHOLARSHIP_TYPE, SPECIFIC_TYPE, REMARKS, PREVIOUS_SEM, SCHOLAR_ID, STAFF_ID, SA_ID,school_year, qpi) VALUES ('$date','$student_id','$name', '$course_year', '$address', '$contact','$email', '$semester','PENDING', '$general','$specific', '$remarks', '$previous', $scholar, NULL, NULL,  '{$_SESSION['SY']}', '$qpi')");
                   	array_push($warnAlert, "Submit Successfully, Please Go to the Admission Office\n for required QPI concern.");
                   }


		
}

?>