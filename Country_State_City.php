<!DOCTYPE HTML>  
<html>
<head>
<script>
function setCountry(valueToSet){
	//Get select object
	var selectObj = document.getElementById("Country");
	//alert("hi");
	for (var i = 0; i < selectObj.options.length; i++) {
        if (selectObj.options[i].value== valueToSet) {
            selectObj.options[i].selected = true;
            return;
        }
    }
}
function setState(valueToSet){
	//Get select object
	var selectObj = document.getElementById("State");
	//alert("hi");
	for (var i = 0; i < selectObj.options.length; i++) {
        if (selectObj.options[i].value== valueToSet) {
            selectObj.options[i].selected = true;
            return;
        }
    }
}

</script
</head>
<body> 
<?php
	//prompt function
    function alertmsg($alt_msg){
        echo("<script type='text/javascript'> 
			alert('".$alt_msg."'); </script>");
    }
?>
<?php
	$sql="";
	$country=$city=$state="";
	$flag=0;
	$servername = "localhost";
	$username = "ajay";
	$password = "ajay";
	$dbname = "lampt";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	Country:
	<select name="Country" id="Country" oninput="this.form.submit()">
		<option value="Select One">Select one </option>
<?php
	if(!isset($_POST["Country"])) {
	$sql = "SELECT * FROM country";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<option value=". $row["cid"] .">" . 
					$row["cname"] ."</option>";
		}
	}
	}
	if(isset($_POST["Country"])) {
		if(!empty($_POST["Country"])) {
		
		$country=$_POST["Country"];
		$sql = "SELECT * FROM country";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<option value=". $row["cid"] .">" . 
					$row["cname"] ."</option>";
			}
		}
		echo("<script type='text/javascript'>
				setCountry('".$country."'); </script>");
		
		} 
	
	}
?>  
	</select>
	<br/>
	State: <select name="State" id="State" onchange="this.form.submit()">
		<option value="Select One">Select one </option>
<?php 
	if(isset($_POST["Country"])) {
		if(!empty($_POST["Country"]) ) {
		$country=$_POST["Country"];
		
		$sql = "SELECT * FROM state where cid='$country'";
		$result = mysqli_query($conn, $sql);
		  //echo "<option value=\"Select One\">Select one </option>";
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<option value=". $row["sid"] .">" . 
					$row["sname"] ."</option>";
			}
			
		}
		else {
				echo "<option value=\"No State\">No State available...</option>";
				unset($_POST["State"]);				
				$flag=0;				
			}
		echo("<script type='text/javascript'>setCountry('".$country."'); </script>");
		} 
	}
?>	
	</select>
	<br/>
	
		City: 
	<?php
		echo "<select name=\"City\" id=\"City\">";
		
		if(isset($_POST["Country"]) and isset($_POST["State"])) {
		if(!empty($_POST["Country"]) and !empty($_POST["State"])) {
			$state=$_POST["State"];
			//echo $state;
			$sql = "SELECT * FROM city where sid='$state'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				
				echo "<option value=". $row["cityid"] .">" . $row["cityname"] ."</option>";
				}
			}
			else {
				echo "<option value=\"No city\">No city available...</option>";
				
				
			}
		//echo "<script> $(\"#Country\").val(\"$Country\");</script>";
		echo("<script type='text/javascript'>setCountry('".$country."'); </script>");
		echo("<script type='text/javascript'>setState('".$state."'); </script>");
		}
	else{
		echo "not selected";
	}		
	
	}
	
		echo "</select>";
		
	?>
	
	
	
</form>

<?php




mysqli_close($conn);

?>

</body>