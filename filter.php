<?php


    $host="127.0.0.1";
    $dbusername="root";
    $dbpassword="";
    $dbname="hotel_deals";
    $conn= new MySQLi($host, $dbusername, $dbpassword, $dbname);
    $query_string = "SELECT hotelname, price, image, city, location FROM hotel NATURAL JOIN features WHERE ";
    $location = "location:hotels.php?filter=true";

// SELECT hotelname, price, image, city, location, description FROM hotel NATURAL JOIN features WHERE price BETWEEN 200 AND 4000 AND rating >3 AND wifi='Y'
    if(isset($_GET['area_check']))
    {
        $location = $location."&area=".$_GET['area_check'];
        $query_string = $query_string."location='".$_GET['area_check']."' AND ";
    }
    if(isset($_GET['price_from']))
    {
        $price_from = $_GET['price_from'];
        // echo $price_from;
        $location = $location."&price_from=".$price_from;
        $query_string = $query_string."price BETWEEN ".$price_from;
    }
    if(isset($_GET['price_to']))
    {
        $price_to =$_GET['price_to'];
        // echo $price_to;    
        $location = $location."&price_to=".$price_to;
        $query_string = $query_string." AND ".$price_to;
        //yaha tak thik hai aage kr ruk
    }
    if(isset($_GET['star']))
    {
        // echo "set";
        $rating = $_GET['star'];
        // echo "rating";
        // $location = $location."&rating=".$rating;

        // $query_string = $query_string."AND rating >".$star;
        foreach ($rating as $star) {
          if($star=="5")
            {
                $query_string = $query_string." AND round(rating)=5";
                 $location = $location."&rating=5";
                 break;
            }
            if($star=="4")
            {
                $query_string = $query_string." AND round(rating)=4";
                 $location = $location."&rating=4";
                 break;
            }
            if($star=="3")
            {
                $query_string = $query_string." AND round(rating)=3";
                 $location = $location."&rating=3";
                 break;
            }
            if($star=="2")
            {
                $query_string = $query_string." AND round(rating)=2";
                 $location = $location."&rating=2";
                 break;
            }
            if($star=="1")
            {
                $query_string = $query_string." AND round(rating)=1";
                 $location = $location."&rating=1";
                 break;
            }
        }
    }

    if(isset($_GET['facility']))
    {
        $facilities = $_GET['facility'];
        // $query_string= $query_string. " AND "
        foreach ($facilities as $facility){ 
            // echo $facility."<br />";
            if($facility=="wifi")
            {
                $query_string = $query_string." AND wifi='Y'";
                 $location = $location."&wifi=Y";

            }
            if($facility=="spa") //se  the silly mistake hererOOHHHHHH 
            {
                $query_string = $query_string." AND spa='Y'";
                 $location = $location."&spa=Y";
            }
            if($facility=="pool")
            {
                $query_string = $query_string." AND pool='Y'";
                 $location = $location."&pool=Y";
            }
            if($facility=="ac")
            {
                $query_string = $query_string." AND ac='Y'";
                 $location = $location."&ac=Y";
            }
        }
    }
    $resultset = mysqli_query($conn, $query_string);

    if (mysqli_num_rows($resultset) > 0) 
    {
      header($location);     
    }
    else
    {
       header('location:hotels.php?data=false');   
    }
   mysqli_close($conn);
?>