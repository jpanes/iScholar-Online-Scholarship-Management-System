<?php
// **************************************************************************************//
// THIS PROGRAM UPDATES THE DTR APPROVAL TABLE AS WELL AS UPDATED THE STATUS OF THE STUDENT 
// ASSISTANT DAILY TIME RECORD
//***************************************************************************************//

if(isset($_POST['jan_approve'])){

	$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'
			     	    AND dtr.DTR_DATE LIKE '%January%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "January";

						$curr_date = date('Y-F-d');
   
   					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					

}

if(isset($_POST['feb_approve'])){

$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%February%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "February";

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					
}

if(isset($_POST['mar_approve'])){

$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%March%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "March";

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					
}

if(isset($_POST['apr_approve'])){

$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%April%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "April";

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					
}

if(isset($_POST['may_approve'])){

$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%May%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "May";

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					
}

if(isset($_POST['jun_approve'])){

$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%June%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "June";

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					
}

if(isset($_POST['jul_approve'])){
	
$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%July%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   

			            if($query == true){

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "July";
					}

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					
}

if(isset($_POST['aug_approve'])){

$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%August%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   
			            
			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "August";
					

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					

						
}

if(isset($_POST['sep_approve'])){

$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%September%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "September";

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					
}
if(isset($_POST['oct_approve'])){

$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%October%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "October";

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					
}

if(isset($_POST['nov_approve'])){

$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%November%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "November";

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					
}

if(isset($_POST['dec_approve'])){

$query = "SELECT dtr.DTR_DATE FROM dtr
					    INNER JOIN user
			    	    ON dtr.SA_ID = '{$_SESSION['sa_id']}'

			     	    AND dtr.DTR_DATE LIKE '%December%'
			     	    ORDER BY dtr.DTR_ID
			     	    ASC 
			            LIMIT 1;";   

			            $result = mysqli_query($connect, $query);
			            $row = mysqli_fetch_assoc($result);
						$dtr = $row['DTR_DATE'];

						$dtrDate = strtotime($dtr); 

						$_SESSION['month']=date("F",$dtrDate);
						$_SESSION['year']=date("Y",$dtrDate);
						$_SESSION['tmonth'] = "December";

					 // GET THE EMPLOYEE ID
	$query2 = "SELECT EMPLOYEE_ID from office_head WHERE ID_NUMBER = '{$_SESSION['username']}'";
                         
						$result2 = mysqli_query($connect, $query2);
			            $row = mysqli_fetch_assoc($result2);
						$em_id = $row['EMPLOYEE_ID'];
                         
                         //STORES APPROVAL DATE
						 $curr_date = date('F-d-Y');

                         //STORES THE CURRENT URL ID
						 $id = $_SESSION['sa_id'];
                         
                         // INSERT RECORD IN THE DTR APPROVAL TABLE 
						mysqli_query($connect, "INSERT INTO dtr_approval ( DATE_APPROVED, DTR_MONTH, DTR_YEAR, SA_ID, EMPLOYEE_ID ) VALUES('$curr_date','{$_SESSION['month']}','{$_SESSION['year']}','{$_SESSION['sa_id']}','$em_id') ");
                        // SELECT ALL THE RECORD THAT MATCHES ON THE SELECTED MONTH AND YEAR
						$query ="SELECT * FROM dtr WHERE SA_ID = '{$_SESSION['sa_id']}'AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'";
						// STORE RESULT
						$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
						//LOOP THAT EXTRACT THE SELECTED DATA TO BE UPDATED 
						while ($row = mysqli_fetch_array($result)) {
						    // STORE THE ID IN A VARIABLE
						    $ids = $row["DTR_ID"];
                        
                        // UPDATE THE STATUS OF THE DTR TO "APPROVE"
						mysqli_query($connect, "UPDATE dtr SET STATUS = 'APPROVE' WHERE SA_ID = '{$_SESSION['sa_id']}' AND DTR_DATE LIKE '%{$_SESSION['month']}%' AND DTR_DATE LIKE '%{$_SESSION['year']}%'");

                     }

                        // REDIRECTS THE OFFICE HEAD INTO THE SA RECORD PAGE WITH THE SAME STUDENT ASSISTANT ID
						header('Location: http://localhost/iScholar/employee/sa_record.php?id='.$id);
					
}


?>