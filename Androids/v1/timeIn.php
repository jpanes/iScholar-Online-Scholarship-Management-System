<?php 

 if($_SERVER['REQUEST_METHOD']=='POST'){


 //Importing our db connection script
  require_once '../includes/connect.php';

    // Get the username of the Android User
 	$username = $_POST['username'];
 	$location = $_POST['location'];

 // GETS THE STAFF ID IN THE USER TABLE
			$query1 = "SELECT STAFF_ID FROM student_assistant WHERE ID_NUMBER = '$username'";

			// GETS THE SA_ID IN THE SA TABLE
			$query2 = "SELECT SA_ID FROM student_assistant WHERE ID_NUMBER = '$username'";
			
			// GET THE EMPLOYEE ID IN THE STUDENT ASSISTANT
			$query3 = "SELECT EMPLOYEE_ID FROM student_assistant WHERE ID_NUMBER = '$username'";

			//fetch result in query1
			$result1 = mysqli_query($con, $query1);
			$row1 = mysqli_fetch_assoc($result1);
			//fetch result in query2
			$result2 = mysqli_query($con, $query2);
			$row2 = mysqli_fetch_assoc($result2);
			//fetch result in query3
			$result3 = mysqli_query($con, $query3);
			$row3 = mysqli_fetch_assoc($result3);

			// Foreign key values to be inserted in the database
			$staffId = $row1['STAFF_ID'];
			$saId = $row2['SA_ID'];
			$employeeId = $row3['EMPLOYEE_ID'];

 // Assign values
 $time_in = date('Y-m-d H:i:s'); //GET THE TIME OF IN
 $curr_date = date('Y-F-d, D'); // GET THE CURRENT DATE (e.g Year, Month, date, day)

 //Creating an sql query
  mysqli_query($con,"INSERT INTO dtr (DTR_DATE, TIME_IN, TIME_OUT, TIME_IN_LOCATION, TIME_OUT_LOCATION, DAILY_HOURS,ACCOMPLISHED_HOURS, REMAINING_HOURS, STATUS, STAFF_ID, SA_ID, EMPLOYEE_ID) VALUES ('$curr_date','$time_in', '0000-00-00 00:00:00
','$location', 'UNAVAILABLE', '00:00:00:', '00:00:00','00:00:00','PENDING','$staffId','$saId','$employeeId')");
   
 
 //Closing the database 
 mysqli_close($con);
 }





