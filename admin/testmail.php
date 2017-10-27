<?php
require_once('phpmail/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->CharSet =  "utf-8";
$mail->IsSMTP();
// enable SMTP authentication
$mail->SMTPAuth = true;                  
// GMAIL username
$mail->Username = "your_email_id@gmail.com";
// GMAIL password
$mail->Password = "your_gmail_password";
$mail->SMTPSecure = "ssl";  
// sets GMAIL as the SMTP server
$mail->Host = "smtp.gmail.com";
// set the SMTP port for the GMAIL server
$mail->Port = "465";
$mail->From='your_gmail_id@gmail.com';
$mail->FromName='your_name';
$mail->AddAddress('reciever_email_id', 'reciever_name');
$mail->Subject  =  'SMTP Mail Testing';
$mail->IsHTML(true);
$mail->Body    = 'Hi there , This is just a testing mail';
if($mail->Send())
{
	echo "Message was Successfully Send :)";
}
else
{
	echo "Mail Error - >".$mail->ErrorInfo;
}
?>