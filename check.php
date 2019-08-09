<?php
    session_start();
    $host="127.0.0.1";
    $dbusername="root";
    $dbpassword="";
    $dbname="hotel_deals";
    $conn= new MySQLi($host, $dbusername, $dbpassword, $dbname);
    $email=filter_input(INPUT_POST,'email');
    $password=filter_input(INPUT_POST,'pass');
    $query = "SELECT * FROM `login` WHERE Email='$email'";
    $resultset = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultset) > 0) 
    {
        while($row = mysqli_fetch_assoc($resultset)) 
        {
            if($row['Password']==$password)
            {
                $_SESSION['user']=$email;
                header('location: Bharattrotter.php');
            }
            else
            {

            } 
                echo "Incorrect Password";
        }       
    } 
    else 
    {
        echo "Please enter correct email.";
    }
    mysqli_close($conn);
?>