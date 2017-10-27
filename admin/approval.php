<?php
   
    include('../server.php');
    

$id=$_POST['student_id'];
// Create connection
/* $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */


$query1 = "SELECT school_yr FROM school_year WHERE sy_id ORDER BY sy_id DESC LIMIT 1";
					$result1 = mysqli_query($connect, $query1);
					$row1 = mysqli_fetch_assoc($result1);
					$sy = $row1['school_yr'];

$query2 = "SELECT semester FROM school_year WHERE sy_id ORDER BY sy_id DESC LIMIT 1";
					$result2 = mysqli_query($connect, $query2);
					$row2 = mysqli_fetch_assoc($result2);
					$sem = $row2['semester'];

$sql = "UPDATE APPLICANT SET APPROVED = 'TRUE', school_year ='$sy', semester_granted='$sem' WHERE STUDENT_ID = '$id'";



if ($connect->query($sql) === TRUE) {
    header("location: approved_scholars.php");
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
?>