<?php
$servername='127.0.0.1';
$username='root';
$password='';
$dbname = "hotel_deals";
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$email=filter_input(INPUT_POST,'email');
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
	die('Could not Connect My Sql:' .mysql_error());
}
else
{
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';      // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                              // Enable SMTP authentication
	$mail->Username = 'kratika0253@gmail.com';    // set your email address from which you will sent mail
	$mail->Password = 'ranbirmnbvcxz';                   // password for your account
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port =465;  
	$sql = "Select * from login where Email='".$email."'";                     // TCP port to connect to
	$res = mysqli_query($conn, $sql);
	$r = $res->fetch_assoc();   
	$mail->setFrom('kratika0253@gmail.com', 'Bharattrotter Admin');// scheduletomeet replace with your own account address
	$mail->addAddress($r['Email']);     // add a recipient
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Forget Password Mail';
	$body="Hello! It seems that you have forgotten your password. Don't worry. Here are your old credentials- <br> Email ID: ".$r['Email'] ."<br> Password is ".$r['Password'];
	$mail->Body=$body;
	$mail->send();
	if($mail->send())
	{
		echo("<script>alert('mail sent!')</script>");
 		// header('location:Bharattrotter.php');
 		header("refresh:2; url=Bharattrotter.php");
	}	
	if(!$mail->send()) {
    	echo 'Message could not be sent. This Email ID is not registered with us.';
    	echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
}
?>
