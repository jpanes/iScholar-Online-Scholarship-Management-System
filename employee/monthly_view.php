<?php
include('../server.php');

// DISPLAYS DTR RECORD ACCORDING TO THE MONTH

if(isset($_POST['january'])){

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

						header('location:sa_view.php');

}

if(isset($_POST['february'])){

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

						header('location:sa_view.php');
}

if(isset($_POST['march'])){

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

						header('location:sa_view.php');
}

if(isset($_POST['april'])){

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

						header('location:sa_view.php');
}

if(isset($_POST['may'])){

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

						header('location:sa_view.php');
}

if(isset($_POST['june'])){

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

						header('location:sa_view.php');
}

if(isset($_POST['july'])){
	
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

						header('location:sa_view.php');
}

if(isset($_POST['august'])){

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
					

						header('location:sa_view.php');
}

if(isset($_POST['september'])){

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

						header('location:sa_view.php');
}
if(isset($_POST['october'])){

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

						header('location:sa_view.php');
}

if(isset($_POST['november'])){

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

						header('location:sa_view.php');
}

if(isset($_POST['december'])){

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

						header('location:sa_view.php');
}



?>