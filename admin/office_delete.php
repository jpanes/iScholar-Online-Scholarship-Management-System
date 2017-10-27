
<?php

include('../server.php');
// SANITIZE THE STRING BEFORE INSERTING IN THE DATABASE
$id = $_GET['id']; 



// create query
$query = "DELETE FROM office WHERE OFFICE_ID = '$id'";

if(mysqli_query($connect, $query)){
    array_push($success, "Delete Successfully!");
    header('location: office_view.php');
}else{
    array_push($errors, "Delete Fails");
}

?>