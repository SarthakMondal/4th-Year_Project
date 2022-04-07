<?php

    require "config.php";
    session_start();
    
    //UPDATE `user_info` SET `email` = 'someone@gmail.com' WHERE `user_info`.`id` = 2;

    $pid = $_SESSION['uid'];
    $ueml = $_POST['upeml'];
    $name = $_POST['upname'];
    $mbn = $_POST['upmblno'];
    $area = $_POST['upcity'];
    $address = $_POST['upadres'];
    $pass = md5($_POST['uppwssgn']);
    

    $chkcust = "UPDATE `user_info` SET `name` = '$name', `email` = '$ueml', `phone` = '$mbn', `area` = '$area', `address` = '$address', `password` = '$pass' WHERE `user_info`.`id` = $pid";
    $chkq = mysqli_query($db, $chkcust) or die(mysqli_error($db));

    if($chkq == true)
    {
        sleep(1);
        header('location:profileur.php? Your Profile has been Updated Successfully !');
    }

?>