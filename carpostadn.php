<?php

    require "config.php";
    session_start();

    $name = $_POST['dname'];
    $img = $_POST['dimg'];
    $mbn = $_POST['dmblno'];
    $rle = $_POST['role'];
    $pws = $_POST['pwssgnd'];
    $eml = $_POST['emlsgnd'];
    $area = $_POST['dcity'];
    $crno = $_POST['dcrn'];
    $avl = $_POST['rlelg'];

    $sql = "INSERT INTO `car_info` (`driver_name`, `images`, `email`, `phone`, `role`,`asigned_area`, `car_no`, `password`, `availability`) 
    VALUES ('$name','$img','$eml', '$mbn', '$rle','$area','$crno','$pws', '$avl')";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));

    if($result==true)
    {
        sleep(1);
        header("location: addcaradn.php? New Ambulance has been added Successfully");
    }


?>