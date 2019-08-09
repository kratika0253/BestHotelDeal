<?php

	session_start();	
	$username=filter_input(INPUT_POST,'username');
	$contact=filter_input(INPUT_POST,'contact');
	$email=filter_input(INPUT_POST,'email');
	$password=filter_input(INPUT_POST,'pass');

	//Create Connection
	$host="127.0.0.1";
	$dbusername="root";
	$dbpassword="";
	$dbname="hotel_deals";
	$conn= new MySQLi($host, $dbusername, $dbpassword, $dbname);
	if(mysqli_connect_error())
	{
		die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
		$sql="INSERT INTO login(Username,ContactNumber, Email, Password) values ('$username','$contact','$email','$password')";
		if($conn->query($sql))
		{
			header('location: login.php?registered=true');
		}
		else
		{
			echo "Error". $sql."<br>",$conn->error;
		}
		$conn->close();	

	}

?>