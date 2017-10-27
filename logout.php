<?php 

require_once('server.php');

if (isset($_POST['logout'])){
	// UNSETS GLOBAL VARIABLES 
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['isloggedin']);
	unset($_SESSION['last_id']);
	unset($_SESSION['last_id_value']);
	unset($_SESSION['difficiency_amount']);
	unset($_SESSION['month']);
	unset($_SESSION['tmonth']);
	unset($_SESSION['year']);
	unset($_SESSION['sa_id']);
	unset($_SESSION['URL']);

	header('location: ../login.php');
}



?>