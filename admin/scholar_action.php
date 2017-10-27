
<?php

include('../server.php');
// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$SID = sanitizeString($_POST['id']); 

$ID_NUMBER = sanitizeString($_POST['ID_NUMBER']); 

$FIRST_NAME = sanitizeString($_POST['FIRST_NAME']); 

$MIDDLE_NAME = sanitizeString($_POST['MIDDLE_NAME']); 

$LAST_NAME = sanitizeString($_POST['LAST_NAME']); 

$SUFFIX_NAME = sanitizeString($_POST['SUFFIX_NAME']); 

$ADDRESS = sanitizeString($_POST['ADDRESS']); 

$CONTACT_NUMBER = sanitizeString($_POST['CONTACT_NUMBER']); 

$EMAIL_ADDRESS = sanitizeString($_POST['EMAIL_ADDRESS']); 

$SYEAR_GRANTED = sanitizeString($_POST['SYEAR_GRANTED']); 

$SEMESTER_GRANTED = sanitizeString($_POST['SEMESTER_GRANTED']);



// create query
$query = "UPDATE SCHOLAR SET ID_NUMBER ='$ID_NUMBER', FIRST_NAME='$FIRST_NAME', MIDDLE_NAME='$MIDDLE_NAME', LAST_NAME='$LAST_NAME', SUFFIX_NAME='$SUFFIX_NAME', ADDRESS='$ADDRESS', CONTACT_NUMBER='$CONTACT_NUMBER', EMAIL_ADDRESS='$EMAIL_ADDRESS', SYEAR_GRANTED='$SYEAR_GRANTED', SEMESTER_GRANTED='$SEMESTER_GRANTED' WHERE SCHOLAR_ID = '$SID'";

if(mysqli_query($connect, $query)){
    array_push($success, "Updated Successfully!");
    header('location: scholar_view.php');
}else{
    array_push($errors, "Update Fails");
}

?>