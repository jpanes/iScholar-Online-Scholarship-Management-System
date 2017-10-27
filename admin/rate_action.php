
<!--   PHP Edit Code   -->


<?php

include('../server.php');
// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$rid = sanitizeString($_POST['id']); 

$syear = sanitizeString($_POST['syear']); 

$deficiency_amount = sanitizeString($_POST['deficiency_amount']); 



// create query
$query = "UPDATE rate SET SYEAR='$syear', DEFICIENCY_AMOUNT='$deficiency_amount' WHERE RATE_ID = '$rid'";

if(mysqli_query($connect, $query)){

	array_push($success, "Updated Successfully!");
  
    header('location: rate_view.php');


}else{
    array_push($errors, "Update Fails");
}

?>