<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];
require 'PHPMailer/class.phpmailer.php';
$mail = new PHPMailer;
	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';      // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                              // Enable SMTP authentication
	$mail->SMTPSecure = 'ssl';    
	$mail->Port =465;
    $mail->Username = 'xxxxxxxxxx';     //Sets SMTP username
    $mail->Password = 'xxxxxxxxxx';     //Sets SMTP password 
	$mail->From = $email;				// scheduletomeet replace with your own account address
	$mail->AddAddress('motwani.tanya220@gmail.com');     // add a recipient
	$mail->IsHTML(true);                                  // Set email format to HTML
	$mail->Subject = $subject;
	$mail->Body = $message;
	if ($mail->send())                        
	echo "Thank You!";
	else
		echo "Error!";
?>
