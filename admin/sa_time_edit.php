<?php

include('../server.php');

// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$dtrId = sanitizeString($_POST['id']); 

$in = sanitizeString($_POST['timeIn']); 

$out = sanitizeString($_POST['timeOut']);

$status = 'PENDING';

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

//$query = "INSERT INTO dtr_request (time_in, time_out, status, dtr_id)VALUES('$in', '$out', '$status','$dtrId')";
$query = mysqli_query($connect, "INSERT INTO dtr_request (time_in, time_out, status, dtr_id)VALUES('$in', '$out', '$status','$dtrId')");
	    
if(mysqli_query($connect, $query)){
    array_push($success, "Updated Successfully!");
    header('location: sa_view.php');
}else{
	array_push($errors, "Update Fails");
}

?>