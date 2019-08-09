<!-- This page is called by hotel.php -->
<?php

session_start();

    $host="127.0.0.1";
    $dbusername="root";
    $dbpassword="";
    $dbname="hotel_deals";
    $conn= new MySQLi($host, $dbusername, $dbpassword, $dbname);
    $location=filter_input(INPUT_POST,'location');
    $area=filter_input(INPUT_POST,'area');
    if($_POST['area']=="")
    {
        $query = "SELECT * FROM `hotel` WHERE City='".$location."'";
    }
    else 
    {
        $query = "SELECT * FROM `hotel` WHERE City='".$location."' AND location='".$_POST['area']."'";
    }
echo $query;
    $resultset = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultset) > 0) 
    {

         $_SESSION["City"] = $location;
       if(!$_POST['area']=="")
       {
        // echo "inside if";
            header('location:hotels.php?area='.$_POST['area'].'&City='.$location.'&page=1'); 
        }
       else 
       {
        // echo "inside else";
        header('location:hotels.php?City='.$location.'&page=1');
        }                    
           
    }
    else
    {
        echo "<script>alert('No Data Found :(');</script>";
        header('location:hotels.php');
    }
    mysqli_close($conn);
?>