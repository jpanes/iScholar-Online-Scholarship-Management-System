<?php

include('../server.php');

// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$dtrId = sanitizeString($_POST['id']); 

$in = sanitizeString($_POST['timeIn']); 

$out = sanitizeString($_POST['timeOut']); 


// create query
$query = "UPDATE dtr SET TIME_IN='$in', TIME_OUT='$out' WHERE DTR_ID = '$dtrId'";

if(mysqli_query($connect, $query)){
    array_push($success, "Updated Successfully!");
    header('location: sa_view.php');
}else{
	array_push($errors, "Update Fails");
}

?>