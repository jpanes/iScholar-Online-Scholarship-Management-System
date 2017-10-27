<?php

error_reporting(0);
include('../server.php'); 


if(isset($_POST['excel'])){
$query = "SELECT * FROM student_assistant";
 $result = mysqli_query($connect, $query);

 
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Student ID</th>  
                        <th>Name</th>  
                        <th>Course/Year</th>  
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["ID_NUMBER"].'</td>  
                        <td>'.$row["FIRST_NAME"].$row["MIDDLE_INITIAL"].$row["LAST_NAME"].'</td>  
                        <td>'.$row["COURSE"].$row["YEAR"].'</td>
                        <td>'.$row["EMAIL_ADDRESS"].'</td>  
                        <td>'.$row["CONTACT_NUMBER"].'</td>  
                        <td>'.$row["ADDRESS"].'</td>    
                    
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;

 }
}

if(isset($_POST['excel_office'])){
$query = "SELECT * FROM office off, office_head oh where off.employee_id = oh.employee_id";
 $result = mysqli_query($connect, $query);

 
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>OFFICE NAME</th>  
                        <th>CATEGORY</th>  
                        <th>DESIGNATION</th>  
                        <th>OFFICE HEAD</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["OFFICE_NAME"].'</td>  
                        <td>'.$row["OFFICE_CATEGORY"].'</td>  
                        <td>'.$row["OFFICE_DESC"].'</td>
                        <td>'.$row["NAME"].'</td>  
                      
                    
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;

 }
}


if(isset($_POST['excel_scholar'])){
$query = "SELECT * FROM scholar";
 $result = mysqli_query($connect, $query);

 
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>STUDENT ID</th>  
                        <th>NAME</th>  
                        <th>ADDRESS</th>  
                        <th>CONTACT NUMBER</th>
                        <th>COURSE</th>  
                        <th>EMAIL</th>  
                        <th>SEMESTER GRANTED</th>  
                        <th>SCHOOL YEAR GRANTED</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["ID_NUMBER"].'</td>
                        <td>'.$row["FIRST_NAME"].$row["MIDDLE_NAME"].$row["LAST_NAME"].'</td>    
                        <td>'.$row["ADDRESS"].'</td>  
                        <td>'.$row["CONTACT_NUMBER"].'</td>
                        <td>'.$row["COURSE"].'</td>
                        <td>'.$row["EMAIL_ADDRESS"].'</td>  
                        <td>'.$row["SEMESTER_GRANTED"].'</td>
                        <td>'.$row["SYEAR_GRANTED"].'</td>  
                        
                      
                    
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;

 }
}
?>