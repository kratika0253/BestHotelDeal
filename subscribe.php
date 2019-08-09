<?php
	
	$email=filter_input(INPUT_POST,'email');

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
		$referer = $_SERVER['HTTP_REFERER'];
		$sql="INSERT INTO subscribe(Email) values ('$email')";
		if($conn->query($sql))
		{
			
			header("Location: $referer");
		}
		else
		{
			echo "Error". $sql."<br>",$conn->error;
		}
		$conn->close();

	}

?>