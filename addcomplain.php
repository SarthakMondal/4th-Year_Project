<?php

    require "config.php";
    session_start();

    $name = $_POST['nmcpl'];
    $vnmb = $_POST['vclnm'];
    $dsp = $_POST['cmplnbd'];
    
    $sql = "INSERT INTO `complains` (`name`, `car_no`, `description`) VALUES ('$name','$vnmb','$dsp')";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));

    if ($result) {
        # code...
        sleep(2);
        header('location:complainur.php? Your Complain has Successfully been added!');
    }

?>