<?php

    require "config.php";

    $string = $_POST['input_value'];
    $array = explode(" ",$string);
    $id = (int)$array[0];   
    $otp = $array[1];
    

    $sql = "SELECT * FROM `actv_booking` WHERE `user_id` = $id AND `order_id` = '$otp'";
    $matchOTP = mysqli_query($db,$sql) or die(mysqli_error($db));
    $n = mysqli_num_rows($matchOTP);

    if($n == 1)
    {
        echo ("TRUE");
    }

    else
    {
        echo ("FALSE");
    }


?>