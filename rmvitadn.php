<?php 
    
    require "config.php";
    $aid = $_GET['aid'];
    $qry = "DELETE FROM `actv_booking` WHERE `actv_booking`.`id` = $aid";
    $query = mysqli_query($db, $qry) or die(mysqli_error($db));

    if($query==true)
    {
        sleep(1);
        header('location:mnfbkgadn.php? Driver Profile has been Deleted Successfully !');
    }

?>

