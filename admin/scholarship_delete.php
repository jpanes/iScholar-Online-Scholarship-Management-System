
<?php

include('../server.php');
// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$sid = $_GET['id']; 



// create query
$query = "DELETE FROM scholarship WHERE SCHOLARSHIP_ID = '$sid'";

if(mysqli_query($connect, $query)){
    array_push($success, "Delete Successfully!");
    header('location: scholarship_view.php');
}else{
    array_push($errors, "Delete Fails");
}

?>