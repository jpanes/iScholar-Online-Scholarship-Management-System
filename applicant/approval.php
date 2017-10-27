<?php
    session_start();
    if(!isset($_SESSION['STAFF_ID']) && $_SERVER['PHP_SELF'] != "/tester/login.php"){
        header('location: login.php');
    }
    require('../server.php');
    

$id=$_POST['student_id'];
// Create connection
/* $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */


$sql = "UPDATE APPLICANT SET APPROVED = 'TRUE' WHERE STUDENT_ID = $id ";


if ($connect->query($sql) === TRUE) {
    header("Refresh:0; url=admin_view_applications.php");
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
?>