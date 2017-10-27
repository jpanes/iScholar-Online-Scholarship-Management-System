
<!--   PHP Edit Code   -->


<?php

include('../server.php');
// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$sid = sanitizeString($_POST['id']); 

$idnum = sanitizeString($_POST['ID_NUMBER']); 

$fname = sanitizeString($_POST['FIRST_NAME']); 

$minitial = sanitizeString($_POST['MIDDLE']);

$lname = sanitizeString($_POST['LAST_NAME']);  

$sname = sanitizeString($_POST['SUFFIX']); 

$address = sanitizeString($_POST['ADDRESS']); 

$email = sanitizeString($_POST['EMAIL']); 



// create query
$query = "UPDATE admission_staff SET ID_NUMBER='$idnum', FIRST_NAME='$fname', MIDDLE_INITIAL='$minitial', LAST_NAME='$lname', SUFFIX_NAME='$sname', ADDRESS='$address', EMAIL_ADDRESS='$email'  WHERE STAFF_ID = '$sid'";

if(mysqli_query($connect, $query)){
    array_push($success, "Updated Successfully!");
    header('location: staff_view.php');
}else{
    array_push($errors, "Update Fails");
}

?>