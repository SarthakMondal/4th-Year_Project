<?php

    require "config.php";
    $id = $_GET['id'];

    $qry1 = "SELECT * FROM `actv_booking` WHERE `car_id` = $id";
    $query1 = mysqli_query($db, $qry1) or die(mysqli_error($db));
    $row1 = mysqli_fetch_assoc($query1);
    
    $status = $row1['status'];

    if($status=='Not Started')
    {
        date_default_timezone_set("Asia/Calcutta");
        $st = date("Y/m/d h:i:s");
        $qry2 = "UPDATE `actv_booking` SET `status` = 'Started', `str_tme` = '$st' WHERE `car_id` = $id";
        $query2 = mysqli_query($db, $qry2) or die(mysqli_error($db));

        if($query2==true)
        {
            header("location: bkingdvr.php? Journy has been Started");
        }
    }

    else if($status=='Started')
    {
        date_default_timezone_set("Asia/Calcutta");
        $ed = date("Y/m/d h:i:s");
        $qry2 = "UPDATE `actv_booking` SET `status` = 'Completed', `end_tme` = '$ed' WHERE `car_id` = $id";
        $query2 = mysqli_query($db, $qry2) or die(mysqli_error($db));

        $qry3 = "UPDATE `car_info` SET `availability` = 'YES' WHERE `id` = $id";
        $query3 = mysqli_query($db, $qry3) or die(mysqli_error($db));


        if($query2==true && $query3==true)
        {
            header("location: bkingdvr.php? Journy has been Completed");
        }
    }

    else
    {
        header("location: bkingdvr.php? There is Nothing to do");
    }
?>