<?php

session_start();

    $host="127.0.0.1";
    $dbusername="root";
    $dbpassword="";
    $dbname="hotel_deals";
    $conn= new MySQLi($host, $dbusername, $dbpassword, $dbname);
    $location=filter_input(INPUT_POST,'location');
    $query = "SELECT * FROM `hotel` WHERE City='".$location."'";
    $resultset = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultset) > 0) 
    {

         $_SESSION["City"] = $location;
         header('location:hotels.php?City='.$location.'&page=1');
    }                      
    else
    {
        echo "<script>alert('No Data Found :(');</script>";
    }
    mysqli_close($conn);
?>