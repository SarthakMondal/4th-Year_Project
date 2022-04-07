<?php

    require "config.php";
    $c_id = $_GET['id'];
    $qry = "DELETE FROM `car_info` WHERE `car_info`.`id` = $c_id";
    $query = mysqli_query($db, $qry) or die(mysqli_error($db));

    if($query==true)
    {
        sleep(1);
        header('location:veudadn.php? Driver Profile has been Deleted Successfully !');
    }
?>