

<?php

include('../server.php');
// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$office_id = sanitizeString($_POST['id']); 

$office_name = sanitizeString($_POST['office_name']); 

$employee_id = sanitizeString($_POST['head']); 

$office_desc = sanitizeString($_POST['designation']); 

$office_category = sanitizeString($_POST['category']); 




// create query
$query = "UPDATE office SET OFFICE_NAME='$office_name', EMPLOYEE_ID='$employee_id', OFFICE_DESC='$office_desc', OFFICE_CATEGORY='$office_category' WHERE OFFICE_ID = '$office_id'";

if(mysqli_query($connect, $query)){
    array_push($success, "Updated Successfully!");
    header('location: office_view.php');
}else{
    array_push($errors, "Update Fails");
}

?>