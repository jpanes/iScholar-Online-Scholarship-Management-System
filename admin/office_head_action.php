
<!--   PHP Edit Code   -->


<?php

include('../server.php');
// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$eid = sanitizeString($_POST['id']); 

$id = sanitizeString($_POST['ID_NUMBER']); 

$name = sanitizeString($_POST['NAME']); 

$email = sanitizeString($_POST['EMAIL']);


// create query
$query = "UPDATE office_head SET id_number='$id', name='$name', EMAIL_ADDRESS='$email' WHERE EMPLOYEE_ID = '$eid'";

if(mysqli_query($connect, $query)){
    array_push($success, "Updated Successfully!");
    header('location: office_head_view.php');
}else{
    array_push($errors, "Update Fails");
}

?>