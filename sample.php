<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
echo smtp_mailer('8203208@ntc.edu.ph','test','  <h2>You have Registered with Academic Research Portal</h2>
<p>Please Click the link given to verify your account</p>
<br/><br/>');
function smtp_mailer($to,$subject, $msg){

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

	$mail = new PHPMailer(); 
	//$mail->SMTPDebug=3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = "465"; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "8203208@ntc.edu.ph";
	$mail->Password = 'Onepiece12345';
	$mail->SetFrom("8203208@ntc.edu.ph");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	
	if(!$mail->Send()){
		echo $mail->ErrorInfo;	
	}else{
		echo 'Sent';
	}
}
?>