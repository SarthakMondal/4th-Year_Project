<?php

    require "config.php";

    date_default_timezone_set("Asia/Calcutta");
    $dt = date("Y/m/d h:i:s");
    $string = $_POST['sensor_value'];
    $array = explode(" ",$string);
    $id = $array[0];   
    $s1 = $array[1];
    $s2 = $array[2];
    $s3 = $array[3];
    $s4 = $array[4];
    $s5 = $array[5];
    $s6 = $array[6];

    $sql1 = "INSERT INTO `sensor1` (`usr_id`,`dt_tm`,`snr_val`) VALUES ($id, '$dt', '$s1')";
    $sql2 = "INSERT INTO `sensor2` (`usr_id`,`dt_tm`,`snr_val`) VALUES ($id, '$dt', '$s2')";
    $sql3 = "INSERT INTO `sensor3` (`usr_id`,`dt_tm`,`snr_val`) VALUES ($id, '$dt', '$s3')";
    $sql4 = "INSERT INTO `sensor4` (`usr_id`,`dt_tm`,`snr_val`) VALUES ($id, '$dt', '$s4')";
    $sql5 = "INSERT INTO `sensor5` (`usr_id`,`dt_tm`,`snr_val`) VALUES ($id, '$dt', '$s5')";
    $sql6 = "INSERT INTO `sensor6` (`usr_id`,`dt_tm`,`snr_val`) VALUES ($id, '$dt', '$s6')";

    $upload1 = mysqli_query($db,$sql1) or die(mysqli_error($db));
    $upload2 = mysqli_query($db,$sql2) or die(mysqli_error($db));
    $upload3 = mysqli_query($db,$sql3) or die(mysqli_error($db));
    $upload4 = mysqli_query($db,$sql4) or die(mysqli_error($db));
    $upload5 = mysqli_query($db,$sql5) or die(mysqli_error($db));
    $upload6 = mysqli_query($db,$sql6) or die(mysqli_error($db));

    if($upload1==true && $upload2==true && $upload3==true && $upload4==true && $upload5==true && $upload6==true)
    {
        echo ("Value Has Been Inserted Successfully");
    }


?>