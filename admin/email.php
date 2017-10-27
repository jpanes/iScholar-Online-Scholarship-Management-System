<?php
require_once('../PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->CharSet =  "utf-8";
$mail->IsSMTP();
// enable SMTP authentication
$mail->SMTPAuth = true;                  
// GMAIL username
$mail->Username = "cbragas@gbox.adnu.edu.ph";
// GMAIL password
$mail->Password = "Krishia21";
$mail->SMTPSecure = "ssl";  
// sets GMAIL as the SMTP server
$mail->Host = "smtp.gmail.com";
// set the SMTP port for the GMAIL server
$mail->Port = "465";
$mail->From='cbragas@gbox.adnu.edu.ph';
$mail->FromName='Admission Office';
$mail->AddAddress('dremalla@gbox.adnu.edu.ph', 'ur name');
$mail->Subject  =  'Feedbacks';
$mail->IsHTML(true);
$mail->Body    = $_POST['remarks'];
if($mail->Send())
{
	echo "Message was Successfully Send :)";
}
else
{
	echo "Mail Error - >".$mail->ErrorInfo;
}
header ('Refresh: 1; URL = admin_view_applications.php');
?>