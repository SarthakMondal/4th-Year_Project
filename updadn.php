<?php

    require "config.php";
    session_start();
    
    //UPDATE `user_info` SET `email` = 'someone@gmail.com' WHERE `user_info`.`id` = 2;

    $pid = $_GET['id'];
    $ueml = $_POST['upeml'];
    $name = $_POST['upname'];
    $mbn = $_POST['upmblno'];
    $area = $_POST['upcity'];
    $cr_no = $_POST['carno'];
    $aval = $_POST['upava'];
    $pass = $_POST['uppwssgn'];

    $chkcust = "UPDATE `car_info` SET `driver_name` = '$name', `car_no`= '$cr_no', `email` = '$ueml', `phone` = '$mbn', `asigned_area` = '$area', `availability` = '$aval', `password` = '$pass' WHERE `car_info`.`id` = $pid";
    $chkq = mysqli_query($db, $chkcust) or die(mysqli_error($db));

    if($chkq == true)
    {
        sleep(1);
        header('location:veudadn.php? Driver Profile has been Updated Successfully !');
    }

?>