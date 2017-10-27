<?php 

 if($_SERVER['REQUEST_METHOD']=='POST'){


 //Importing our db connection script
  require_once '../includes/connect.php';

    // Get the username of the Android User
 	$username = $_POST['username'];
 	$location = $_POST['location'];

   // GET THE LAST TIME INSERTED
   $query3 = "SELECT SA_ID from user where USERNAME = '$username'";
    $result3 = mysqli_query($con, $query3);
			$row3 = mysqli_fetch_assoc($result3);
			$value = $row3['SA_ID'];



    $query2 = "SELECT DTR_ID from dtr where SA_ID = '$value' ORDER BY DTR_ID DESC LIMIT 1";
     $result2 = mysqli_query($con, $query2);
			$row2 = mysqli_fetch_assoc($result2);
			$last_id = $row2['DTR_ID'];

    $query1 = "SELECT TIME_IN from dtr where DTR_ID ='$last_id'";

            $result1 = mysqli_query($con, $query1);
			$row1 = mysqli_fetch_assoc($result1);
			$last_time = $row1['TIME_IN'];
             // ASSIGNS THE TIME IN A VARIABLE TO BE PROCESS
            $time_in = $last_time;  
            // GET THE TIME OF OUT
			$time_out = date('Y-m-d H:i:s');
			
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
			//$query = "UPDATE dtr SET TIME_OUT = '$time_out', DAILY_HOURS = '$daily_total' WHERE dtr_id ='$last_id'";


			mysqli_query($con,"UPDATE dtr SET TIME_OUT = '$time_out', TIME_OUT_LOCATION = '$location', DAILY_HOURS = '$daily_total' WHERE dtr_id ='$last_id'");
   

            	//GET ALL THE DAILY HOURS OF THE STUDENT ASSISTANT
			$query ="SELECT dtr.DAILY_HOURS FROM dtr INNER JOIN user ON dtr.SA_ID = user.SA_ID AND user.USERNAME = '$username'";

			$result = mysqli_query($con, $query);

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
			$query1 = "SELECT SA_ID FROM user WHERE USERNAME = '$username'";
			$result1 = mysqli_query($con, $query1);
			$row1 = mysqli_fetch_assoc($result1);
			$saId = $row1['SA_ID'];
			// UPDATE DTR TABLE INCLUDES STUDENT ASSISTANTS ACCOMPLISHED HOURS
			mysqli_query($con, "UPDATE dtr SET ACCOMPLISHED_HOURS = '$newtime' WHERE SA_ID = $saId AND DTR_ID = '$last_id'");
			//mysqli_query($con, "UPDATE rate SET DEFICIENCY_AMOUNT = '{$_SESSION['difficiency_amount']}' WHERE SA_ID = $saId"); 
 


//************************************************************************************************************************
            //CALCULATES THE REMAINING HOURS OF THE STUDENT ASSISTANT
            //SUBTRACT THE TOTAL WORKING HOURS OF SA TO THE TOTAL HOURS OF THE SA CAME FROM THE DTR
			$query = "SELECT TOTAL_WORKING_HOURS FROM student_assistant WHERE ID_NUMBER ='$username'";

			$result = $con->query($query); // stores the query in the result variable
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

			
			mysqli_query($con, "UPDATE dtr SET REMAINING_HOURS = '$newtime' WHERE SA_ID = $saId AND DTR_ID = '$last_id'"); 
		


             mysqli_close($con);
 }







