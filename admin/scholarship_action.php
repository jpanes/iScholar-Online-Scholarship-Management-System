
<!--   PHP Edit Code   -->


<?php

include('../server.php');
// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$sid = sanitizeString($_POST['id']); 

$general = sanitizeString($_POST['gen_type']); 

$specific = sanitizeString($_POST['spe_type']); 

$qpi = sanitizeString($_POST['qpi']); 



// create query
$query = "UPDATE scholarship SET GENERAL_TYPE='$general', SPECIFIC_TYPE='$specific', MAINTAINING_QPI='$qpi' WHERE SCHOLARSHIP_ID = '$sid'";

if(mysqli_query($connect, $query)){
    array_push($success, "Updated Successfully!");
    header('location: scholarship_view.php');
}else{
    array_push($errors, "Update Fails");
}

?>