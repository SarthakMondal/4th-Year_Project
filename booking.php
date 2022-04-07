<?php 

    require "config.php";

    $c_id = $_GET['cid'];
    $u_id = $_GET['uid'];
    $o_id = (rand(100000,999999));

    $chk = "SELECT * FROM `actv_booking` WHERE `user_id` = $u_id";
    $query1 = mysqli_query($db, $chk) or die(mysqli_error($db));

    $find = "SELECT * FROM `actv_booking` WHERE `car_id` = $c_id";
    $aval = mysqli_query($db, $find) or die(mysqli_error($db));

    $n = mysqli_num_rows($query1);
    $m = mysqli_num_rows($aval);

    if($n>0)
    {
        header('location:addbkgur.php? Already one Ambulance is booked, You can not book another !');
    }

    else if($m>0)
    {
        header('location:addbkgur.php? Ambulance is already booked, You can not book It!');
    }

    else
    {
        $post = "INSERT INTO `actv_booking` (`user_id`, `car_id`, `order_id`, `status`) VALUES ($u_id, $c_id, '$o_id', 'Not Started')";
        $query2 = mysqli_query($db, $post) or die(mysqli_error($db));

        if ($query2) 
        {
            $update = "UPDATE `car_info` SET `availability` = 'NO' WHERE `id` =  $c_id";
            $query3 = mysqli_query($db, $update) or die(mysqli_error($db));

            if($query3)
            {
                sleep(2);
                header('location:addbkgur.php? Ambulance has been booked Successfully..... Stay Safe');
            }
          }

    }

?>