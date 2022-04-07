<?php

    require "config.php";
    session_start();

    $name = $_POST['uname'];
    $mbn = $_POST['mblno'];
    $eml = $_POST['emlsgn'];
    $rle = $_POST['role'];
    $area = $_POST['city'];
    $address = $_POST['adres']; 
    $pass = md5($_POST['pwssgn']);  
    
    $chkcust = "select * from `user_info` where `email` = '$eml'";
    $chkq = mysqli_query($db, $chkcust) or die(mysqli_error($db));

    if (mysqli_num_rows($chkq) >0) {

      header('location:index.php?You are already registered, log in!');
      # code...
    }
    else{
      $sql = "INSERT INTO `user_info` (`name`, `phone`, `email`, `role`,`area`, `address`, `password`) VALUES ('$name','$mbn','$eml','$rle','$area','$address','$pass')";
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));

        if ($result) {
          # code...
          sleep(2);
          header('location:index.php? Registration successful. Continue to login !');
        }
    }


    
   

?>